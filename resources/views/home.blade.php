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
            </div>
        </div><!-- End -->


        <div class="row">
            <div class="col-lg-7 mx-auto">

                <!-- Timeline -->
                <ul class="timeline">

                    @foreach($tasks as $task)

                        <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                            <div class="timeline-arrow"></div>
                            <h2 class="h5 mb-0">{{$task->title}}</h2>
                            <span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>21 March, 2019</span>
                            <p class="text-small mt-2 font-weight-light">{{$task->content}}</p>

                            <br>
                            <h2 class="h5 mb-0">Title of section 1</h2>
                            <span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>21 March, 2019</span>
                            <p class="text-small mt-2 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>

                        </li>

                    @endforeach

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
