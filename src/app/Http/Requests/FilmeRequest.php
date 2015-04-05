<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class FilmeRequest extends Request {

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
        	'genero_id' => 'required',
            'nome' => 'required|min:3',            
        	'ano' => 'required',
        	'nota' => 'required|not_in:0',
        	'data' => 'sometimes|required'
        ];
	}

}
