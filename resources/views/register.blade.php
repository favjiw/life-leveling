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
          <form action="{{route('register.post')}}" method="POST">
            @csrf
            <h2>Sign Up</h2>
            <div class="input-box">
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
                placeholder="Masukkan Password Anda"
                required
                name="password"
              />
              <i class="uil uil-eye-slash pw_hide"></i>
              <i class="uil uil-lock password"></i>
            </div>
            <br />

            <button type="submit" class="btn btn-primary">Login</button>
              
            </button>

            <div class="login-signup">
              Apakah kamu Udah punya akun?
              <a href="/login/login.html" id="signup">Masuk</a>
            </div>
          </form>
        </div>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
