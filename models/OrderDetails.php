<?php


namespace app\models;
use app\core\db\DbModel;

class OrderDetails extends DbModel
{
    public int $id = 0;
    public float $order_id = 0;
    public float $product_id = 0;
    public float $amount = 0;
    public float $price = 0;
    public float $sale = 0;
    public string $diachi = '';
    public  $updated_at =  null;

    public static function tableName(): string
    {
        return 'order_details';
    }

    public function attributes(): array
    {
        return ['id','order_id', 'product_id', 'amount', 'price', 'sale', 'diachi'];
    }


    public function rules()
    {
        return [
            'order_id' => [self::RULE_REQUIRED_PICK ],
            'product_id' => [self::RULE_REQUIRED_PICK],
            'amount' => [self::RULE_REQUIRED_PICK],
            'price' => [self::RULE_REQUIRED_PICK],
            'sale' => [self::RULE_REQUIRED_PICK],
            'diachi' => [self::RULE_REQUIRED_PICK],
        ];
    }
}
