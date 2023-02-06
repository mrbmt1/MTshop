
<?php

use app\core\Application;

class m0011_create_table_products {

    public function up()
    {
        $db = Application::$app->db;
        $SQL = "CREATE TABLE products (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                avatar VARCHAR(255) DEFAULT NULL,
                description TEXT,
                price float,
                sale float,
                quantity INT,
                sold_out INT,
                category_id INT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME ON UPDATE CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE products;";
        $db->pdo->exec($SQL);
    }
}