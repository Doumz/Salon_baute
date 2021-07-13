<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['nom_client', 'prenom_client', 'mail_client' ,'contact_client' ,'date_reservation' ,'motif' ,'message' ,'img', 'photo'];
}
