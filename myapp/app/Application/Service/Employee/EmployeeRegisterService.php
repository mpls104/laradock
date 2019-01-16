<?php
/**
 * Created by PhpStorm.
 * User: ryotakusano
 * Date: 2019/01/15
 * Time: 23:20
 */

namespace App\Application\Service\Employee;

use App\Application\Repository\EmployeeRepository;
use App\Domain\Model\Employee;
use App\Domain\Model\EmployeeNumber;
use App\Domain\Model\MailAddress;
use App\Domain\Model\Name;
use App\Domain\Model\PhoneNumber;
use App\Infrastructure\InMemory\EmployeeInMemory;
use App\Infrastructure\MySQL\Eloquent\employeeEloquent;
use Illuminate\Http\Request;

/**
 * Class EmployeeQueryService
 * @package App\Applicatin\Service\Employee
 */
class EmployeeRegisterService
{
    /**
     * @var
     */
    private $employeeRepository;


    /**
     * EmployeeRegisterService constructor.
     * @param employeeEloquent $employeeRepository
     */
    public function __construct(employeeEloquent $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    /**
     * @return EmployeeNumber
     */
    public function registerNew() :EmployeeNumber {
        return $this->employeeRepository->registerNew();
    }

    /**
     * @param EmployeeNumber $employeeNumber
     * @param Employee $employee
     */
    public function register(EmployeeNumber $employeeNumber, Employee $employee) {
        $this->employeeRepository->register($employeeNumber, $employee);
    }
}