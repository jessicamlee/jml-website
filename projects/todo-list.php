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
                <section class="section container project-overview flex bg-darkmodelist" data-aos="fade-right" data-aos-delay="100">
                    <div class="project-details" data-aos="fade-right" data-aos-delay="300">
                        <p class="project-skills">HTML &vert; SASS &vert; JavaScript</p>
                        <h1 class="project-title">My To&dash;Do List<br class="hidden-tablet"> with Dark Mode&excl;</h1>
                        <p class="project-type">Temporary JavaScript To&dash;Do List</p>
                        <p class="project-description">A pain point I observed amongst my peers is procrastinating on existing tasks on their to&dash;do lists&period; When combining the temporary My To&dash;Do List with an engaging alarm clock&comma; users are encouraged to begin and complete their task within their session&period;</p>
                        <div class="links-btn-container flex">
                            <a class="code-link box-shadow-light" data-aos="fade-right" data-aos-delay="500" href="https://github.com/jessicamlee/todolist" target="_blank" title="Link to GitHub Repository">Review Code</a>
                            <a class="live-link text-darkmodelist box-shadow-light" data-aos="fade-right" data-aos-delay="300" href="#" target="_blank" title="Link to GitHub Repository">Visit Site</a>
                        </div>
                    </div>
                    <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="600">
                        <img class="project-img zoom-darkmodelist" src="../images/projects/todo_list/todo_list_both_modes.jpg" alt="To-Do List Cover Photo">
                    </div>
                </section>
                <section class="section">
                    <div class="container project-process">
                        <div class="phase1">
                            <h2 data-aos="fade-right" data-aos-delay="600">Chosen Solution</h2>
                            <div class="phase-info flex">
                                <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="500">
                                    <img class="project-img zoom-darkmodelist" src="../images/projects/todo_list/todo_list_brainstorm.jpg" alt="Screenshot of To-Do List Planning Process">
                                </div>
                                <div class="phases-desc" data-aos="fade-right" data-aos-delay="800">
                                    <p>Vanilla JavaScript was used to create this first version of My To&dash;Do List to log and create new to-do entries without storing the information&period;</p>
                                    <p>Another reason for using Vanilla JavaScript is to include the onscreen Light and Dark Mode toggle to provide a personalized interface experience for users&period;</p>
                                    <p>For future expansions&comma; SASS was used to build the project in an efficient&comma; scalable&comma; and manageable manner&period;</p>
                                </div>
                            </div>
                        </div>
                        <div class="phase2">
                            <h2 data-aos="fade-right">Challenge</h2>
                            <div class="phase-info flex">
                                <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="100">
                                    <img class="project-img zoom-darkmodelist" src="../images/projects/todo_list/todo_list_experimenting.jpg" alt="Screenshot of Dark Mode Toggle and To Do List Experimenting files">
                                </div>
                                <div class="phases-desc" data-aos="fade-right" data-aos-delay="200">
                                    <p>When I started this project&comma; I had limited knowledge of Vanilla JavaScript&period; I wanted to learn more about how to use Vanilla JavaScript by making a temporary To&dash;Do List&period;</p>
                                    <p>This project is a combination of my passion for organization&comma; bias toward Dark Mode&comma; and curiosity about expanding my JavaScript knowledge&period;</p>
                                    <p>Before combining the Dark Mode toggle and My To-Do List&comma; I researched&comma; styled&comma; and tested each function to understand how to create a single&comma; responsive interface for mobile&comma; tablet&comma; and desktop users&period;</p>
                                </div>
                            </div>
                        </div>
                        <div class="phase3">
                            <h2 data-aos="fade-right">Next Steps</h2>
                            <div class="phase-info flex">
                                <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="100">
                                    <img class="project-img zoom-darkmodelist" src="../images/projects/todo_list/todo_list_problems.jpg" alt="Screenshot of Initial Problems on To-Do List interface">
                                </div>
                                <div class="phases-desc" data-aos="fade-right" data-aos-delay="200">
                                    <p>My To-Do List can benefit from more animations&comma; additional themes to further personalize the interface&comma; and other productivity tools to encourage focus&period;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section more-projects">
                    <div class="container">
                        <h2 data-aos="fade-right">More Projects&colon;</h2>
                        <a class="block" data-aos="fade-right" data-aos-delay="150" href="../projects/cafehop.php" title="Cafe Hop Mobile App">Caf&eacute; Hop App</a>
                        <a class="block" data-aos="fade-right" data-aos-delay="300" href="../projects/loclo-homepage.php" title="LOCLO Responsive Homepage">LOCLO Responsive Homepage</a>
                    </div>
                </section>
                <?php require ('../partials/global/contact.php'); ?>
            </main>
            <?php require('../partials/global/footer.php'); ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="../scripts/medium-zoom.min.js"></script>
        <script src="../scripts/scroll-lock.js"></script>
        <script src="../scripts/main.js"></script>
    </body>
</html>