<?php
require_once 'core/init.php';

if(Session::exists('Home')){
    // echo '<p>' . Session::flash('Home') . '</p>';
}


if(Input::exists()){
    if (Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'Email' => array(
                'required' => true 
            ),
            'Password' => array(
                'required' => true
            )
        ));
        if ($validation -> passed()) {
            $user = new User();
            $login = $user->login(Input::get('Email'), Input::get('Password'));

            if($login) {
                echo '<p>Success</p>';
            } else {
                echo '<p>Sorry, logging in failed.</p>';
            }
        } else {
            foreach($validation->errors() as $errors){
                echo "<p class = 'text-red-400'>".$errors."</p>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
    <!--tailwindcss-->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!--index css-->
    <link href="./index.css" rel="stylesheet">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>

<body>

    <div class="container mx-auto">
        <!--nav bar-->
        <nav class="flex justify-between p-6 items-center">
            <img src="./assets/makelablogo.png" class="w-1/2 md:w-1/6 h-auto" alt="Make Labs Logo">
            <!--nav bar small screen button-->
            <!--small screen-->
            <div class="block md:hidden">

                <svg id="menu-btn" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                </svg>

            </div>
            <!--nav bar big screen-->
            <div class="flex hidden md:block">
                <ul class="flex space-x-5">
                    <li><a href="../" class="hover:underline">Home</a></li>
                    <li><a href="../Aboutus.html" class="hover:underline">About us</a></li>
                    <li><a href="../contact.html" class="hover:underline">Contact</a></li>
                </ul>
            </div>

            <div class="hidden md:flex md:space-x-5">
                <a href="./register.php" class="bg-blue text-white p-3 rounded-lg">Register</a>
                <a href="./login.php" class="my-auto">Log In</a>
            </div>

        </nav>
        <!-- Small screen menu -->
        <div id="menu" class="hidden md:hidden text-center">
            <ul class="space-y-2 p-4 bg-gray-100">
                <li><a href="../" class="block text-black hover:underline">Home</a></li>
                <li><a href="../Aboutus.html" class="block text-black hover:underline">About us</a></li>
                <li><a href="../contact.html" class="block text-black hover:underline">Contact</a></li>
                <li><a href="../register/register.php" class="block text-black hover:underline">Register</a></li>
                <li><a href="./login.php" class="block text-black hover:underline">Log In</a></li>
            </ul>
        </div>
    </div>


    <div class="login-container">
        <h2 class="text-2xl">Login</h2>
        <p class="my-2">Please sign in to continue.</p>
        <form action="" method="post">
            <div class="input-container">
                <svg class="input-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75">
                    </path>
                </svg>
                <input type="text" id="username" placeholder="Email" name="Email" required>
            </div>
            <!-- Password -->
            <div class="input-container relative">
                <svg class="input-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z">
                    </path>
                </svg>
                <input type="password" id="password" placeholder="Password" name="Password" required>
                <button type="button" id="toggle-password" class="absolute right-0 top-0 mt-3 mr-3 text-gray-500">Show</button>
            </div>
            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            <div class="input-btn">

                <input type="submit" value="Login">
            </div>
            <div class="register">
                <p>Don't have an account?<a href="../register/register.php">Sign up</a></p>
            </div>
        </form>
    </div>
    <footer class="fixed bottom-0 w-full py-5 text-center bg-gray-800 text-white text-sm  mt-10">
        &copy; copyright@<a href="https://makelabs.co.in/ " class="text-sky">makelabs</a>
    </footer>
    <!-- JavaScript for toggle functionality -->
    <script>
        document.getElementById('menu-btn').addEventListener('click', function () {
            document.getElementById('menu').classList.toggle('hidden');
        });
        document.getElementById('toggle-password').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            this.textContent = type === 'password' ? 'Show' : 'Hide';
        });

    </script>
</body>

</html>