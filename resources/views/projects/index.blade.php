@extends('layouts.app')

@section('content')

<div class="col-md-6 col-lg-6 col-md-offset-3 ">
    <div class="panel panel-primary">
        <div class="panel-heading"><a class="btn btn-default btn-sm pull-right" href="/projects/create">Create a project</a> projects</div>
        <div class="panel-body">
            <ul class="list-group">
                @foreach ($projects as $item)
                    <li class="list-group-item"><a href="/projects/{{ $item->id }}">{{ $item->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection