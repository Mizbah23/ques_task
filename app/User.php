<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
    public function school()
    {
        return $this->hasOne(School::class);  //user -> school
//        $this->hasOne('App\School', 'user_id', 'local_key');
    }
    public function role()
    {
        return $this->hasOne('App\Role', 'id', 'role_id'); 
    }
    public function projects()
    {
        return $this->hasMany(Project::class, "user_id", "id");
    }
    public function schooltype()
    {
        return $this->hasOne('App\Type', 'id', 'type'); 
    }
    public function schoolarea()
    {
        return $this->hasOne('App\Area', 'id', 'area'); 
    }
    
    
    
}
