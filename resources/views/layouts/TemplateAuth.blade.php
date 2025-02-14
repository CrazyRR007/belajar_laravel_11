<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Project Badut |')</title>
    @if (!app()->environment('testing'))
        @vite(['resources/css/main.scss'])
    @endif
</head>
<body>
    <div id="registerForm" class="register-container hidden">
        <div class="login-title">Registrasi Akun</div>
        <form class="login-form" action="" method="post">
            <div class="login-form-column">
                <div class="login-form-row">
                    <label for="username">username</label>
                    <input id="username" type="text" name="username">
                </div>
                <div class="login-form-row">
                    <label for="password">password</label>
                    <input id="password" type="password" name="password">
                </div>
                <div class="login-form-row font-daftar">
                    Jika sudah memiliki akun silahkan klik
                    <a onclick="switchFormLogin()">Masuk</a>
                </div>
                <button type="submit">Daftar</button>
            </div>
        </form>
    </div>
</body>
</html>