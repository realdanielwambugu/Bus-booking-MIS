<?php

Namespace App\Validation;

class ForBooking
{
   /**
    * Validation rules defination.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'booked_date' => 'required',
            'vehicle_reg_no' => 'required',
            'booked_seats' => 'required',
            'mpesa_code' => 'required|unique:bookings',
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
