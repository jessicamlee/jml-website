<?php

    $ux_project_title = $ux_project_title ?? '';
    $ux_project_img_src = $ux_project_img_src ?? '';
    $ux_project_img_alt = $ux_project_img_alt ?? '';
    $ux_project_type = $ux_project_type ?? '';
    $ux_project_roles = $ux_project_roles ?? '';
    $ux_project_timeline = $ux_project_timeline ?? '';
    $prototype_link = $prototype_link ?? '';
    $slidedeck_link = $slidedeck_link ?? '';

?><div class="container flex cs-summary cs-flex-tablet">
    <div>
        <h1><?php echo $ux_project_title; ?></h1>
        <p><span class="bolded">Project&colon;</span> <?php echo $ux_project_type; ?></p>
        <p><span class="bolded">Role&colon;</span> <?php echo $ux_project_roles; ?></p>
        <p><span class="bolded">Timeline&colon;</span> <?php echo $ux_project_timeline; ?></p>
        <div class="btn-container flex cs-btns">
            <a class="btn-primary" tabindex="0" href="<?php echo $slidedeck_link; ?>" target="_blank" title="View Slide Deck">View Slide Deck</a>
            <a class="btn-secondary" tabindex="0" href="<?php echo $prototype_link; ?>" target="_blank" title="View Prototype">View Prototype</a>
        </div>
    </div>
    <div class="img-container cs-img-container">
        <img class="img-thumb" src="images/projects/<?php echo $ux_project_img_src; ?>.jpg" alt="<?php echo $ux_project_img_alt; ?>">
    </div>
</div>