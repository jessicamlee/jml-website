<?php 
    require('init.php');
?>
<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "Jessica Lee &vert; Front&dash;End Development";
        require ('partials/global/head.php'); 
    ?>
    <body>
        <div class="wrapper">
            <?php 
                $active_page = "home";
                require ('partials/global/header.php'); 
            ?>
            <main data-aos-delay="800">
                <section class="intro section">
                    <div class="container intro-box">
                        <p class="career-goal flex" data-aos="fade-right" data-aos-delay="300">building interfaces worth experiencing&period;</p>
                    </div>
                </section>
                <section id="projects" class="projects section">
                    <div class="container">
                        <h2 data-aos="fade-right">Latest Projects</h2>
                        <ul class="projects-collection flex">
                            <li class="project-card" data-aos="fade-right">
                                <a href="projects/loclo-homepage.php" title="Link to project">
                                    <div class="img-container box-shadow">
                                        <img class="img-thumb" src="images/projects/loclo_develop/loclo_developed_v2.jpg" alt="LOCLO Homepage Project Cover Photo">
                                    </div>
                                </a>
                                <div class="project-details">
                                    <a href="projects/loclo-homepage.php" title="Link to project"><h3>Spring Local 2022 by LOCLO</h3></a>
                                    <p>Responsive e&dash;Commerce Homepage</p>
                                </div>
                            </li>
                            <li class="project-card" data-aos="fade-right">
                                <a href="projects/todo-list.php" title="Link to project">
                                    <div class="img-container box-shadow">
                                        <img class="img-thumb" src="images/projects/todo_list/todo_list_both_modes.jpg" alt="To Do List Project Cover Photo">
                                    </div>
                                </a>
                                <div class="project-details">
                                    <a href="projects/todo-list.php" title="Link to project"><h3>My To&dash;Do List</h3></a>
                                    <p>Temporary JavaScript To&dash;Do List</p>
                                </div>
                            </li>
                            <li class="project-card" data-aos="fade-right">
                                <a href="projects/cafehop.php" title="Link to project">
                                    <div class="img-container box-shadow">
                                        <img class="img-thumb" src="images/projects/cafehop/cafehop_cover.jpg" alt="Cafe Hop App Cover Photo">
                                    </div>
                                </a>
                                <div class="project-details">
                                    <a href="projects/cafehop.php" title="Link to project"><h3>Caf&eacute; Hop App</h3></a>
                                    <p>Android&dash;based Mobile Application</p>
                                </div>
                            </li>
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
                                <p data-aos="fade-left" data-aos-delay="400">My hobby of analyzing stories led me to past experiences as a content writer&comma; and managing editor&period; I now want to develop interfaces to share captivating stories and experiences&period;</p>
                                <p data-aos="fade-left" data-aos-delay="400">Besides unwinding with a cup of matcha&comma; I spend time either reading manga&comma; dissecting films and anime&comma; trying a new yoga workout video&comma; or getting my steps exploring the city&period;</p>
                            </div>
                        </div>
                    </div>
                </section>
                <?php require ('partials/global/contact.php'); ?>
            </main>
            <?php require ('partials/global/footer.php'); ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="scripts/medium-zoom.min.js"></script>
        <script src="scripts/scroll-lock.js"></script>
        <script src="scripts/main.js"></script>
    </body>
</html>