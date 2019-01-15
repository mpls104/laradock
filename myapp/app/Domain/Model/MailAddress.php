<?php
/**
 * Created by PhpStorm.
 * User: ryotakusano
 * Date: 2019/01/15
 * Time: 22:29
 */

namespace App\Domain\Model;


use Mockery\Exception;

class MailAddress
{
    private $value = "";

    /**
     * MailAddress constructor.
     * @param string $mailAddress
     */
    public function __construct(string $mailAddress)
    {
        if (empty($mailAddress)) {
            throw new Exception("メールアドレスを入力してください");
        }

        $this->value = $mailAddress;
    }

    //@override
    public function __toString() :string {
        return $this->value;
    }
}