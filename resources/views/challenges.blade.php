<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link href="{{ asset('style.css') }}" rel="stylesheet">

  <!-- Boxicons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <title>Challenges</title>
</head>
<body>
  <nav class="sidebar close">
    <header>
      <div class="text header-text">Life Leveling</div>

      <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
      <div class="menu">
        <li class="search-box">
              <i class='bx bx-search icon'></i>
                <input type="text" placeholder="Search...">
          </li>
        <ul class="menu-links">
          <li class="nav-link">
            <a href="#">
              <i class='bx bx-home icon'></i>
              <span class="text nav-text">Home</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#">
            <i class='bx bx-run icon'></i>
              <span class="text nav-text">Challenges & Quest</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#">
            <i class='bx bx-cog icon' ></i>
              <span class="text nav-text">Settings</span>
            </a>
          </li>
          
        </ul>
    </div>

    <div class="bottom-content">
      <li class="">
        <a href="#">
        <i class='bx bx-log-out icon' ></i>
          <span class="text nav-text">Log Out</span>
        </a>
      </li>

      <li class="mode">
        <div class='moon-sun'>
          <i class='bx bx-moon icon moon' ></i>
          <i class='bx bx-sun icon sun' ></i>
        </div>
        <span class="mode-text text"> Dark Mode </span>

        <div class="toggle-switch">
          <span class="switch"></span>
        </div>
      </li>
    </div>
  </nav>

  <section class="home">
    <div class="wrapper">
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
            <li class="nav-link">
              
            <span class="tex home-text">N/A</span>
            </li>
            <li class="nav-link">
              
            <span class="tex home-text">N/A</span>
            </li>
            <li class="nav-link">

            <span class="tex home-text">N/A</span>
            </li>
            <li class="nav-link">

            <span class="tex home-text">N/A</span>
            </li>
            <li class="nav-link">

            <span class="tex home-text">N/A</span>
            </li>
          </ul>
        </div>
        </div>
      </div>
  </section>

  <script src="script.js"></script>
</body>
</html>