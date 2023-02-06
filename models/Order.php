<?php


namespace app\models;
use app\core\db\DbModel;

class Order extends DbModel
{
    public int $id = 0;
    public float $price = 0;
    public float $customer_id = 0;
    public float $status = 0;
    public int $paymentType = 0;
    public $datereal = null;
    public  $updated_at =  null;

    public static function tableName(): string
    {
        return 'orders';
    }

    public function attributes(): array
    {
        return ['id','price', 'customer_id', 'status', 'paymentType', 'updated_at', 'datereal'];
    }


    public function rules()
    {
        return [
        ];
    }
}
