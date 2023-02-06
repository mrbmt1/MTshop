<?php

use app\core\Application;

/**
 * User: TheCodeholic
 * Date: 7/10/2020
 * Time: 8:07 AM
 */

class m0001_initial {
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) NOT NULL,
                firstname VARCHAR(255) NOT NULL,
                lastname VARCHAR(255) NOT NULL,
                avatar VARCHAR(255),
                phone VARCHAR(255),
                diachi text,
                namsinh date,
                status TINYINT,
                role TINYINT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE users;";
        $db->pdo->exec($SQL);
    }
}
// chứa các class để lưu lại lịch sử cập nhật database hay quản lý việc chỉnh sửa database bằng code