<?php

namespace App\Domain\Model;

class Employee
{
    private $employeeNumber;
    private $name;
    private $mailAddress;
    private $phoneNumber;

    /**
     * Employee constructor.
     * @param $employeeNumber
     * @param $name
     * @param $mailAddress
     * @param $phoneNumber
     */
    public function __construct(EmployeeNumber $employeeNumber,
                                Name $name,
                                MailAddress $mailAddress,
                                PhoneNumber $phoneNumber)
    {
        $this->employeeNumber = $employeeNumber;
        $this->name = $name;
        $this->mailAddress = $mailAddress;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return EmployeeNumber
     */
    public function getEmployeeNumber(): EmployeeNumber
    {
        return $this->employeeNumber;
    }

    /**
     * @return Name
     */
    public function getName(): Name
    {
        return $this->name;
    }

    /**
     * @return MailAddress
     */
    public function getMailAddress(): MailAddress
    {
        return $this->mailAddress;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber(): PhoneNumber
    {
        return $this->phoneNumber;
    }

    public function toString() :string {
        return "Employee{" .
            "employeeNumber=" . $this->employeeNumber .
            ", name=" . $this->name .
            ", phoneNumber=" . $this->phoneNumber .
            ", mailAddress=" . $this->mailAddress .
            '}';
    }



}