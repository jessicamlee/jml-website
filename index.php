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
                require ('partials/global/header.php'); 
            ?>
            <main data-aos-delay="800">
                <section class="intro section">
                    <div class="container intro-box">
                        <h1 data-aos="fade-right">Jessica Lee</h1>
                        <p class="career-role" data-aos="fade-right" data-aos-delay="300">Front&dash;End Development</p>
                        <p class="career-goal flex" data-aos="fade-right" data-aos-delay="500">building interfaces for everyone to experience&period;</p>
                    </div>
                    <div class="blobwindow" data-aos="fade-up-left" data-aos-delay="500">
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                        <div class="alien"></div>
                    </div>
                </section>
                <section id="projects" class="projects section">
                    <div class="container">
                        <h2 data-aos="fade-right">Latest Projects</h2>
                        <ul class="projects-collection flex">
                            <li class="project-card" data-aos="fade-right">
                                <div class="project-thumb">
                                    <div class="img-container">
                                        <img class="img-thumb" src="images/projects/loclo_cover.jpg" alt="LOCLO Homepage Project Cover Photo">
                                    </div>
                                    <div class="links-container flex">
                                        <div class="project-details">
                                            <a href="projects/loclo-homepage.php" title="Link to project">
                                                <h3>Spring Local 2022 by LOCLO</h3>
                                                <p>Responsive e&dash;Commerce Homepage</p>
                                            </a>
                                        </div>
                                        <div class="btn-container flex">
                                            <a class="live-link box-shadow-light" data-aos="fade-right"  data-aos-delay="300" href="#" target="_blank" title="Link to Live Site">Visit Site</a>
                                            <a class="code-link box-shadow-light" data-aos="fade-right" href="https://github.com/jessicamlee/loclo-clothing" target="_blank" title="Link to GitHub Repository">Review Code</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="project-card" data-aos="fade-right" data-aos-delay="150">
                                <div class="project-thumb">
                                    <div class="img-container">
                                        <img class="img-thumb" src="images/projects/cafehop_cover.jpg" alt="Cafe Hop App Cover Photo">
                                    </div>
                                    <div class="links-container flex">
                                        <div class="project-details">
                                            <a href="projects/cafehop.php" title="Link to project">
                                                <h3>Caf&eacute; Hop App</h3>
                                                <p>Android&dash;based Mobile Application</p>
                                            </a>
                                        </div>
                                        <div class="btn-container flex">
                                            <a class="live-link box-shadow-light" data-aos="fade-right"  data-aos-delay="300" href="#" target="_blank" title="Link to Live Site">Visit Site</a>
                                            <a class="code-link box-shadow-light" data-aos="fade-right" href="#" target="_blank" title="Link to GitHub Repository">Review Code</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="project-card" data-aos="fade-right" data-aos-delay="300">
                                <div class="project-thumb">
                                    <div class="img-container">
                                        <img class="img-thumb" src="images/projects/todo_cover.jpg" alt="To Do List Project Cover Photo">
                                    </div>
                                    <div class="links-container flex">
                                        <div class="project-details">
                                            <a href="projects/todo-list.php" title="Link to project"><h3>My To&dash;Do List</h3></a>
                                            <p>Temporary JavaScript To&dash;Do List</p>
                                        </div>
                                        <div class="btn-container flex">
                                            <a class="live-link box-shadow-light" data-aos="fade-right"  data-aos-delay="300" href="#" target="_blank" title="Link to Live Site">Visit Site</a>
                                            <a class="code-link box-shadow-light" data-aos="fade-right" href="#" target="_blank" title="Link to GitHub Repository">Review Code</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section id="about" class="about section">
                    <div class="container">
                        <h2 data-aos="fade-right">About Jessica</h2>
                        <div class="bio flex">
                            <img class="box-shadow"  data-aos="fade-right" data-aos-delay="300"src="images/jessicamlee_profilepicture.jpg" alt="Profile picture of Jessica">
                            <div class="bio-desc">
                                <p data-aos="fade-left" data-aos-delay="400">I&apos;m a curious storyteller and systematic problem&dash;solver with a background in English Literature and Creative Writing&period;</p>
                                <p data-aos="fade-left" data-aos-delay="500">My hobby of analyzing stories led me to past experiences as a content writer&comma; and managing editor&period; I now want to develop interfaces to share captivating stories and experiences&period;</p>
                                <p data-aos="fade-left" data-aos-delay="600">Besides unwinding with a cup of matcha&comma; I spend time either reading manga&comma; dissecting films and anime&comma; trying a new yoga workout video&comma; or getting my steps exploring the city&period;</p>
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
        <script src="scripts/scroll-lock.js"></script>
        <script src="scripts/main.js"></script>
    </body>
</html>