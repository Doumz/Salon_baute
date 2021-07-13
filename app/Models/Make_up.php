<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make_up extends Model
{
    use HasFactory;
    protected $fillable = ['titre_make_up', 'prix', 'img', 'photo',  'date_make_up'];

    public function realisation()
    {
          return $this->hasMany('App\Models\Realisation');
    }
}
