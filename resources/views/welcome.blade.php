@extends('master')
@section('title', 'Home')   {{-- 因應不同頁面給予不同title --}}
@section('content')
<div class="content">
    <div class="title m-b-md">
        Gundam Breaker Project
    </div>
    <div class="links">
        <a href="{{ url('/work') }}">Works</a>
        <a href="{{ url('/part') }}">Parts</a>
    </div>
</div>
@endsection
