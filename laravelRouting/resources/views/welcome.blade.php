<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/sass/app.scss') {{-- tanda @vite -> digunakan untuk memanggil perintah blande directive yang digunakan untuk mengarahkan ke file css/scss (sama halnya pada file vite.config.js--}}
</head>
<body>
    <div class="container m-5">
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite --}}
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/main.svg') }}" alt="image">
    </div>
    @vite('resources/js/app.js')
</body>
</html>
