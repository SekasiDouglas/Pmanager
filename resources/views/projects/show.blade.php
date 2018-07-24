
@extends('layouts.app')

@section('content')
<div class="col-md-9 col-lg-9 ">
    <div class="well well-lg">
        <h1>{{ $project->name }}</h1>
        <p class="lead">{{$project->description }}</p>
    </div>
    
    {{-- <!-- Example row of columns --> --}}
    <div class="row" style="background:white; margin:4px ">
        
        <br>
        @include('partials.comments')
        <div class="row container-fluid ">
            <form method="post" action="{{ route('comments.store') }}">
                {{ csrf_field() }}
                
                <input type="hidden" name="commentable_type" value="App\Project">
                <input type="hidden" name="commentable_id" value={{ $project->id }}>
                
                <div class="form-group">
                    <label for="comment-content">Comment</label>
                    <textarea placeholder="Enter description" 
                    style="resize: vertical" 
                    id="comment-content"
                    name="body"
                    rows="3" spellcheck="false"
                    class="form-control autosize-target text-left">
                </textarea>
            </div>
            
            <div class="form-group">
                <label for="comment-content">Proof of workdone (Url/Photos)</label>
                <textarea placeholder="Enter url or screenshots" 
                style="resize: vertical" 
                id="comment-content"
                name="url"
                rows="2" spellcheck="false"
                class="form-control autosize-target text-left">
            </textarea>
        </div>
        
        
        
        <div class="form-group">
            <input type="submit" class="btn btn-primary"
            value="Submit"/>
        </div>
        
    </form>
</div>



</div>
</div>

<div class="col-md-3">
    <div class="col-sm-3 col-md-3 col-lg-3 col-sm-offset-1">
        <div class="sidebar-module ">
            <h3>Actions</h3>
            <ol class="list-unstyled">
                
                <li ><a href="/projects/{{ $project->id }}/edit"> Edit</a></li>
                <li ><a href="/projects" >My_projects</a></li>
                <li ><a href="/projects/create" >Create_project</a></li>
                
                <br>
                
                @if ($project->user_id == Auth::user()->id)
                <li> 
                    <a   
                    href="#"
                    onclick="
                    var result = confirm('Are you sure you wish to delete this project?');
                    if( result ){
                        event.preventDefault();
                        document.getElementById('delete-form').submit();
                    }
                    "
                    >
                    Delete
                </a>
                
                <form id="delete-form" action="{{ route('projects.destroy',[$project->id]) }}" 
                    method="POST" style="display: none;">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
                </form>
            </li> 
            @endif
            
        </ol>
        
        
        
    </div>
    
</div>
<hr>

<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <h4>Add Members</h4>
        <form id="add-user" action="projects/adduser" 
        method="POST">
        
        {{ csrf_field() }}
        
        <div class="input-group mb-3 ">
            <input type="text" class="form-control" placeholder="Email" >
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit" id="button-addon2">Add!</button>
            </div>
        </div>
    </form>
    
</div>
</div>

<h3>Members</h3>
<ol class="list-unstyled">
    
    @foreach ($project->users as $user)
        <li ><a href="#"> {{ $user->email }}</a></li>
    @endforeach
    {{--  <li ><a href="#" >Douglas</a></li>
    <li ><a href="#" >Davis</a></li>  --}}
</ol>
</div>

@endsection



