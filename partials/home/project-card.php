<?php

    $project_title = $project_title ?? '';
    $project_type = $project_type ?? '';
    $project_pg_link = $project_pg_link ?? '';
    $project_img_src = $project_img_src ?? '';
    $project_img_alt = $project_img_alt ?? '';
    $live_link = $live_link ?? '';
    $code_link = $code_link ?? '';

?><li class="project-card" data-aos="fade-right">
    <div class="project-thumb">
        <div class="img-container">
            <img class="img-thumb" src="images/projects/<?php echo $project_img_src; ?>" alt="<?php echo $project_img_alt; ?>">
        </div>
        <div class="links-container flex">
            <div class="project-details">
                <a href="projects/<?php echo $project_pg_link; ?>.php" title="More about project">
                    <h3><?php echo $project_title; ?></h3>
                    <p><?php echo $project_type; ?></p>
                </a>
            </div>
            <div class="btn-container flex">
                <a class="live-link box-shadow-light" data-aos="fade-right"  data-aos-delay="300" href="<?php echo $live_link; ?>" target="_blank" title="Visit Live Site">Visit Site</a>
                <a class="code-link box-shadow-light" data-aos="fade-right" href="<?php echo $code_link; ?>" target="_blank" title="Visit GitHub Repository">Review Code</a>
            </div>
        </div>
    </div>
</li>