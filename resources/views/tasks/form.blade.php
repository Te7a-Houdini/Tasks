@include('partials.errors')


<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">{{$formTitle}}</div>
            <div class="panel-body">
                <form class="form-horizontal"  method="POST" action="{{$action}}">
                    {{ csrf_field() }}
                    {{method_field($method)}}
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name',$task->name) }}" required autofocus>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Description</label>

                        <div class="col-md-6">
                            <textarea class="form-control" name="description" required>{{ old('description',$task->description) }}</textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>