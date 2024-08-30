@extends('layouts.master')

@section('title', 'Home')

@section('content')
  <div class="text">Welcome to Life Leveling</div>
  
  <div class="dashboard-container">
    <div class="card">
      <h3>Today's Overview</h3>
      <p>See your progress and achievements for today.</p>
    </div>
    <div class="card">
      <h3>Upcoming Challenges</h3>
      <p>Prepare for new challenges coming your way.</p>
    </div>
    <div class="card">
      <h3>Your Stats</h3>
      <p>Track your performance and level up!</p>
    </div>
  </div>

  <div class="chart-container">
    <div class="stats-overview">
      <h3>Progress Summary</h3>
      <ul>
        <li>
          <span class="stat-item">Steps Today: 0</span>
        </li>
        <li>
          <span class="stat-item">Calories Burned: 0</span>
        </li>
        <li>
          <span class="stat-item">Active Minutes: 0</span>
        </li>
        <li>
          <span class="stat-item">Completed Quests: 0</span>
        </li>
      </ul>
    </div>
    
    <div class="achievement-overview">
      <h3>Recent Achievements</h3>
      <ul>
        <li>
          <span class="achievement-item">First Steps - 0 Points</span>
        </li>
        <li>
          <span class="achievement-item">Daily Streak - 0 Points</span>
        </li>
        <li>
          <span class="achievement-item">Challenge Champion - 0 Points</span>
        </li>
      </ul>
    </div>
  </div>
@endsection
