<?php
require_once "Includes/config_session.inc.php";
if (isset($_SESSION["success"])) {
?>
    <?php include "dashboard.php"; ?>
    <section class="pt-24 lg:pt-32 px-3 lg:ml-72">
        <!-- PDF Viewer and Download Section -->
        <div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden max-w-md mx-auto group">
            <div class="relative">
                <div class="flex items-center justify-center">
                    <p class="text-xl md:text-2xl font-bold text-red-600">View or Download Certificate</p>
                </div>
                <p class="pb-4 pt-2 text-center">If you have already earned your certificate, you can view it or download it using the links below:</p>
                <div class="flex flex-col space-y-4 items-center">
                    <!-- Link to View Certificate -->
                    <a href="./assets/demoforcert" target="_blank" class="block w-full md:w-auto p-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors duration-300 text-center">View Certificate</a>
                    <!-- Link to Download Certificate -->
                    <a href="./assets/demoforcert" class="block w-full md:w-auto p-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors duration-300 text-center" download>Download Certificate</a>
                </div>
            </div>
        </div>
    </section>

    <?php include "finish.php"; ?>
<?php } else {
    header("Location: login/login.php");
} ?>