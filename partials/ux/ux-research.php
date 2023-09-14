<section class="ux-projects subpg-section">
    <div class="container">
        <h2 data-aos="fade-right">UX Research &amp; Testing</h2>
        <ul class="ux-collection collection-container flex" data-aos="fade-right" data-aos-delay="400">
            <?php
                $project_title = 'PsyHealth App';
                $project_desc = 'Mobile Progressive Web Application Design';
                $project_skills = 'Product Design & Research | Moderated Testing';
                $project_img_src = 'psyhealth_cover';
                $project_img_alt = 'Cover Photo of PsyHealth App text a mobile screenshot of PsyHealth\'s Insights Feature digital interface.';
                $case_study_link = 'psyhealth';
                $live_link = 'https://play.google.com/store/apps/details?id=ca.psyhealth.twa';
                include('partials/cards/ux-card-work.php');
            ?>
            <?php
                $project_title = 'DailyMail UK';
                $project_desc = 'Desktop Website Usability Study';
                $project_skills = 'UX Research | Web Redesign | Moderated Testing';
                $project_img_src = 'dailymail_cover';
                $project_img_alt = 'Cover Photo of DailyMail UK text next to desktop screenshot of redesigned web pages for DailyMail UK\'s website.';
                $case_study_link = 'dailymailuk';
                include('partials/cards/coming-soon.php'); 
            ?>
            <?php
                $project_title = 'Hazukido Canada';
                $project_desc = 'Food Ordering e-Commerce Experience';
                $project_skills = 'UX Research | Figma | Web Redesign';
                $project_img_src = 'hazukido_cover';
                $project_img_alt = 'Cover Photo of Hazukido Canada text next to suggested desktop screenshot of the redesigned website for Hazukido Canada.';
                $case_study_link = 'hazukidocanada';
                include('partials/cards/coming-soon.php');                
            ?>
        </ul>
    </div>
</section>