<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Academy - Learn and Explore with us ...</title>
        <!-- Link to Favicon -->
        <link rel="icon" href="./assets/favicon.png" type="image/png">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <!-- Index CSS -->
    <link href="./index.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    @keyframes fade-in {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes scroll {
        to {
            transform: translateX(-100%);
        }
    }

    .scroller {
        max-width: 100%;
        overflow: hidden;
        position: relative;
    }

    .scroller__inner {
        display: flex;
        align-items: center;
        width: max-content;
        padding-block: 1rem;
    }



    .scroller[data-animated="true"] {
        -webkit-mask: linear-gradient(90deg,
                transparent,
                white 20%,
                white 80%,
                transparent);
        mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
    }

    .scroller[data-animated="true"] .scroller__inner {
        animation: scroll var(--_animation-duration, 40s) var(--_animation-direction, forwards) linear infinite;
        flex-wrap: nowrap;
    }


    .scroller[data-speed="fast"] {
        --_animation-duration: 100s;
    }



    .logo-div {
        display: inline-flex;
        align-items: center;
        animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;
        padding: 0 10px;
    }

    .logo-div img {
        height: 60px;
        /* Adjust height for smaller screens */
        width: auto;
        /* Maintain aspect ratio */
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .logo-div img {
            height: 50px;
            /* Further adjust height for mobile screens */
        }
    }
</style>

