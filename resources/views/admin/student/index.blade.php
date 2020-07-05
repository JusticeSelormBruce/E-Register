@extends('layouts.admin')
@section('render')

<div class="container mt-5">
    <div class="jumbotron-fluid ">
        @include('common.alert')
        <div class="row">
            <div class="ml-auto">
                @include('admin.student.create')
            </div>
        </div>
        @foreach ($classrooms as $item)

        <p>
            <a class="btn btn-primary w-100" data-toggle="collapse" href="#collapseExample{{ $item->id}}" role="button" aria-expanded="false" aria-controls="collapseExample{{$item->id}}">
             {{$item->name}}
            </a>
          </p>
          <div class="collapse" id="collapseExample{{$item->id}}">
        <div class="row">
            <div class="mx-auto">
                <a href="{{route('class.view',['id'=>$item->id])}}"> View Members of   {{$item->name}}</a>

            </div>
        </div>
          </div>
        @endforeach

    </div>
</div>

@endsection
