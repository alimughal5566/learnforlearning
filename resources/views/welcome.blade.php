@extends('layouts.master')
<!--====== HEADER PART ENDS ======-->

<!--====== SEARCH BOX PART START ======-->
@section('content')
    <link rel="stylesheet" href="{{asset('asset/css/responsive/home-responsive.css')}}">
    <style>
        .card-img-overlay {
            background-color: rgba(#000, 0.4);
        }

        .main-slider-btn2 {
            background-color: #ffc10e;
        }

        div#donate-register-btn-div {
            display: flex;
            padding-bottom: 20px;
            padding-top: 20px;
        }
    </style>

    <div class="search-box">
        <div class="search-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- search form -->
    </div>

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="slider-part" class="slider-active">
        <div class="single-slider slider-4 bg_cover pt-150" style="background-repeat: no-repeat; background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%), url({{asset('asset/images/slider/banner.jpg')}}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont slider-cont-4 text-center">
                            <h1 data-animation="fadeInUp" data-delay="1s">BE INSPITRED TO LEARN</h1>
                            <p data-animation="fadeInUp" data-delay="1.5s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn" href="#">I AM A STUDENT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2" href="#">I AM A TEACHER</a>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== CATEGORY PART START ======-->

    <!--====== CATEGORY PART ENDS ======-->

    <!--====== ABOUT PART START ======-->
    <div class="" style="border-top: 1px solid white">
        <div class="row">
            <div class="col-md-4" style="padding: 0px !important;" >
                <!-- Card -->
                <div class="card card-image"
                     style="background-image: url({{asset('asset/images/educations/primary.png')}}">

                    <!-- Content -->
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">


                        <h3 class="card-title pt-2"><strong style="color: white;line-height: 100px;font-size: 27px;font-weight: 500;">PRIMARY</strong></h3>


                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-md-4" style="padding: 0px !important;">
                <!-- Card -->
                <div class="card card-image"
                     style="background-image: url({{asset('asset/images/educations/secondary.png')}}">

                    <!-- Content -->
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">


                        <h3 class="card-title pt-2"><strong style="color: white;line-height: 100px;font-size: 27px;font-weight: 500;">SECONDARY</strong></h3>


                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-md-4" style="padding: 0px !important;">
                <!-- Card -->
                <div class="card card-image"
                     style="background-image: url({{asset('asset/images/educations/furthereducation.png')}}">

                    <!-- Content -->
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">


                        <h3 class="card-title pt-2"><strong style="color: white;line-height: 50px;font-size: 27px;font-weight: 500;">FURTHER EDUCATION</strong></h3>


                    </div>

                </div>
                <!-- Card -->
            </div>
        </div>
    </div>
    <section id="about-part" class="about-tow pt-65">
        <div class="about-shape">
        </div>
        <h5 style="text-align: center;color: #006796;font-size: 28px;letter-spacing: 5px;">Find A Course</h5>
        <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== ADMISSION PART START ======-->

    <section class="admission-row pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <form class="search_form">

                    <div class="row">
                        <div class="col-md-3" style="padding: 18px;">
                            <select class="selectpicker">
                                <optgroup label="Picnic">
                                    <option>Secondary Level</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </optgroup>
                                <optgroup label="Camping">
                                    <option>Tent</option>
                                    <option>Flashlight</option>
                                    <option>Toilet Paper</option>
                                </optgroup>
                            </select>

                        </div>

                        <div class="col-md-3"  style="padding: 18px;">
                            <select class="selectpicker">
                                <optgroup label="Picnic">
                                    <option>Mathematics</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </optgroup>
                                <optgroup label="Camping">
                                    <option>Tent</option>
                                    <option>Flashlight</option>
                                    <option>Toilet Paper</option>
                                </optgroup>
                            </select>

                        </div>

                        <div class="col-md-3"  style="padding: 18px;">
                            <select class="selectpicker">
                                <optgroup label="Picnic">
                                    <option>Date</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </optgroup>
                                <optgroup label="Camping">
                                    <option>Tent</option>
                                    <option>Flashlight</option>
                                    <option>Toilet Paper</option>
                                </optgroup>
                            </select>

                        </div>

                        <div class="col-md-3"  style="padding: 18px;">
                            <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2" href="#" style="background-color: #FDBF11;">SEARCH</a>
                        </div>
                    </div>

                </form>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    {{-- broese by subject --}}
    <section style="background:linear-gradient(rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5) 100%), url({{asset('asset/images/browsebysubject/browsebysubject.png')}}">
        <h5 style="text-align: center;color: #ffffff;font-size: 28px;letter-spacing: 5px;padding: 60px 0px 30px 0px;">Browse By Subject</h5>
        <div class="row justify-content-center" id="boxes-5">

            <div class="row icon_center" style="display: contents;">
                <div class="col-md-2.4" style="padding: 10px">
                    <a href="#">
                    <span class="single-category text-center color-1">
                        <span class="icon">
                            <img src="{{asset('asset/images/browsebysubject/math.png')}}" alt="Icon">
                        </span>
                        <span class="cont">
                            <span>MATHS</span>
                        </span>
                    </span> <!-- single category -->
                    </a>
                </div>
                <div class="col-md-2.4" style="padding: 10px">
                    <a href="#">
                    <span class="single-category text-center color-1">
                        <span class="icon">
                            <img src="{{asset('asset/images/browsebysubject/geography.png')}}" alt="Icon">
                        </span>
                        <span class="cont">
                            <span>GEOGRAPHY</span>
                        </span>
                    </span> <!-- single category -->
                    </a>
                </div>
                <div class="col-md-2.4" style="padding: 10px">
                    <a href="#">
                    <span class="single-category text-center color-1">
                        <span class="icon">
                            <img src="{{asset('asset/images/browsebysubject/english.png')}}" alt="Icon">
                        </span>
                        <span class="cont">
                            <span>ENGLISH</span>
                        </span>
                    </span> <!-- single category -->
                    </a>
                </div>
                <div class="col-md-2.4" style="padding: 10px">
                    <a href="#">
                    <span class="single-category text-center color-1">
                        <span class="icon">
                            <img src="{{asset('asset/images/browsebysubject/biology.png')}}" alt="Icon">
                        </span>
                        <span class="cont">
                            <span>BIOLOGY</span>
                        </span>
                    </span> <!-- single category -->
                    </a>
                </div>
                <div class="col-md-2.4" style="padding: 10px">
                    <a href="#">
                    <span class="single-category text-center color-1">
                        <span class="icon">
                            <img src="{{asset('asset/images/browsebysubject/art.png')}}" alt="Icon">
                        </span>
                        <span class="cont">
                            <span>ART</span>
                        </span>
                    </span> <!-- single category -->
                    </a>
                </div>

            </div>
        </div>

        <div style="text-align: center;padding: 60px 0px 60px 0px;">
            <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2" href="#" style="background-color: #FDBF11;text-align: center;">BROWSE ALL</a>
        </div>
    </section>

    {{-- broese by subject --}}





    <!--====== ADMISSION PART ENDS ======-->

    <!--====== COURSE PART START ======-->

    <section id="course-part" class="pt-115 pb-115 bg_cover gray-bg" style="background-image: url(images/course/course-shape.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h2>UPCOMING CLASSES</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                @foreach($lesson as $leson)
                        <div class="col-lg-4">
                            <div class="single-course-2 mt-30">
                                <div class="thum">
                                    <div class="price">
                                        <span><a href="{{route('teacherProfile',[$leson->user_id])}}"><img src="{{url('/storage/images/'.$leson->teacher_thumbnail)}}"></a></span>
                                    </div>
                                    <div class="card">
                                        <img src="{{url('/storage/images/'.$leson->thumbnail)}}">
                                        <div class="card-img-overlay text-white d-flex flex-column justify-content-center">
                                            <h4 class="card-title">{{$leson->Subject_name}}</h4>
                                            <a href="{{route('studentLesson',[$leson->id])}}">
                                            <h6 class="card-subtitle mb-2">{{$leson->title}}</h6>
                                            </a>
                                            <hr>
                                            <div class="link d-flex">
                                            </div>
                                            <div class="row" id="rating-date-lesson">
                                                <div class="col-6"><h4 class="card-title">{{$leson->date}}<br>
                                                        {{$leson->time}}</h4>
                                                </div>
                                                <div class="col-6">
                                                    <div class="review">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cont">
                                    @if(Auth::check())
                                        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn" href="{{route('addToCalender',[$leson->id])}}" style="background: #7acdf0;color: white;font-weight: 500;display: block;">ADD TO CALENDAR</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endif
                                    @if(!Auth::check())
{{--                                        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn" href="{{route('addToCalender'.$leson['id'])}}" style="background: #7acdf0;color: white;font-weight: 500;display: block;">ADD TO CALENDAR</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                        <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn" href="{{ route('login') }}" style="background: #818181;color: white;font-weight: 500;display: block;">I AM A STUDENT/PARENT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endif
                                </div>
                            </div> <!-- single course -->
                        </div>
                @endforeach
            </div> <!-- course slide -->
        </div> <!-- container -->
    </section>

@endsection
