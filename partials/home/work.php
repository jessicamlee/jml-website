<section id="work" class="work section">
    <div class="container">
        <h2 data-aos="fade-right">Featured Work</h2>
        <ul class="work-collection collection-container flex">
            <?php
                $work_title = 'Psystem Website';
                $work_desc = 'Designed and built the redesigned website and integrated email subscription modals using Psystem\'s updated branding while prioritizing accessible, responsive, mobile-friendly experiences.';
                $work_skills = 'Responsive UX Redesign | Figma | Webflow | MailChimp';
                $work_img_src = 'psystem_cover';
                $work_img_alt = 'Psystem Cover Photo';
                $live_link = 'https://www.psystem.ca/';
                include('partials/cards/work-card.php');
            ?>
            <?php
                $work_title = 'PsyHealth App';
                $work_desc = 'Built progressive web application features for the Minimum Viable Products of Psystem\'s PsyHealth App and Coach Portal Dashboard with full CRUD functionality.';
                $work_skills = 'App UX Design &amp; Development | MERN Stack | Material UI';
                $work_img_src = 'psyhealth_cover';
                $work_img_alt = 'Psystem\'s PsyHealth App Cover Photo';
                $live_link = 'https://play.google.com/store/apps/details?id=ca.psyhealth.twa';
                include('partials/cards/work-card.php');
            ?>
            <?php
                $work_title = 'BCIT Hack the Break 2023';
                $work_desc = 'Led the Front-End Development to build a responsive landing page with a registration form in collaboration with a UX Designer, Back-End Developer, and Content Creator 6 weeks prior to Hack the Break\'s 2023 Hackathon event.';
                $work_skills = 'Front-End Development | TypeScript | CSS | Material UI';
                $work_img_src = 'htb2023_cover';
                $work_img_alt = 'Hack the Break 2023 Cover Photo';
                $live_link = 'https://hackthebreak2023.com/';
                include('partials/cards/work-card.php');
            ?>
            <?php
                $work_title = 'Hack the 6ix 2023';
                $work_desc = 'Collaborated in a team of 7 developers to build a new responsive landing page, update Hack the 6ix\'s Storybook React UI Library, and update the Hacker Dashboard experience.';
                $work_skills = 'Front-End Development | TypeScript | SCSS | Storybook';
                $work_img_src = 'ht62023_cover';
                $work_img_alt = 'Hack the 6ix 2023 Cover Photo';
                $live_link = 'https://hackthe6ix.com/';
                include('partials/cards/work-card.php');
            ?>
        </ul>
    </div>
</section>