@extends('layouts.success')
@section('title','CHECKOUT SUCCESS | KUY-LA ')
@section('content')
<main>
    <div class="div section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{ url('frontend/images/icon_set/ic_surel.png') }}" alt="">
            <h1>Congrats! Success</h1>
            <p>
                We've sent you email for trip informations
                <br>
                please read it as well
            </p>
            <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
                Home Page
            </a>
        </div>
    </div>
</main>
@endsection