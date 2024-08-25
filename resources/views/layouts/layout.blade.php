<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite('resources/js/app.js')
</head>

<body class="bg-dark text-white font-Hanken-Grotesk">
    <div class="px-10 h-full">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">

                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="/Jobs">Jobs</a>
                <a href="/careers">Careers</a>
                <a href="/salaries">Salaries</a>
                <a href="/companies">Companies</a>
            </div>

            @guest
            <div class="space-x-6 font-semibold ">
                <a href="/register" class="hover:underline hover:underline-offset-2 ">Register</a>
                <a href="/login" class="hover:underline hover:underline-offset-2 ">Login</a>
            </div>
            @endguest

            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Post a Job</a>

                    <form method="POST" action="{{ route('auth.destroy.logout') }}">
                        @csrf
                        @method('DELETE')

                        <button>Log Out</button>
                    </form>
                </div>
            @endauth
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
