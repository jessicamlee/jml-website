<?php

    $project_title = $project_title ?? '';
    $project_type = $project_type ?? '';
    $project_description = $project_description ?? '';
    $project_skills = $project_skills ?? '';
    $live_link = $live_link ?? '';
    $code_link = $code_link ?? '';
    $project_img_src = $project_img_src ?? '';
    $project_img_alt = $project_img_alt ?? '';

?><section class="container project-overview flex" data-aos="fade-right" data-aos-delay="100">
    <div class="project-details" data-aos="fade-right" data-aos-delay="300">
        <p class="project-skills"><?php echo $project_skills; ?></p>
        <h1 class="project-title"><?php echo $project_title; ?></h1>
        <p class="project-type"><?php echo $project_type; ?></p>
        <p class="project-description"><?php echo $project_description; ?></p>
        <div class="links-btn-container flex">
            <a class="live-link box-shadow-light text-violet" data-aos="fade-right" data-aos-delay="500" href="<?php echo $live_link; ?>" target="_blank" title="Visit Live Site">Visit Site</a>
            <a class="code-link box-shadow-light" data-aos="fade-right" data-aos-delay="300" href="<?php echo $code_link; ?>" target="_blank" title="Visit GitHub Repository">Review Code</a>
        </div>
    </div>
    <div class="proj-img-container" data-aos="fade-left" data-aos-delay="600">
        <img class="project-img" src="../images/projects/<?php echo $project_img_src; ?>.jpg" alt="<?php echo $project_img_alt; ?>">
    </div>
</section>