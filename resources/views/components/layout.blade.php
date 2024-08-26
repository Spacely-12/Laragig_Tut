<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                        navy: "#376abc",
                        deepNavy: "#051024",
                        lightNavy: "#162a4a",
                        skyBlue: "#82a4d9",
                        lightSkyBlue: "#b1c3de",
                    },
                },
            },
        };
    </script>
    <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body class="mb-48 text-white">
    <x-flash-message class="bg-red"/>
    <nav class="flex justify-between items-center mb-4 px-6 py-4 bg-lightNavy shadow-md">
        <a href="/">
            <img class="w-24" src="{{ asset('images/logo.png') }}" alt="LaraGigs Logo" class="logo" />
        </a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="register.html" class="hover:text-skyBlue"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="login.html" class="hover:text-skyBlue"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
        </ul>
    </nav>

    <main>
        {{-- view output --}}
        {{ $slot }}
    </main>

    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-lightNavy text-white h-24 mt-24 md:justify-center shadow-md">
        <p class="ml-2">Copyright &copy; 2024, All Rights Reserved</p>
        <a href="listings/create"
            class="absolute top-1/3 right-10 bg-skyBlue text-black py-2 px-5 rounded-xl hover:opacity-90 shadow-sm transition-opacity duration-200">Post
            Job</a>
    </footer>
   

</body>

</html>
