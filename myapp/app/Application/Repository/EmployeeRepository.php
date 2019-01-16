<?php
/**
 * Created by PhpStorm.
 * User: ryotakusano
 * Date: 2019/01/15
 * Time: 23:25
 */

namespace App\Application\Repository;

use App\Domain\Model\Employee;
use App\Domain\Model\EmployeeNumber;
use App\Domain\Model\MailAddress;
use App\Domain\Model\Name;
use App\Domain\Model\PhoneNumber;

interface EmployeeRepository
{
    public function choose(EmployeeNumber $employeeNumber) :Employee;
    public function registerNew() :EmployeeNumber;
    public function registerName(EmployeeNumber $employeeNumber, Name $name) :void;
    public function registerMailAddress(EmployeeNumber $employeeNumber, MailAddress $mailAddress) :void;
    public function registerPhoneNumber(EmployeeNumber $employeeNumber, PhoneNumber $phoneNumber) :void;
}
