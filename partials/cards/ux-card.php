<?php 

    $project_title = $project_title ?? '';
    $project_desc = $project_desc ?? '';
    $project_skills = $project_skills ?? '';
    $project_img_src = $project_img_src ?? '';
    $project_img_alt = $project_img_alt ?? '';
    $prototype_link = $prototype_link ?? '';
    // $case_study_link = $case_study_link ?? '';

?><li class="project-card" data-aos="fade-right">
<div class="project-thumb">
    <div class="img-container">
        <img class="img-thumb" src="images/projects/<?php echo $project_img_src; ?>.jpg" alt="<?php echo $project_img_alt; ?>">
    </div>
    <div class="links-container flex">
        <div class="project-details">
            <p><?php echo $project_skills; ?></p>
            <h3><?php echo $project_title; ?></h3>
            <p><?php echo $project_desc; ?></p>
        </div>
        <div class="btn-container flex">
            <a class="prototype-link box-shadow-light" tabindex="0" href="<?php echo $prototype_link; ?>" target="_blank" title="View Prototype">View Prototype</a>
            <!-- <a class="case-study-link box-shadow-light" tabindex="0" href="<?php echo $case_study_link; ?>" target="_blank" title="View Case Study">View Case Study</a> -->
        </div>
    </div>
</div>
</li>