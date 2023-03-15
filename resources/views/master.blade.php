<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Title</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class=" text-white bg-black p-4 text-left px-20">
        <a href="/index" class="font-bold text-lg px-3">DashBoard</a>
        <a href="/admin" class="font-bold text-lg px-3">Admin</a>
        <a href="/about" class="font-bold text-lg px-3">About us</a>
        <a href="/services" class="font-bold text-lg px-3">Services</a>
        <a href="/booking" class="font-bold text-lg px-3">Booking</a>
        <a href="/report" class="font-bold text-lg px-3">Report</a>
    </nav>
    @yield('content')
</body>

</html>