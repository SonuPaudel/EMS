<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-cover bg-no-repeat bg-fixed bg-[url('/images/login.jpg')]">
    <form class="bg-slate-100 p-5 mt-24 w-3/12 mx-auto rounded-lg shadow text-center" action="#" method="POST">
        <h2 class="font-bold text-3xl my-2">Login</h2><br>
        <input type="text" placeholder="Username" class="block p-3 my-5 w-full rounded outlline-none" name="name">

        <input type="password" placeholder="Password" class="block p-3 my-5 w-full rounded outlline-none" name="password"><br>

        <a href="/index" class="p-2 my-3 bg-blue-900 text-white rounded outlline-none">Login</a><br><br><br>
        Don't have an account? <a href="/registration" class="text-blue-600 ">Register</a>
    </form>
</body>

</html>