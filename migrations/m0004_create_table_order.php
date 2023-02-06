<?php

use app\core\Application;

class m0004_create_table_order {

    public function up()
    {
        $db = Application::$app->db;
        $SQL = "CREATE TABLE orders (
                id INT AUTO_INCREMENT PRIMARY KEY,
                price INT NOT NULL,
                customer_id INT,
                status INT,
                paymentType INT,
                datereal date NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME ON UPDATE CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE orders;";
        $db->pdo->exec($SQL);
    }
}