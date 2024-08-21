<?php
 require_once "Includes/config_session.inc.php";
 if(isset($_SESSION["success"])){
?>
<?php include "dashboard.php"; ?>

<section class="pt-32 px-3 lg:ml-72">
  <!-- Product Not Added Yet -->
  <div class="flex items-center justify-center">
    <div class="bg-blue rounded-lg shadow-xl p-8 md:p-12 max-w-lg text-center pulse 
">
      <div class="mb-6">
        <h1 class="text-xl md:text-3xl md:text-4xl font-bold text-gray-800 mb-2">Coming Soon!</h1>
        <p class="text-sm md:text-lg text-gray-600">This product or page is currently under development. We're working hard to bring you something amazing. Stay tuned!</p>
      </div>
      <a href="./Courses.php" class="inline-block px-6 py-3 bg-red-600 text-white rounded-lg md:text-lg font-semibold transition-colors duration-300 ">Explore Other Products</a>
    </div>
  </div>
</section>

<?php include "finish.php"; ?>
<?php  } else {
 header("Location: login/login.php");
} 
?>