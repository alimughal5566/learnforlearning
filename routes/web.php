<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Events\MyEvent;

Route::group(['Public'], function (){


    Route::get('/test','UserController@test')->name('test');
    Route::get('/pusher',function (){
        return view('notification');
    })->name('test');




    Route::get('/tst', function () {
     event(new App\Events\MyEvent('Someone'));
        return "Event has been sent!";
    });

   Route::get('/push','ForParentController@push')->name('push');
});






Route::group(['Public'], function () {

//    Route::get('/', function () { $lessons=\App\Models\Lesson::all(); return view('welcome',compact('lessons'));})->name('homee');
    Route::get('/','UserController@homePage')->name('homee');
    Route::get('/for-parents','PageController@forParent')->name('parents');
    Route::get('/for-teachers','PageController@forTeachers')->name('teachers');
    Route::get('/for-students','PageController@forStudents')->name('students');
    Route::get('/mockupschedule','PageController@mockupschedule')->name('mockupschedule');
    Route::get('/how-it-works','PageController@howitworks')->name('howitworks');
    Route::get('/student-lesson{id}','PageController@studentLesson')->name('studentLesson');
    Route::get('/teacher-profile/{id}','PageController@teacherProfile')->name('teacherProfile');
    Route::get('/admin-users-approve/{id}','PageController@adminUsersApprove')->name('adminUsersApprove');
    Route::get('/donate', function () {return view('frontend.pages.donate');})->name('donate');

    /**
     * register pages for students
     */

    Route::get('register/students/profile', function () {return view('auth.students.student-profile');})->name('studentprofile');
    Route::get('register/students/subject', function () {return view('auth.students.student-subject');})->name('studentsubject');


    /**
     * register pages for teachers
     */
    Route::get('register/teachers/profile', function () {return view('auth.teachers.teachers.teacher-profile');})->name('studentprofile');
    Route::get('register/teachers/subjects', function () {return view('auth.teachers.teacher-subjects');})->name('studentsubject');

    Route::group(['Auth'], function () {
    Route::post('/login','Auth/LoginController@login')->name('login');
    Route::get('/register','UserController@registerview')->name('register');
    Route::post('/signup','UserController@add_user')->name('signup');
    Route::get('/select-Subjects','StudentController@selectSubjects')->name('selectSubjects');
    Route::get('/save-new-subject','StudentController@saveNewSubject')->name('save-new-subject');
    Route::post('/get-subjects','StudentController@getSubjects')->name('getSubjects');
    Route::post('/get-profile','StudentController@getProfile')->name('getProfile');
    Route::post('/teacher-subjects','TescherController@teacherSubjects')->name('teacherSubjects');
    Route::post('/get-teacher-profile','TescherController@getteacherProfile')->name('getteacherProfile');
    Route::get('/view-teacher-profile','TescherController@viewTeacherProfile')->name('viewTeacherProfile');

    });
});

Route::get('/teacher-subjects','@saveNewSubject')->name('save-new-subject');

//Auth::routes();
Auth::routes(['verify' => true]);

