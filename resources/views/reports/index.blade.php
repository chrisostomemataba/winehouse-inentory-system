@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Reports</h1>
        <ul>
            @foreach($reports as $report)
                <li><a href="{{ route('reports.show', $report->id) }}">{{ $report->name }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection

