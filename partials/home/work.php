<section id="work" class="work section">
    <div class="container">
        <h2 data-aos="fade-right">Featured Work</h2>
        <ul class="work-collection collection-container flex">
            <?php
                $work_title = 'Website Redesign: Boosted Visits by 33%';
                $work_desc = 'Transforming Psystem’s Digital Presence for Chronic Pain Management';
                $work_subtitle = 'Psystem';
                $work_img_src = 'psystem_cover';
                $work_img_alt = 'Psystem Cover Photo';
                $case_study_link = 'psystem';
                include('partials/cards/feat-work-card.php');
            ?>
            <?php
                $work_title = 'PsyHealth';
                $work_desc = 'Empowering PsyHealth’s Digital Transactions in Mental Health';
                $work_subtitle = 'App Payment Setup: 20% Conversion Rate Increase';
                $work_img_src = 'psyhealth_cover';
                $work_img_alt = 'PsyHealth Cover Photo';
                $case_study_link = 'psyhealth';
                include('partials/cards/feat-work-card.php');
            ?>
        </ul>
    </div>
</section>