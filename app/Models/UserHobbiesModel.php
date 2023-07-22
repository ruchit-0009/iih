<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHobbiesModel extends Model
{
    use HasFactory;
    protected $table = "user_hobbies";
    protected $fillable = [
        'user_id','hobby_id'
    ];

    public function hobbies(){
        return $this->hasOne(HobbiesModel::class, 'id','hobby_id');
    }
}
