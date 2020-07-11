<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Lesson extends Model
{




    protected $fillable=['subject','title','description','inlineRadioOptions','registration_date','registration_time','frequency'
    ,'photo','video','document','link','Repeat','subject_id','frequency','type','date','time','thumbnail','user_id'];
    public function saveLesson($request){
//dd($request);


        if ($request->hasFile('photo')) {

            $image = $request->file('photo');
            $imageName = time().".".$image->extension();
            $imagePath = public_path().'/storage/images';
            $image->move($imagePath, $imageName);
            $imageDbPath = $imageName;
        }


//        if ($request->hasFile('video')) {
//
//            $video = $request->file('video');
//            $videoName = time().".".$video->extension();
//            $videoPath = public_path().'/storage/videos';
//            $video->move($videoPath, $videoName);
//            $videoDbPath = $videoName;
//        }


        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $documentName = time().".".$document->extension();
            $documentPath = public_path().'/storage/documents';
            $document->move($documentPath, $documentName);
            $documentDbPath = $documentName;
        }

        $addlesson = Lesson::create([
            'subject_id' => $request['subject'],
            'user_id' => Auth::id(),
            'title' => $request['title'],
            'description' => $request['description'],
            'type' => $request['inlineRadioOptions'],
            'date' => $request['registration_date'],
            'time' => $request['registration_time'],
            'frequency' => $request['frequency'],
            'link' => $request['video'],
            'document' => $documentDbPath,
            'thumbnail' => $imageDbPath,

        ]);
if($addlesson){
    return $addlesson;
}



    }

}
