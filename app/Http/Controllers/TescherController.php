<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TescherController extends Controller
{
public function teacherSubjects(Request $request){
//    dd($request);
    $sub=implode(',',$request->subjects);
    $user_id=$request['user_id'];
    $createSubjects=User::where('id',$user_id)->update([
        'subject_id' => $sub,
    ]);


    if ($createSubjects){
        return view('auth.teachers.teacher-profile',compact('user_id'));
    }
    return redirect()->back();
}
public function getteacherProfile(Request $request){

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
}
