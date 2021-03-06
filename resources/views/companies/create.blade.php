
@extends('layouts.app')

@section('content')
<div class="col-md-9 col-lg-9 ">
    
    <div class="row col-md-12 col-lg-12 col-sm-12" style="background:white; margin:4px ">
        <h1>Create a new Company</h1>
        <form method="post" action="{{ route('companies.store') }}">
            {{ csrf_field() }}
            
            <input type="hidden" name="_method" value="post">
            
            <div class="form-group">
                <label for="company-name">Name<span class="required">*</span></label>
                <input   placeholder="Enter name"  
                id="company-name"
                required
                name="name"
                spellcheck="false"
                class="form-control"
                />
            </div>
               
            <div class="form-group">
                <label for="company-content">Description</label>
                <textarea placeholder="Enter description" 
                style="resize: vertical" 
                id="company-content"
                name="description"
                rows="5" spellcheck="false"
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

<div class="col-md-3">
    <div class="col-sm-3 col-md-3 col-lg-3 col-sm-offset-1">
        <div class="sidebar-module ">
            <h3>Actions</h3>
            <ol class="list-unstyled">
                <li ><a href="/companies">My_Companies</a></li>
            </ol>
        </div>
        
    </div>
</div>

@endsection