Route::group(['private'], function () {
    //*********** if call inAuthorized route*************
    Route::get('/denied', function () {return view('404');})->name('denied');

    Route::group(['Admin', 'middleware' => 'CheckUserType:' . 'admin'], function () {

            Route::get('/home', 'HomeController@index')->name('home');

//            Route::group(['middleware' => 'auth'], function () {
                Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
                Route::get('/for-Parent','PageController@forParents')->name('forParents');
                Route::get('/for-Student','PageController@forStudent')->name('forStudent');
                Route::get('/for-Teacher','PageController@forTeacher')->name('forTeacher');
                Route::get('/new-users','PageController@newUsers')->name('newUsers');
                Route::get('/schedule-Poster','PageController@schedulePoster')->name('schedulePoster');
                Route::get('/all-students','PageController@allStudents')->name('allStudents');
                Route::get('/all-teachers','PageController@allTeachers')->name('allTeachers');
                Route::get('/new-users','PageController@newUsers')->name('newUsers');
                Route::get('/Userid/{id}','PageController@Userid')->name('Userid');

                //                        how-it-works

                Route::get('/how-it-Poster','PageController@howItPoster')->name('howItPoster');
                Route::post('/edit-Poster/{id}','PageController@editPoster')->name('editPoster');
                Route::post('/edit-how-it-works/{id}','PageController@editHowItWorks')->name('editHowItWorks');
                Route::post('/edit-for-parents/{id}','PageController@editforParents')->name('editforParents');
                Route::post('/edit-for-students/{id}','PageController@editforStudent')->name('editforStudent');
                Route::post('/edit-for-teachers/{id}','PageController@editforTeacher')->name('editforTeacher');




                Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
                Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
                Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
                Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
                Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
                Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
//            });

//            Route::group(['middleware' => 'auth'], function () {
                Route::resource('user', 'UserController',['except' => ['show']]);
                Route::get ('edit-user/{id}', 'UserController@editUser')->name('editUser');
                Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
                Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
                Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
//            });

    });

    Route::group(['Admin', 'middleware' => 'CheckUserType:' . 'student'], function () {

        Route::get('/students/lesssn','StudentController@studentLessson')->name('studentLessson');
        Route::get('/students/Home','StudentController@studentHome')->name('studentHome');
        Route::get('/add-to-calender{id}','StudentController@addToCalender')->name('addToCalender');


    });

    Route::group(['Admin', 'middleware' => 'CheckUserType:' . 'teacher'], function () {
            Route::get('/teacher-add-lesson','TescherController@teacherAddLesson')->name('teacherAddLesson');
            Route::get('/teacher-home','TescherController@teacherHome')->name('teacherHome');
            Route::post('/create-lesson','TescherController@createLesson')->name('createLesson');
            Route::get('/teacher-schedule','TescherController@teacherSchedule')->name('teacherSchedule');

    });




});




/**
 * shehrayar routes
 */

Route::group(['Public'], function () {

    Route::get('/mockupschedule', function () {return view('frontend.pages.mockup-schedule');})->name('mockupschedule');
    Route::get('/donate', function () {return view('frontend.pages.donate');})->name('donate');

    /**
     * register pages for students
     */
    Route::get('register/students/level', function () {return view('views.frontend.register.students.student-level');})->name('studentlevel');
    Route::get('register/students/profile', function () {return view('views.frontend.register.students.student-profile');})->name('studentprofile');
    Route::get('register/students/subject', function () {return view('views.frontend.register.students.student-subject');})->name('studentsubject');
    Route::get('register/students/student-lesson-page', function () {return view('views.frontend.register.students.student-lesson-page');})->name('student-lesson-page');
    Route::get('register/students/student-lesson-search', function () {return view('views.frontend.register.students.student-lesson-search');})->name('student-lesson-search');
    Route::get('register/students/student-schedule', function () {return view('frontend.pages.students.student-schedule');})->name('student-schedule');
    Route::get('register/students/student-homepage', function () {return view('views.frontend.register.students.student-homepage');})->name('student-homepage');
    Route::get('register/students/teacher-profile-view', function () {return view('views.frontend.register.students.teacher-profile-view');})->name('teacher-profile-view');
    Route::get('register/students/student-homework', function () {return view('views.frontend.register.students.student-homework');})->name('student-homework');

    /**
     * register pages for teachers
     */
    Route::get('register/students/teacher-homepage', function () {return view('views.frontend.register.students.teacher-homepage');})->name('teacher-homepage');
    Route::get('register/teachers/profile', function () {return view('views.frontend.register.teachers.teacher-profile');})->name('studentprofile');
    Route::get('register/teachers/subjects', function () {return view('views.frontend.register.teachers.teacher-subjects');})->name('studentsubject');
    Route::get('auth', function () {return view('views.auth.register2');})->name('register2');
    Route::get('register/students/add-lesson', function () {return view('views.frontend.register.students.add-lesson');})->name('add-lesson');

});






/**
 * <iframe width="560" height="315" src="https://www.youtube.com/embed/sjRgOLkjtJg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 */
