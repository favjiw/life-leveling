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
        <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <h2>Login</h2>
        <div class="input-box">
            <input
            type="email"
            placeholder="Masukkan Email Anda"
            required
            name="email"
            />
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
            <i class="uil uil-eye toggle-password"></i>
            <i class="uil uil-lock password"></i>
        </div>
        <br />
        <button class="button">Login Sekarang</button>

        <div class="login-signup">
            Apakah kamu belum punya akun?
            <a href="{{ route('register') }}">Daftar</a>
        </div>
        </form>
    </div>
    </div>
</section>
<script>
    const pwInput = document.getElementById('password');
    const togglePasswordIcon = document.querySelector('.toggle-password');

    togglePasswordIcon.addEventListener('click', function () {
    if (pwInput.type === 'password') {
        pwInput.type = 'text';
        togglePasswordIcon.classList.remove('uil-eye');
        togglePasswordIcon.classList.add('uil-eye-slash');
    } else {
        pwInput.type = 'password';
        togglePasswordIcon.classList.remove('uil-eye-slash');
        togglePasswordIcon.classList.add('uil-eye');
    }
    });
</script>
</body>
</html>