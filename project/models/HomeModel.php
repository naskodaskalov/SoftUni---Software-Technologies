<?php

class HomeModel extends BaseModel
{
    public function getLastAds(int $maxCount) : array
    {
        $statement = self::$db->query(
            "SELECT advertisements.id, title, content, date, user_id, full_name, price " .
            "FROM advertisements LEFT JOIN users ON advertisements.user_id = users.id " .
            "ORDER BY date DESC LIMIT $maxCount");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getAdsById(int $id)
    {
        $statement = self::$db->prepare(
            "SELECT advertisements.id, title, content, date, full_name, user_id, price " .
            "FROM advertisements LEFT JOIN users ON advertisements.user_id = users.id " .
            "WHERE advertisements.id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }


}
