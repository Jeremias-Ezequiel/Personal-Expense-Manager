<?php

require_once __DIR__ . '/../../config/Dbh.php';

class CategoryRepository extends Dbh
{

    public function getCategories()
    {
        try {
            $query = "SELECT * FROM categories;";
            $stmt = parent::connection()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("There is an error with categories data " . $e->getMessage());
            return [];
        }
    }
}
