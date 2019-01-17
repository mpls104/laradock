<?php
/**
 * Created by PhpStorm.
 * User: ryotakusano
 * Date: 2019/01/15
 * Time: 22:29
 */

namespace App\Domain\Model;


use Symfony\Component\Console\Exception\LogicException;

class MailAddress
{
    private $value = "";

    /**
     * MailAddress constructor.
     * @param string $mailAddress
     */
    public function __construct(?string $mailAddress)
    {
        if (empty($mailAddress)) {
            throw new LogicException("メールアドレスを入力してください");
        }
        // TODO validation
        $this->checkValidEmail($mailAddress);
        $this->value = $mailAddress;
    }

    //@override
    public function __toString() :string {
        return $this->value;
    }

    private function checkValidEmail(String $mail) {
        //TODO IMPLEMENTS ME!
        if (!preg_match("/^[a-z0-9A-Z]+@[a-z0-9A-Z]+[a-z0-9A-Z.]/", $mail)) {
            throw new LogicException("メールアドレスの形式が不正です");
        }

    }
}