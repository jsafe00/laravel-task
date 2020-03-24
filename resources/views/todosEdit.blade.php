@extends('layouts.app')

@section('content')
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-8">
               @if (session('status'))
                  <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                  </div>
               @endif

               <div class="card card-new-task">
                  <div class="card-header">Todo</div>

                  <div class="card-body">

                     <form class="form-vertical" role="form" method="post" action="{{ route('todos.update', $todo->id)}}">
                        {{csrf_field()}}
                        {{method_field('PATCH')}}
                        <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="title" value="{{$todo->title}}">
                        @if ($errors->has('title'))
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('title') }}</strong>
                           </span>
                        @endif
                  </div>

                  <div class="form-group">
                     <label for="description">Description</label>
                     <input type="textarea" name="description" class="form-control" placeholder="description" value="{{$todo->description}}">
                     @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('description') }}</strong>
                        </span>
                     @endif
                  </div>

                  <div class="form-group">
                     <button type="button" class="btn btn-info" onclick="window.location='{{ URL::previous() }}'">Cancel</button>
                     <button type="submit" class="btn btn-info">Update Todo</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
@endsection