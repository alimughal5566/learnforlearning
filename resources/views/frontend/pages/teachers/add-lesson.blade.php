@extends('layouts.master')
@section('title','Add Lesson')
@section('content')

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/add-lesson.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="{{asset('asset/css/mdb.min.css')}}">
            {{-- date time plugin --}}
            <script src="{{asset('asset/js/plugins/datetime/moment-with-locales.js')}}"></script>
    <script src="{{asset('asset/js/plugins/datetime/moment-timezone-with-data.js')}}"></script>
    <script>
        $(function() {
            $("input[name='inlineRadioOptions']").click(function() {
                if ($("#inlineRadio1").is(":checked")) {
                    $("#registerdate").show();
                } else {
                    $("#registerdate").hide();
                }
            });
        });
        $(function() {
            $("input[name='inlineRadioOptions']").click(function() {
                if ($("#inlineRadio2").is(":checked")) {
                    $("#datetime").show();
                } else {
                    $("#datetime").hide();
                }
            });
        });

    </script>

    <!-- Card -->

    {{-- dashboard section --}}

    {{-- end-dashboard section --}}

    <h3 class="add-lesson-heading">ADD A LESSON</h3>
 <form action="{{route('createLesson')}} " method="post" enctype="multipart/form-data">
    <section id="add-lesson-sec">
        <div class="container">
        </div>
        <div class="container">
            @if(session('message'))
                <p class="alert alert-success text-dark">{{session('message')}}</p>
            @endif
            <div class="row">
                <div class="col-md-6 col-xs-12" id="add-lesson-left">
                    <div class="form-parts">
                        <p class="level-heading" >Choose Lesson Category</p>
                            <select class="selectpicker" name="subject">
                                @foreach($subject as $subj)
                                <option value="{{$subj->id}}">{{$subj->name}}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <p>
                        Can’t find the subject on the list? Submit one<br> <a href="#" id="add-lesson-para">here</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
     @csrf

    <section id="add-level-data">
        <div class="container">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"  name="inlineRadioOptions" id="inlineRadio1" value="series">
                <label class="form-check-label" for="inlineRadio1">Series Class</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="individual" checked>
                <label class="form-check-label" for="inlineRadio2">Individual Lesson</label>
            </div>

            <div id="datetime" class="form-group registration-date">
                <label class="control-label col-sm-3"  for="registration-date">Date:</label>
                <div class="input-group registration-date-time">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                    <input class="form-control" name="registration_date" id="registration-date" type="date">
                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
                    <input class="form-control" name="registration_time" id="registration-time" type="time">
                </div>
            </div>

            <div  id="registerdate">
                <div class="form-check form-check-inline">
                    Repeat Daily&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="frequency" value="daily" class="form-check-input" id="materialInline1">
                    <label class="form-check-label" for="materialInline1"></label>
                </div>


                <div class="form-check form-check-inline">
                    Weekly&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" class="form-check-input" name="frequency" value="weekly" id="materialInline2">
                    <label class="form-check-label" for="materialInline2"></label>
                </div>


                <div class="form-check form-check-inline">
                    Fortnightly&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" class="form-check-input" name="frequency" value="Fortnightly" id="materialInline3">
                    <label class="form-check-label" for="materialInline3"></label>
                </div>


                <div class="form-check form-check-inline">
                    Monthly&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" class="form-check-input" name="frequency" value="monthly" id="materialInline4">
                    <label class="form-check-label" for="materialInline4"></label>
                </div>
            </div>
            <div class="add-documents-heading-div">
                <p class="add-documents-heading-heading">Add Document(s)</p>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-4 d-flex justify-content-center">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="content">
                                <div><p class="addfiles-add-lesson">ADD PDF</p></div>
                                <div class="image-upload">
                                    <label for="file-input">
                                        <a><i class="fas fa-plus fa-7x"></i></a>
                                    </label>
                                    <input name="document" id="file-input" type="file"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="content">
{{--                                <div><p class="addfiles-add-lesson">ADD VIDEO (LINK)</p></div>--}}
                                <div class=" d-flex justify-content-center">
{{--                                    <label for="file-input1">--}}
{{--                                        <a><i class="fas fa-plus fa-7x"></i></a>--}}
{{--                                    </label>--}}
                                    <textarea name="video" id="" cols="30" rows="10"></textarea>
{{--                                    <input name="video" id="file-input1" type="text" />--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="content">
                                <div><p class="addfiles-add-lesson">ADD IMAGES</p></div>
                                <div class="image-upload">
                                    <label for="file-input3">
                                        <a><i class="fas fa-plus fa-7x"></i></a>
                                    </label>
                                    <input name="photo" id="file-input3" type="file"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary active" >CREATE</button>
                </div>
            </div>
        </div>

        </section>
 </form>
@endsection
