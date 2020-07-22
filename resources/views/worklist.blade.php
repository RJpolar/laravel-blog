@extends('master')
@section('title', $uhere)   {{-- 因應不同頁面給予不同title --}}
@section('content')
<div class="content">
    <div class="second-right links">
        <a href="{{ url('/work/create') }}">Add</a>
    </div>
    <div class="title">
        {{ $uhere }}
    </div>
    <table id="worklist">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Operation</th>
        </tr>
        @forelse ($data as $work)
            <tr>
                <td>{{ $work->id }}</td>
                <td>{{ $work->name }}</td>
                <td class="links">
                  <a href="/work/{{ $work->id }}/edit">Edit</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">no data</td>
            </tr>
        @endforelse
    </talbe>
</div>
@endsection
