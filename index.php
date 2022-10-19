<?php 
    require('init.php');
    require('partials/projects/project-data.php');
?>
<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "Jessica Lee &vert; Front&dash;End Development";
        require ('partials/global/head.php'); 
    ?>
    <body class="wrapper">
        <?php 
            $active_page = "home";
            require ('partials/global/header.php'); 
        ?>
        <main data-aos-delay="800">
            <section class="intro section">
                <div class="container intro-box">
                    <p class="career-goal flex" data-aos="fade-right" data-aos-delay="300">building web stories worth experiencing&period;</p>
                </div>
            </section>
            <section id="projects" class="projects section">
                <div class="container">
                    <h2 data-aos="fade-right">Latest Projects</h2>
                    <ul class="projects-collection flex">
                        <?php foreach($projects as $featproject): ?>
                            <?php include('partials/projects/featproject.php'); ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>
            <section id="about" class="about section">
                <div class="container">
                    <h2 data-aos="fade-right">About</h2>
                    <p class="name-title" data-aos="fade-right" data-aos-delay="300">Jessica Lee</p>
                    <p class="career-role" data-aos="fade-left" data-aos-delay="600">Front&dash;End Development</p>
                    <div class="bio flex">
                        <img class="box-shadow"  data-aos="fade-right" data-aos-delay="400"src="images/jessicamlee_profilepicture.jpg" alt="Profile picture of Jessica">
                        <div class="bio-desc">
                            <p data-aos="fade-left" data-aos-delay="400">I&apos;m a curious storyteller and systematic problem&dash;solver with a background in English Literature and Creative Writing&period;</p>
                            <p data-aos="fade-left" data-aos-delay="400">My hobby of analyzing stories led me to past experiences as a content writer&comma; and managing editor&period; I now want to develop experiences to share captivating stories&period;</p>
                            <p data-aos="fade-left" data-aos-delay="400">Besides unwinding with a cup of matcha&comma; I spend time reading manga&comma; dissecting films&comma; or getting my steps exploring the city&period;</p>
                        </div>
                    </div>
                </div>
            </section>
            <?php require ('partials/global/contact.php'); ?>
        </main>
        <?php require ('partials/global/footer.php'); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="../node_modules/aos/dist/aos.js"></script>
        <script src="../node_modules/medium-zoom/dist/medium-zoom.min.js"></script>
        <script src="scripts/scroll-lock.js"></script>
        <script src="scripts/main.js"></script>
    </body>
</html>