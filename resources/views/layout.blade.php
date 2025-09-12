<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LaraGigs | Find Laravel Jobs & Projects</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
          crossorigin="anonymous" 
          referrerpolicy="no-referrer">
    <script src="https://cdn.tailwindcss.com/3.4.0"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'laravel': '#ef3b2d',
                    }
                }
            }
        }
    </script>
</head>
<body class="mb-48">
    <!-- Navigation -->
    <nav class="flex justify-between items-center mb-4 px-6 py-4">
        <a href="index.html" class="flex items-center">
            <img class="w-24 h-auto" src="{{asset('images/Laravel-Logo.Wine.svg')}}" alt="LaraGigs Logo" class="logo">
        </a>
        
        <div class="flex space-x-6 mr-6 text-lg">
            <a href="register.html" class="hover:text-laravel transition-colors duration-200">
                <i class="fa-solid fa-user-plus mr-1"></i> Register
            </a>
            <a href="login.html" class="hover:text-laravel transition-colors duration-200">
                <i class="fa-solid fa-arrow-right-to-bracket mr-1"></i> Login
            </a>
        </div>
    </nav>

    <main>
    @yield('content')
    </main>

 <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 px-6">
        
        <!-- Copyright -->
        <div class="ml-2">
            <p class="text-sm">Copyright &copy; 2022, All Rights Reserved</p>
        </div>

        <!-- Post Job Button -->
        <div class="ml-auto">
            <a href="create.html" 
               class="absolute top-1/3 right-10 bg-black text-white py-2 px-5 rounded-lg hover:bg-gray-800 transition-colors duration-200 shadow-lg">
                Post Job
            </a>
        </div>
        
    </footer>

</body>
</html>