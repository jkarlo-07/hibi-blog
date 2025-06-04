<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hibi Blog</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="font-hanken text-main">
    <header class="flex items-center justify-between px-[150px] py-10">
        <h1 class="text-2xl font-bold">HibiBlog</h1>
        <div class="flex gap-[20px]">
            <x-nav href="/" :active="request()->is('/')">Home</x-nav>
            <x-nav href="/posts" :active="request()->is('posts')">Posts</x-nav>
            <x-nav href="/about" :active="request()->is('about')">About</x-nav>
            <x-nav href="/contact" :active="request()->is('contact')">Contact</x-nav>
        </div>
        <div class="flex gap-[20px]">
            @guest
                <x-nav href="/register" :active="request()->is('register')">Register</x-nav>
                <x-nav href="/login" :active="request()->is('login')">Log In</x-nav>

            @endguest
            @auth
                <x-nav href="/register">View Profile</x-nav>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="hover:text-cyan-teal transition-colors duration-200 hover:cursor-pointer">Log Out</button>
                </form>

            @endauth
        </div>
    </header>
    <main class="mx-[150px]">
        {{ $slot }}
    </main>
</body>

</html>
