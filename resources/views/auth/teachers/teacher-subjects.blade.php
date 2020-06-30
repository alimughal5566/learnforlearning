@extends('layouts.master')
@section('title','level')
@section('content')

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('asset/css/teachers-subjects.css')}}">

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

    <form action="{{route('teacherSubjects')}}" method="post">

        <section class="main-section">
            <div class="container">

                <div class="main-cont pt-1">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="level-heading" >WHAT SUBJECTS DO YOU WANT TO STUDY?</h3>
                        </div>
                        @foreach($key['subjects'] as $sub)
                            <div class="col-md-6 d-flex align-items-center justify-content-center">
                                <div class="form-parts">

                                    <label class="container-checkbox" >{{$sub->name}}
                                        <input type="checkbox" value="{{$sub->id}}" name="subjects[]">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                        </div>
                        <div class="col-md-6  justify-content-center">
                            <div>
                                <div class="float-right">
                                    <label class="">Others </label>
                                    <select class="form-control">
                                        <option>
                                            Other
                                        </option>
                                    </select><br>
                                    <div>
                                        <a data-toggle="modal" data-target="#myModal">Add More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label class="container-checkbox">
                            <button type="submit" class="btn btn-primary active float-right">Register</button>
                        </label>
                    </div>


                </div>
            </div>

            {{--        </div>--}}

        </section>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Other Subject</h4>
                    </div>

                    <div class="modal-body">
                        <div>
                            <select name="subjects[]" id="" class="form-control">
                                <option value="" >All Subjects</option>
                                @if(isset($key['others']))
                                    @foreach($key['others'] as $sub)
                                        <option value="{{$sub->id}}">{{$sub->name}}</option>

                                    @endforeach
                                @endif
                            </select>
                            <input type="text" id="subject" class="form-control">

                        </div>
                        <br>
                        <div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="saveSubject({{$key['subjects'][0]->level_id}})">Submit</button>
                    </div>
                </div>

            </div>
        </div>
        <input type="hidden"name="user_id" value="{{$user_id}}">
    </form>

    <script>
        function saveSubject(lever_id) {
            var subject = document.getElementById('subject');
            if(subject.value === ''){
                subject.setAttribute('style','border:1px solid red');
            }else{
                subject.removeAttribute('style');
                $.ajax({
                    type: 'get',
                    url  : '{{route("save-new-subject")}}',
                    data : {'subject':subject.value,'level_id':lever_id},
                    success: function (response) {
                        console.log(response)
                        if(response === 'true'){
                            location.reload();
                        }else{
                            alert('subject already saved');
                        }
                    } ,
                    error:function () {
                        alert('subject not saved');
                    }
                });
            }
        }
    </script>

@endsection
