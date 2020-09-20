
@extends('layouts.admin')
@section('render')
<div class="container mt-5">
<div class="jumbotron">

    <table id="table_id" class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>PS Name</th>
                <th>PS Code</th>
                <th>PS  No Of Voters </th>
                <th>EA Name and Code </th>
                <th>Date && Time</th>
            </tr>
            <tbody>
                @foreach ($ps as $item)

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->code}}</td>
                    <td>{{$item->no_voters}}</td>
                    <td>{{$item->ea->ea_name}}  <span>({{$item->ea->ps_code}})</span></td>
                    <td>{{$item->created_at}}</td>
                </tr>

                @endforeach
            </tbody>
        </thead>
    </table>
</div>
</div>
@endsection
