<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $project_title = "LOCLO UX Design &vert; Jessica Lee";
        require('../partials/global/head_projects.php'); 
    ?>
    <body class="wrapper">
        <?php require('../partials/global/header_projects.php'); ?>
        <main class="artifact-pg">
            <section class="section container project-overview flex bg-forestgreen" data-aos="fade-right" data-aos-delay="100">
                <div class="project-details" data-aos="fade-right" data-aos-delay="300">
                    <p class="project-skills">Figma &vert; Adobe XD &vert; Maze &vert; Useberry</p>
                    <h1 class="project-title">Spring Local 2022 <br class="hidden-tablet"> Web &amp; Mobile Design</h1>
                    <p class="project-type">Local Shopping User Experience</p>
                    <p class="project-description">The LOCLO website was designed for a fictional client who is a one&dash;woman entrepreneur and environment enthusiast&period; The project goal is to design a responsive website and mobile application experience to target a mobile&dash;first audience&period;
                    <div class="links-btn-container flex">
                        <a class="code-link box-shadow-light" data-aos="fade-right" data-aos-delay="500" href="https://www.figma.com/proto/JbKiQ1RDFVuYueIczoJqCm/LOCLO-Mobile-App_1?page-id=179%3A823&node-id=179%3A1069&viewport=388%2C393%2C0.21&scaling=scale-down&starting-point-node-id=179%3A1069loclo-clothing" target="_blank" title="Link to LOCLO's Mobile Design on Figma">Prototype</a>
                        <a class="live-link text-forestgreen box-shadow-light" data-aos="fade-right" data-aos-delay="300" href="#" target="_blank" title="Link to GitHub Repository">Visit Site</a>
                    </div>
                </div>
                <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="600">
                    <img class="project-img zoom-forestgreen" src="../images/projects/loclo_design/loclo_ux_cover.jpg" alt="LOCLO UX Design Cover Photo">
                </div>
            </section>
            <section class="section">
                <div class="container project-process">
                    <div class="phase1">
                        <h2 data-aos="fade-right" data-aos-delay="600">Planning &amp; Research</h2>
                        <div class="phase-info flex">
                            <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="500">
                                <img class="project-img zoom-forestgreen" src="../images/projects/loclo_design/loclo_ux_app_overview.jpg" alt="Screenshot of LOCLO Homepage Planning Process">
                            </div>
                            <div class="phases-desc" data-aos="fade-right" data-aos-delay="800">
                                <p>Learning about and understanding LOCLO&apos;s competitors and their users guided the design process to create intuitive interfaces and user&dash;centered experiences for each platform&period;</p>
                                <p>I drafted a sitemap to outline the website&apos;s information architecture and gathered images to share the &ldquo;look and feel&rdquo; for the project and reflect my research on LOCLO&apos;s competitors&period;</p>
                                <p>I then transformed my pen&dash;and&dash;paper sketches to high&dash;fidelity wireframes for a more concrete example to test the experience&period;</p>
                            </div>
                        </div>
                    </div>
                    <div class="phase2">
                        <h2 data-aos="fade-right">Usability Studies Findings</h2>
                        <div class="phase-info flex">
                            <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="100">
                                <img class="project-img zoom-forestgreen" src="../images/projects/loclo_design/loclo_ux_compare.jpg" alt="Screenshot comparign the initial and final LOCLO Add to Cart Web Design">
                            </div>
                            <div class="phases-desc" data-aos="fade-right" data-aos-delay="200">
                                <p>The unmoderated usability studies were hosted on <a href="https://www.useberry.com/integrations/figma/" target="_blank" title="Link to Useberry Figma Integration page">Useberry</a> for the website and <a href="https://maze.co/use-cases/wireframe-and-usability-testing/" target="_blank" title="Link to Maze Usability Testing page">Maze</a> for the mobile application&period;</p>
                                <p>Reviewing the screen recordings&comma; statistics&comma; and heatmap for each screen provided a better understanding that the &ldquo;Proceed to Checkout&rdquo; process on the website and &ldquo;Add to Cart&rdquo; task on the mobile app had a lower success rate&period;</p>
                                <p>The lower misclick and success rates highlighted which areas needed more clarity to help users complete the task more efficiently in a future usability study&period;</p>
                            </div>
                        </div>
                    </div>
                    <div class="phase3">
                        <h2 data-aos="fade-right">Next Steps</h2>
                        <div class="phase-info flex">
                            <div class="img-container box-shadow" data-aos="fade-left" data-aos-delay="100">
                                <img class="project-img zoom-forestgreen" src="../images/projects/loclo_develop/loclo_developed_v2.jpg" alt="Screenshot of LOCLO Responsive Homepage">
                            </div>
                            <div class="phases-desc" data-aos="fade-right" data-aos-delay="200">
                                <p>One noticeable change in the revised website design was reorganizing the content to fit above the fold&period; This change would limit an additional action by the user to scroll down the page to complete their task&period;</p>
                                <p>Another revision was a color scheme update across the website and mobile application wireframes and prototype for consistent branding&period;</p>
                                <p>The next steps for this project is to prepare for a future usability study on each platform as I brainstormed new questions to answer and noted previous pain points to observe improvements for&period;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section more-projects">
                <div class="container">
                    <h2 data-aos="fade-right">More Projects&colon;</h2>
                    <a class="block" data-aos="fade-right" data-aos-delay="150" href="../projects/loclo-homepage.php" title="LOCLO Responsive Homepage">LOCLO Responsive Homepage</a>
                    <a class="block" data-aos="fade-right" data-aos-delay="300" href="../projects/cafehop.php" title="Cafe Hop Mobile App">Caf&eacute; Hop App</a>
                </div>
            </section>
            <?php require ('../partials/global/contact.php'); ?>
        </main>
        <?php require('../partials/global/footer.php'); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="../scripts/medium-zoom.min.js"></script>
        <script src="../scripts/scroll-lock.js"></script>
        <script src="../scripts/main.js"></script>
    </body>
</html>