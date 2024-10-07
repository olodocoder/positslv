<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0400;500;600&display=swap" rel="stylesheet">
    <title>Posits</title>
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-10">
    <div class="px-10">
        <nav class="flex justify-between items-center border-b border-white/10 py-4">
            <div><a href="/"><img src="{{Vite::asset('resources/images/logo.svg')}}" alt=""></a></div>
            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            @auth
                  <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Post a job</a>
                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                    <button>Logout</button>
                    </form>
                </div>
            @endauth

            @guest
            <div class="space-x-6 font-bold">
                <a href="/register">Register</a>
                <a href="/login">Log In</a>
            </div>
            <div></div>
            @endguest
          
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{$slot}}
        </main>
    </div>
</body>

</html>