@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
    <form action="{{route('todos.save',['id' => $todo->id ])}}" method="POST">
            {{ csrf_field() }}
        <input type="text" class="form-control input-lg" name="todo" value = "{{ $todo -> todo }}"  placeholder="Update a todo">

        </form>

    </div>
</div>
{{-- <hr> --}}
{{-- @foreach ($todos as $todo)
{{ $todo -> todo }} <a href="{{route('todo.delete',['id' => $todo -> id])}}" class="btn btn-danger"> X </a>
<a href="{{route('todo.update',['id' => $todo -> id])}}" class="btn btn-warning btn xs"> Update </a>
<hr>
@endforeach --}}

{{-- @stop --}}
@endsection