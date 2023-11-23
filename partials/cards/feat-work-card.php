<?php

    $work_title = $work_title ?? '';
    $work_desc = $work_desc ?? '';
    $work_skills = $work_skills ?? '';
    $work_img_src = $work_img_src ?? '';
    $work_img_alt = $work_img_alt ?? '';
    $case_study_link = $case_study_link ?? '';

?><li data-aos="fade-right">
    <a class="feat-work-card" tabindex="0" href="<?php echo $case_study_link; ?>.php" title="Read Case Study">
    <div class="img-container">
        <img class="img-thumb" src="images/projects/<?php echo $work_img_src; ?>.jpg" alt="<?php echo $work_img_alt; ?>">
    </div>
    <div class="links-container flex">
        <div class="work-details">
            <p><?php echo $work_skills; ?></p>
            <h3><?php echo $work_title; ?></h3>
            <p><?php echo $work_desc; ?></p>
        </div>
    </div>
    </a>
</li>