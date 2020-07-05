@extends('layouts.admin')
@section('render')

<div class="container mt-5">
    <div class="jumbotron-fluid ">
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
