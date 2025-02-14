<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/romantic.css') }}"> -->
    @vite(['resources/css/romantic.scss'])
</head>
<body>
<div class="envelope-container" onclick="openEnvelope()">
        <div class="envelope">
            <div class="flap"></div>
            <div class="wax-seal">❤️</div>
        </div>
        <div class="letter">
            Untuk Dek Tami ku sayang,<br><br>
            Dihari yang cukup spesial ini, aku ingin mengungkapkan betapa beruntungnya aku bisa menjadikan kamu pacar ku.
            Orang yang sabar dengan kelakuan ku, orang yang kuat sama prilaku ku, dan orang yang sangat sayang ke aku. <br><br>
            Aku nggak pandai dalam berkata kata tapi makasih ya untuk semuanya sayang, aku sayang banget sama kamu <br><br>
            Selamat hari valentine sayang! ❤️<br>
            Dengan penuh sayang,<br>
            Raka Ramadhan
        </div>
    </div>

    <script>
        function openEnvelope() {
            document.querySelector(".envelope-container").classList.toggle("open");
        }
    </script>
</body>
</html>