<?php

use app\core\Application;

/**
 * User: TheCodeholic
 * Date: 7/10/2020
 * Time: 8:07 AM
 */

class m0010_create_table_customer {
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "CREATE TABLE khachhang (
                id INT AUTO_INCREMENT PRIMARY KEY,
                hoten VARCHAR(255) NOT NULL,
                phone VARCHAR(13) NOT NULL,
                diachi VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                password VARCHAR(255) NOT NULL,
                avatar VARCHAR(500) NOT NULL,
                note TEXT NOT NULL,
                gioitinh VARCHAR(13) NOT NULL,
                namsinh date NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE khachhang;";
        $db->pdo->exec($SQL);
    }
}