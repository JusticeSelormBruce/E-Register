@extends('layouts.admin')
@section('render')

<div class="container mt-5">
    <div class="jumbotron-fluid ">
        <div class="row">
            <div class="mx-auto">
                <a href="{{route('register.form',['id'=>$id])}}" class="btn btn-sm btn-primary text-capitalize">Mark Register</a>
            </div>
        </div>
        <table id="table_id" class="table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Position</th>
            <th>Date and Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $studentlist as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->position}}</td>
                    <td>{{$item->created_at}}</td>


                </tr>

        @endforeach
    </tbody>
</table>


    </div>
</div>

@endsection
