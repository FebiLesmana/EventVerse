<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title }}</title>
  <link rel="stylesheet" href="https://cdn.hugeicons.com/font/hgi-stroke-rounded.css" />
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>
  <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom warna agar persis */
    .bg-yellow-custom { background-color: #fff7cc; }
    .bg-yellow-btn { background-color: #fff3b0; }
    .border-yellow-custom { border-color: #f5c518; }
    .text-yellow-logo { color: #f5c518; }
    /* Hover sidebar btn */
    .sidebar-btn:hover:not(.active) { background-color: #fff3b0; }
  </style>
</head>
<body class="bg-white font-sans">

    @yield('main-content')

  <!-- FontAwesome for Icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
