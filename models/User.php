<?php


namespace app\models;
use app\core\db\DbModel;

class User extends DbModel
{
    public int $id = 0;
    public string $login_id = '';
    public string $active_flag = '';
    public $updated_at = '';
    public string $lastname = '';
    public string $firstname = '';
    public string $avatar = '';
    public string $phone = '';
    public string $diachi = '';
    public string $email = '';
    public $namsinh = '2022/1/1';
    public string $password = '';
    public string $passwordConfirm = '';
    public string $reset_password_token = '0';
    public int $status = 1;
    public int $role = 0;

    public static function tableName(): string
    {
        return 'users';
    }

    public function attributes(): array
    {
        return ['firstname','login_id','avatar','phone','diachi','namsinh', 'status', 'lastname', 'email', 'password','reset_password_token','role'];
    }

 
    public function rules()
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'phone' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    public function save()
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);

        return parent::save();
    }

    public function getDisplayName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}