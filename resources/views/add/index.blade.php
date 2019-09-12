@extends('layouts.main')

@section('content')

</style>
        <div class="container-login100">
            <div class="wrap-login100 in-app">

        <div class="container">

            @include('layouts.nav')

            <div class="row">
<div class="container py-5">

    <!-- For demo purpose -->
    <div class="row text-center text-white mb-5">
        <div class="col-lg-8 mx-auto">
            <p class="lead mb-0">Add new Achievement</p>
            <br>

                <form class="add100-form validate-form" method="POST" action="{{ url('/add') }}">
                    @csrf

                    <div class="wrap-input100 validate-input" style="border-radius: 30px;display: inline-block;overflow: hidden;border:0px">
                        <select class="input100" id="project_id" name="project_id" style="border:0;text-indent: 20px;" >
                            @foreach(Auth::user()->projects()->get() as $project)
                                <option value="{{$project->id}}">{{$project->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <textarea class="input100-textarea" rows="4" cols="50" id="content" type="text" name="content" required autocomplete="content"></textarea>

                        <span class="focus-input100"></span>
                    </div>

                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Save
                        </button>
                    </div>

                </form>

            </div>
        </div><!-- End -->


        <div style="    padding-left: 33%;padding-right: 33%;">


        </div>
    </div>

            </div>
        </div>
        <hr>

            </div>
        </div>
@endsection



