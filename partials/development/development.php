<section class="dev-projects subpg-section">
    <div class="container">
        <ul class="dev-collection collection-container flex" data-aos="fade-right" data-aos-delay="400">
            <?php
                $project_title = 'Daily Inspiration Generator';
                $project_desc = 'Inspirational Quote Image Generator';
                $project_skills = 'TypeScript | CSS3 | Next.js | AWS';
                $project_img_src = 'inspo_quote_cover';
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
            <?php
                $project_title = 'LOCLO Clothing Spring \'22';
                $project_desc = 'Responsive e&dash;Commerce Website';
                $project_skills = 'PHP | MySQL | SASS | HTML5';
                $project_img_src = 'loclo_cover';
                $project_img_alt = 'LOCLO Homepage Project Cover Photo';
                $live_link = 'https://locloclothing.jessicamlee.dev/';
                $code_link = 'https://github.com/jessicamlee/loclo-clothing';
                include('partials/cards/project-card.php');                
            ?>
        </ul>
    </div>
</section>