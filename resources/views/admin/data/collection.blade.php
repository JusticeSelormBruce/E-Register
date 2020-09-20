@extends('layouts.admin')
@section('render')
<div class="jumbotron mt-5">
    @include('common.alert')
    @if ($participants == null)
<div class="row">
<div class="mx-auto">
    <h5>Sorry, No Data  Yet</h5>
</div>
</div>
    @else
    @foreach ($participants->groupBy('ps_id') as $list)

        <table id="table_id" class="table table-striped">
            <thead>
                <tr>
                    <th>Day/ Date</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Voters ID</th>
                    <th>Contact</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $item)
                <tr>
                    <td>{{$item->day}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->voters_id}}</td>
                    <td>{{$item->contact}}</td>
                    <td>{{$item->category}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    @endforeach
    @endif
</div>
@endsection
