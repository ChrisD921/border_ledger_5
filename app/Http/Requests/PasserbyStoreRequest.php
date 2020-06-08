<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasserbyStoreRequest extends FormRequest
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
        if (request('direction')==0) {
            return [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'age' => 'required|numeric|max:120',
                'id_type' => 'required|string',
                'id_num' => 'required|string',
                'trans_mode' => 'required',
                'plate_num' => 'required',
                'purpose' => 'required|string',
                'destination' => 'required|string',
                'border_name' => 'required|string' 
            ];
        }else{
            return [
                'first_name_out' => 'required|string|max:255',
                'last_name_out' => 'required|string|max:255',
                'age_out' => 'required|numeric|max:120',
                'id_type_out' => 'required|string',
                'id_num_out' => 'required|string',
                'trans_mode_out' => 'required',
                'plate_num_out' => 'required',
                'purpose_out' => 'required|string',
                'destination_out' => 'required|string',
                'border_name_out' => 'required|string' 
            ];
            
        }
       
    }
    

    public function messages()
    {
        return [
            'first_name.required' => "The Passerby's First Name is required!",
            'last_name.required' => "The Passerby's Last Name is required!",
            'age.required' => "The Passerby's Age is required!",
            'id_type.required' => "The Passerby's ID Type is required!",
            'id_num.required' => "The Passerby's ID Number is required!",
            'trans_mode.required' => "The Passerby's Mode of Transportiation is required!",
            'plate_num.required' => "The Passerby's Plate Number or Lack thereof is required!",
            'purpose.required' => "The Passerby's Purpose is required!",
            'destination.required' => "The Passerby's Description is required!",
            'border_name.required'=> " The Border handling the Passerby is required!",

           
            'age_out.required' => "The Passerby's Age is required!",
            
        ];
    }
}
