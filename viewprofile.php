<?php
require_once "Includes/config_session.inc.php";
if (isset($_SESSION['success'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Profile</title>
        <!-- Tailwind CSS -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="./index.css" rel="stylesheet">
        <style>
            @keyframes colorChange {
                0% {
                    color: #4A90E2;
                }

                25% {
                    color: #50E3C2;
                }

                50% {
                    color: #B9FBC0;
                }

                75% {
                    color: #F5A623;
                }

                100% {
                    color: #4A90E2;
                }
            }

            .animate-color {
                animation: colorChange 5s infinite;
            }
        </style>
    </head>
    <?php
    // require_once "Includes/dbh.inc.php";
    // require_once "login/Includes/login_contr.inc.php";
    // require_once "login/Includes/login_model.inc.php";
    // $Email = $_SESSION['email'];
    // $result = get_user($pdo, $Email);
    // $phone_no = $result["Phoneno"];
    // $Fullname = $result["Full_name"];
    // $img_result = get_image($pdo, $Email);
    // $base64 = $img_result["image"];
    // $filetype = $img_result["filetype"];
    ?>

    <body class="bg-blue">
        <div class="min-h-screen flex items-center justify-center m-5">
            <div class="profile-container bg-white p-6 rounded-lg shadow-md max-w-md w-full">
                <a href="./Courses.php" class="mb-4 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                    </svg>
                </a>
                <h2 class="text-2xl font-bold text-center mb-6">View Profile</h2>
                <div class="flex flex-col items-center mb-6">
                    <div class="md:mx-7 relative z-40" id="profile-btn">
                        <?php if ($base64 == "null") {
                            ?>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-32 h-32 rounded-full object-cover mb-4">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        <?php } else {
                            ?>
                            <?php echo "<img src='data:" . $filetype . ";base64," . $base64 . "'class='w-32 h-32 rounded-full object-cover mb-4' alt='Profile'>";
                            ?>
                        <?php }
                        ?>
                    </div>
                    <p class="text-lg font-semibold animate-color"><?php echo $Fullname ?></p>
                    <p class="text-sm text-gray-600"><?php echo $phone_no ?></p>
                    <p class="text-sm text-gray-600"><?php echo $Email ?></p>
                </div>
                <div class="text-center">
                    <a href="./update/update.php"
                        class="inline-block px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Edit Profile
                    </a>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php } else {
    header("Location: login/login.php");
} ?>