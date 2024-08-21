<?php
 require_once "Includes/config_session.inc.php";
 if(isset($_SESSION["success"])){
?>
    <?php include "dashboard.php"; ?>


<section class="pt-32 px-3 lg:ml-72">
    <!-- Introduction Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold mb-4">Kickstart Your Career with Our Internship Program!</h1>
            <p class="text-lg text-gray-700">Join us for an opportunity to gain valuable experience and enhance your skills in a dynamic and supportive environment.</p>
        </div>
    </section>

    <!-- Internship Details -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-3xl font-semibold mb-4">What You'll Do</h2>
                    <p class="text-gray-600 mb-4">Our internship program provides hands-on experience with real-world projects. You'll collaborate with our team, contribute to meaningful work, and receive mentorship from experienced professionals.</p>
                </div>
                <div>
                    <h2 class="text-3xl font-semibold mb-4">Requirements</h2>
                    <ul class="list-disc list-inside text-gray-600">
                        <li>Currently enrolled in a related field of study</li>
                        <li>Proficiency in relevant software or tools</li>
                        <li>Enthusiasm and a willingness to learn</li>
                    </ul>
                </div>
            </div>
            <div class="mt-8">
                <h2 class="text-3xl font-semibold mb-4">Duration & Location</h2>
                <p class="text-gray-600">The internship will last for 3-6 months and can be conducted remotely or at our office located in Krishnagiri.</p>
            </div>
            <div class="mt-8">
                <h2 class="text-3xl font-semibold mb-4">Contact</h2>
                <p class="text-gray-600">Door No: 5/293-1, Thiruvalluvar Nagar, 2nd Cross, Krishnagiri-635001
                    +91 9488917854, +91 8098 783 144
                    makelabsmail@gmail.com</p>
            </div>
            <div class="mt-8">
                <h2 class="text-3xl font-semibold mb-4">Student report</h2>
            <form action="report.inc.php" method="post" enctype="multipart/form-data">
                <input name="report" id="bug-details" class="w-full p-2 border rounded" rows="5"
                    placeholder="Describe the output...">
                <div class="input-container">
                    <input type="file" id="upload-btn" name="img_file" class="upload-input">
                </div>
                <div class="mt-4 flex justify-end">
                    <button type="submit" id="submit-bug"
                        class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-300">
                        Submit
                </button>
                </div>
            </form>
            <?php
                    include_once "Includes/dbh.inc.php";

                    $E_mail=$_SESSION['email'];

                    $query = "SELECT * FROM project_report WHERE E_Mail = :email;";
                    $stmt = $pdo -> prepare($query);
                    $stmt->bindParam(":email", $E_mail);
                    $stmt->execute();
                    $result = $stmt -> fetchAll(PDO :: FETCH_ASSOC);
                    foreach ($result as $rows){
                        $image=$rows['image'];
                        $filetype=$rows['filetype'];
                        $report=$rows['Report'];
                        $t_date=$rows['t_date'];
                        if($image!='null'){
                            echo "<p>".$t_date."</p>";
                            echo "<img src='data:" . $filetype . ";base64," . $image . "'class='image md:w-1/2 h-96' alt='Profile'>";
                            echo "<p>".$report."</p><br>";
                            }
                        }
                ?>
            </div>
        </div>
    </section>
</section>
<?php include "finish.php"; ?>
<?php } else {
     header("Location: login/login.php");
} ?>