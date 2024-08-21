<?php
 require_once "Includes/config_session.inc.php";
 if(isset($_SESSION["success"])){
?>
    <?php include "dashboard.php"; ?>

<section class="pt-24 px-3 lg:ml-72 m-5">
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
    <!-- HTML Exam -->
    <div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden  mx-auto group">
      <div class="z-20  cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ">
        Locked
      </div>
      <div class="relative z-10">
        <div class="flex items-center">
          <img src="./assets/dhtml.png" class="w-1/6 rounded-lg" alt="HTML">
          <p class="text-xl md:text-2xl font-bold my-auto mx-2 ">HTML Exam</p>
        </div>
        <p class="pb-4 pt-2 ">This exam covers basic to advanced concepts in HTML, including structure, elements, attributes, and best practices for web development.</p>
        <a href="#" class="block p-3 bg-green-300 text-black rounded-lg  opacity-50">Start Exam</a>
      </div>
    </div>


    <!-- CSS Exam -->
    <div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden  mx-auto group">
      <div class="z-20  cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ">
        Locked
      </div>
      <div class="relative z-10">
        <div class="flex items-center">
          <img src="./assets/dcss.png" class="w-1/6 rounded-lg" alt="CSS">
          <p class="text-xl md:text-2xl font-bold my-auto mx-2 ">CSS Exam</p>
        </div>
        <p class="pb-4 pt-2 ">This exam assesses your knowledge in CSS, covering topics such as selectors, properties, layout techniques, and responsive design.</p>
        <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
      </div>
    </div>

    <!-- JavaScript Exam -->
    <div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden  mx-auto group">
      <div class="z-20  cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ">
        Locked
      </div>
      <div class="relative z-10">
        <div class="flex items-center">
          <img src="./assets/djs.png" class="w-1/6 rounded-lg" alt="JavaScript">
          <p class="text-xl md:text-2xl font-bold my-auto mx-2 ">JavaScript Exam</p>
        </div>
        <p class="pb-4 pt-2">JavaScript (JS) is a lightweight interpreted programming language with first-class functions.</p>
        <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
      </div>
    </div>

    <!-- Python Exam -->
    <div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden mx-auto group">
      <div class="z-20  cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ">
        Locked
      </div>
      <div class="relative z-10">
        <div class="flex items-center">
          <img src="./assets/dpython.png" class="w-1/6 rounded-lg" alt="Python">
          <p class="text-xl md:text-2xl font-bold my-auto mx-2 ">Python Exam</p>
        </div>
        <p class="pb-4 pt-2">Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation.</p>
        <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
      </div>
    </div>

    <!-- PHP Exam -->
    <div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden mx-auto group">
      <div class="z-20  cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ">
        Locked
      </div>
      <div class="relative z-10">
        <div class="flex items-center">
          <img src="./assets/dphp.png" class="w-1/6 rounded-lg" alt="PHP">
          <p class="text-xl md:text-2xl font-bold my-auto mx-2 ">PHP Exam</p>
        </div>
        <p class="pb-4 pt-2">PHP is a server scripting language and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and open-source scripting language.</p>
        <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
      </div>
    </div>

    <!-- SQL Exam -->
    <div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden  mx-auto group">
      <div class="z-20  cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ">
        Locked
      </div>
      <div class="relative z-10">
        <div class="flex items-center">
          <img src="./assets/dsql.png" class="w-1/6 rounded-lg" alt="SQL">
          <p class="text-xl md:text-2xl font-bold my-auto mx-2 ">SQL Exam</p>
        </div>
        <p class="pb-4  pt-2 ">Structured Query Language (SQL) is a domain-specific language used to manage data, especially in relational databases.</p>
        <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
      </div>
    </div>

    <!-- AI Exam -->
    <div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden mx-auto group">
      <div class="z-20  cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ">
        Locked
      </div>
      <div class="relative z-10">
        <div class="flex items-center">
          <img src="./assets/dai.png" class="w-1/6 rounded-lg" alt="AI">
          <p class="text-xl md:text-2xl font-bold my-auto mx-2 ">AI Exam</p>
        </div>
        <p class="pb-4 pt-2">Artificial Intelligence (AI) involves creating algorithms and systems that allow machines to perform tasks that typically require human intelligence.</p>
        <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
      </div>
    </div>

    <!-- Machine Learning Exam -->
    <div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden mx-auto group">
      <div class="z-20  cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ">
        Locked
      </div>
      <div class="relative z-10">
        <div class="flex items-center">
          <img src="./assets/dmi.png" class="w-1/6 rounded-lg bg-white" alt="Machine Learning">
          <p class="text-xl md:text-2xl font-bold my-auto mx-2 ">Machine Learning Exam</p>
        </div>
        <p class="pb-4 pt-2">Machine Learning (ML) involves developing algorithms that enable systems to learn from data and make predictions or decisions.</p>
        <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
      </div>
    </div>

    <!-- UI/UX Design Exam -->
    <div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden mx-auto group">
      <div class="z-20  cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ">
        Locked
      </div>
      <div class="relative z-10">
        <div class="flex items-center">
          <img src="./assets/duiux.png" class="w-1/6 rounded-lg" alt="UI/UX Design">
          <p class="text-xl md:text-2xl font-bold my-auto mx-2 ">UI/UX Design Exam</p>
        </div>
        <p class="pb-4 pt-2">UI/UX Design focuses on creating user interfaces and experiences that are both aesthetically pleasing and user-friendly.</p>
        <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
      </div>
    </div>

  <!-- AR Exam -->
<div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden  mx-auto group">
  <div class="z-20 cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
    Locked
  </div>
  <div class="relative z-10">
    <div class="flex items-center">
      <img src="./assets/dar.png" class="w-1/6 rounded-lg" alt="Augmented Reality">
      <p class="text-xl md:text-2xl font-bold my-auto mx-2">Augmented Reality Exam</p>
    </div>
    <p class="pb-4 pt-2">Augmented Reality (AR) enhances the real-world environment with digital information and media, creating immersive experiences.</p>
    <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
  </div>
</div>

<!-- VR Exam -->
<div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden  mx-auto group">
  <div class="z-20 cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
    Locked
  </div>
  <div class="relative z-10">
    <div class="flex items-center">
      <img src="./assets/dvr.png" class="w-1/6 rounded-lg" alt="Virtual Reality">
      <p class="text-xl md:text-2xl font-bold my-auto mx-2">Virtual Reality Exam</p>
    </div>
    <p class="pb-4 pt-2">Virtual Reality (VR) creates simulated environments that users can interact with, providing a fully immersive experience.</p>
    <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
  </div>
</div>

<!-- IoT Exam -->
<div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden  mx-auto group">
  <div class="z-20 cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
    Locked
  </div>
  <div class="relative z-10">
    <div class="flex items-center">
      <img src="./assets/diot.png" class="w-1/6 rounded-lg" alt="Internet of Things">
      <p class="text-xl md:text-2xl font-bold my-auto mx-2">Internet of Things Exam</p>
    </div>
    <p class="pb-4 pt-2">The Internet of Things (IoT) involves interconnected devices that collect and exchange data, enabling smart environments.</p>
    <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
  </div>
</div>

<!-- C Programming Exam -->
<div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden  mx-auto group">
  <div class="z-20 cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
    Locked
  </div>
  <div class="relative z-10">
    <div class="flex items-center">
      <img src="./assets/dc.png" class="w-1/6 rounded-lg" alt="C Programming">
      <p class="text-xl md:text-2xl font-bold my-auto mx-2">C Programming Exam</p>
    </div>
    <p class="pb-4 pt-2">C Programming is a foundational programming language used for system software, and is known for its performance and efficiency.</p>
    <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
  </div>
</div>

<!-- C++ Programming Exam -->
<div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden mx-auto group">
  <div class="z-20 cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
    Locked
  </div>
  <div class="relative z-10">
    <div class="flex items-center">
      <img src="./assets/dc++.png" class="w-1/6 rounded-lg" alt="C++ Programming">
      <p class="text-xl md:text-2xl font-bold my-auto mx-2">C++ Programming Exam</p>
    </div>
    <p class="pb-4 pt-2">C++ is a versatile programming language supporting object-oriented, procedural, and generic programming paradigms.</p>
    <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
  </div>
</div>

<!-- Deep Learning Exam -->
<div class="relative bg-blue rounded-lg p-5 md:p-10 m-3 overflow-hidden mx-auto group">
  <div class="z-20 cursor-not-allowed absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
    Locked
  </div>
  <div class="relative z-10">
    <div class="flex items-center">
      <p class="text-xl md:text-2xl font-bold my-auto mx-2">Deep Learning Exam</p>
    </div>
    <p class="pb-4 pt-2">Deep Learning involves using neural networks with many layers to model complex patterns and representations in data.</p>
    <a href="#" class="block p-3 bg-green-300 text-black rounded-lg cursor-not-allowed opacity-50">Start Exam</a>
  </div>
</div>

</section>
<?php include "finish.php"; ?>
<?php } else {
     header("Location: Courses.php");
} ?>