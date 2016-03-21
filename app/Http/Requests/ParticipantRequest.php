<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Participant;

class ParticipantRequest extends Request {

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
			//
			$participant = Participant::find($this->participants);

			switch ($this->method()) {
				case 'GET':
				case 'DELETE':{
					return [];
				}

				case 'POST':{
					return[
						'first_name'	=>	'required|min:2',
						'last_name'		=>	'required|min:2',
						'document'		=>	'required|digits_between:5,10|numeric|unique:participants,document',
						'email'			=>	'required|email',
						'phone'			=>	'required|numeric|min:5',
					];
				}

				case 'PUT':
				case 'PATCH':{
					return[
						'first_name'	=>	'required|min:2',
						'last_name'		=>	'required|min:2',
						'document'		=>	'required|digits_between:5,10|numeric|unique:participants,document,'.$participant->id,
						'email'			=>	'required|email',
						'phone'			=>	'required|numeric|min:5',
					];
				}
				default:break;
			}
	}

}
