<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    @if (!app()->environment('testing'))
        @vite(['resources/css/main.scss'])
    @endif
</head>
<body>
    <div class="navbar">
        <div class="navbar-logo">
            <!-- <i> belum ada icon </i> -->
            <a class="navbar-font" href="/belajar">Project-Badut</a>
        </div>
        <div class="navbar-content">
            <a class="navbar-font" href="">Produk</a>
            <a class="navbar-font" href="">Forum</a>
            <div class="navbar-search-container">
                <input class="navbar-search navbar-font">
                <i></i>
            </div>
        </div>
        <div class="navbar-login-container">
            <button class="navbar-login-button navbar-signup-button navbar-font">Sign up</button>
            <button class="navbar-login-button navbar-register-button navbar-font">Register</button>
        </div>
    </div>
    <main>
        <div class="home-layout">
            <div class="home-content-title">
                <p class="home-title">
                    Selamat Datang
                </p>
                <p class="home-subtitle">
                    Website ini memberikan informasi tentang
                    produk sabun dan shampoo serta infomasi mendalam
                    tentang komposisi yang ada
                </p>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-logo">
            <a href="/belajar">Project-Badut</a>
        </div>
        <div class="footer-content">
            <p>
                Website ini adalah project yang dikerjakan oleh 3 orang
                yang dimaksudkan untuk pembelajaran bersama
            </p>
            <p>
                raka ramadhan, wailan pler, heykntl
            </p>
        </div>
    </footer>
</body>
</html>