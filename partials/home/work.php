<section id="work" class="work section">
    <div class="container">
        <h2 data-aos="fade-right">Featured Work</h2>
        <ul class="work-collection collection-container flex">
            <?php
                $work_title = 'Psystem';
                $work_desc = 'Redesign webpages to create accessible, responsive, mobile-first experiences and support marketing initiatives.';
                $work_skills = 'Webpage Redesigns | Figma | Webflow';
                $work_img_src = 'psystem_cover';
                $work_img_alt = 'Psystem Cover Photo';
                $case_study_link = 'psystem';
                include('partials/cards/feat-work-card.php');
            ?>
            <?php
                $work_title = 'PsyHealth';
                $work_desc = 'Creating Onboarding and Payment App experiences to bridge the gap between the users and business goals.';
                $work_skills = 'App Design | UX Research | Moderated Testing';
                $work_img_src = 'psyhealth_cover';
                $work_img_alt = 'PsyHealth Cover Photo';
                $case_study_link = 'psyhealth';
                include('partials/cards/feat-work-card.php');
            ?>
        </ul>
    </div>
</section>