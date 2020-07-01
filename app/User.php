<?php

namespace App;

use App\Notifications\NewUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class   User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lname','fname', 'email', 'password','type','subject_id','id'
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

    public function addUser($request){

        if($request['type']=='teacher'){
            $user = $this::create([
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'email' => $request['email'],
                'type' => 'teacher',
                'password' => Hash::make($request['password']),
            ]);
        }elseif($request['type']=='student'){
            $user = $this::create([
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'email' => $request['email'],
                'type' => 'student',
                'password' => Hash::make($request['password']),
            ]);
        }


        return $user;


    }


}
