<?php

namespace App;

use App\Notifications\NewUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class   User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lname','fname', 'email', 'password','type','subject_id','id','fof_session','description','favorite_subject','country'
    ];
    public $email;
//    public function __construct($email)
//    {
//        $this->email=$email;
//    }

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

        $data =["msg"=>" please verify your self" ,"userId"=>$user->id];
        $this->email=$request['email'];
        Mail::send(['html'=>'email'], $data, function($msg) {
            $msg->to($this->email);
//            $msg->attach(route('adminUsersApprove',$user['id']));
            $msg->subject('User Register Request');
        });
        return $user;


    }


}
