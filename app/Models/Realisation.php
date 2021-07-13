<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;
    protected $fillable = ['nom_realisation' ,'nom_client', 'prenom_client', 'contact_client', 'nom_employer','img', 'photo', 'date_realisation' ];


    public function coiffure()
	{
		return $this->belongsTo('App\Models\Coiffure');
    }	
    
    public function massage()
	{
		return $this->belongsTo('App\Models\Massage');
    }
    
    public function make_up()
	{
		return $this->belongsTo('App\Models\Make_up');
	}

}
