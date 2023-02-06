
<?php

use app\core\Application;

class m0008_create_table_comment {

    public function up()
    {
        $db = Application::$app->db;
        $SQL = "CREATE TABLE comment (
                id INT AUTO_INCREMENT PRIMARY KEY,
                user_id INT NOT NULL,
                product_id INT NOT NULL,
                commentDetail TEXT,
                commentDataTime date,
                rate INT,
                status INT,
                reply_id INT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at DATETIME ON UPDATE CURRENT_TIMESTAMP
            )  ENGINE=INNODB;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE comment;";
        $db->pdo->exec($SQL);
    }
}