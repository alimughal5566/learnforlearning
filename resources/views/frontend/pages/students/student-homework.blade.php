@extends('views.layouts.master')
@section('title','Student Homework')
@section('content')

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/student-homework.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">


    <section id="slider-part" class="slider-active">
        <div class="single-slider slider-4 bg_cover pt-150" style="background-repeat: no-repeat; background:linear-gradient( rgba(0, 0, 0, 0.5) 100%, rgba(0, 0, 0, 0.5)100%), url({{asset('asset/images/student-lesson-search/banner.jpg')}}">
            <div class="container" >
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont slider-cont-4 text-center">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="What are you looking for?">
                                <div class="input-group-append">
                                  <button class="btn btn-secondary" type="button">
                                    <i class="fa fa-search"></i>
                                  </button>
                                </div>
                              </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>
<!-- Card -->

<section id="about-part" class="about-tow pt-65">
    <div class="about-shape">
    </div>
    <h5 style="text-align: center;color: #006796;font-size: 28px;letter-spacing: 5px;">Find A Lesson</h5>
     <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== ADMISSION PART START ======-->

<section class="admission-row pb-120" id="std-homework-find-lesson-sec">
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


    <section class="admission-row pb-120" id="std-homework-table-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col" class="table-heading">SUBJECT</th>
                          <th scope="col" class="table-heading">TITLE</th>
                          <th scope="col" class="table-heading">DUE DATE</th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">MATHS</th>
                          <td>TITLE TITLE TITLE</td>
                          <td>23/03/2020</td>
                          <td><button type="button" class="btn btn-indigo btn-sm m-0" id="upload-work-btn">UPLOAD HOMEWORK</button></td>
                          <td><button type="button" class="btn btn-indigo btn-sm m-0" id="ask-question-btn">ASK QUESTION</button></td>
                          <td><button type="button" class="btn btn-indigo btn-sm m-0" id="view-lesson-btn">VIEW LESSON</button></td>
                        </tr>
                        <tr>
                            <th scope="row">PHYSICS</th>
                            <td>TITLE TITLE TITLE</td>
                            <td>23/03/2020</td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="upload-work-btn">UPLOAD HOMEWORK</button></td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="ask-question-btn">ASK QUESTION</button></td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="view-lesson-btn">VIEW LESSON</button></td>
                          </tr>
                          <tr>
                            <th scope="row">GEOGRAPHY</th>
                            <td>TITLE TITLE TITLE</td>
                            <td>23/03/2020</td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="upload-work-btn">UPLOAD HOMEWORK</button></td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="ask-question-btn">ASK QUESTION</button></td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="view-lesson-btn">VIEW LESSON</button></td>
                          </tr>
                          <tr>
                            <th scope="row">MATHS</th>
                            <td>TITLE TITLE TITLE</td>
                            <td>23/03/2020</td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="upload-work-btn">UPLOAD HOMEWORK</button></td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="ask-question-btn">ASK QUESTION</button></td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="view-lesson-btn">VIEW LESSON</button></td>
                          </tr>
                          <tr>
                            <th scope="row">MATHS</th>
                            <td>TITLE TITLE TITLE</td>
                            <td>23/03/2020</td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="upload-work-btn">UPLOAD HOMEWORK</button></td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="ask-question-btn">ASK QUESTION</button></td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="view-lesson-btn">VIEW LESSON</button></td>
                          </tr>
                          <tr>
                            <th scope="row">MATHS</th>
                            <td>TITLE TITLE TITLE</td>
                            <td>23/03/2020</td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="upload-work-btn">UPLOAD HOMEWORK</button></td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="ask-question-btn">ASK QUESTION</button></td>
                            <td><button type="button" class="btn btn-indigo btn-sm m-0" id="view-lesson-btn">VIEW LESSON</button></td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
            </div> <!-- row -->
            <div class="col-12 col-12 justify-content-center" id="donate-register-btn-div">
                <a data-animation="fadeInUp" data-delay="2s" class="main-slider-btn2" href="#" id="donate-register-btn">SEE ALL</a>
            </div>
        </div> <!-- container -->
    </section>

@endsection
