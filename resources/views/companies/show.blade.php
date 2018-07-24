
@extends('layouts.app')

@section('content')
<div class="col-md-9 col-lg-9 ">
    <div class="jumbotron">
        <h1>{{ $company->name }}</h1>
        <p class="lead">{{$company->description }}</p>
    </div>
    
    <!-- Example row of columns -->
    <div class="row" style="background:white; margin:4px ">
            <a class="btn btn-default btn-sm pull-right" href="/projects/create/{{ $company->id }}" >Add Project</a>
        @foreach($company->projects as $project)
        <div class="col-lg-5">
            <h2>{{ $project->name }}</h2>
            <p class="text-danger "> {{ $project->description }} </p>
            <p><a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button">View details »</a></p>
        </div>
        @endforeach
        
    </div>
</div>

<div class="col-md-3">
    <div class="col-sm-3 col-md-3 col-lg-3 col-sm-offset-1">
        <div class="sidebar-module ">
            <h3>Actions</h3>
            <ol class="list-unstyled">

                <li ><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
                <li ><a href="/projects/create/{{ $company->id }}" >Add_Project</a></li>
                <li ><a href="/companies" >My_Companies</a></li>
                <li ><a href="/companies/create" >Create_Company</a></li>

                <a   
              href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                  Delete
              </a>

              <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>


            </ol>
        </div>
            
    </div>
</div>

@endsection

