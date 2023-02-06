<?php


namespace app\models;
use app\core\db\DbModel;

class Comment extends DbModel
{
    public int $id = 0;
    public int $user_id = 0;
    public int $product_id = 0;
    public string $commentDetail = '';
    public string $commentDataTime = '';
    public int $rate = 0;
    public int $status = 0;
    public int $reply_id = 0;
    public  $updated_at =  null;

    public static function tableName(): string
    {
        return 'comment';
    }

    public function attributes(): array
    {
        return ['id','user_id','product_id','commentDetail','commentDataTime','rate','status','reply_id', 'updated_at'];
    }


    public function rules()
    {
        return [
        ];
    }
}
