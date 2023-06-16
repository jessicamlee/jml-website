<section id="work" class="projects section">
    <div class="container">
        <h2 data-aos="fade-right">Latest Projects</h2>
        <ul class="projects-collection flex">
            <?php
                $project_title = 'BCIT Hack the Break 2023';
                $project_type = 'Responsive Hackathon Landing page';
                $project_img_src = 'htb2023_cover';
                $project_img_alt = 'Hack the Break 2023 Cover Photo';
                $live_link = 'https://hackthebreak2023.com/';
                $code_link = 'https://github.com/jmc37/HackTheBreak';
                include('partials/home/project-card.php');
            ?>
            <?php
                $project_title = 'CMJSH Agency';
                $project_type = 'Responsive React Landing pages';
                $project_img_src = 'cmjsh_cover';
                $project_img_alt = 'CMJSH Agency Website Cover Photo';
                $live_link = 'https://jessicamlee.github.io/CMJSH-agency';
                $code_link = 'https://github.com/jessicamlee/CMJSH-agency';
                include('partials/home/project-card.php');
            ?>
            <?php
                $project_title = 'Spring Local 2022';
                $project_type = 'Responsive e&dash;Commerce Experience';
                $project_img_src = 'loclo_cover';
                $project_img_alt = 'LOCLO Homepage Project Cover Photo';
                $live_link = 'https://locloclothing.jessicamlee.dev/';
                $code_link = 'https://github.com/jessicamlee/loclo-clothing';
                include('partials/home/project-card.php');
            ?>
        </ul>
    </div>
</section>