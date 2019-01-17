<?php

namespace App\Http\Controllers;

use App\Application\Service\Employee\EmployeeRegisterService;
use App\Domain\Model\MailAddress;
use App\Domain\Model\Name;
use App\Domain\Model\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Exception\LogicException;

class EmployeeController extends Controller
{
    protected $employeeRegisterService;

    /**
     * EmployeeController constructor.
     * @param $employeeRegisterService
     */
    public function __construct(EmployeeRegisterService $employeeRegisterService)
    {
        $this->employeeRegisterService = $employeeRegisterService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $employeeId = $this->employeeRegisterService->registerNew();
            $newEmployee = new \App\Domain\Model\Employee(
                $employeeId,
                new Name($request->name),
                new MailAddress($request->mail),
                new PhoneNumber($request->phone)
            );
            $this->employeeRegisterService->register($employeeId, $newEmployee);
            DB::commit();
        } catch (LogicException $e){
            DB::rollBack();
            throw new \Exception();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
