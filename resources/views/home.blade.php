@extends('layouts.main')

@section('title')
    DoCarmoDJ
@endsection

@section('content')
    @for ($i = 0; $i < 100; $i++)
        <p class="text-white">Wiederholung</p>
    @endfor
@endsection
