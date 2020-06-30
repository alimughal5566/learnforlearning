<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

public function selectSubjects(Request $request){
    $user_id=$request['user_id'];

    $level=$request->level;
$subjects=Subject::where('level_id',$level)->get();
$count=    $subjects->count();
if ($count>8){
    for($i = 0; $i < 8; $i++){
        $key['subjects'][] = $subjects[$i];
    }
    for($i = 8; $i < $count; $i++){
        $key['others'][] = $subjects[$i];
    }
}else{
    $key['subjects'] = $subjects;
}

return view('auth.students.student-subject',compact('key','count','user_id'));
}

public function saveNewSubject(Request $request){
$user_id=$request['user_id'];
    $count = Subject::where('name',$request->subject)->where('level_id',$request->level_id)->count();
    if($count == 0){
       $subject = Subject::create([
           'name'=> $request->subject,
           'level_id'=> $request->level_id
        ]);
        return response()->json('true');
    }else{
        return response()->json('false');
    }
}



public function getSubjects(Request $request){

    $sub=implode(',',$request->subjects);
    $user_id=$request['user_id'];
    $createSubjects=User::where('id',$user_id)->update([
        'subject_id' => $sub,
    ]);


    if ($createSubjects){
        return view('auth.students.student-profile',compact('user_id'));
    }
return redirect()->back();

}
public function getProfile(Request $request){


    if ($request->hasFile('thumbnail')) {
        $image = $request->file('thumbnail');
        $imageName = time() . "." . $image->extension();
        $imagePath = public_path() . '/storage';
        $image->move($imagePath, $imageName);
        $imageDbPath = $imageName;
    }
    $Data=User::where('id',$request['user_id'])->update([
        'Description'=>$request['Description'],
        'country'=>$request['country'],
        'thumbnail'=>$imageDbPath,
    ]);
    return redirect()->route('studentHome');
}



public function studentLessson(){

    return view('frontend.pages.students.student-lesson-page');
}


    public function studentHome(){

        return view('frontend.pages.students.student-home');
    }





}
