@extends('tasks.layout')

@section('content')
    <div class="card">
        <div class="card-header">Task Page</div>
        <div class="card-body">

            <form action="{{ url('/task') }}" method="post">
                {!! csrf_field() !!}

                <label>Title</label>
                <br />
                <input type="text" name="title" id="title" class="form-control" />
                <br />

                <label>Description</label>
                <br />
                <input type="text" name="description" id="description" class="form-control" />

                <br />

                <input type="submit" value="Save" class="btn btn-success" />
            </form>

        </div>
    </div>
@stop
