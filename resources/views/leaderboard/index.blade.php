@extends('layouts.master')

@section('title', 'Leaderboard')

@section('content')
<link href="{{ asset('leaderboard.css') }}" rel="stylesheet">
<div class="text">Leaderboard</div>
<div class="dashboard-container">
</div>
<div class="chart-container">
    <div class="todo-list">
        <h3>Global Leaderboard</h3>
        <table class="table">
            <thead>
            <tr>
                <th>Rank</th>
                <th>Username</th>
                <th>XP</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $index => $user)
                <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->xp }}</td>
                </tr>
            @empty
                <tr>
                <td colspan="3">Tidak ada data untuk ditampilkan.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        </div>
    </div>
@endsection
