@extends('layout')
@section('content')
<form action="{{route('create_task')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="task">Task</label>
                <textarea name="task" id="task" rows="5" class="form-control" placeholder="Enter The Task"></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="user">Assigned To</label>
                <select name="user" id="user" class="form-control">
                    <option value="">select the user</option>
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>
    </div>
</form>
@endsection