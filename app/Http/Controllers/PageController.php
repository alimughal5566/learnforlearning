<?php

namespace App\Http\Controllers;

use App\Howitwork;
use App\Models\ForParent;
use App\Models\ForStudent;
use App\Models\ForTeacher;
use App\ShedulePagePoster;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */
    public function icons()
    {
        return view('pages.icons');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function schedulePoster()

    {
       $data=ShedulePagePoster::all();
//       dd($data);
        return view('pages.schedule-poster',compact('data'));
    }


    public function editPoster(Request $request, $id){

$data=ShedulePagePoster::where('id',$id)->update([
    'title'=>$request['title']?$request['title']:'title',
    'discription'=>$request['discription']?$request['discription']:'discription',

]);
return redirect()->back();
    }


public function mockupschedule(){
$data=ShedulePagePoster::all();
//dd($data);
        return view('frontend.pages.mockup-schedule',compact('data'));
}


    public function howitworks(){
        $data=Howitwork::all();

        return view('frontend.pages.howitworks',compact('data'));
    }

    public function forParent(){
        $data=ForParent::all();

        return view('frontend.pages.parents',compact('data'));
    }
    public function forTeachers(){
        $data=ForTeacher::all();

        return view('frontend.pages.teachers',compact('data'));
    }
    public function forStudents(){
        $data=ForStudent::all();

        return view('frontend.pages.students',compact('data'));
    }





    /**
     * Display maps page
     *
     * @return \Illuminate\View\View
     */
    public function maps()
    {
        return view('pages.maps');
    }

    /**
     * Display tables page
     *
     * @return \Illuminate\View\View
     */
    public function tables()
    {
        return view('pages.tables');
    }

    /**
     * Display notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('pages.notifications');
    }

    /**
     * Display rtl page
     *
     * @return \Illuminate\View\View
     */
    public function rtl()
    {
        return view('pages.rtl');
    }

    /**
     * Display typography page
     *
     * @return \Illuminate\View\View
     */
    public function typography()
    {
        return view('pages.typography');
    }

    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function upgrade()
    {
        return view('pages.upgrade');
    }

    public function howItPoster(){
        $data=Howitwork::all();
        return view('pages.how-it-works',compact('data'));
    }
    public function editHowItWorks(Request $request, $id){

        $data=Howitwork::where('id',$id)->update([
            'title'=>$request['title']?$request['title']:'title',
            'discription'=>$request['discription']?$request['discription']:'discription',

        ]);
        return redirect()->back();
    }


    public function forTeacher(){
        $data=ForTeacher::all();

        return view('pages.for-teachers',compact('data'));
    }
    public function editforTeacher(Request $request, $id){

        $data=ForTeacher::where('id',$id)->update([
            'title'=>$request['title']?$request['title']:'title',
            'discription'=>$request['discription']?$request['discription']:'discription',

        ]);
        return redirect()->back();
    }
    public function forStudent(){
        $data=ForStudent::all();
        return view('pages.for-students',compact('data'));
    }
    public function editforStudent(Request $request, $id){

        $data=ForStudent::where('id',$id)->update([
            'title'=>$request['title']?$request['title']:'title',
            'discription'=>$request['discription']?$request['discription']:'discription',

        ]);
        return redirect()->back();
    }
    public function forParents(){
        $data=ForParent::all();
        return view('pages.for-patents',compact('data'));
    }
    public function editforParents(Request $request, $id){

        $data=ForParent::where('id',$id)->update([
            'title'=>$request['title']?$request['title']:'title',
            'discription'=>$request['discription']?$request['discription']:'discription',

        ]);
        return redirect()->back();
    }

public function allTeachers(){
  $data=User::where('type','teacher')->get();
    return view('pages.all-teachers',compact('data'));

}
    public function allStudents(){
        $data=User::where('type','student')->get();

        return view('pages.all-students',compact('data'));

    }
    public function Userid($id){

        $user=Auth::loginUsingId($id);


    }

}