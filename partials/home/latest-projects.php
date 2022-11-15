<section id="projects" class="projects section">
    <div class="container">
        <h2 data-aos="fade-right">Latest Projects</h2>
        <ul class="projects-collection flex">
            <?php
                $project_title = 'Spring Local 2022';
                $project_type = 'Responsive Homepage';
                $project_pg_link = 'locloclothing';
                $project_img_src = 'loclo_cover.jpg';
                $project_img_alt = 'LOCLO Homepage Project Cover Photo';
                $live_link = 'https://locloclothing.jessicamlee.dev/';
                $code_link = 'https://github.com/jessicamlee/loclo-clothing';
                include('partials/home/project-card.php');
            ?>
            <?php
                $project_title = 'Caf&eacute; Hop App';
                $project_type = 'Android&dash;based Mobile Application';
                $project_pg_link = 'cafehop';
                $project_img_src = 'cafehop_cover.jpg';
                $project_img_alt = 'Cafe Hop App Cover Photo';
                $live_link = 'https://cafehop.jessicamlee.dev/';
                $code_link = 'https://github.com/jessicamlee/cafehop';
                include('partials/home/project-card.php');
            ?>
            <?php
                $project_title = 'My To&dash;Do List';
                $project_type = 'Temporary To&dash;Do List';
                $project_pg_link = 'mytodo';
                $project_img_src = 'todo_cover.jpg';
                $project_img_alt = 'My To-Do List Cover Photo';
                $live_link = 'https://mytodolist.jessicamlee.dev/';
                $code_link = 'https://github.com/jessicamlee/todolist';
                include('partials/home/project-card.php');
            ?>
        </ul>
    </div>
</section>