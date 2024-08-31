@extends('layouts.master')

@section('title', 'Challenges')

@section('content')
  <div class="text">Quests & Challenges</div>
  
  <div class="dashboard-container">
    <div class="card">
      <h3>Daily Quest</h3>
    </div>
    <div class="card">
      <h3>Weekly Challenges</h3>
    </div>
    <div class="card">
      <h3>Achievements</h3>
    </div>
  </div>

  <div class="chart-container">
    <div class="todo-list">
      <h3>Daily Quest</h3>
      <ul>
        {{-- <li class="nav-link">
          <span class="text home-text">N/A</span>
        </li>
        <li class="nav-link">
          <span class="text home-text">N/A</span>
        </li>
        <li class="nav-link">
          <span class="text home-text">N/A</span>
        </li>
        <li class="nav-link">
          <span class="text home-text">N/A</span>
        </li>
        <li class="nav-link">
          <span class="text home-text">N/A</span>
        </li> --}}
        @forelse($userChallengesToday as $challenge)
        <li>{{ $challenge->challenge->title }} - Status: {{ $challenge->status }}</li>
        @empty
            <p>Tidak ada tantangan untuk hari ini.</p>
        @endforelse
      </ul>
    </div>
  </div>
@endsection
