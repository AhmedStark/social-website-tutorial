@extends('layouts.master')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Hello, {{$myname}}</h1>
                    <h3>You are {{$age}}</h3>

                    <h1>{{$auth->email}}</h1>
                    You are logged in! {!!Auth::user()->email !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
