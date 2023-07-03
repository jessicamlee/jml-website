<section id="work" class="work section">
    <div class="container">
        <h2 data-aos="fade-right">Featured Work</h2>
        <ul class="work-collection collection-container flex">
            <?php
                $work_title = 'PsyHealth by Psystem';
                $work_desc = 'Built progressive web app features for Psystem\'s App and Coach Portal for full CRUD functionality and analyzed, redesigned, and updated website and ad landing pages for responsive, accessible, mobile-first experiences.';
                $work_skills = 'MERN Stack | React-Redux | Material UI';
                $work_img_src = 'psystem_cover';
                $work_img_alt = 'Psystem Cover Photo';
                $live_link = 'https://play.google.com/store/apps/details?id=ca.mydigitalcarehome.twa';
                include('partials/cards/work-card.php');
            ?>
            <?php
                $work_title = 'BCIT Hack the Break 2023';
                $work_desc = 'Led the Front-End Development to build a responsive landing page with a registration form in collaboration with a UX Designer, Back-End Developer, and Content Creator 6 weeks prior to Hack the Break\'s 2023 Hackathon event.';
                $work_skills = 'TypeScript | CSS Modules | MUI';
                $work_img_src = 'htb2023_cover';
                $work_img_alt = 'Hack the Break 2023 Cover Photo';
                $live_link = 'https://hackthebreak2023.com/';
                include('partials/cards/work-card.php');
            ?>
            <?php
                $work_title = 'Hack the 6ix 2023';
                $work_desc = 'Collaborated in a team of 7 developers to update HT6\'s React Storybook UI Library and build a new responsive landing page with email notification and registration forms for Hack the 6ix\'s 2023 Hackathon event.';
                $work_skills = 'TypeScript | Storybook UI | SCSS Modules';
                $work_img_src = 'ht62023_cover';
                $work_img_alt = 'Hack the 6ix 2023 Cover Photo';
                $live_link = 'https://hackthe6ix.com/';
                include('partials/cards/work-card.php');
            ?>
        </ul>
    </div>
</section>