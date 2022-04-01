@extends('layouts.app')

@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Powertools</li>
</ol>

<div class="container">
    <div class="row justify-content-center">

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
           
            @if (!Auth::guest())
                <br />
                <h2>Welkom {{ Auth::user()->name }}</h2>
            @endif
        </div>
    </div>
</div>
@endsection