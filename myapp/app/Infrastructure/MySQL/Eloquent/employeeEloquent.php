<?php
/**
 * Created by PhpStorm.
 * User: ryoutakusano
 * Date: 2019/01/16
 * Time: 23:13
 */

namespace App\Infrastructure\MySQL\Eloquent;


use App\Application\Repository\EmployeeRepository;
use App\Domain\Model\Employee;
use App\Domain\Model\EmployeeNumber;
use App\Domain\Model\MailAddress;
use App\Domain\Model\Name;
use App\Domain\Model\PhoneNumber;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class employeeEloquent extends Model
{

    public function choose(EmployeeNumber $employeeNumber): Employee
    {
        // TODO: Implement choose() method.
    }

    public function registerNew(): EmployeeNumber
    {
        $employee = new \App\Infrastructure\MySQL\Eloquent\Employee();
        $employee->name = "";
        $employee->mail_address = "";
        $employee->phone_number = "";
        $employee->save();
        return new EmployeeNumber($employee->id);
    }

    public function register(EmployeeNumber $employeeNumber, Employee $newEmployee)
    {
        $employee = \App\Infrastructure\MySQL\Eloquent\Employee::find($employeeNumber->value());
        $employee->name = $newEmployee->getName()->__toString();
        $employee->mail_address = $newEmployee->getMailAddress()->__toString();
        $employee->phone_number = $newEmployee->getPhoneNumber()->__toString();
        return $employee->save();
    }
}