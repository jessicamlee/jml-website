<?php

    $ux_project_title = $ux_project_title ?? '';
    $ux_project_img_src = $ux_project_img_src ?? '';
    $ux_project_img_alt = $ux_project_img_alt ?? '';
    $ux_project_type = $ux_project_type ?? '';
    $ux_project_roles = $ux_project_roles ?? '';
    $ux_project_timeline = $ux_project_timeline ?? '';

?><div class="container flex cs-summary cs-flex-tablet">
    <div>
        <h1><?php echo $ux_project_title; ?></h1>
        <p><span class="bolded">Project&colon;</span> <?php echo $ux_project_type; ?></p>
        <p><span class="bolded">Role&colon;</span> <?php echo $ux_project_roles; ?></p>
        <p><span class="bolded">Timeline&colon;</span> <?php echo $ux_project_timeline; ?></p>
    </div>
    <div class="img-container cs-img-container">
        <img class="img-thumb" src="images/projects/<?php echo $ux_project_img_src; ?>.jpg" alt="<?php echo $ux_project_img_alt; ?>">
    </div>
</div>