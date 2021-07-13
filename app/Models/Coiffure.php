<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coiffure extends Model
{
    use HasFactory;
    protected $fillable = ['titre_coiffure', 'prix', 'img', 'photo', 'date_coiffure'];

    public function realisation()
    {
          return $this->hasMany('App\Models\Realisation');
    }
}

