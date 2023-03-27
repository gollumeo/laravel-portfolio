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
    <title>Pierre Mauriello - Register</title>
    <style>

    </style>
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
<main class="flex-1 flex flex-col items-center bg-slate-850 w-4/5 h-screen mt-20">
    <h1 class="text-5xl text-orange-700 font-extrabold mt-4">Register</h1>


    <form action="/users/create" method="POST" class="flex flex-col w-1/2 shadow shadow-slate-800 rounded-xl p-4 m-auto">
        @csrf
        <div class="relative w-full mb-6 group">
            <input type="text" name="name" id="name" class=" block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-white border-gray-600 focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer invalid:text-rose-700 invalid:ring-rose-700 empty:text-white" placeholder=" " required />
            <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 text-slate-50 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-600 peer-focus:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 invalid:text-rose-700 invalid:ring-rose-700">Name</label>
            @error('name')
            <div class="text-rose-700 mt-2 mb-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="relative w-full mb-6 group">
            <input type="email" name="email" id="email" class=" block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-white border-gray-600 focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer invalid:text-rose-700 invalid:ring-rose-700 empty:text-white" placeholder=" " required />
            <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 text-slate-50 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-600 peer-focus:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 invalid:text-rose-700 invalid:ring-rose-700">Email address</label>
            @error('email')
            <div class="text-rose-700 mt-4 mb-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="relative w-full mb-6 group">
            <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-white border-gray-600 focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer invalid:text-rose-700 invalid:ring-rose-700 empty:text-white" placeholder=" " required />
            <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 text-slate-50 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-600 peer-focus:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 invalid:text-rose-700 invalid:ring-rose-700">Password</label>
        </div>
        <div class="relative w-full mb-6 group">
            <input type="password" name="repeat_password" id="repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-white border-gray-600 focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer invalid:text-rose-700 invalid:ring-rose-700 empty:text-white" placeholder=" " required />
            <label for="repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 text-slate-50 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-orange-600 peer-focus:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 invalid:text-rose-700 invalid:ring-rose-700">Confirm password</label>
            @error('repeat_password')
            <div class="text-rose-700 mt-2 mb-2">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-orange-600 hover:bg-orange-700 focus:ring-orange-800 transition" name="Submit" value="Submit">
    </form>

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
                        <a href="./Resume_Pierre_Mauriello_Dev_Backend_Junior.pdf" class="hover:underline hover:text-orange-700">Resume</a>
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
