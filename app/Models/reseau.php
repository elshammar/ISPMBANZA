<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reseau extends Model
{
    use HasFactory;
    protected $fillable=['lib','lien','icon'];

}
