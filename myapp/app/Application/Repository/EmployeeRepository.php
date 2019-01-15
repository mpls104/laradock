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

interface EmployeeRepository
{
    public function choose(EmployeeNumber $employeeNumber) :Employee;
}
