@extends('layouts.app')

@section('content')
<div class="container text-center profile-card">
    <img src="{{ asset('images/default-profile.png') }}" alt="Profile Picture">
    <h2>{{ auth()->user()->name }}</h2>
    <p>{{ auth()->user()->email }}</p>
    <h4>Playlist Anda:</h4>
    <ul>
        <li>🎵 Playlist 1</li>
        <li>🎵 Playlist 2</li>
        <li>🎵 Playlist 3</li>
    </ul>
</div>
@endsection
