<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registration Form</title>
    <style>
        body {
            overflow-y: hidden;
        }
    </style>

</head>

<body class="bg-cover bg-no-repeat bg-fixed bg-[url('/images/reg1.jpg')]">
    <form class="bg-slate-100 p-3 w-4/12 mt-16 mx-auto rounded-lg shadow text-center " action=" " method="GET">
        <h1 class="font-bold text-3xl mt-2 ">Registration Form</h1><br><br>
        <input type="text" placeholder="Full Name" class="block p-3 mb-3  w-full rounded outlline-none" name="name">
        <input type="number" placeholder="Phone" class="block p-3 my-4 w-full rounded outlline-none" name="address">
        <input type="text" placeholder="Email" class="block p-3 my-4 w-full rounded outlline-none" name="email">
        <input type="text" placeholder="Password" class="block p-3 my-4 w-full rounded outlline-none" name="password"><br><br>
        <input type="submit" name="submit" value="Register" class="p-2 my-3 bg-sky-700 text-white rounded outlline-none">
        <input type="reset" name="reset" value="Cancel" class="p-2 my-3 bg-red-600 text-white rounded outlline-none">
    </form>
</body>

</html>