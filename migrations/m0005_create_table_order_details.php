<?php

use app\core\Application;

class m0005_create_table_order_details {

    public function up()
    {
        $db = Application::$app->db;
        $SQL = "CREATE TABLE order_details (
                id INT AUTO_INCREMENT PRIMARY KEY,
                order_id INT,
                product_id INT,
                amount INT,
                price float,
                sale INT,
                diachi TEXT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME ON UPDATE CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE order_details;";
        $db->pdo->exec($SQL);
    }
}