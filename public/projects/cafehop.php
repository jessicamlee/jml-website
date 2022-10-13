<!DOCTYPE html>
<html class="scroll-smooth" lang="en-CA">
    <?php 
        $project_title = "Cafe Hop App &vert; Jessica Lee";
        require('../partials/global/head_projects.php'); 
    ?>
    <body>
        <?php require('../partials/global/header_projects.php'); ?>
        <main class="artifact-pg">
            <section class="section container project-overview flex bg-cafebrown" data-aos="fade-right" data-aos-delay="100">
            <div class="project-details" data-aos="fade-right" data-aos-delay="300">
                    <p class="project-skills">React Native &vert; Android Studio</p>
                    <h1 class="project-title">Cafe Hop</h1>
                    <p class="project-type">Android&dash;based Mobile Application</p>
                    <p class="project-description">Track your next productivity spot to study or work with reliable wifi&comma; charging outlets&comma; and yummy snacks with Cafe Hop&excl;</p>
                </div>
                <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="600">
                    <img class="project-img zoom-darkmodelist" src="../images/projects/cafehop/cafehop_cover.jpg" alt="Cafe Hop App Cover Photo">
                </div>
            </section>
            <section class="section more-projects">
                <div class="container">
                    <h2 data-aos="fade-right">More Projects&colon;</h2>
                    <ul>
                        <li data-aos="fade-right" data-aos-delay="150">
                            <a href="../projects/loclo-homepage.php" title="LOCLO Responsive Homepage"><p>LOCLO Responsive Homepage</p></a>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="300">
                            <a href="../projects/todo-list.php" title="To-Do List with Dark Mode"><p>To&dash;Do List with Dark Mode</p></a>
                        </li>
                    </ul>
                </div>
            </section>
            <?php require ('../partials/global/contact.php'); ?>
        </main>
        <?php require('../partials/global/footer.php'); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="../../node_modules/aos/dist/aos.js"></script>
        <script src="../../node_modules/medium-zoom/dist/medium-zoom.min.js"></script>
        <script src="../scripts/scroll-lock.js"></script>
        <script src="../scripts/main.js"></script>
    </body>
</html>