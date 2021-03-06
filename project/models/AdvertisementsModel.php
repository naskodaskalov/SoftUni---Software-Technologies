<?php

class AdvertisementsModel extends BaseModel
{
    public function getAllAds() : array
    {
        $statement = self::$db->query(
            "SELECT advertisements.id, title, content, date, user_id, full_name, username, price  FROM advertisements LEFT JOIN users ON advertisements.user_id = users.id  ORDER BY date DESC ");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getById(int $id)
    {
        $statement = self::$db->prepare(
            "SELECT * FROM advertisements WHERE advertisements.id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }

    public function create(string $title, string $content, int $user_id, string $price)
    {
        $statement = self::$db->prepare(
            "INSERT INTO advertisements(title, content, user_id, price) VALUES (?, ?, ?, ?)");
        $statement->bind_param("ssis", $title, $content, $user_id, $price);
        $statement->execute();
        return $statement->affected_rows == 1;
    }

    public function edit(string $id, string $title, string $content, string $price, int $user_id) : bool
    {
        $statement = self::$db->prepare("UPDATE advertisements SET title = ?, content = ?, price = ?, user_id = ? WHERE id = ?");
        $statement->bind_param("sssis", $title, $content, $price, $user_id,  $id);
        $statement->execute();
        return $statement->affected_rows >= 0;
    }

    public function delete(int $id) : bool
    {
        $statement = self::$db->prepare(
            "DELETE FROM advertisements WHERE id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        return $statement->affected_rows == 1;
    }

}