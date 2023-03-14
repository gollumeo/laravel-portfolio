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
    <title>Pierre Mauriello</title>
</head>
<body
    class="min-h-screen flex flex-col space-between items-center bg-black text-slate-50 w-full">
<header
    class="fixed top-0 w-full text-center text-2xl bg-neutral-900 text-slate-100 h-20 shadow-2xl flex flex-row items-center md:h-16">
    <nav class="flex flex-row justify-between items-around w-screen mr-4">
        <span
            class="logo text-left ml-4 font-['Arima'] italic text-2xl md:text-3xl text-orange-700 font-extrabold self-center"><a
                href="/">Pierre Mauriello</a></span>
        <div class="links text-right flex gap-4 items-center text-base text-slate-50">
            <a href="/" class="text-orange-700 font-bold text-lg">Home</a>
            <a href="/projects" class="hover:scale-125 transition duration-500">Projects</a>
            <a href="/contact"
               class="w-36 h-10 flex items-center justify-center border-2 border-orange-700 bg-orange-700 rounded-2xl hover:scale-105 transition hover:bg-inherit text-neutral-900 font-bold hover:text-slate-50 duration-500">Contact
                me!</a>
        </div>
    </nav>
</header>
<main class="flex-1 flex flex-col items-center bg-slate-850 w-4/5 h-screen">
    <section class="mt-4 flex flex-col flex-wrap">
        <article class="text-justify p-2">
            <div class="photo absolute">
                <img src="" alt="">
                <img src="" alt="">
            </div>
            <h2 class="text-3xl font-black">Who am I?</h2>
            <h3 class="mt-6 text-xl font-semibold text-orange-600">Background</h3>
            <p class="my-6 text-base xl:text-lg">I am a highly motivated, self-taught programmer with a passion for
                technology that
                was sparked when I was just 14 years old. Over the past <span class="text-orange-500 font-semibold">12 years</span>,
                I have continuously honed my skills through online resources and personal projects.</p>

            <p class="my-6 text-base xl:text-lg">Prior to my foray into the tech industry, I spent two years at
                university studying French law and
                improving my English language skills. I then gained valuable experience in the transport, logistics, and
                international trades field, holding several roles including road operator, customer service
                representative, freight forwarder, air freight forwarder, and project manager.</p>
        </article>
        <article class="text-justify p-2">
            <h3 class="mt-4 text-xl font-semibold text-orange-600">Current work/projects</h3>
            <p class="my-6 text-base xl:text-lg">I am currently pursuing my dream of becoming a backend developer at
                <span class="text-orange-500 font-semibold">BeCode</span>, a nonprofit organization that is dedicated
                to
                helping individuals start a career in web development. This intensive bootcamp is providing me with the
                hands-on training I need to reach my goals, and I am eagerly soaking up every bit of knowledge and
                experience.</p>
        </article>
        <article class="text-justify p-2">
            <h3 class="mt-4 text-xl font-semibold text-orange-600">Career goals</h3>
            <p class="my-6 text-base xl:text-lg">Upon completing my studies at BeCode on <span
                    class="text-orange-500 font-semibold">May 29th</span>, I am eager to join the tech industry as a
                <span class="text-orange-500 font-semibold">backend</span> developer, with a focus on <span
                    class="text-orange-500 font-semibold">PHP and Laravel</span>.
                I am confident in my abilities and eager to bring my diverse background, passion for programming, and
                drive
                to succeed to a new role in the industry.</p>
        </article>
    </section>
    <hr class="bg-orange-600 w-1/2 h-px border-0 m-auto">
    <section class="mt-4 rounded-2xl shadow-gray-900 flex flex-col flex-wrap h-full w-full mb-4">
        <article class="text-justify p-2">
            <h2 class="text-3xl font-black">What can I do?</h2>
            <p class="my-6 text-base xl:text-lg mb-4">I have a strong foundation in the following technologies:</p>
            <div class="w-full mx-auto justify-center md:grid md:grid-cols-6 grid grid-cols-2 gap-6 text-center mt-4">
                <div
                    class="flex flex-col text-blue-500 hover:scale-110 transition duration-700 shadow-sm shadow-blue-400 rounded-lg">
                    <x-si-css3 class="h-20 md:h-16 lg:h-20 py-2"/>
                    <p class="text-lg font-semibold">CSS 3</p>
                </div>
                <div
                    class="flex flex-col text-orange-600 hover:scale-110 transition duration-700 shadow-sm shadow-orange-500 rounded-lg">
                    <x-si-html5 class="h-20 md:h-16 lg:h-20 py-2"/>
                    <p class="md:text-xs lg:text-lg text-lg font-semibold">HTML 5</p>
                </div>
                <div
                    class="flex flex-col text-yellow-600 hover:scale-110 transition duration-700 shadow-sm shadow-yellow-500 rounded-lg">
                    <x-si-javascript class="h-20 md:h-16 lg:h-20 py-2"/>
                    <p class="md:text-xs lg:text-lg text-lg font-semibold">JavaScript</p>
                </div>
                <div
                    class="flex flex-col text-indigo-700 hover:scale-110 transition duration-700 shadow-sm shadow-indigo-600 rounded-lg">
                    <x-fab-php class="h-20 md:h-16 lg:h-20 py-2"/>
                    <p class="md:text-xs lg:text-lg text-lg font-semibold">PHP</p>
                </div>
                <div
                    class="flex flex-col text-red-700 hover:scale-110 transition duration-700 shadow-sm shadow-red-600 rounded-lg">
                    <x-fileicon-laravel class="h-20 md:h-16 lg:h-20 py-2"/>
                    <p class="md:text-xs lg:text-lg text-lg font-semibold">Laravel</p>
                </div>
                <div
                    class="flex flex-col text-blue-700 hover:scale-110 transition duration-700 shadow-sm shadow-blue-600 rounded-lg">
                    <x-fontisto-mysql class="h-20 md:h-16 lg:h-20 py-2"/>
                    <p class="md:text-xs lg:text-lg text-lg font-semibold">MySQL</p>
                </div>
                <div
                    class="flex flex-col text-sky-400 hover:scale-110 transition duration-700 shadow-sm shadow-sky-300 rounded-lg">
                    <x-fileicon-tailwind class="h-20 md:h-16 lg:h-20 py-2"/>
                    <p class="md:text-xs lg:text-lg text-lg font-semibold">Tailwind CSS</p>
                </div>
                <div
                    class="flex flex-col text-rose-900 hover:scale-110 transition duration-700 shadow-sm shadow-rose-800 rounded-lg">
                    <x-si-git class="h-20 md:h-16 lg:h-20 py-2"/>
                    <p class="md:text-xs lg:text-lg text-lg font-semibold">Git</p>
                </div>
                <div
                    class="flex flex-col text-gray-300 hover:scale-110 transition duration-700 shadow-sm shadow-gray-200 rounded-lg">
                    <x-fab-github class="h-20 md:h-16 lg:h-20 py-2"/>
                    <p class="md:text-xs lg:text-lg text-lg font-semibold">GitHub</p>
                </div>
                <div
                    class="flex flex-col text-purple-600 hover:scale-110 transition duration-700 shadow-sm shadow-purple-600 rounded-lg">
                    <x-si-phpstorm class="h-20 md:h-16 lg:h-20 py-2"/>
                    <p class="md:text-xs lg:text-lg text-lg font-semibold">PHPStorm</p>
                </div>
                <div
                    class="flex flex-col text-slate-400 hover:scale-110 transition duration-700 shadow-sm shadow-slate-300 rounded-lg">
                    <x-codicon-terminal-bash class="h-20 md:h-16 lg:h-20 py-2"/>
                    <p class="md:text-xs lg:text-lg text-lg font-semibold">Bash</p>
                </div>
                <div
                    class="flex flex-col text-green-700 hover:scale-110 transition duration-700 shadow-sm shadow-green-600 rounded-lg">
                    <x-si-datagrip class="h-20 md:h-16 lg:h-20 py-2"/>
                    <p class="md:text-xs lg:text-lg text-lg font-semibold">Data Grip</p>
                </div>
            </div>
        </article>
        <div class="flex flex-row mt-8 items-center justify-center">
            <h3 class="text-2xl mr-4 font-semibold">Convinced? </h3>
            <div
                class="flex items-center justify-center text-2xl flex items-center justify-center w-40 h-8 border-2 border-orange-800 bg-orange-700 rounded-2xl p-4 hover:cursor-pointer hover:bg-inherit text-black font-bold hover:text-slate-50 duration-500">
                <a href="mailto:hire-me@pierre-mauriello.be">Hire me!</a></div>
        </div>
    </section>
</main>
<footer
    class="bg-neutral-900 text-slate-100 w-full p-2 h-max mt-4">
    <div class="md:flex md:self-center md:items-center md:justify-center mb-6">
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 self-center">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-orange-700 uppercase">Resources</h2>
                <ul class="text-slate-50">
                    <li class="mb-4">
                        <a href="https://becode.org/" class="hover:underline hover:text-orange-700">BeCode</a>
                    </li>
                    <li>
                        <a href="#TODO" class="hover:underline hover:text-orange-700">Resume</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-orange-700 uppercase dark:text-white">Let's connect</h2>
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
                        <a href="#" class="hover:underline hover:text-orange-700">Terms &amp; Conditions</a>
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
