@extends('layouts.plantilla')


@section('content')
<style>
 
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header" style="font-size: 35px;">{{ __('Esta es mi vista 1') }}</div>

                <div class="card-body" style="font-size: 25px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado sesión!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection