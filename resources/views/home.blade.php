@extends('layouts.app')

@section('content')
<div class="container">
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

                    {{ __('You are logged in!') }}

                </div>

            </div>
            <div class="btn-toolbar float-right" role="toolbar">
                <a href="{{url('/item')}}" class="btn btn-success ml-1" data-toggle="tooltip">Try Me<i class="fas fa-plus-circle"></i></a>
            </div><!--btn-toolbar-->

            
        </div>
    </div>
</div>
@endsection
