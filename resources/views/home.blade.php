@extends('layouts.main')

@section('content')
<style type="text/css">



</style>
        <div class="container-login100">
            <div class="wrap-login100" style="width:1024px;padding: 10px;padding-top: 20px;">

        <div class="container">

            @include('layouts.nav')

            <div class="row">
<div class="container py-5">

    <!-- For demo purpose -->
    <div class="row text-center text-white mb-5">
        <div class="col-lg-8 mx-auto">
            <p class="lead mb-0">Your latest Achievement's. </p>
            <a href="{{url('/add')}}" class="nav-link"><i class="fa fa-plus" aria-hidden="true"> </i>Add Achievement</a>
            </div>
        </div><!-- End -->


        <div class="row">
            <div class="col-lg-7 mx-auto">

                <!-- Timeline -->
                <ul class="timeline">
                    @if(empty($weeks))
                    <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                        <p class="text-small mt-2 font-weight-light">I looks like you dont have any achievement's yet ... </p>
                        <p class="text-small mt-2 font-weight-light">Click <a href="{{url('/add')}}">here</a> and start creating!</p>
                    </li>
                    @else
                        @foreach($weeks as $tasks)
                            @if($tasks != null)
                                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">

                                    @foreach($tasks as $task)
                                    <div class="timeline-arrow"></div>
                                    <h2 class="h5 mb-0">{{$task->project()->title}}</h2>
                                    <span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>{{$task->date}}</span>
                                    <p class="text-small mt-2 font-weight-light">{{$task->content}}</p>

                                    <br>
                                    @endforeach
                                </li>
                            @else
                                <li class="timeline-item rounded ml-3 p-4 shadow" style="background-color: #ff000066!important;">
                                    <h2 class="h5 mb-0">No Achievement's for this week  :(</h2>
                                </li>
                            @endif

                        @endforeach
                    @endif

                </ul><!-- End -->

            </div>
        </div>
    </div>

            </div>
        </div>
        <hr>

            </div>
        </div>
@endsection
