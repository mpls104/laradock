<?php
/**
 * Created by PhpStorm.
 * User: ryotakusano
 * Date: 2019/01/15
 * Time: 23:29
 */

namespace App\Infrastructure\InMemory;

use App\Application\Repository\EmployeeRepository;
use App\Domain\Model\Employee;
use App\Domain\Model\EmployeeNumber;
use App\Domain\Model\MailAddress;
use App\Domain\Model\Name;
use App\Domain\Model\PhoneNumber;

class EmployeeInMemory implements EmployeeRepository
{

    public function choose(EmployeeNumber $employeeNumber): Employee
    {
        return new Employee($employeeNumber, new Name("田中"), new MailAddress("test@gamil.com"), new PhoneNumber("0101010101"));
    }
}