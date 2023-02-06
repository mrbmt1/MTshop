<?php

use app\core\Application;

/**
 * User: TheCodeholic
 * Date: 7/10/2020
 * Time: 8:07 AM
 */

class m0009_add_status_table_users {
    public function up()
    {
        $db = Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN reset_password_token varchar(255) DEFAULT '0'");
    }

    public function down()
    {
 
    }
}