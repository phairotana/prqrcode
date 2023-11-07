<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', config('app.name'))</title>
        <meta name="description" content="@yield('description', 'Ryuta Hamasaki is a software engineer who loves building things using Laravel, Vue.js, and Angular.')"/>

        <meta property="og:title" content="@yield('title', config('app.name'))" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="@yield('featured-image', 'https://d3kvywu94yn7wx.cloudfront.net/images/Ud4xfI62qK2Bden2vAXk8hWYS4BSjFXVJ79SOUZ1.jpeg')" />
        <meta property="og:description" content="@yield('description', 'Ryuta Hamasaki is a software engineer who loves building things using Laravel, Vue.js, and Angular.')" />

        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="@avosalmon"/>
        <meta name="twitter:creator" content="@avosalmon"/>
        <meta name="twitter:title" content="@yield('title', config('app.name'))">
        <meta name="twitter:description" content="@yield('description', 'Ryuta Hamasaki is a software engineer who loves building things using Laravel, Vue.js, and Angular.')">
        <meta name="twitter:image" content="@yield('featured-image', 'https://d3kvywu94yn7wx.cloudfront.net/images/Ud4xfI62qK2Bden2vAXk8hWYS4BSjFXVJ79SOUZ1.jpeg')">

        <link rel="icon" type="image/jpeg" href="{{ mix('image/avatar.jpg') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="text-gray-800 subpixel-antialiased">
        <header>
            <nav class="flex flex-col items-center justify-between bg-black text-white px-4 py-4 md:flex-row md:px-32">
                <div class="text-2xl font-medium font-mono mb-4 md:mb-0">
                    <a href="/" class="hover:text-blue-400">
                        <img src="{{ mix('image/avatar.jpg') }}" alt="avatar" class="hidden md:inline rounded-full h-16 mr-4">
                        Ryuta Hamasaki
                    </a>
                </div>
            </nav>
        </header>
        <main class="px-4 py-10 mx-auto w-full md:w-2/3 lg:w-3/5 2xl:w-1/2">
            @yield('content')
        </main>
        <div class="px-4 pb-20 mx-auto w-full md:w-2/3 lg:w-3/5 2xl:w-1/2">
            <div class="text-center mb-4">
                <img src="{{ mix('image/avatar.jpg') }}" alt="avatar" class="inline rounded-full h-32">
            </div>
            <h2 class="text-4xl font-semibold text-center mb-6">About Me</h2>
            <p class="text-xl leading-relaxed">
                Hi there, I am a software engineer from Japan and currently based in Singapore.
                Over the past 5 years, I've been creating e-commerce and FinTech web
                applications using Laravel, Vue.js, and Angular. Making clean,
                maintainable, and scalable software with agile methodology is one of my
                biggest passions. Im my spare time, I play the bass and enjoy DIY.
            </p>
        </div>
        <footer class="flex flex-col items-center justify-between text-gray-500 px-4 py-4 border-t border-gray-300 md:flex-row md:px-32">
            <div class="mb-4 md:mb-0">&copy; Ryuta Hamasaki</div>
        </footer>
    </body>
</html>
