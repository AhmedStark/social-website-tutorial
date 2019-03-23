@extends('layouts.app')

@section('content')
<div class='row'>
<div class='col-md-6 offset-md-3'>
<h3>Number of users {{$users->total()}}</h3>

@if(count($users)>0)
<ul class='list-group'>
@foreach($users as $user)
<li class="list-group-item" style='margin-top:20px'>

    <span>
        {{ $user->name }}
    </span>
    <span class="float-right clearfix">
        Joined ({{$user->created_at->diffForHumans()}})
        <button class="btn btn-xs btn-primary">Follow</button>
    </span>

</li>
@endforeach 
</ul>
{{$users->links()}}
@else
<p>No users available</p>

@endif







</div>
</div>
@endsection



