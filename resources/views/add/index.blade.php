@extends('layouts.main')

@section('content')
<style type="text/css">
.add100-form{
    padding-left: 20%;
    padding-right: 20%;
}


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
            <p class="lead mb-0">Add new Achievement</p>
            <br>

                <form class="add100-form validate-form" method="POST" action="{{ url('/add') }}">
                    @csrf

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" id="title" type="text" name="title" placeholder="Title" required autocomplete="title" >
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



