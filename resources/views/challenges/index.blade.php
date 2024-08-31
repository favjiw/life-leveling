@extends('layouts.master')

@section('title', 'Challenges')

@section('content')

<link href="{{ asset('quest.css') }}" rel="stylesheet">
  <div class="text">Quests & Challenges</div>
  
  <div class="dashboard-container">
    <div class="card">
      <h3>Daily Quest</h3>
    </div>
    <div class="card">
      <h3>Leaderboards</h3>
    </div>
  </div>

  <div class="chart-container">
    <div class="todo-list">
      <h3>Daily Quest</h3>
      <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul Tantangan</th>
                <th>xp</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($userChallengesToday as $index => $challenge)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $challenge->challenge->title }}</td>
                    <td>{{ $challenge->challenge->points }}</td>
                    <td>{{ ucfirst($challenge->status) }}</td>
                    <td>
                        @if($challenge->status === 'pending')
                            <form action="{{ url('/challenges/done') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="btn btn-success">Selesai</button>
                            </form>
                        @else
                            <span>Tantangan Selesai</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Tidak ada tantangan untuk hari ini.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </div>
  </div>
@endsection
