<section id="work" class="work section">
    <div class="container">
        <h2 data-aos="fade-right">Featured Work</h2>
        <ul class="work-collection collection-container flex">
            <?php
                $work_title = 'Psystem';
                $work_desc = 'Elevating user experience and marketing impact with enhanced mobile-friendly design.';
                $work_skills = '↪ Web and Ad Landing page Redesign, Figma, Webflow';
                $work_img_src = 'psystem_cover';
                $work_img_alt = 'Psystem Cover Photo';
                $case_study_link = 'psystem';
                include('partials/cards/feat-work-card.php');
            ?>
            <?php
                $work_title = 'PsyHealth';
                $work_desc = 'Craft a sales-driven payment journey to enhance user experiences and revenue growth.';
                $work_skills = '↪ Subscription-Payment App Design, UX Research, Moderated Usability Testing';
                $work_img_src = 'psyhealth_cover';
                $work_img_alt = 'PsyHealth Cover Photo';
                $case_study_link = 'psyhealth';
                include('partials/cards/feat-work-card.php');
            ?>
        </ul>
    </div>
</section>