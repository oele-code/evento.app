<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model {

	//
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'participants';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['first_name', 'last_name', 'document_type','document','email','phone','type'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	 /*
    * Custom functions
    */
    public function getFullNameAttribute(){
        return "$this->first_name $this->last_name";
    }

    public function scopeDocument($query, $document){
        if ($document != " " ){
            $query->where('document','like','%'.$document.'%');
        }
    }

    public function getTypeUserAttribute(){
     	if($this->type == "PRO"){
     		return "Profesional";
     	} else { 
     		return "Estudiante";
     	}
    }

}