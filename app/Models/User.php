<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'state_id','city_id','name', 'email','mobile_number','gender','profile_pic', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getProfilePicAttribute()
    {
        if (isset($this->attributes['profile_pic']) && $this->attributes['profile_pic'] !== null) {
           
                return asset( 'storage/'.$this->attributes['profile_pic']);
        }
        return null;
    }
    public function getGenderAttribute()
    {
        if (isset($this->attributes['gender']) && $this->attributes['gender'] !== null) {
           if($this->attributes['gender'] == 1){
            return 'Male';
           } else {
            return 'Female';
           }
                
        }
        return null;
    }
    public function userHobbies(){
        return $this->belongsToMany(HobbiesModel::class, 'user_hobbies','user_id','hobby_id')->select(DB::raw('GROUP_CONCAT(name) as names'))->groupBy('user_hobbies.user_id');
    }
    public function userHobbiesId(){
        return $this->hasMany(UserHobbiesModel::class, 'user_id','id');
    }
    public function state(){
        return $this->hasOne(StateModel::class, 'id','state_id');
        
    }
    public function city(){
        return $this->hasOne(CityModel::class, 'id','city_id');
    }
}
