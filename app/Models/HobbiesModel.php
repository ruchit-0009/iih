<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobbiesModel extends Model
{
    use HasFactory;
    protected $table = "hobbies";
    protected $fillable = [
        'name'
    ];
}
