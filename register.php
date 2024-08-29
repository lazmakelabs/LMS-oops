<?php
    require_once "core/init.php";
    if (Input::exists()) {
        if (Token::check(Input::get('token'))) {
            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'Full_name' => array(
                    'required' => true
                ),
                'Phone_number' => array(
                    'required' => true,
                    'length' => true,
                    'unique' => 'users'
                ),
                'Email' => array(
                    'required' => true,
                    'valid_email' => true,
                    'unique' => 'users'
                ),
                'Password' => array(
                    'required' => true
                ),
                'Confirm_Password' => array(
                    'required' => true,
                    'matches' => 'Password'
                ),
                'Image' => array(
                    'ext' => ["jpg" => "image/jpeg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png"],
                    'size' => 1 * 1024 * 1024,
                    'dim' => true
                )
            ));
            if ($validation->passed()) {
                $user = new User();
                try {
                    $user->create(array(
                                'Full_name'=> Input::get('Full_name'),
                                'Phone_number' => Input::get('Phone_number'),
                                'Email' => Input::get('Email'),
                                'Password' => Hash::make(Input::get('Password')),
                                'Image' => Input::get('Image')
                            ));
                } catch(Exception $e) {
                    die($e->getMessage());
                }
                Session::flash('Home', 'You registered successfully!');
                Redirect::to('login.php');
            } else {
                    foreach ($validation->errors() as $error) {
                        $err = str_replace('_', ' ', $error);
                        echo "<p class='text-red-400'>{$err}</p><br>";
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
    <link rel="stylesheet" href="./register.css">
    <title>Signup Page</title>
    <!-- TailwindCSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Index CSS -->
    <link href="./index.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto">
        <!-- Nav bar -->
        <nav class="flex justify-between p-6 items-center">
            <img src="../assets/makelablogo.png" class="w-1/2 md:w-1/6 h-auto" alt="Make Labs Logo">
            <!-- Nav bar small screen button -->
            <!-- Small screen -->
            <div class="block md:hidden">
                <svg id="menu-btn" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                </svg>
            </div>
            <!-- Nav big screen -->
            <div class="flex hidden md:block">
                <ul class="flex space-x-5">
                    <li><a href="../index.html" class="hover:underline">Home</a></li>
                    <li><a href="../Aboutus.html" class="hover:underline">About us</a></li>
                    <li><a href="../contact.html" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <div class="hidden md:flex md:space-x-5">
                <a href="./register.php" class="bg-blue text-white p-3 rounded-lg">Register</a>
                <a href="./login.php" class="my-auto">Log In</a>
            </div>
        </nav>
    </div>

    <!-- Small screen menu -->
    <div id="menu" class="hidden md:hidden text-center">
        <ul class="space-y-2 p-4 bg-gray-100">
            <li><a href="../" class="block text-black hover:underline">Home</a></li>
            <li><a href="../Aboutus.html" class="block text-black hover:underline">About us</a></li>
            <li><a href="../contact.html" class="block text-black hover:underline">Contact</a></li>
            <li><a href="./register.php" class="block text-black hover:underline">Register</a></li>
            <li><a href="./login.php" class="block text-black hover:underline">Log In</a></li>
        </ul>
    </div>

    <!-- Register -->
    <div class="login-container mt-10 md:mt-7">
        <h2 class="text-xl mb-2 font-semibold">Create Account</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Name -->
            <div class="input-container">
                <svg class="input-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z">
                    </path>
                </svg>
                <input type="text" id="fullname" placeholder="Full Name" name="Full name" required>
            </div>
            <!-- Email -->
            <div class="input-container">
                <svg class="input-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75">
                    </path>
                </svg>
                <input type="email" id="email" placeholder="Email" name="Email" required>
            </div>
            <!-- Phone -->
            <div class="input-container">
                <svg class="input-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3">
                    </path>
                </svg>
                <input type="tel" id="phone" placeholder="Phone Number" name="Phone number" required pattern="\d{10}"
                    title="Please enter a 10-digit phone number" oninput="limitPhoneNumber(this)">
                <!-- <p id="phone-error" class="text-red-500 mt-1 hidden">Please enter a valid 10-digit phone number.</p> -->
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
                <button type="button" id="toggle-password"
                    class="absolute right-0 top-0 mt-3 mr-3 text-gray-500">Show</button>
            </div>
            <!-- Confirm Password -->
            <div class="input-container relative">
                <svg class="input-icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z">
                    </path>
                </svg>
                <input type="password" id="confirm-password" placeholder="Confirm_Password" name="Confirm Password" required>
                <button type="button" id="toggle-confirm-password"
                    class="absolute right-0 top-0 mt-3 mr-3 text-gray-500">Show</button>
            </div>
            <!-- Image -->
            <p class="text-gray-500 pt-1 text-sm">Image must be smaller than 1MB and 600x600 pixels
                Optional
            </p>
            <div class="input-container">
                <input type="file" id="upload-btn" name="Image" class="upload-input" accept=".jpg, .jpeg, .gif, .png">
            </div>
            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">

            <div class="input-btn">
                <input type="submit" value="Sign up">
            </div>
            <div class="register">
                <p>Already have an account?<a href="../login/login.php"> Sign in </a></p>
            </div>
        </form>
        <!-- PHP file -->
    
    </div>
    <footer class="fixed bottom-0 w-full py-5 text-center bg-gray-800 text-white text-sm mt-10">
        &copy; copyright@<a href="https://makelabs.co.in/" class="text-sky">makelabs</a>
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

        document.getElementById('toggle-confirm-password').addEventListener('click', function () {
            const confirmPasswordField = document.getElementById('confirm-password');
            const type = confirmPasswordField.type === 'password' ? 'text' : 'password';
            confirmPasswordField.type = type;
            this.textContent = type === 'password' ? 'Show' : 'Hide';
        });


        function limitPhoneNumber(input) {
            // Remove non-digit characters
            const digits = input.value.replace(/\D/g, '');

            // Limit to 10 digits
            if (digits.length > 10) {
                input.value = digits.slice(0, 10);
            } else {
                input.value = digits;
            }

            // Display error message if more than 10 digits
            const errorElement = document.getElementById('phone-error');
            if (input.value.length === 10) {
                errorElement.classList.add('hidden');
            } else {
                errorElement.classList.remove('hidden');
            }
        }
    </script>
</body>

</html>