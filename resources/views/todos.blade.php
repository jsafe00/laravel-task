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
                <div class="card-header">Create Todo</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('todos.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" name="title" type="text" maxlength="255" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" autocomplete="off" />
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <input id="description" name="description" type="text" maxlength="255" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" autocomplete="off" />
                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Todos</div>

                <div class="card-body">
                   <table class="table table-striped">
                   <thead>
                   <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <thead>
                       @foreach ($todos as $todo)
                    
                           <tr>
                               <td> {{ $todo->title }} </td>
                               <td> {{ $todo->description }} </td>
                               <td> <a class="btn btn-primary" href="{{ route('todos.edit', $todo->id) }}">Edit</a> </td>   
                               <td>
                                    <form action="{{ route('todos.destroy', $todo->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                           </tr>
                       @endforeach
                   </table>
                    {{ $todos->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
