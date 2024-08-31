<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PENDAFTARAN FORM</title>
  <link href="{{ asset('pendaftaran.css') }}" rel="stylesheet">
  <link
    rel="stylesheet"
    href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
  />
</head>
<body>
  <section class="home">
    <div class="form-container">
      <div class="form signup_form">
        <form action="{{ route('register.post') }}" method="POST">
          @csrf
          <h2>Sign Up</h2>
          <div class="input-box">
            <i class="uil uil-user user-icon"></i>
            <input
              type="username"
              placeholder="Masukkan Username Anda"
              required
              name="username"
            />
          </div>
          <div class="input-box">
            <input type="email" placeholder="Masukkan Email Anda" required name="email"/>
            <i class="uil uil-envelope-alt email"></i>
          </div>
          <div class="input-box">
            <input
              type="password"
              id="password"
              placeholder="Masukkan Password Anda"
              required
              name="password"
            />
            <i class="uil uil-lock password"></i>
          </div>
          <br />

          <button type="submit" class="btn btn-primary">Register</button>

          <div class="login-signup">
            Apakah kamu sudah punya akun?
            <a href="{{ route('login') }}">Masuk</a>
          </div>
        </form>
      </div>
    </div>
  </section>
  </body>
</html>