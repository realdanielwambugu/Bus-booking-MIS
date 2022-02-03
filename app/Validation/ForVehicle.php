<?php

Namespace App\Validation;

class ForVehicle
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'reg_no' => 'required|unique:vehicles',
            'type' => 'required',
            'seats' => 'required',
            'route_id' => 'required',
        ];
    }

   /**
    * Error messages mappings.
    *
    * @param string|null $rule
    * @return array
    */
    public function messages($rule = null)
    {
        $messages = [

        ];

        return  $messages[$rule] ?? $messages;
    }



}
