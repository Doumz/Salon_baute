<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preocupation extends Model
{
    use HasFactory;
    protected $fillable = ['nom_client', 'prenom_client', 'preocupation', 'mail_client', 'contact_client'];
}
