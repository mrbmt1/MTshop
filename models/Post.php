<?php


namespace app\models;
use app\core\db\DbModel;

class Post extends DbModel
{
    public int $id = 0;
    public string $title = '';
    public string $content = '';
    public string $avatar = '';
    public int $user_id = 0;
    public int $status = 0;
    public int $amount = 0;
    public  $updated_at =  null;

    public static function tableName(): string
    {
        return 'post';
    }

    public function attributes(): array
    {
        return ['id','title', 'content', 'avatar', 'user_id', 'status', 'amount', 'updated_at'];
    }


    public function rules()
    {
        return [
            'title' => [self::RULE_REQUIRED],
            'content' => [self::RULE_REQUIRED],
            'avatar' => [self::RULE_REQUIRED],
        ];
    }
}
