<?php

    $ux_project_title = $ux_project_title ?? '';
    $ux_project_img_src = $ux_project_img_src ?? '';
    $ux_project_img_alt = $ux_project_img_alt ?? '';
    $ux_project_type = $ux_project_type ?? '';
    $ux_project_roles = $ux_project_roles ?? '';
    $ux_project_duration = $ux_project_duration ?? '';

?><div class="container flex cs-summary cs-flex-tablet">
    <div>
        <h1><?php echo $ux_project_title; ?></h1>
        <p><span class="bolded">Project:</span> <?php echo $ux_project_type; ?></p>
        <p><span class="bolded">Role:</span> <?php echo $ux_project_roles; ?></p>
        <p><span class="bolded">Duration:</span> <?php echo $ux_project_duration; ?></p>
    </div>
    <div class="img-container cs-img-container">
        <img class="img-thumb" src="images/projects/<?php echo $ux_project_img_src; ?>.jpg" alt="<?php echo $ux_project_img_alt; ?>">
    </div>
</div>