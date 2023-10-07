@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $report->name }}</h1>
        <p>{{ $report->content }}</p>
    </div>
@endsection
