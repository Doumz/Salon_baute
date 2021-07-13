<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
protected $fillable = ['nom_client', 'mail_client', 'contact_client', 'comment'];
}
