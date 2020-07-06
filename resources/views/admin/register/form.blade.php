@extends('layouts.admin')
@section('render')

<div class="container pt-5">
    <div class="jumbotron">
       <div class="row">
           <div class="col-3">Name</div>
           <div class="col-3">Present</div>
           <div class="col-3">Abscent</div>
           <div class="col-3">Permission</div>
       </div>
       <hr>
    <form action="/marrk-register" method="POST">
@csrf
<input type="hidden" name="class_id" value="{{$id}}">
        @foreach ($students as $item)
        <div class="row py-1">
            <div class="col-3">{{$item->name}}</div>
            <div class="col-3"><span class="bg-success"><input type="radio" name="{{$item->id}}" required  value="1"></span></div>
            <div class="col-3"><span class="bg-danger"><input type="radio" name="{{$item->id}}"  required value="0"></span></div>
            <div class="col-3"><span class="bg-info"><input type="radio" name="{{$item->id}}"    required value="2"></span></div>
        </div>
        <hr>
        @endforeach
        <div class="row">
            <div class="ml-auto mx-5">
                <button class="btn btn-dark btn-sm w-100">Submit</button>
            </div>
        </div>

    </form>

    </div>
</div>
@endsection
