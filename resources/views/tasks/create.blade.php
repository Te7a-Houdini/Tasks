@extends('layouts.app')



@section('content')

    @include('tasks.form',[
    'action' => route('tasks.store'),
    'method' => 'POST',
    'formTitle' => 'Create Task'
    ])

@endsection