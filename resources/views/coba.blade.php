<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Shyra || Latihan</title>
    <link rel="stylesheet" href="css/coba.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

    <p class="text-md"><?php echo $nama; ?> </p>
    <h5><?= $email; ?> </h5>
    <h5> {{ $phone }}  </h5>
    <img src="img/<?= $img; ?>" alt="<?= $email; ?>" width = "200">

    <p> @yield('judul')</p>

    <p> @yield('isi')</p>


    <script src="js/coba.js"></script>
</body>
</html>