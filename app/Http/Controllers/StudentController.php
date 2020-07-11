<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Student;
use App\Models\Subject;
use App\Models\SubjectLevelDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

public function selectSubjects(Request $request){
    $user_id=$request['user_id'];

    $level=$request->level;
$subjects=SubjectLevelDetail::where('level_id',$level)->get();
foreach ($subjects as $key=>$sub){
$subjects[$key]['name']=Subject::where('id',$sub['subject_id'])->pluck('name')->first();
$subjects[$key]['level_id']=$request->level;;

};

return view('auth.students.student-subject',compact('subjects','user_id'));
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
//dd($request);
    $user_id= $request->user_id;
    $allSubjects=Subject::all();
    foreach($request->subjects as $subject) {
        $createSubjects = SubjectLevelDetail::create([
            'user_id' => $request->user_id,
            'subject_id' => $subject,
            'level_id' => $request->level_id,
        ]);
    }
//    dd($createSubjects);

    if ($createSubjects){
        return view('auth.students.student-profile',compact('user_id','allSubjects'));
    }


}
public function getProfile(Request $request){

//dd($request);
    if ($request->hasFile('thumbnail')) {
        $image = $request->file('thumbnail');
        $imageName = time() . "." . $image->extension();
        $imagePath = public_path() . '/storage/images';
        $image->move($imagePath, $imageName);
        $imageDbPath = $imageName;
    }
    $Data=User::where('id',$request['user_id'])->update([
        'Description'=>$request['Description'],
        'country'=>$request['country'],
        'favorite_subject'=>$request['favourit_subjects'],
        'fof_session'=>$request['fof_session'],
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


public function addToCalender($id){
    $data=Lesson::where('id',$id)->get();

return redirect()->back()->with('message','added to your calender successfully');

}






}
