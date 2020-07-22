@extends('master')
@section('title', $uhere)   {{-- 因應不同頁面給予不同title --}}
@section('content')
<div class="content">
    <div class="second-right links">
        <a href="{{ url('/work') }}">List</a>
    </div>
    <div class="title">
        Add Work
    </div>
    <form action="/work" method="POST">
        {{ csrf_field() }}
        <label for="work_name">Name</label>
        <input type="text" name="work_name" id="work_name" />
        <br />
        <input type="submit" value="Save" />
    </form>
</div>
@endsection
