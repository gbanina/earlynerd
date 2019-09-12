@extends('layouts.main')

@section('content')
<style type="text/css">
.add100-form{
    padding-left: 20%;
    padding-right: 20%;
}


</style>
        <div class="container-login100">
            <div class="wrap-login100 in-app">

        <div class="container">

            @include('layouts.nav')

            <div class="row">
                <div class="container py-5">
                    <!-- For demo purpose -->
                    <div class="row text-center text-white mb-5">
                        <div class="col-lg-6">
                            <p class="lead mb-0">Add new Project</p>
                            <br>

                                <form class="add100-form validate-form" style="padding-right: 0px;" method="POST" action="{{ url('/projects') }}">
                                    @csrf

                                    <div class="wrap-input100 validate-input">
                                        <div>
                                            <input class="input100" id="title" name="title" style="width: 70%;float: left; margin-right: 10px;">
                                            <button type="submit" class="login100-form-btn" style="width: 20%">
                                                Add
                                            </button>
                                        </div>
                                    </div>

                                        @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                </form>

                            </div>
                        <div class="col-lg-6">
                                      <div class="container-projects">
                                            @foreach(Auth::user()->projects()->get() as $project)
                                                <p class="lead mb-0" style="border-radius: 10px;padding: 10px">{{$project->title}} <i class="fa fa-trash" style="color:#666666;" aria-hidden="true"> </i></p>
                                            @endforeach
                                        </div>
                            </div>

                        </div><!-- End -->


                </div>

            </div>
        </div>
        <hr>

            </div>
        </div>
@endsection



