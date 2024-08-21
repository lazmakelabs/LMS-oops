<?php
require_once "Includes/config_session.inc.php";
if (isset($_SESSION["success"])) {
?>
    <?php include "dashboard.php"; ?>
    <section class="pt-32 px-3  lg:ml-72">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 lg:mr-5 ">
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="space-y-2">
                    <div class="flex">
                        <img src="./assets/duiux.png" class="w-1/6 object-contain " alt="">
                        <p class="text-xl md:text-5xl font-bold my-auto mx-2">UI/UX Design</p>
                    </div>
                    <p class="pb-4">UX design refers to the term “user experience design”, while UI stands for “user interface design”. Both elements are crucial to a product and ...</p>
                    <a href="./UIUX/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </div>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3  ">
                <div class="space-y-2">
                    <div class="flex">
                    <img src="./assets/dhtml.png" class="w-1/6 object-contain " alt="">
                        <p class="text-xl md:text-5xl font-bold my-auto mx-2">HTML</p>
                    </div>

                    <p class="pb-4">Hypertext Markup Language (HTML) is the standard markup language for documents designed to be displayed in a web browser. It defines the content and ...</p>
                    <a href="./Html/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </div>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="space-y-2">
                    <div class="flex">
                        <img src="./assets/dcss.png" class="w-1/6 rounded-lg object-contain" alt="">
                        <p class="text-xl md:text-5xl font-bold my-auto mx-2">CSS</p>
                    </div>
                    <p class="pb-4">Cascading Style Sheets (CSS) is a stylesheet language used to describe the presentation of a document written in HTML or XML including XML ...</p>
                    <a href="./CSS/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </div>
            </div>
            <div class="bg-blue rounded-lg p-5 md:p-10 m-3 ">
                <div class="space-y-2">
                    <div class="flex">
                        <img src="./assets/djs.png" class="w-1/6 rounded-lg object-contain" alt="">
                        <p class="text-xl md:text-4xl font-bold my-auto mx-2">  JavaScript</p>
                    </div>
                    <p class="pb-4">JavaScript (JS) is a lightweight interpreted (or just-in-time compiled) programming language with first-class functions ...</p>
                    <a href="./JS/index.php" class="p-3 bg-gray-300 text-black rounded-lg ">View course</a>
                </div>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="space-y-2">
                    <div class="flex">
                        <img src="./assets/dpython.png" class="w-1/6 rounded-lg object-contain" alt="">
                        <p class="text-xl md:text-5xl font-bold my-auto mx-2">Python</p>
                    </div>
                    <p class="pb-4">Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation ...</p>
                    <a href="./python/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </div>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="space-y-2">
                    <div class="flex">
                        <img src="./assets/dphp.png" class="w-1/6 rounded-lg object-contain" alt="">
                        <p class="text-xl md:text-5xl font-bold my-auto mx-2">PHP</p>
                    </div>
                    <p class="pb-4">PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and ...</p>
                    <a href="./php/index.php" class="p-3 bg-gray-300 text-black rounded-lg ">View course</a>
                </div>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="space-y-2">
                    <div class="flex">
                        <img src="./assets/dsql.png" class="w-1/6 rounded-lg object-contain" alt="">
                        <p class="text-xl md:text-5xl font-bold my-auto mx-2">SQL</p>
                    </div>
                    <p class="pb-4">Structured Query Language (SQL) (pronounced S-Q-L; historically "sequel") is a domain-specific language used to manage data, especially in a relational ...
                    </p>
                    <a href="./sql/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </div>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="space-y-2">
                    <div class="flex">
                        <img src="./assets/dc.png" class="w-1/6 rounded-lg object-contain" alt="">
                        <p class="text-xl md:text-5xl font-bold my-auto mx-2">C</p>
                    </div>
                    <p class="pb-4">A system programming language is used to create system software. C language is a system programming language because it can be used to do low-level programming ...
                    </p>
                    <a href="./C/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </div>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="space-y-2">
                    <div class="flex">
                        <img src="./assets/dc++.png" class="w-1/6 rounded-lg object-contain" alt="">
                        <p class="text-xl md:text-5xl font-bold my-auto mx-2">C++</p>
                    </div>
                    <p class="pb-4">C++ is a general purpose, case-sensitive, free-form programming language that supports object-oriented, procedural and generic programming. C++ is a ...
                    </p>
                    <a href="./C++/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </div>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="space-y-2">
                    <div class="flex">
                        <img src="./assets/diot.png" class="w-1/6 rounded-lg object-contain" alt="">
                        <p class="text-xl md:text-5xl font-bold my-auto mx-2">IOT</p>
                    </div>
                    <p class="pb-4">The Internet of things (IoT) describes devices with sensors, processing ability, software and other technologies that connect and exchange data with other ...</p>
                    <a href="./Iot/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </div>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="space-y-2">
                    <div class="flex">
                        <img src="./assets/dai.png" class="w-1/6 rounded-lg object-contain" alt="">
                        <p class="text-xl md:text-5xl font-bold my-auto mx-2">AI</p>
                    </div>
                    <p class="pb-4">It is a field of research in computer science that develops and studies methods and software that enable machines to perceive their environment and use learning ...</p>
                    <a href="./AI/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </div>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="space-y-2">
                    <div class="flex">
                        <img src="./assets/dmi.png" class="w-1/6 rounded-lg object-contain" alt="">
                        <p class="text-xl md:text-4xl font-bold my-auto mx-2">Machine Learning</p>
                    </div>
                    <p class="pb-4">Machine learning (ML) is a field of study in artificial intelligence concerned with the development and study of statistical algorithms that can learn from ...</p>
                    <a href="./ML/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </div>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="space-y-2">
                    <div class="flex">
                       <img src="./assets/ddl.png" class="w-1/6 rounded-lg object-contain" alt="">
                        <p class="text-xl md:text-5xl font-bold my-auto mx-2">Deep learning</p>
                    </div>
                    <p class="pb-4">Deep learning can be used to learn policies, or a set of actions, that maximizes the cumulative reward over time. Deep reinforcement learning ...
                    </p>
                    <a href="./DeepL/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </div>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="flex">
                    <img src="./assets/dar.png" class="w-1/6 rounded-lg object-contain" alt="">
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">AR</p>
                </div>
                <p class="pb-4">It is a field of research in computer science that develops and studies methods and software that enable machines to perceive their environment and use learning ...</p>
                <a href="./AR/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </di>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="space-y-2">
                    <div class="flex">
                        <img src="./assets/dvr.png" class="w-1/6 rounded-lg object-contain" alt="">
                        <p class="text-xl md:text-5xl font-bold my-auto mx-2">VR</p>
                    </div>
                    <p class="pb-4">Virtual reality (VR) is a simulated experience that employs 3D near-eye displays and pose tracking to give the user an immersive feel of a virtual world ...</p>
                    <a href="./VR/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </div>
            </div>
            <div class="bg-blue  rounded-lg p-5 md:p-10 m-3">
                <div class="space-y-2">
                    <div class="flex">
                        <img src="./assets/dvr.png" class="w-1/6 rounded-lg object-contain" alt="">
                        <p class="text-xl md:text-5xl font-bold my-auto mx-2">Django</p>
                    </div>
                    <p class="pb-4">Django's robust architecture promotes clean and pragmatic design, allowing developers to focus on creating high-quality applications efficiently...</p>
                    <a href="./django/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
                </div>
            </div>
        </div>
    </section>
    <?php include "finish.php"; ?>
<?php } else {
    header("Location: login/login.php");
}
?>