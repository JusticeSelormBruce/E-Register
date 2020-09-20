
@extends('layouts.admin')
@section('render')
<div class="container mt-5">
<div class="jumbotron">
    <div class="row">
        <div class="ml-auto"> <span class="mx-2">Total Registed Electoral Area:</span>[{{$ea->count()}}]</div>
    </div>
    <table id="table_id" class="table table-striped">
        <thead>
            <tr>

                <th>EA Name</th>
                <th>PS Code</th>
                <th>Date && Time</th>
            </tr>
            <tbody>
                @foreach ($ea as $item)

                <tr>

                    <td>{{$item->ea_name}}</td>
                    <td>{{$item->ps_code}}</td>
                    <td>{{$item->created_at}}</td>
                </tr>

                @endforeach

            </tbody>
        </thead>
    </table>
</div>
</div>
@endsection
