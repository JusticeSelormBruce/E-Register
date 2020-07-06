@extends('layouts.admin')
@section('render')

<div class="container mt-5">
    <div class="jumbotron-fluid ">
        @include('common.alert')
        <div class="row">
            <a href="/assign-class-index" class="mx-2 btn btn-sm text-primary"> Assign classes to Lecturer</a>
            <div class="ml-auto">
                @include('admin.classroom.create')
            </div>
        </div>
        <table id="table_id" class="table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Created by</th>
                    <th>Date and Time</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classrooms as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->user->name}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        <div class="row">
                            <div class="mx-3">@include('admin.classroom.edit')</div>
                            <div class="mx-3">@include('admin.classroom.delete')</div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
