<!DOCTYPE html>
<html lang="Fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job hub| جاب هاب</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white">
    <div class="px-10 ">

        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img class="" style="max-width: 7vw" src="{{ Vite::asset('resources/images/logo.png') }}"
                        alt="">
                </a>

            </div>
            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">creers</a>
                <a href="">salaries</a>
                <a href="">componies</a>
            </div>
            @auth
                <div><a href="/jobs/create">Post a Job</a></div>

            @endauth
            @guest
                <div>
                    <a href="/login">login</a>
                    /
                    <a href="/register">sign up</a>
                </div>


            @endguest
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
        <footer>
            <x-footer></x-footer>
        </footer>
    </div>
</body>

</html>
