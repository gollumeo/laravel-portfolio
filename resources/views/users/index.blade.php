<!doctype html>
<html lang="en" class="min-h-screen">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100;200;300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/img/gollumeo.png') }}">
    @vite('resources/css/app.css')
    <title>Pierre Mauriello - Projects</title>
</head>
<body
    class="min-h-screen flex flex-col space-between items-center bg-black text-slate-50 w-full">
<header
    class="fixed top-0 w-full text-center text-2xl bg-neutral-800 text-slate-100 h-20 shadow-2xl flex flex-row items-center md:h-16">
    <nav class="flex flex-row justify-between items-around w-screen mr-4">
        <span
            class="logo text-left ml-4 font-['Arima'] italic text-2xl md:text-3xl text-orange-700 font-extrabold self-center"><a
                href="/">Pierre Mauriello</a></span>
        <div class="links text-right flex gap-4 items-center text-base text-slate-50">
            <a href="/" class="text-orange-700 font-bold text-lg">Home</a>
            <a href="/projects" class="hover:scale-125 transition duration-500">Projects</a>
            <a href="/contact"
               class="w-36 h-10 flex items-center justify-center border-2 border-orange-700 bg-orange-700 rounded-2xl hover:scale-105 transition hover:bg-inherit text-neutral-800 font-bold hover:text-slate-50 duration-500">Contact
                me!</a>
        </div>
    </nav>
</header>
<main class="flex-1 flex flex-col items-center bg-slate-850 w-4/5 min-h-screen mt-16">
    <h1 class="text-5xl font-extrabold mt-8 text-orange-700">My projects</h1>
</main>
<footer
    class="bg-neutral-800 text-slate-100 w-full p-2 h-max mt-4 pt-6">
    <div class="md:flex md:self-center md:items-center md:justify-center mb-6">
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 self-center">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-orange-700 uppercase">Resources</h2>
                <ul class="text-slate-50">
                    <li class="mb-4">
                        <a href="https://becode.org/" class="hover:underline hover:text-orange-700">BeCode</a>
                    </li>
                    <li>
                        <a href="./" class="hover:underline hover:text-orange-700">Resume</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-orange-700 uppercase">Let's connect</h2>
                <ul class="text-slate-50">
                    <li class="mb-4">
                        <a href="https://github.com/gollumeo" class="hover:underline hover:text-orange-700">Github</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin/in/pierre-mauriello" class="hover:underline hover:text-orange-700">LinkedIn</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-orange-700 uppercase">Legal</h2>
                <ul class="text-slate-50">
                    <li class="mb-4">
                        <a href="/privacy" class="hover:underline hover:text-orange-700">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="/terms" class="hover:underline hover:text-orange-700">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center text-sm text-slate-50 self-center">
        <hr class="block border-slate-50 sm:mx-auto w-full self-center"/>
        <span class="py-4">© 2023 - {{ date('Y') }} Pierre "Golluméo" Mauriello. All Rights Reserved.</span>
    </div>
</footer>
</body>
</html>
