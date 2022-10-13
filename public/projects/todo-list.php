<!DOCTYPE html>
<html class="scroll-smooth" lang="en-CA">
    <?php 
        $project_title = "To&dash;Do List &vert; Jessica Lee";
        require('../partials/global/head_projects.php'); 
    ?>
    <body>
        <?php require('../partials/global/header_projects.php'); ?>
        <main class="artifact-pg">
            <section class="section container project-overview flex bg-darkmodelist" data-aos="fade-right" data-aos-delay="100">
                <div class="project-details" data-aos="fade-right" data-aos-delay="300">
                    <p class="project-skills">HTML &vert; SASS &vert; JavaScript</p>
                    <h1 class="project-title">To&dash;Do List<br class="hidden-tablet"> with Dark Mode&excl;</h1>
                    <p class="project-type">Temporary JavaScript To&dash;Do List</p>
                    <p class="project-description">The To&dash;Do List project reflects my passion for organization and challenges my current knowledge of basic JavaScript&period;</p>
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
                        <h2 data-aos="fade-right" data-aos-delay="600">The Challenge</h2>
                        <div class="phase-info flex">
                            <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="500">
                                <img class="project-img zoom-darkmodelist" src="../images/projects/todo_list/todo_list_brainstorm.jpg" alt="Screenshot of To-Do List Planning Process">
                            </div>
                            <div class="phases-desc" data-aos="fade-right" data-aos-delay="800">
                                <p>I first research ways to structure and style the to&dash;do list without the use of CSS libraries like Tailwind&period;</p>
                                <p>The primary target audience consists of students and workaholics who need an organizational system&period;</p>
                                <p>To resolve the targeted audience&apos;s pain points&comma; the purpose of the to&dash;do list is to provide a single space to organize everything for the day&period;</p>
                                <p>For a more comfortable experience&comma; I researched various ways to add a Dark Mode toggle for a personalized appearance for each user&period;</p>
                            </div>
                        </div>
                    </div>
                    <div class="phase2">
                        <h2 data-aos="fade-right">The Chosen Solution</h2>
                        <div class="phase-info flex">
                            <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="100">
                                <img class="project-img zoom-darkmodelist" src="../images/projects/todo_list/todo_list_experimenting.jpg" alt="Screenshot of Dark Mode Toggle and To Do List Experimenting files">
                            </div>
                            <div class="phases-desc" data-aos="fade-right" data-aos-delay="200">
                                <p>In the design stage&comma; I considered the laws of interface design, specifically Law of Clarity&comma; Law of Preferred Action&comma; Law of Easting&comma; and&comma; most importantly&comma; Law of Feedback&period;</p>
                                <p>When developing&comma; I chose to use Vanilla JavaScript to expand from my current understanding of the language for this single&dash;paged application&period;</p>
                            </div>
                        </div>
                    </div>
                    <div class="phase3">
                        <h2 data-aos="fade-right">Takeaways &amp; Next Steps</h2>
                        <div class="phase-info flex">
                            <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="100">
                                <img class="project-img zoom-darkmodelist" src="../images/projects/todo_list/todo_list_problems.jpg" alt="Screenshot of Initial Problems on To-Do List interface">
                            </div>
                            <div class="phases-desc" data-aos="fade-right" data-aos-delay="200">
                                <p>The obstacles I faced were the to&dash;do list could not be centered&comma; the font colors had low color contrast ratios in both modes&comma; and the Dark Mode toggle overlapped content&period;</p>
                                <p>After reviewing the issues&comma; I reflected on the scalability of the project&period;</p>
                                <p>If this application extended beyond one page with additional tabs to use other productivity&dash;related tools&comma; translating the project from Vanilla JavaScript to React Native or PHP would be other options of consideration&period;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section more-projects">
                <div class="container">
                    <h2 data-aos="fade-right">More Projects&colon;</h2>
                    <ul>
                        <li data-aos="fade-right" data-aos-delay="150">
                            <a href="../projects/cafehop.php" title="Cafe Hop Mobile App"><p>Cafe Hop App</p></a>
                        </li>
                        <li data-aos="fade-right" data-aos-delay="300">
                            <a href="../projects/loclo-homepage.php" title="LOCLO Responsive Homepage"><p>LOCLO Responsive Homepage</p></a>
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