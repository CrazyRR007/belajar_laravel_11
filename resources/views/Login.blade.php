<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Badut | Login</title>
    @if (!app()->environment('testing'))
        @vite(['resources/css/main.scss'])
    @endif
</head>
<body class="loginpage">
    <div id="loginForm" class="login-container">
        <div class="login-title">Login Akun</div>
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
                    Jika belum memiliki akun silahkan klik
                    <a onclick="switchFormRegister()">Daftar</a>
                </div>
                <button type="submit">Masuk</button>
            </div>
        </form>
    </div>

    <div id="registerForm" class="register-container hidden">
        <div class="login-title">Registrasi Akun</div>
        <form class="login-form" action="" method="post">
            <div class="login-form-column">
                <div class="login-form-row">
                    <label for="username">username</label>
                    <input id="username" type="text" name="username">
                </div>
                <div class="login-form-row">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password">
                </div>
                <div class="login-form-row">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation">
                </div>
                <div class="login-form-row font-daftar">
                    Jika sudah memiliki akun silahkan klik
                    <a onclick="switchFormLogin()">Masuk</a>
                </div>
                <button type="submit">Daftar</button>
            </div>
        </form>
    </div>
    <script>
        function switchFormLogin(showForm) {
            setTimeout(() => {
                document.getElementById('loginForm').classList.remove('hidden');
                document.getElementById('registerForm').classList.add('hidden');
            }, 1000);
        }
        function switchFormRegister(showForm) {
            setTimeout(() => {
                document.getElementById('loginForm').classList.add('hidden');
                document.getElementById('registerForm').classList.remove('hidden');
            }, 1000);
        }
    </script>
</body>
</html>