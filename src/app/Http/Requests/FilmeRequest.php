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
            'nome' => 'required|min:3',
            'nota' => 'required',
            'genero_id' => 'required',
            'pais_id' => 'required',
           // 'imagem' => 'required|mimes:jpeg,jpg,png'
        ];
	}

}
