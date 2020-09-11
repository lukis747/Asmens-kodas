<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Lukjon\PersonalCodeLT\PersonalCodeLT;
use Lukjon\PersonalCodeLT\PersonData;
use Lukjon\PersonalCodeLT\ValidatorRules\HasCorrectControlSumRule;
use Lukjon\PersonalCodeLT\ValidatorRules\HasCorrectGenderRule;
use Lukjon\PersonalCodeLT\ValidatorRules\HasCorrectLengthRule;

class PersonalCodeController extends Controller
{
    public function validatePersonCode(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'personalCode' => [new HasCorrectLengthRule,new HasCorrectGenderRule,new HasCorrectControlSumRule]
            ]
        );
//        return !$validator->fails();
        $personData = new PersonalCodeLT($request->get('personalCode'));

        return  response()->json([
            'valid' => !$validator->fails(),
            'personData' => $personData->extractInformation()
        ]);
    }
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'personalCode' => [new HasCorrectLengthRule,new HasCorrectGenderRule,new HasCorrectControlSumRule]
            ]
        );
        if ($validator->fails())
        {
            return false;
        }

        $personData = new PersonalCodeLT($request->get('personalCode'));
        if ($personData != null)
        {
            $person = new Person();
            $person->personalCode = $request->get('personalCode');
            $person->gender = $personData->getGender();
            $person->birthdate = $personData->getBirthdate();
            $person->age = $personData->getAge();
            $person->controlNumber = $personData->hasCorrectControlNumber($personData->getPersonalCodeArray());
            $person->personalCodeValidity = $personData->validate($personData->getPersonalCode());
            $person->save();
            return redirect()->route('home');
        }
    }
}
