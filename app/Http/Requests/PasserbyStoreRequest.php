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
        if (request('pass_ingoing_or_outgoing')==0) {
            return [
                'pass_first_name' => 'required|string|max:255',
                'pass_last_name' => 'required|string|max:255',
                'pass_age' => 'required|numeric|max:120',
                'pass_id_type' => 'required|string',
                'pass_id_num' => 'required|string',
                'pass_trans_mode' => 'required',
                'pass_plate_num' => 'required',
                'pass_purpose' => 'required|string',
                'pass_des' => 'required|string',
                'pass_border' => 'required|string' 
            ];
        }else{
            return [
                'pass_first_name_out' => 'required|string|max:255',
                'pass_last_name_out' => 'required|string|max:255',
                'pass_age_out' => 'required|numeric|max:120',
                'pass_id_type_out' => 'required|string',
                'pass_id_num_out' => 'required|string',
                'pass_trans_mode_out' => 'required',
                'pass_plate_num_out' => 'required',
                'pass_purpose_out' => 'required|string',
                'pass_des_out' => 'required|string',
                'pass_border_out' => 'required|string' 
            ];
            
        }
       
    }
    

    public function messages()
    {
        return [
            'pass_first_name.required' => "The Passerby's First Name is required!",
            'pass_last_name.required' => "The Passerby's Last Name is required!",
            'pass_age.required' => "The Passerby's Age is required!",
            'pass_id_type.required' => "The Passerby's ID Type is required!",
            'pass_id_num.required' => "The Passerby's ID Number is required!",
            'pass_trans_mode.required' => "The Passerby's Mode of Transportiation is required!",
            'pass_plate_num.required' => "The Passerby's Plate Number or Lack thereof is required!",
            'pass_purpose.required' => "The Passerby's Purpose is required!",
            'pass_des.required' => "The Passerby's Description is required!",
            'pass_border.required'=> " The Border handling the Passerby is required!",

           
            'pass_age_out.required' => "The Passerby's Age is required!",
            
        ];
    }
}
