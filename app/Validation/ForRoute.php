<?php

Namespace App\Validation;

class ForRoute
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'from_A' => 'required',
            'to_B' => 'required',
            'departure_time' => 'required',
            'cost_per_passanger' => 'required',
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
