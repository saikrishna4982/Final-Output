@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new Question</div>
                <div class="card-body">
                    <form method="post" action="/questionnaires">
                        
                        <div class="form-group">
                        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
    <small id="titleHelp" class="form-text text-muted">Give a Beautiful Tittle </small>
    @error('title')
        <small class="text-danger">{{$message}}</small>
    @enderror
  </div>

<div class="form-group">
                        <label for="title">Purpose</label>
        <input type="text"  name="purpose"class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter Purpose">
    <small id="purposeHelp" class="form-text text-muted">Type Attractive Purpose for Quick Responses </small>
     @error('purpose')
        <small class="text-danger">{{$message}}</small>
    @enderror
  </div>
<button class="btn btn-primary" type="submit">Create Questionnaire</button>
@csrf
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
