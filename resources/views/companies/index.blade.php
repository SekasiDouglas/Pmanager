@extends('layouts.app')

@section('content')
<div class="col-md-6 col-lg-6 col-md-offset-3 ">
    <div class="panel panel-primary">
        <div class="panel-heading"><a class="btn btn-default btn-sm pull-right" href="/companies/create">Create a company</a> Companies</div>
        <div class="panel-body">
            <ul class="list-group">
                @foreach ($companies as $item)
                    <li class="list-group-item"><a href="/companies/{{ $item->id }}">{{ $item->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection