<?php
/**
 * Created by PhpStorm.
 * User: ryotakusano
 * Date: 2019/01/15
 * Time: 22:37
 */

namespace App\Domain\Model;


use Mockery\Exception;

class PhoneNumber
{
    private $value = "";

    /**
     * PhoneNumber constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        if (empty($value)) {
            throw new Exception("電話番号を入力してください");
        }

        $this->value = $value;
    }

    //@override
    public function __toString() :string {
        return $this->value;
    }

}