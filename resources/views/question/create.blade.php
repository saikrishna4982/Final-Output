@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new Question</div>
                <div class="card-body">
                    <form method="post" action="/questionnaires/{{$questionnaire->id}}/questions">
                        
                        <div class="form-group">
                        <label for="question">Question</label>
        <input type="text" name="question[question]" class="form-control" 
        id="questions" aria-describedby="questionsHelp" placeholder="Enter Question" value="{{old('question.question')}}">
    <small id="questionsHelp" class="form-text text-muted">Enter your Question </small>
    @error('question.question')
        <small class="text-danger">{{$message}}</small>
    @enderror
  </div>
<div class="form-group">
    <fieldset>
        <legend>Choices</legend>
    <small id="choicesHelp" class="form-text text-muted">Insert Choices for your question</small>

        <div>
                 <div class="form-group">
                        <label for="answer1">Choice 1</label>
        <input type="text" name="answers[][answer]" class="form-control" 
        id="answer1" aria-describedby="choiceHelp" placeholder="Enter choice 1" value="{{old('answers.0.answer')}}">
    @error('answers.0.answer')
        <small class="text-danger">{{$message}}</small>
    @enderror
  </div>
        </div>

       <div>
                 <div class="form-group">
                        <label for="answer2">Choice 2</label>
        <input type="text" name="answers[][answer]" class="form-control" 
        id="answer2" aria-describedby="choiceHelp" placeholder="Enter choice 2" value="{{old('answers.1.answer')}}">
    @error('answers.1.answer')
        <small class="text-danger">{{$message}}</small>
    @enderror
  </div>
        </div>

               <div>
                 <div class="form-group">
                        <label for="answer3">Choice 3</label>
        <input type="text" name="answers[][answer]" class="form-control" 
        id="answer3" aria-describedby="choiceHelp" placeholder="Enter choice 3" value="{{old('answers.2.answer')}}">
    @error('answers.2.answer')
        <small class="text-danger">{{$message}}</small>
    @enderror
  </div>
        </div>

               <div>
                 <div class="form-group">
                        <label for="answer4">Choice 4</label>
        <input type="text" name="answers[][answer]" class="form-control" 
        id="answer4" aria-describedby="choiceHelp" placeholder="Enter choice 4" value="{{old('answers.3.answer')}}">
    @error('answers.3.answer')
        <small class="text-danger">{{$message}}</small>
    @enderror
  </div>
        </div>


    </fieldset>

</div>
<button class="btn btn-primary" type="submit">Add Question</button>
@csrf
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
