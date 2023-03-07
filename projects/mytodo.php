<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $project_title = "To&dash;Do List &vert; Jessica Lee";
        include('../partials/projects/head_projects.php');
    ?>
    <body>
        <div class="wrapper">
            <?php include('../partials/projects/header_projects.php'); ?>
            <main class="artifact-pg">
                <?php
                    $project_title = 'My To&dash;Do List';
                    $project_type = 'Temporary To&dash;Do List';
                    $project_description = 'Beat procrastination with this temporary to&dash;do list&period; Combined with its own Dark Mode Theme and Pomodoro Timer&comma; become empowered to begin and complete your tasks within the same session&period;';
                    $project_skills = 'HTML5 &vert; SASS &vert; JavaScript';
                    $live_link = 'https://mytodolist.jessicamlee.dev/';
                    $code_link = 'https://github.com/jessicamlee/todolist';
                    $project_img_src = 'todo_cover';
                    $project_img_alt = 'My To Do List Cover Photo';
                    include('../partials/projects/artifact_overview.php');
                ?>
                <section class="more-projects">
                    <div class="container">
                        <h2 data-aos="fade-right">More Projects&colon;</h2>
                        <a class="block" data-aos="fade-right" data-aos-delay="100" href="../projects/hackthebreak2023.php" title="Hack the Break 2023 Website">Hack the Break 2023 Website</a>
                        <a class="block" data-aos="fade-right" data-aos-delay="200" href="../projects/locloclothing.php" title="LOCLO Responsive Homepage">LOCLO Responsive Homepage</a>
                    </div>
                </section>
                <?php include('../partials/global/contact.php'); ?>
            </main>
            <?php include('../partials/global/footer.php'); ?>
        </div>
        <?php include('../partials/projects/footer_links.php'); ?>
    </body>
</html>