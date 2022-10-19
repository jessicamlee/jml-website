<li class="project-card" data-aos="fade-right">
    <a href="projects/<?php echo h($featproject->project_link); ?>" title="Link to project">
        <div class="img-container box-shadow">
            <img class="img-thumb" src="images/projects/<?php echo h($featproject->image_url); ?>" alt="<?php echo h($featproject->alt);?>">
        </div>
    </a>
    <div class="project-details">
        <a href="projects/<?php echo h($featproject->project_link); ?>" title="Link to project">
            <h3><?php echo h($featproject->project_title); ?></h3>
        </a>
        <p><?php echo h($featproject->subtitle); ?></p>
    </div>
</li>