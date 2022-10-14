<li class="project-card" data-aos="fade-right">
    <a href="projects/<?php echo h($featproject->project_link); ?>" title="Link to project">
        <div class="img-container box-shadow">
            <img class="img-thumb" src="images/projects/<?php echo h($featproject->image_url); ?>" alt="<?php echo h($featproject->alt);?>">
        </div>
        <div class="project-details">
            <h3><?php echo h($featproject->project_title); ?></h3>
            <p><?php echo h($featproject->subtitle); ?></p>
        </div>
    </a>
</li>