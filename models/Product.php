<?php


namespace app\models;
use app\core\db\DbModel;

class Product extends DbModel
{
    public int $id = 0;
    public string $name = '';
    public string $avatar = '';
    public string $description = '';
    public float $price = 0;
    public float $sale = 0;
    public int $quantity = 0;
    public int $sold_out = 0;
    public int $category_id = 0;
    public  $updated_at =  null;

    public static function tableName(): string
    {
        return 'products';
    }

    public function attributes(): array
    {
        return ['id','name', 'avatar', 'description', 'price', 'sale', 'quantity', 'sold_out', 'category_id', 'updated_at'];
    }


    public function rules()
    {
        return [
            'name' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 100] ],
            'avatar' => [self::RULE_REQUIRED_PICK],
            'description' => [self::RULE_REQUIRED],
            'price' => [self::RULE_REQUIRED_PICK],
            'avatar' => [self::RULE_REQUIRED_PICK],
            'quantity' => [self::RULE_REQUIRED_PICK],
            'category_id' => [self::RULE_REQUIRED_PICK],
        ];
    }
}
