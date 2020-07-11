<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Lesson;
use App\Models\Subject;
use App\Models\SubjectLevelDetail;
use App\Models\Teacher;
//use App\Models\Tescher;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Expression;

class TescherController extends Controller
{
    private $lesson;

public function __construct(Lesson $lesson){
        $this->lesson=$lesson;

    }
    public function teacherSubjects(Request $request){
        $user_id= $request->user_id;
        $allSubjects=Subject::all();

    foreach($request->subject as $subject) {
        $createSubjects = SubjectLevelDetail::create([
            'user_id' => $request->user_id,
            'subject_id' => $subject,
            'level_id' => $request[$subject],
        ]);
    }
        return view('auth.teachers.teacher-profile',compact('user_id','allSubjects'));
    }


    public function getteacherProfile(Request $request){

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
        'fof_session'=>$request['fof_session'],
        'favorite_subject'=>$request['favorite_subject'],
        'thumbnail'=>$imageDbPath,
    ]);
    return redirect()->route('studentHome');

}

public function teacherAddLesson(){

$subject=Subject::all() ;
    return view('frontend.pages.teachers.add-lesson',compact('subject'));
}


public function teacherHome(){



     $teacher=Teacher::where('user_id',Auth::id())->get();
     $teacher_id=$teacher->pluck('id');
     $exp=Experience::where('teacher_id',$teacher_id)->get();

        return view('frontend.pages.teachers.teacher-homepage',compact('exp'));
    }



    public function createLesson(Request $request){
    $addLesson=$this->lesson->saveLesson($request);
    if ($addLesson){
    return redirect()->back()->with('message','Lesson Added Successfully');
    } }


    public function teacherSchedule(){
$schedules= Lesson::where('user_id' ,Auth::id())->get();
        foreach ($schedules as $key=>$schedule){
            $schedules[$key]['teacher_fname']=User::where('id',$schedule['user_id'])->pluck("fname")->first();
            $schedules[$key]['teacher_lname']=User::where('id',$schedule['user_id'])->pluck("lname")->first();
            $schedules[$key]['teacher_thumbnail']=User::where('id',$schedule['user_id'])->pluck("thumbnail")->first();
        }
    return view('frontend.pages.teachers.teacher-schedule',compact('schedules'));
    }




    public function viewTeacherProfile(){

    return view('auth.teachers.teacher-profile');
    }
}
