<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Complain;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

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

    public function complains()
    {
        return $this->hasMany(Complain::class);
    }
/*
    public function roles()
    {

    }

    public function hasRole($name)
    {
        
    }

    public function can($permission)
    {
        
    }

    public function ability($roles, $permissions, $options)
    {
        
    }
*/
}
