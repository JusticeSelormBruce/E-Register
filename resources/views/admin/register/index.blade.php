@extends('layouts.admin')
@section('render')

<div class="container pt-4">
    <div class="jumbotron">
        @include('common.alert')
        @if ($classes == null)
<div class="row">
    <div class="mx-auto">
        <h5>Sorry, No class Assigned to you Yet</h5>
    </div>
</div>
        @else
        @foreach ($classes as $item)

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
        @endif

    </div>
</div>
@endsection
