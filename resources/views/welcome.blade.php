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
    class="w-full text-center text-2xl bg-neutral-900 text-slate-100 h-20 shadow-2xl flex flex-row items-center md:h-16">
    <nav class="flex flex-row justify-between items-around w-screen mr-4">
        <span
            class="logo text-left ml-4 font-['Arima'] italic text-2xl md:text-3xl text-orange-700 font-extrabold self-center">Pierre Mauriello</span>
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
        <div class="flex flex-row mt-8 items-center">
            <h3 class="text-2xl mr-4 font-semibold">Convinced? </h3>
            <div
                class="flex items-center justify-center text-2xl flex items-center justify-center w-40 h-12 border-2 border-orange-800 bg-orange-700 rounded-2xl p-4 hover:cursor-pointer hover:bg-inherit text-neutral-900 font-bold hover:text-slate-50 duration-500">
                <a href="mailto:hire-me@pierre-mauriello.be">Hire me!</a></div>
        </div>
    </section>
</main>

<footer
    class="bg-neutral-900 text-slate-100 w-full p-2">
    <div class="md:flex md:self-center md:items-center md:justify-center">
        <div class="mb-6 md:mb-0 flex flex-row self-center">

{{--            <img src="{{ asset('assets/img/gollumeo.png') }}" class="h-8 mr-3 rounded-full" alt="Golluméo Logo"/>--}}
{{--            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Pierre "Golluméo" Mauriello</span>--}}

        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 self-center">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-orange-700 uppercase">Resources</h2>
                <ul class="text-slate-50">
                    <li class="mb-4">
                        <a href="https://becode.org/" class="hover:underline">BeCode</a>
                    </li>
                    <li>
                        <a href="#TODO" class="hover:underline">Resume</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-orange-700 uppercase dark:text-white">Let's connect</h2>
                <ul class="text-slate-50">
                    <li class="mb-4">
                        <a href="https://github.com/gollumeo" class="hover:underline ">Github</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin/in/pierre-mauriello" class="hover:underline">LinkedIn</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-orange-700 uppercase">Legal</h2>
                <ul class="text-slate-50">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6 border-slate-50 sm:mx-auto dark:border-gray-700 lg:my-8"/>
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 - {{ date('Y') }} Pierre "Golluméo" Mauriello. All Rights Reserved.
        </span>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="#" class="text-slate-50 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                          clip-rule="evenodd"/>
                </svg>
                <span class="sr-only">Facebook page</span>
            </a>
            <a href="#" class="text-slate-50 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                          clip-rule="evenodd"/>
                </svg>
                <span class="sr-only">Instagram page</span>
            </a>
            <a href="#" class="text-slate-50 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                </svg>
                <span class="sr-only">Twitter page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                          clip-rule="evenodd"/>
                </svg>
                <span class="sr-only">GitHub account</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                          clip-rule="evenodd"/>
                </svg>
                <span class="sr-only">Dribbbel account</span>
            </a>
        </div>
    </div>


</footer>


</body>
</html>
