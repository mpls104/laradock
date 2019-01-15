<?php

namespace Tests\Unit;

use App\Application\Service\Employee\EmployeeQueryService;
use App\Domain\Model\Employee;
use App\Domain\Model\EmployeeNumber;
use App\Infrastructure\InMemory\EmployeeInMemory;
use Tests\TestCase;

class EmployeeQueryServiceTest extends TestCase
{

    /**
     *
     * @return void
     * @test
     *
     */
    public function EmployeeServiceのテスト()
    {
        $queryService = new EmployeeQueryService(new EmployeeInMemory());
        $number = new EmployeeNumber('01100');
        logger("number");
        $this->assertInstanceOf(Employee::class, $queryService->choose($number));
    }
}
