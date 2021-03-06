<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\Lesson;
use App\Models\levels;
use App\Models\Student;
use App\Models\Subject;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $user_data=User::all() ;
       return view('users.index',compact('user_data'), ['users' => $model->paginate(15)]);
    }


    public function registerview()
    {
        return view('auth.register');
    }

    public function editUser( $id)
    {

           return view('');
    }

    protected function add_user(CreateUserRequest $request){

        $response=$this->user->addUser($request);
        $user_id=$response['id'];
        $level=levels::all();
        $subjects=Subject::all();

        if($response['type']=='teacher'){
//
////            $user_id=$request['user_id'];
//            $level=$request->level;
//            $subjects=Subject::all();
//            $count=    $subjects->count();
//            if ($count>8){
//                for($i = 0; $i < 8; $i++){
//                    $key['subjects'][] = $subjects[$i];
//                }
//                for($i = 8; $i < $count; $i++){
//                    $key['others'][] = $subjects[$i];
//                }
//            }else{
//                $key['subjects'] = $subjects;
//            }
////dd($user_id);
                    return view('auth.teachers.teacher-subjects',compact('subjects','user_id'));
            }else{
                return view('auth.students.student-level',compact('level','user_id'));

            }

    }

    public function test()
    {

        return view('auth.test');
    }




    public function homePage(){
        $lesson=Lesson::all();

        foreach ($lesson as $key=>$leson){
            $lesson[$key]['Subject_name']=Subject::where('id',$leson['subject_id'])->pluck("name")->first();
            $lesson[$key]['teacher_fname']=User::where('id',$leson['user_id'])->pluck("fname")->first();
            $lesson[$key]['teacher_lname']=User::where('id',$leson['user_id'])->pluck("lname")->first();
            $lesson[$key]['teacher_thumbnail']=User::where('id',$leson['user_id'])->pluck("thumbnail")->first();
        }
//        dd($lesson);
        return view('welcome',compact('lesson'));
    }




}

