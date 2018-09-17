<?php
/**
 * Created by PhpStorm.
 * User: luosilent
 * Date: 2018/9/17
 * Time: 10:18
 */


namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}