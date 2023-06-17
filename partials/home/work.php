<section id="work" class="projects section">
    <div class="container">
        <h2 data-aos="fade-right">Featured Work</h2>
        <ul class="projects-collection flex">
            <?php
                $project_title = 'Inspirational Quote Generator';
                $project_desc = 'Full-Stack Web Application using ZenQuotesAPI';
                $project_skills = 'TypeScript | Next.js | AWS';
                $project_img_src = 'htb2023_cover';
                $project_img_alt = 'Inspirational Quote Generator Home Page Cover Photo';
                $live_link = 'https://prod.d28hmooal1ffyl.amplifyapp.com/';
                $code_link = 'https://github.com/jessicamlee/inspirational-quote-generator';
                include('partials/home/project-card.php');
            ?>
            <?php
                $project_title = 'CMJSH Agency';
                $project_desc = 'Responsive React Landing & About pages';
                $project_skills = 'React.js | TailwindCSS | BrowserStack';
                $project_img_src = 'cmjsh_cover';
                $project_img_alt = 'CMJSH Agency Website Cover Photo';
                $live_link = 'https://jessicamlee.github.io/CMJSH-agency';
                $code_link = 'https://github.com/jessicamlee/CMJSH-agency';
                include('partials/home/project-card.php');
            ?>
            <?php
                $project_title = 'Spring Local 2022';
                $project_desc = 'Responsive e&dash;Commerce Landing & Shop Filtering pages';
                $project_skills = 'PHP | MySQL | SASS | HTML5';
                $project_img_src = 'loclo_cover';
                $project_img_alt = 'LOCLO Homepage Project Cover Photo';
                $live_link = 'https://locloclothing.jessicamlee.dev/';
                $code_link = 'https://github.com/jessicamlee/loclo-clothing';
                include('partials/home/project-card.php');
            ?>
        </ul>
    </div>
</section>