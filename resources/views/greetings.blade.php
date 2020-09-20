@extends('layouts.app')
@section('content')
    <style>
        a {
            text-decoration: none !important;
        }
    </style>

     <div class="container mt-lg-5 mt-md-5 mt-sm-2">
        <div class="form-group">
            <div class="row justify-content-center">
                <div class="row">
                    <div class="h4 text-light ">Welcome</div>
                    <br>
                    <span class="mx-4  h4 text-capitalize text-info">({{Auth::user()->name}})</span>
                </div>
            </div>
            <div class="row justify-content-center pt-5">

                <a href="/dashboard" class="text-primary"><span class="h1">Navigate to Dashboard</span></a>

            </div>
        </div>


     </div>


@endsection
