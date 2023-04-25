<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'student_id'=>'required',
            'student_name' => 'required',
            'email' => 'required|email|unique:students,email',
            'mobile_no'=>'required',
            'nationality_id' => 'required',
            'status_id' => 'required',
            'department_id'=>'required',
            'building_id' => 'required',
            'room_no'=> 'required',
            'civilno' => 'required',
            'date_of_joining' => 'required',
            'emergency_contact_person'=>'required',
            'emergency_no' => 'required'
        ];
    }
}