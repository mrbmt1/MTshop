
<?php

use app\core\Application;

class m0006_create_table_post {

    public function up()
    {
        $db = Application::$app->db;
        $SQL = "CREATE TABLE post (
                id INT AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL,
                content TEXT,
                categories_id INT,
                avatar VARCHAR(255) DEFAULT NULL,
                user_id INT,
                status INT,
                amount INT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME ON UPDATE CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE post;";
        $db->pdo->exec($SQL);
    }
}