<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    /**
     * @var mixed
     */
    private $personalCode;
    /**
     * @var mixed
     */
    private $gender;
    /**
     * @var mixed
     */
    private $birthdate;
    /**
     * @var int|mixed
     */
    private $age;
    /**
     * @var \Lukjon\PersonalCodeLT\ValidatorRules\HasCorrectControlSumRule|mixed
     */
    private $controlNumber;
    /**
     * @var bool|mixed
     */
    private $personalCodeValidity;
}
