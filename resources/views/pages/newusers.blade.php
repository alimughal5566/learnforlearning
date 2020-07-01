@extends('layouts.app', ['page' => __('Newusers'), 'pageSlug' => 'newusers'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">For Parents Posters</h5>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edit</h4>
                            <p class="card-category"> click on text after changings save this</p>
                            @if(session('message'))
                                <p class="alert alert-success text-dark">{{session('message')}}</p>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>First</th>
                                    <th>Last</th>
                                    <th>Email</th>
                                    <th>passsword</th>
                                    <th>Action</th>

                                    </thead>
                                    <tbody>
                                    @foreach($data as $datum)
                                        <tr>
                                            <td>{{$datum->id}}</td>
                                            <td>{{$datum->fname}}</td>
                                            <td>{{$datum->lname}}</td>
                                            <td>{{$datum->email}}</td>
                                            <td>{{$datum->password}}</td>
                                            <td>
                                                <a href="{{route('adminUsersApprove',[$datum->id])}}" class="btn-sm btn-primary">Approve</a>

                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>





                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
