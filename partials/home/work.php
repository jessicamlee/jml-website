<section id="work" class="work section">
    <div class="container">
        <h2 data-aos="fade-right">Featured Work</h2>
        <ul class="work-collection collection-container flex">
            <?php
                $work_title = 'Website Redesign: Boosted Visits by 33%';
                $work_subtitle = 'Psystem';
                $work_desc = 'Enhancing Accessibility across Psystem’s Online Presence';
                $work_img_src = 'psystem_cover';
                $work_img_alt = 'Psystem Cover Photo';
                $case_study_link = 'psystem';
                include('partials/cards/feat-work-card.php');
            ?>
            <?php
                $work_title = 'App Payment Setup: 20% Conversion Growth';
                $work_subtitle = 'PsyHealth';
                $work_desc = 'Empowering PsyHealth’s In-App Payment Journey';
                $work_img_src = 'psyhealth_cover';
                $work_img_alt = 'PsyHealth Cover Photo';
                $case_study_link = 'psyhealth';
                include('partials/cards/feat-work-card.php');
            ?>
        </ul>
    </div>
</section>