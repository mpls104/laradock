<?php

namespace Tests\Unit;

use App\Domain\Model\Employee;
use App\Domain\Model\EmployeeNumber;
use App\Domain\Model\MailAddress;
use App\Domain\Model\Name;
use App\Domain\Model\PhoneNumber;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    private $employeeNumber;
    private $name;
    private $mailAddress;
    private $phoneNumber;

    public function setUp()
    {
        parent::setUp();
        $this->employeeNumber = new EmployeeNumber("10111");
        $this->name = new Name("田中太郎");
        $this->mailAddress = new MailAddress("test@gmail.com");
        $this->phoneNumber = new PhoneNumber("0120-111-111");
    }

    /**
 * A basic test example.
 *
 * @return void
 * @test
 */
    public function Employeeインスタンス作成成功テスト()
    {
        $employee = new Employee(
            $this->employeeNumber,
            $this->name,
            $this->mailAddress,
            $this->phoneNumber
        );
        $this->assertSame(
            'Employee{employeeNumber=10111, name=田中太郎, phoneNumber=0120-111-111, mailAddress=test@gmail.com}',
            $employee->toString()
        );
    }

    /**
     * A basic test example.
     *
     * @return void
     * @test
     * @expectedException LogicException
     */
    public function 氏名が40文字以上でインスタンスの作成に失敗()
    {
        $illegalName = new Name("eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee");
        $employee = new Employee(
            $this->employeeNumber,
            $illegalName,
            $this->mailAddress,
            $this->phoneNumber
        );
        $employee->toString();
    }

    /**
     *
     * @return void
     * @test
     * @expectedException LogicException
     * @expectedExceptionMessage メールアドレスの形式が不正です
     */
    public function ありえないメールアドレス()
    {
        $illegalMailAddress = new MailAddress("test@@test.com");
        $employee = new Employee(
            $this->employeeNumber,
            $this->name,
            $illegalMailAddress,
            $this->phoneNumber
        );
        $employee->toString();
    }
}
