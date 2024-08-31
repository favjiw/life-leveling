@extends('layouts.master')

@section('title', 'Home')

@section('content')
  <div class="text">Welcome to Life Leveling</div>
  
  <div class="dashboard-container">
    <div class="card">
      <h3>Today's Overview</h3>
      <p>Total tantangan yang belum selesai : {{ $todayPendingCount }}</p>
    </div>
    <div class="card">
      <h3>Completed Challenges This Week</h3>
      <p>Total tantangan yang diselesaikan minggu ini : {{ $challengesCompletedThisWeek }}</p>
    </div>
    <div class="card">
      <h3>Your Stats</h3>
      <p>Total XP: {{ $totalXp }}</p>
    </div>
  </div>

  
@endsection
