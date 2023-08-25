<?php

    $ux_project_title = $ux_project_title ?? '';
    $ux_project_img_src = $ux_project_img_src ?? '';
    $ux_project_img_alt = $ux_project_img_alt ?? '';
    $ux_project_type = $ux_project_type ?? '';
    $ux_project_roles = $ux_project_roles ?? '';
    $ux_project_duration = $ux_project_duration ?? '';
    $prototype_link = $prototype_link ?? '';

?><section class="subpg-section">
    <div class="container flex cs-summary">
        <div>
            <h1><?php echo $ux_project_title; ?></h1>
            <p><span class="bolded">Project:</span> <?php echo $ux_project_type; ?></p>
            <p><span class="bolded">Role:</span> <?php echo $ux_project_roles; ?></p>
            <p><span class="bolded">Duration:</span> <?php echo $ux_project_duration; ?></p>
            <div class="btn-container flex">
                <a class="prototype-link box-shadow-light" tabindex="0" href="<?php echo $prototype_link; ?>" target="_blank" title="View Prototype">View Prototype</a>
                <a class="case-study-link box-shadow-light" tabindex="0" href="ux-design/<?php echo $case_study_link; ?>.php" title="Read Case Study">Read Case Study</a>
            </div>
        </div>
        <div class="img-container cs-img-container">
            <img class="img-thumb" src="../images/projects/<?php echo $ux_project_img_src; ?>.jpg" alt="<?php echo $ux_project_img_alt; ?>">
        </div>
    </div>
</section>