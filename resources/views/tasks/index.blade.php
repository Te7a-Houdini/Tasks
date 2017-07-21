@extends('layouts.app')

@section('content')
    @include('partials.success')
<div class="container">
    <div class="row">

        <div class="panel panel-primary">
            <div class="panel-heading">Tasks <span class="pull-right"><a class="btn btn-xs btn-default" href="{{route('tasks.create')}}"> Create Task</a></span></div>
            <div class="panel-body">
                <table class="table table-striped" >
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>

                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->name}}</td>
                            <td>{{$task->description}}</td>
                            <td>{{$task->created_at}}</td>
                            <td>{{$task->updated_at}}</td>
                            <td><a class="btn btn-sm btn-primary" href="{{route('tasks.edit',$task->id)}}">Edit</a></td>
                            <td><a href="javascript:void(0)" taskId="{{$task->id}}" class="deleteTask btn btn-sm btn-danger">Delete</a>

                                <form id={{$task->id}} style="display: none"  method="POST" action="{{route('tasks.destroy',$task->id)}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}

                                </form>
                            </td>

                        </tr>
                        @endforeach

                </table>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function(){

            $('.deleteTask').on('click',function(){
                var confirmed = confirm('Are You Sure Want To Delete This Task ?');

                if (confirmed)
                {
                   $('#'+$(this).attr('taskId')).submit();
                }

            });

        });
    </script>
    @endsection
