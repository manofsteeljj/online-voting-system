@extends('layouts.app')

@section('content')
    <h1>Online Voting System</h1>

    @foreach ($elections as $election)
        <h2>{{ $election->name }}</h2>
        
        @foreach ($election->candidates as $candidate)
            <p>{{ $candidate->name }} - Votes: {{ $candidate->votes }}</p>
            <form method="POST" action="{{ route('vote', $candidate) }}">
                @csrf
                <button type="submit">Vote</button>
            </form>
        @endforeach

    @endforeach
@endsection
