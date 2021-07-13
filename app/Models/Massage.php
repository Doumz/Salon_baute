<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    use HasFactory;
    protected $fillable = ['titre_massage', 'prix', 'img', 'photo',  'date_massage'];

    public function realisation()
    {
          return $this->hasMany('App\Models\Realisation');
    }
}
