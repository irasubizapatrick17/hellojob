<?php

namespace hellojob;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','title','function','permission'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /* start point  function  for  admin session*/

    public function is_admin()
    {
        if($this->permission=='admin')
        {

            return true;
        }

        return false;
    }

    /* start point  function  for  employer session*/

    public function is_employer()
    {
        if($this->permission=='employer')
        {

            return true;
        }

        return false;
    }

    /* start point  function  for  job seeker session*/

    public function is_jobseeker()
    {
        if($this->permission=='jobseeker')
        {

            return true;
        }

        return false;
    }

}
