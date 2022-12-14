<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../dist/style.css" rel="stylesheet">
</head>

<body>

    <body class="bg-white h-screen">

        <div class="w-full flex flex-wrap font-Quicksand">

            <!-- Login Section -->
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="w-full md:w-1/2 flex flex-col">

                <div class="flex justify-center items-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                    <a href="#"><img class="w-28" src="./img/Logo.png" alt=""></a>
                </div>

                <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                    <p class="text-center text-3xl font-bold">Welcome back.</p>
                    <p class="text-center text-1xl font-semibold">Hi There, please enter your details.</p>
                    <form class="flex flex-col pt-3 md:pt-8" action="./function/process_login.php" method="POST">
                        <div class="flex flex-col pt-4">
                            <label for="text" class="text-lg font-bold">Username</label>
                            <input type="text" name="username" id="username" placeholder="Enter your username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div class="flex flex-col pt-4">
                            <label for="password" class="text-lg font-bold">Password</label>
                            <input type="password" name="pass" id="username" placeholder="Enter your password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <input type="submit" value="Log In" class="btn btn-primary text-white font-bold text-lg p-2 mt-8">
                    </form>
                    <div class="text-center pt-12 pb-12">
                        <p>Don't have an account? <a href="./register.php" class="link link-accent font-semibold">Register here.</a></p>
                    </div>
                </div>

            </div>

            <!-- Image Section -->
            <div class="w-1/2 shadow-2xl">
                <img class="object-cover w-full h-screen hidden md:block" src="https://images.unsplash.com/photo-1494809610410-160faaed4de0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80">
            </div>
        </div>
        <!-- Icon -->
        <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>

    </body>

</html>