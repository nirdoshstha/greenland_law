@extends('layouts.frontend')

@section('content')
<div class="container py-5" style="margin-top:100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome <span>{{Auth::user()->name}} ! </span>{{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
