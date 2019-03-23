@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>
                    Hi
                    ur email is {{$email}}
                    ur age is {{Carbon\Carbon::createFromDate($DOB)->age}}

                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
