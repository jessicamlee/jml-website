<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $project_title = "To&dash;Do List &vert; Jessica Lee";
        require('../partials/global/head_projects.php'); 
    ?>
    <body>
        <div class="wrapper">
            <?php require('../partials/global/header_projects.php'); ?>
            <main class="artifact-pg">
                <section class="container project-overview flex bg-violet" data-aos="fade-right" data-aos-delay="100">
                    <div class="project-details" data-aos="fade-right" data-aos-delay="300">
                        <p class="project-skills">HTML5 &vert; SASS &vert; JavaScript</p>
                        <h1 class="project-title">My To&dash;Do List<br class="hidden-tablet"> with Dark Mode&excl;</h1>
                        <p class="project-type">Temporary JavaScript To&dash;Do List</p>
                        <p class="project-description">Beat procrastination with this temporary to&dash;do list&period; Combined with its own engaging alarm clock&comma; become empowered to begin and complete your tasks within the same session&period;</p>
                        <div class="links-btn-container flex">
                            <a class="live-link text-violet box-shadow-light" data-aos="fade-right" data-aos-delay="500" href="#" target="_blank" title="Link to Live Site">Visit Site</a>
                            <a class="code-link box-shadow-light" data-aos="fade-right" data-aos-delay="300" href="https://github.com/jessicamlee/todolist" target="_blank" title="Link to GitHub Repository">Review Code</a>
                        </div>
                    </div>
                    <div class="proj-img-container box-shadow" data-aos="fade-left" data-aos-delay="600">
                        <img class="project-img" src="../images/projects/todo_cover.jpg" alt="To-Do List Cover Photo">
                    </div>
                </section>
                <section class="more-projects">
                    <div class="container">
                        <h2 data-aos="fade-right">More Projects&colon;</h2>
                        <a class="block" data-aos="fade-right" data-aos-delay="100" href="../projects/cafehop.php" title="Cafe Hop Mobile App">Caf&eacute; Hop App</a>
                        <a class="block" data-aos="fade-right" data-aos-delay="200" href="../projects/loclo-homepage.php" title="LOCLO Responsive Homepage">LOCLO Responsive Homepage</a>
                    </div>
                </section>
                <?php require ('../partials/global/contact.php'); ?>
            </main>
            <?php require('../partials/global/footer.php'); ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="../scripts/scroll-lock.js"></script>
        <script src="../scripts/main.js"></script>
    </body>
</html>