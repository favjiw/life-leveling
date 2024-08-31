<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>LOGIN</title>
        <link href="{{ asset('login.css') }}" rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
        />
    </head>
    <body>
        <section class="home">
            <div class="form-container">
                <div class="form login_form">
                    <form action="{{route('login.post')}}" method="POST">
                        @csrf
                        <h2>Login</h2>
                        <div class="input-box">
                            <input
                                type="email"
                                placeholder="Masukkan Email Anda"
                                required
                                name ="email"
                            />
                            <i class="uil uil-envelope-alt email"></i>
                        </div>
                        <div class="input-box">
                            <input
                                type="password"
                                placeholder="Masukkan Password Anda"
                                required
                                name ="password"
                            />
                            <i class="uil uil-eye-slash pw_hide"></i>
                            <i class="uil uil-lock password"></i>
                        </div>
                        <br />
                        <div class="option-field">
                            <span class="checkbox">
                                <input type="checkbox" id="check" />
                                <label for="check">Remember Me</label>
                            </span>
                            <a
                                href="/lupa password/lupa_password.html"
                                class="forgot-pw"
                                >Lupa Password ?</a
                            >
                        </div>
                        <button class="button">
                            <a href="#beranda"></a>Login Sekarang
                        </button>

                        <div class="login-signup">
                            Apakah kamu belum punya akun?
                            <a href="/pendaftaran/pendaftaran.html" id="signup"
                                >Daftar</a
                            >
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
