<?php
/**
 * Created by PhpStorm.
 * User: ryotakusano
 * Date: 2019/01/15
 * Time: 22:24
 */

namespace App\Domain\Model;


class EmployeeNumber
{
    private $value;

    /**
     * EmployeeNumber constructor.
     * @param $value
     */
    public function __construct(String $value)
    {
        $this->value = (int)$value;
    }

    public function Value() :int {
        return $this->value;
    }

    //@override
    public function __toString() :string {
        return (String)$this->value;
    }
}