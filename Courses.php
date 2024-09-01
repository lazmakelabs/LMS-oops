<?php
require_once 'core/init.php';

$user = new User();
if ($user->isLoggedIn()):
    include "dashboard.php"; ?>
<section class="pt-32 px-3  lg:ml-72">
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 lg:mr-5 ">
        <div class="bg-blue shadow-lg  rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/duiux.png" class="w-1/6 object-contain " alt="">
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">UI/UX Design</p>
                </div>
                <p class="pb-4">UX design refers to the term “user experience design”, while UI stands for “user
                    interface design”. Both elements are crucial to a product and ...</p>
                <a href="./UIUX/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg   rounded-lg p-5 md:p-10 m-3  ">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/dhtml.png" class="w-1/6 object-contain " alt="">
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">HTML</p>
                </div>

                <p class="pb-4">Hypertext Markup Language (HTML) is the standard markup language for documents designed
                    to be displayed in a web browser. It defines the content and ...</p>
                <a href="./Html/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg   rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/dcss.png" class="w-1/6 rounded-lg object-contain" alt="">
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">CSS</p>
                </div>
                <p class="pb-4">Cascading Style Sheets (CSS) is a stylesheet language used to describe the presentation
                    of a document written in HTML or XML including XML ...</p>
                <a href="./CSS/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg  rounded-lg p-5 md:p-10 m-3 ">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/djs.png" class="w-1/6 rounded-lg object-contain" alt="">
                    <p class="text-xl md:text-4xl font-bold my-auto mx-2"> JavaScript</p>
                </div>
                <p class="pb-4">JavaScript (JS) is a lightweight interpreted (or just-in-time compiled) programming
                    language with first-class functions ...</p>
                <a href="./JS/index.php" class="p-3 bg-gray-300 text-black rounded-lg ">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg   rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/dpython.png" class="w-1/6 rounded-lg object-contain" alt="">
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">Python</p>
                </div>
                <p class="pb-4">Python is a high-level, general-purpose programming language. Its design philosophy
                    emphasizes code readability with the use of significant indentation ...</p>
                <a href="./python/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg   rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/dphp.png" class="w-1/6 rounded-lg object-contain" alt="">
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">PHP</p>
                </div>
                <p class="pb-4">PHP is a server scripting language, and a powerful tool for making dynamic and
                    interactive Web pages. PHP is a widely-used, free, and ...</p>
                <a href="./php/index.php" class="p-3 bg-gray-300 text-black rounded-lg ">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg   rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/dsql.png" class="w-1/6 rounded-lg object-contain" alt="">
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">SQL</p>
                </div>
                <p class="pb-4">Structured Query Language (SQL) (pronounced S-Q-L; historically "sequel") is a
                    domain-specific language used to manage data, especially in a relational ...
                </p>
                <a href="./sql/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg   rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/dc.png" class="w-1/6 rounded-lg object-contain" alt="">
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">C</p>
                </div>
                <p class="pb-4">A system programming language is used to create system software. C language is a system
                    programming language because it can be used to do low-level programming ...
                </p>
                <a href="./C/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg   rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/dc++.png" class="w-1/6 rounded-lg object-contain" alt="">
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">C++</p>
                </div>
                <p class="pb-4">C++ is a general purpose, case-sensitive, free-form programming language that supports
                    object-oriented, procedural and generic programming. C++ is a ...
                </p>
                <a href="./C++/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg   rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/diot.png" class="w-1/6 rounded-lg object-contain" alt="">
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">IOT</p>
                </div>
                <p class="pb-4">The Internet of things (IoT) describes devices with sensors, processing ability,
                    software and other technologies that connect and exchange data with other ...</p>
                <a href="./Iot/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg   rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/dai.png" class="w-1/6 rounded-lg object-contain" alt="">
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">AI</p>
                </div>
                <p class="pb-4">It is a field of research in computer science that develops and studies methods and
                    software that enable machines to perceive their environment and use learning ...</p>
                <a href="./AI/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg   rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/dmi.png" class="w-1/6 rounded-lg object-contain" alt="">
                    <p class="text-xl md:text-4xl font-bold my-auto mx-2">Machine Learning</p>
                </div>
                <p class="pb-4">Machine learning (ML) is a field of study in artificial intelligence concerned with the
                    development and study of statistical algorithms that can learn from ...</p>
                <a href="./ML/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg   rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/ddl.png" class="w-1/6 rounded-lg object-contain" alt="">
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">Deep learning</p>
                </div>
                <p class="pb-4">Deep learning can be used to learn policies, or a set of actions, that maximizes the
                    cumulative reward over time. Deep reinforcement learning ...
                </p>
                <a href="./DeepL/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg   rounded-lg p-5 md:p-10 m-3">
            <div class="flex">
                <img src="./assets/dar.png" class="w-1/6 rounded-lg object-contain" alt="">
                <p class="text-xl md:text-5xl font-bold my-auto mx-2">AR</p>
            </div>
            <p class="pb-4">It is a field of research in computer science that develops and studies methods and software
                that enable machines to perceive their environment and use learning ...</p>
            <a href="./AR/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </di>
        </div>
        <div class="bg-blue shadow-lg   rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">
                    <img src="./assets/dvr.png" class="w-1/6 rounded-lg object-contain" alt="">
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">VR</p>
                </div>
                <p class="pb-4">Virtual reality (VR) is a simulated experience that employs 3D near-eye displays and
                    pose tracking to give the user an immersive feel of a virtual world ...</p>
                <a href="./VR/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg  rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" viewBox="0 0 32 32">
                        <path
                            d="M14.135 4H18.1v18.169a26.218 26.218 0 0 1-5.143.535c-4.842-.005-7.362-2.168-7.362-6.322 0-4 2.673-6.6 6.816-6.6a6.448 6.448 0 0 1 1.724.2V4Zm0 9.142a3.992 3.992 0 0 0-1.337-.2c-2 0-3.163 1.223-3.163 3.366 0 2.087 1.107 3.239 3.138 3.239a9.355 9.355 0 0 0 1.362-.1v-6.3Z"
                            style="fill:#44b78b" />
                        <path
                            d="M24.4 10.059v9.1c0 3.133-.235 4.639-.923 5.938A6.316 6.316 0 0 1 20.237 28l-3.678-1.733a5.708 5.708 0 0 0 3.141-2.629c.566-1.121.745-2.42.745-5.837v-7.742ZM20.441 4.02h3.964v4.028h-3.964z"
                            style="fill:#44b78b" />
                    </svg>
                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">Django</p>
                </div>
                <p class="pb-4">Django's robust architecture promotes clean and pragmatic design, allowing developers to
                    focus on creating high-quality applications efficiently...</p>
                <a href="./django/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg  rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">

                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">Matlab</p>
                </div>
                <p class="pb-4">Get interactive, self-paced online classes and tutorials on Deep Learning, Machine
                    Learning, and other topics by using MATLAB Onramp, which offers free MATLAB instruction....</p>
                <a href="" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg  rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">

                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">Cloud Computing</p>
                </div>
                <p class="pb-4">When computer system resources, particularly data storage (cloud storage) and processing
                    power, are made available on demand without direct active involvement, this is known as cloud
                    computing...</p>
                <a href="" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg  rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">

                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">Graphic Design</p>
                </div>
                <p class="pb-4">Projecting visual communications meant to convey particular ideas is the practice of
                    graphic design, a profession, academic discipline, and applied art...</p>
                <a href="./GraphicDes/index.php" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg  rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">

                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">Digital Marketing</p>
                </div>
                <p class="pb-4">Utilizing websites, apps, mobile devices, social media, search engines, and other
                    digital platforms to advertise and sell goods and services is known as digital marketing...</p>
                <a href="" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
        <div class="bg-blue shadow-lg  rounded-lg p-5 md:p-10 m-3">
            <div class="space-y-2">
                <div class="flex">

                    <p class="text-xl md:text-5xl font-bold my-auto mx-2">Embedded</p>
                </div>
                <p class="pb-4">A combination of a computer processor, computer memory, and input/output peripheral
                    devices, an embedded system is a specialized computer system with a...</p>
                <a href="" class="p-3 bg-gray-300 text-black rounded-lg">View course</a>
            </div>
        </div>
    </div>
</section>
<?php include "finish.php";
    else:
        Redirect::to('login.php');
    endif
    ?>