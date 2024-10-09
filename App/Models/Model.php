<?php
namespace App\Models;

use PDO;
use App\Database\Database;

class Model extends Database
{
    public static function all(): array
    {
        $db = self::connect();
        $stmt = $db->query("SELECT * FROM " . static::$table);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public static function create($data)
    {
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";
        $sql = "INSERT INTO " . static::$table . " ({$columns})  VALUES ({$values})";
        $stmt = self::connect()->prepare($sql);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function update($id, $name)
    {
        $sql = "UPDATE " . static::$table . " SET name = ? WHERE id = ?";

        $con = self::connect()->prepare($sql);

        $con->bindParam(1, $name);
        $con->bindParam(2, $id);

        if ($con->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public static function delete($id)
    {
        $sql = "DELETE FROM " . static::$table . " WHERE id = {$id}";
        $stat = self::connect()->prepare($sql);
        if ($stat->execute()) {
            return true;
        } else {
            return false;
        }
    }
}