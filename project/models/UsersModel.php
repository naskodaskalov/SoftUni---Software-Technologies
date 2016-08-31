<?php

class UsersModel extends BaseModel
{
    public function getAll() : array
    {
        $statement = self::$db->query("SELECT * FROM users ORDER BY id");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getUserById(int $id)
    {
        $statement = self::$db->prepare(
            "SELECT * FROM users WHERE id = ?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }

    public function login(string $username, string $password)
    {
        $statement = self::$db->prepare(
            "SELECT id, password_hash FROM users WHERE username = ?");
        $statement->bind_param("s", $username);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        if (password_verify($password, $result['password_hash'])) {
            return $result['id'];
        }
        return false;
    }

    public function register(string $full_name, string $username, string $password, string $email, string $phone, string $photo)
    {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $statement = self::$db->prepare(
            "INSERT INTO users (full_name, username, password_hash, email, phone, photo) VALUES (?, ?, ?, ?, ?, ?)");
        $statement->bind_param("ssssss", $full_name, $username, $password_hash, $email, $phone, $photo);
        $statement->execute();
        if ($statement->affected_rows != 1) {
            return false;
        }
        $user_id = self::$db->query("SELECT LAST_INSERT_ID()")->fetch_row()[0];
        return $user_id;
    }

    public function getAllAdsByUsers() : array
    {
        $statement = self::$db->query(
            "SELECT * FROM advertisements LEFT JOIN users ON advertisements.user_id = users.id  ORDER BY date DESC ");
        return $statement->fetch_all(MYSQLI_ASSOC);
    }
}
