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
use App\Infrastructure\InMemory\EmployeeInMemory;

/**
 * Class EmployeeQueryService
 * @package App\Applicatin\Service\Employee
 */
class EmployeeQueryService
{
    /**
     * @var
     */
    private $employeeRepository;


    /**
     * EmployeeQueryService constructor.
     * @param EmployeeRepository $employeeRepository
     */
    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    /**
     * @param EmployeeNumber $employeeNumber
     * @return Employee
     */
    public function choose(EmployeeNumber $employeeNumber) :Employee {
        return $this->employeeRepository->choose($employeeNumber);
    }
}