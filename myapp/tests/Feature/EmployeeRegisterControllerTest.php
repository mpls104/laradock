<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class EmployeeRegisterControllerTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function コントローラーのテスト()
    {

        $param = ['name' => '田中', 'mail' => 'test@yahoo.co.jp', 'phone' => '0120-111-111'];
        $response = $this->call('POST', 'api/employee', $param);
        $response->assertStatus(200);
        $this->assertDatabaseHas('employees', ['name' => '田中']);
    }

    /**
     * A basic test example.
     *
     * @return void
     * @test
     *
     */
    public function コントローラーのテスト、異常な値()
    {

        $param = [
            'name' => 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee',
            'mail' => 'test@yahoo.co.jp',
            'phone' => '0120-111-111'
        ];
        $response = $this->call('POST', 'api/employee', $param);
        $response->assertStatus(500);
    }
}
