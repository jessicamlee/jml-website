<?php

    $work_title = $work_title ?? '';
    $work_desc = $work_desc ?? '';
    $work_skills = $work_skills ?? '';
    $work_img_src = $work_img_src ?? '';
    $work_img_alt = $work_img_alt ?? '';
    $live_link = $live_link ?? '';

?><li class="project-card" data-aos="fade-right">
    <div class="project-thumb">
        <div class="img-container">
            <img class="img-thumb" src="images/projects/<?php echo $work_img_src; ?>.jpg" alt="<?php echo $work_img_alt; ?>">
        </div>
        <div class="links-container flex">
            <div class="project-details">
                <p><?php echo $work_skills; ?></p>
                <h3><?php echo $work_title; ?></h3>
                <p><?php echo $work_desc; ?></p>
            </div>
            <a class="btn-primary" tabindex="0" href="<?php echo $live_link; ?>" target="_blank" title="Visit Live Site">Visit Live Site</a>
        </div>
    </div>
</li>