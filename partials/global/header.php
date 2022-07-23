<?php

    $active_page = $active_page ?? '';

?><header id="header" class="py-5 px-20 lg:px-40 text-ghost bg-dviolet">
    <div class="flex">
        <a class="basis-1/4" href="index.php" title="Home Page">
            <img class="w-auto" src="images/jessicalee_wordmark.svg" alt="Jessica Lee Wordmark">
        </a>
        <div class="basis-1/2"></div>
        <nav class="basis-1/4 flex items-center justify-end font-semibold">
            <ul class="flex items-center">
                <li class="pr-3 font-medium lg:text-md uppercase leading-3 <?php if($active_page == "about") { echo "active"; } ?>"><a href="about.php" title="Link to About">About</a></li>
                <li class="px-3 font-medium lg:text-md uppercase leading-3 <?php if($active_page == "development") { echo "active"; } ?>"><a href="projects.php" title="Link to Development Projects">Projects</a></li>
                <li class="pl-3 font-medium lg:text-md uppercase leading-3 <?php if($active_page == "contact") { echo "active"; } ?>"><a href="#contact" title="Link to Contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>