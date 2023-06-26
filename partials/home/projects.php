<section class="projects subpg-section">
    <div class="container">
        <h2 data-aos="fade-right">Personal Projects</h2>
        <ul class="projects-collection collection-container flex">
            <?php
                $project_title = 'Inspirational Quote Generator';
                $project_desc = 'Full-Stack Web Application';
                $project_skills = 'TypeScript | CSS3 | Next.js | AWS';
                $project_img_src = 'htb2023_cover';
                $project_img_alt = 'Inspirational Quote Generator Home Page Cover Photo';
                $live_link = 'https://prod.d28hmooal1ffyl.amplifyapp.com/';
                $code_link = 'https://github.com/jessicamlee/inspirational-quote-generator';
                include('partials/cards/project-card.php');
            ?>
            <?php
                $project_title = 'CMJSH Marketing Agency';
                $project_desc = 'Responsive Landing & About Team pages';
                $project_skills = 'React.js | TailwindCSS | BrowserStack';
                $project_img_src = 'cmjsh_cover';
                $project_img_alt = 'CMJSH Agency Website Cover Photo';
                $live_link = 'https://jessicamlee.github.io/CMJSH-agency';
                $code_link = 'https://github.com/jessicamlee/CMJSH-agency';
                include('partials/cards/project-card.php');
            ?>
        </ul>
        <a class="more-projects" data-aos="fade-up" data-aos-delay="100" href="toolkit.php" title="More Personal Projects by Jessica"><p>&plus; View more Personal Projects</p></a>
    </div>
</section>