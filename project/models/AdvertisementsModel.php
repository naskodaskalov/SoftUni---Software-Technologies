<?php

class AdvertisementsModel extends BaseModel
{
    public function getAll() : array
    {
        $statement = self::$db->query(
            "SELECT * FROM advertisements ORDER BY date DESC");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getById(int $id)
    {

    }

    public function create(string $title, string $content, int $user_id, string $price)
    {

    }

    public function edit(string $id, string $title, string $content, string $date, int $user_id, string $price) : bool
    {

    }

    public function delete(int $id) : bool
    {

    }
}