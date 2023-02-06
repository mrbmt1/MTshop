<?php


namespace app\models;
use app\core\db\DbModel;

class Category extends DbModel
{
    public int $id = 0;
    public string $name = '';
    public string $description = '';
    public  $updated_at =  null;

    public static function tableName(): string
    {
        return 'categories';
    }

    public function attributes(): array
    {
        return ['id','name', 'description', 'updated_at'];
    }


    public function rules()
    {
        return [
            'name' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 100] ],
            'description' => [self::RULE_REQUIRED,[self::RULE_MAX, 'max' => 1000]],
        ];
    }
}
