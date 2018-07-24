
@extends('layouts.app')

@section('content')
<div class="col-md-9 col-lg-9 ">
    
    <div class="row col-md-12 col-lg-12 col-sm-12" style="background:white; margin:4px ">
        <form method="post" action="{{ route('projects.update',[$project->id]) }}">
            {{ csrf_field() }}
            
            <input type="hidden" name="_method" value="put">
            
            <div class="form-group">
                <label for="project-name">Name<span class="required">*</span></label>
                <input   placeholder="Enter name"  
                id="project-name"
                required
                name="name"
                spellcheck="false"
                class="form-control"
                value="{{ $project->name }}"
                />
            </div>
               
            <div class="form-group">
                <label for="project-content">Description</label>
                <textarea placeholder="Enter description" 
                style="resize: vertical" 
                id="project-content"
                name="description"
                rows="5" spellcheck="false"
                class="form-control autosize-target text-left">
                {{ $project->description }}</textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary"
                value="Submit"/>
            </div>

        </form>
    </div>
</div>

<div class="col-md-3">
    <div class="col-sm-3 col-md-3 col-lg-3 col-sm-offset-1">
        <div class="sidebar-module ">
            <h3>Actions</h3>
            <ol class="list-unstyled">
                <li ><a href="/projects">All_projects</a></li>
                <li ><a href="/projects/{{ $project->id }}">View_project</a></li>
                <li><a href="#">Delete</a></li>
                <li><a href="#"> Add</a></li>
            </ol>
        </div>
        
    </div>
</div>

@endsection

