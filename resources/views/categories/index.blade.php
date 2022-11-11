@extends('base')

@section('content')
<div class="all">


<h1>Categories</h1>

<table class="table table-bordered table-striped table-sm table">
    <thead>
        <tr>
            <th>#</th>
            <th>Category</th>
            <th>Description</th>
        </tr>
    </thead>

    <tbody>
        @foreach($categories as $cat)

        <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->category}}</td>
            <td>{{$cat->description}}</td>
        </tr>

        @endforeach
    </tbody>
    <style>
        .table{
            font-size: 20px;
        }
        .all{
            margin-top: 50px;
        }
    </style>
</table>
</div>

@stop
