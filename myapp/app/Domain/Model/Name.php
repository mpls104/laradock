<?php
/**
 * Created by PhpStorm.
 * User: ryotakusano
 * Date: 2019/01/15
 * Time: 22:33
 */

namespace App\Domain\Model;


use Symfony\Component\Console\Exception\LogicException;

class Name
{
    private $value = "";

    /**
     * Name constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        if (empty($value)) {
            throw new LogicException("名前を入力してください");
        }

        if (strlen($value) > 40) {
            throw new LogicException("名前は40文字以内にしてください");
        }
        $this->value = $value;
    }

    //@override
    public function __toString() :string {
        return $this->value;
    }

}