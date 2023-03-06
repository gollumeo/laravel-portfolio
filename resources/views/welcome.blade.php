<!doctype html>
<html lang="en" class="min-h-screen">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100;200;300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/717eb27cb3.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>Pierre Mauriello</title>
</head>
<body
    class="min-h-screen flex flex-col space-between items-center bg-black text-slate-50 w-full">
<header class="w-full text-center text-2xl bg-neutral-900 text-slate-100 h-16 shadow-2xl flex flex-row items-center">
    <nav class="flex flex-row justify-between items-around w-screen mr-4">
        <span
            class="logo text-left ml-4 font-['Arima'] italic text-3xl text-orange-600 font-extrabold">Pierre Mauriello</span>
        <div class="links text-right flex gap-4 items-center text-base">
            <a href="#">Home</a>
            <a href="#">Projects</a>
            <a href="#">Contact</a>
        </div>
    </nav>
</header>

<main class="flex-1 flex flex-col items-center bg-slate-850 w-4/5 h-screen">
    <section class="mt-4 rounded-2xl shadow-gray-900 flex flex-col flex-wrap">
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
    <section class="mt-4 rounded-2xl shadow-gray-900 flex flex-col flex-wrap h-full w-full">
        <article class="text-justify p-2">
            <h2 class="text-3xl font-black">What can I do?</h2>
            <h3 class="mt-6 text-xl font-semibold text-orange-600">Skills</h3>
            <p class="my-6 text-base xl:text-lg mb-4">I have a strong foundation in the following languages and
                frameworks:</p>
            <ul class="w-full mx-auto justify-center md:grid md:grid-cols-6 grid grid-cols-2 gap-6 text-center mt-4">
                <div class="flex flex-col">
                    <i class="fa-brands fa-html5 fa-4x text-orange-700 py-2"></i>
                    <p>HTML 5</p>
                </div>
                <div>
                    <i class="fa-brands fa-css3-alt fa-4x"></i>
                    <p></p>
                </div>
                <div>
                    <i class="fa-brands fa-square-js fa-4x"></i>
                    <p></p>
                </div>
                <div>
                    <i class="fa-brands fa-php fa-4x"></i>
                    <p></p>
                </div>
                <div>
                    <i class="fa-brands fa-laravel fa-4x"></i>
                    <p></p>
                </div>
                <div>
                    <i class="fa-solid fa-database fa-4x"></i>
                    <p></p>
                </div>
                <div>
                    <i class="fa-brands fa-git-alt fa-4x"></i>
                    <p></p>
                </div>
                <!--<div>
                <li class="my-2 text-base xl:text-lg">TailwindCSS</li>
                </div>-->
            </ul>

        </article>

    </section>
</main>
</main>

<footer
    class="bg-neutral-900 text-slate-100 text-sm text-italic shadow-2xl flex items-center justify-center text-center font-['Montserrat_Alternates'] h-16 w-full">

</footer>

</body>
</html>
