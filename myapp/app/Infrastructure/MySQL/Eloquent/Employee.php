<?php
/**
 * Created by PhpStorm.
 * User: ryoutakusano
 * Date: 2019/01/17
 * Time: 0:28
 */

namespace App\Infrastructure\MySQL\Eloquent;


use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'mail_address', 'phone_number'];
}