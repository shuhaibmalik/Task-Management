@extends('layout')
@section('content')
<div class="box">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Task</th>
      @can('isAdmin')
      <th scope="col">Assigned To</th>
      @endcan
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$task->task}}</td>
      @can('isAdmin')
      <td>{{$task->name}}</td>
      @endcan
      <td>
        <select id="taskStatus" class="form-control" onChange=statusChange(1)>
            <option value="0" {{$task->status == 0 ? 'selected' : ""}} tast_id="{{$task->id}}">Not Completed</option>
            <option value="1" {{$task->status == 1 ? 'selected' : ""}} tast_id = "{{$task->id}}">Completed</option>
            <option value="3" {{$task->status == 2 ? 'selected' : ""}} tast_id = "{{$task->id}}">Process</option>
        </select>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection