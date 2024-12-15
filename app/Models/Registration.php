<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //
    protected $fillable = ['first_name', 'last_name', 'email', 'phone','dob', 'city_id', 'state_id', 'father_name', 'mother_name', 'gender', 'education', 'applied_for', 'message'];
	protected $dates = ['created_at', 'updated_at'];

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }

    public function id_proof()
    {

    }

}
