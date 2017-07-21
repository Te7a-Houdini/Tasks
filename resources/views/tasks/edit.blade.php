@extends('layouts.app')



@section('content')

    @include('tasks.form',[
    'action' => route('tasks.update',$task->id),
    'method' => 'PUT',
    'formTitle' => 'Edit Task'
    ])

@endsection