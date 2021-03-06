@extends('layouts.master')
@section('title','level')
@section('content')

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/teachers-profile.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">

    <section id="slider-part" class="slider-active">
        <div class="single-slider slider-4 bg_cover pt-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont slider-cont-4 text-center">
                            <h1 data-animation="fadeInUp" data-delay="1s">REGISTER</h1>
                            <p data-animation="fadeInUp" data-delay="1.5s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>
{{----}}
{{----}}

    <section class="main-section">
        <div class="container">
            <div class="main-cont">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div class="form-parts">
                            <h3 class="level-heading" >Let's Build your Profile</h3>
                            <div style="display:flex;width:100%;">
                                <form action="{{route('getteacherProfile')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div style="width:50%;">
                                        <p>Profile Picture</p>
                                    </div>
                                    <div style="width:50%;">
                                    <div class="file-field">
                                        <div class="btn btn-unique btn-sm float-left">
                                        <span>Choose files</span>
                                        <input type="file" name="thumbnail" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                        </div>
                                    </div>
                                    </div>

                                    <div style="width:100%;">
                                        <p>Description</p>
                                        <input name="description" autofocus>
                                    </div>
                                    <div style="width:100%;">
                                        <select class="mdb-select" name="country" searchable="Search here..">
                                            <option value="" disabled selected>Country</option>
                                            <option value="USA">USA</option>
                                            <option value="Germany">Germany</option>
                                            <option value="France">France</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Japan">Japan</option>
                                        </select>
                                    </div>
                                    <div style="width:100%;">
                                        <select class="mdb-select" name="favorite_subject" searchable="Search here..">
                                            <option value="" disabled selected>My Favourite Subjects</option>
                                            @foreach($allSubjects as $subjects)
                                                <option value="{{$subjects->id}}">{{$subjects->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div style="width:100%;">
                                        <select class="mdb-select" name="fof_session" searchable="Search here..">
                                            <option value="" disabled selected>Available for 1:1</option>
                                            <option value="1">Yes</option>
                                            <option value="0">NO</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary active" >SAVE</button>
                                    <a href="#"></a>
                                    <input type="hidden" name="user_id" value="{{$user_id}}">
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center justify-content-center" id="submit-btn">
                            <img src="{{asset('asset/images/students/registration-banner.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