<body>
    <div class="container mx-auto">
        <!-- Navigation Bar -->
        <nav class="flex justify-between p-6 items-center">
            <img src="./assets/makelablogo.png" class="w-1/2 md:w-1/6 h-auto" alt="Make Labs Logo">
            <!-- Small screen button -->
            <div class="block md:hidden">

                <svg id="menu-btn" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                </svg>

            </div>
            <!-- Navigation links -->
            <div class="hidden md:flex">
                <ul class="flex space-x-5">
                    <li><a href="./" class="hover:underline">Home</a></li>
                    <li><a href="./Aboutus.html" class="hover:underline">About us</a></li>
                    <li><a href="./contact.html" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <div class="hidden md:flex md:space-x-5">
                <a href="./register.php" class="bg-blue text-white p-3 rounded-lg">Register</a>
                <a href="./login/login.php" class="my-auto">Log In</a>
            </div>
        </nav>
        <!-- Small screen menu -->
        <div id="menu" class="hidden md:hidden text-center mb-4">
            <ul class="space-y-2 p-4 bg-gray-100">
                <li><a href="./" class="block text-black hover:underline">Home</a></li>
                <li><a href="./Aboutus.html" class="block text-black hover:underline">About us</a></li>
                <li><a href="./contact.html" class="block text-black hover:underline">Contact</a></li>
                <li><a href="./register/register.php" class="block text-black hover:underline">Register</a></li>
                <li><a href="./login/login.php" class="block text-black hover:underline">Log In</a></li>
            </ul>
        </div>

        <!-- Centering the text -->
        <div class="text-black text-md md:text-lg md:text-5xl font-bold md:space-y-3 text-center md:p-6 md:mt-6">
            <p>Enhance your skills with our courses.</p>
            <p>Join us and start learning today!</p>
        </div>

        <!-- Action buttons -->
        <div class="text-sm md:text-xl mt-6 space-x-2 flex justify-center">
            <div>
                <a class="p-3 rounded-lg bg-blue text-white" href="./login/login.php">Start learning</a>
            </div>
        </div>

        <div class="md:pt-10 px-3 pb-2 mt-6 md:my-10">
            <h2 class="text-lg md:text-2xl font-bold text-center mb-4">Available Courses</h2>
            <!-- scrolling  -->


            <div class="scroller my-5" data-direction="right" data-speed="slow">
                <div class="scroller__inner gap-4 md:gap-16">
                    <div class="logo-div">
                        <img alt="#" src="./assets/dhtml.png">
                    </div>
                    <div class="logo-div">
                        <img alt="#" src="./assets/dcss.png">
                    </div>
                    <div class="logo-div">
                        <img alt="#" src="./assets/djs.png">
                    </div>
                    <div class="logo-div">
                        <img alt="#" src="./assets/dpython.png">
                    </div>
                    <div class="logo-div">
                        <img alt="#" src="./assets/dphp.png">
                    </div>
                    <div class="logo-div">
                        <img alt="#" src="./assets/dsql.png">
                    </div>
                    <div class="logo-div">
                        <img alt="#" src="./assets/dai.png">
                    </div>
                    <div class="logo-div">
                        <img alt="#" src="./assets/dmi.png">
                    </div>
                    <div class="logo-div">
                        <img alt="#" src="./assets/duiux.png">
                    </div>
                    <div class="logo-div">
                        <img alt="#" src="./assets/dar.png">
                    </div>
                    <div class="logo-div">
                        <img alt="#" src="./assets/dvr.png">
                    </div>
                    <div class="logo-div">
                        <img alt="#" src="./assets/diot.png">
                    </div>
                    <div class="logo-div">
                        <img alt="#" src="./assets/dc.png">
                    </div>
                    <div class="logo-div">
                        <img alt="#" src="./assets/dc++.png">
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-blue p-5 md:m-8 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <a href="./python-demo/index.php">
                        <img src="./assets/pythonlogo.png" alt="phyton Course"
                            class="w-full h-32 object-cover rounded-t-lg mb-3">
                        <h3 class="text-md md:text-xl font-semibold">Python Course</h3>
                        <p class="text-sm md:text-md text-gray-700">Learn Python for web development.</p>
                    </a>
                </div>
                <div class="bg-blue p-5 md:m-8 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <a href="./Html-demo/index.php">
                        <img src="./assets/htmllogo.png" alt="HTML Course"
                            class="w-full h-32 object-cover rounded-t-lg mb-3">
                        <h3 class="text-md md:text-xl font-semibold">HTML Course</h3>
                        <p class="text-sm md:text-md text-gray-700">Learn the basics of HTML.</p>
                    </a>
                </div>
                <div class="bg-blue p-5 md:m-8 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <a href="./CSS-demo/index.php">
                        <img src="./assets/csslogo.png" alt="CSS Course"
                            class="w-full h-32 object-cover rounded-t-lg mb-3">
                        <h3 class="text-md md:text-xl font-semibold">CSS Course</h3>
                        <p class="text-sm md:text-md text-gray-700">Master the art of styling.</p>
                    </a>
                </div>
                <div class="bg-blue p-5 md:m-8 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <a href="./JS-demo/index.php">
                        <img src="./assets/jslogo.png" alt="JavaScript Course"
                            class="w-full h-32 object-cover rounded-t-lg mb-3">
                        <h3 class="text-md md:text-xl font-semibold">JavaScript Course</h3>
                        <p class="text-sm md:text-md text-gray-700">Get started with programming.</p>
                    </a>
                </div>
                <div class="bg-blue p-5 md:m-8 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <a href="./php-demo/index.php">
                        <img src="./assets/phplogo.png" alt="php Course"
                            class="w-full h-32 object-cover rounded-t-lg mb-3">
                        <h3 class="text-md md:text-xl font-semibold">PHP Course</h3>
                        <p class="text-sm md:text-md text-gray-700">Dive into server-side programming</p>
                    </a>
                </div>
                <div class="bg-blue p-5 md:m-8 rounded-lg shadow-md transition-transform transform hover:scale-105">
                    <a href="./sql-demo/index.php">
                        <img src="./assets/sqllogo.png" alt="sql Course"
                            class="w-full h-32 object-cover rounded-t-lg mb-3">
                        <h3 class="text-md md:text-xl font-semibold">SQL Course</h3>
                        <p class="text-sm md:text-md text-gray-700">You will always need that query again</p>
                    </a>
                </div>

            </div>
        </div>



        <div class="mb-10">
            <p class="font-semibold my-4 text-center md:text-3xl">To unlock all courses</p>
            <div class="flex justify-center">
                <div
                    class="flex justify-between bg-blue text-white py-2 px-4 rounded hover:bg-sky-700 transition duration-300 w-max">
                    <a href="./register/register.php" class="flex items-center space-x-2">
                        <span>Sign up</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <a id="report-bug-btn"
        class="fixed bottom-5 right-5 bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-700 transition duration-300 z-50 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 active:scale-95">
        Bug Identify and Report
    </a>

    <!-- Modal for Bug Reporting -->
    <div id="bug-report-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg w-96">
            <h2 class="text-lg font-bold mb-4">Report a Bug</h2>
            <form action="Includes/review.inc.php" method="post">
                <input name="bug" id="bug-details" class="w-full p-2 border rounded" rows="5"
                    placeholder="Describe the bug...">
                <div class="mt-4 flex justify-end">
                    <button type="submit" id="submit-bug"
                        class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-300">
                        Submit
                    </button>
                    <button type="button" id="close-modal"
                        class="ml-2 bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-700 transition duration-300">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>

    <footer class="py-10 text-center bg-gray-800 text-white text-sm mt-10 ">
        &copy; copyright@<a href="https://makelabs.co.in/" class="text-sky">makelabs</a>

    </footer>
    <!-- JavaScript for toggle functionality -->
    <script>
        document.getElementById('menu-btn').addEventListener('click', function () {
            document.getElementById('menu').classList.toggle('hidden');
        });



        const scrollers = document.querySelectorAll(".scroller");

        // If a user hasn't opted in for reduced motion, then we add the animation
        if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            addAnimation();
        }

        function addAnimation() {
            scrollers.forEach((scroller) => {
                // Add data-animated="true" to every `.scroller` on the page
                scroller.setAttribute("data-animated", true);

                // Make an array from the elements within `.scroller__inner`
                const scrollerInner = scroller.querySelector(".scroller__inner");
                const scrollerContent = Array.from(scrollerInner.children);

                // For each item in the array, clone it
                // Add aria-hidden to it
                // Add it into the `.scroller__inner`
                scrollerContent.forEach((item) => {
                    const duplicatedItem = item.cloneNode(true);
                    duplicatedItem.setAttribute("aria-hidden", true);
                    scrollerInner.appendChild(duplicatedItem);
                });
            });
        }

        //bug script
        const reportBugBtn = document.getElementById('report-bug-btn');
        const modal = document.getElementById('bug-report-modal');
        const closeModalBtn = document.getElementById('close-modal');

        // Function to open the modal
        reportBugBtn.addEventListener('click', function () {
            modal.classList.remove('hidden');
        });

        // Function to close the modal
        closeModalBtn.addEventListener('click', function () {
            modal.classList.add('hidden');
        });

        // Optionally, handle submitting the bug report
        document.getElementById('submit-bug').addEventListener('click', function () {
            const bugDetails = document.getElementById('bug-details').value;
            if (bugDetails) {
                // Here you can add logic to send the bug report, e.g., an AJAX request
                alert('Bug reported: ' + bugDetails); // Placeholder for actual submission
                modal.classList.add('hidden'); // Close modal after submission
                // document.getElementById('bug-details').value = ''; // Clear textarea
            } else {
                alert('Please describe the bug before submitting.');
            }
        });

    </script>
</body>

</html>