<?php

    $active_page = $active_page ?? '';

?><header id="header" class="py-4 sm:py-2 px-16 sm:px-24 lg:px-40 text-ghost bg-dviolet">
    <div class="flex">
        <a class="basis-2/5 flex" href="index.php" title="Home Page">
            <img class="w-20" src="images/jessicalee_favicon.svg" alt="Jessica Lee Wordmark">
            <p class="hidden sm:flex items-center">Jessica Lee</p>
        </a>
        <div class="basis-1/5"></div>
        <nav class="basis-2/5 flex items-center justify-end">
            <ul class="flex items-center">
                <li class="pr-2 sm:pr-4 lg:pr-6 font-medium text-xs md:text-sm lg:text-md xl:text-lg uppercase leading-3 <?php if($active_page == "about") { echo "active"; } ?>"><a href="about.php" title="Link to About">About</a></li>
                <li class="font-medium text-xs md:text-sm lg:text-md xl:text-lg uppercase leading-3 <?php if($active_page == "development") { echo "active"; } ?>"><a href="projects.php" title="Link to Development Projects">Projects</a></li>
                <li class="pl-2 sm:pl-4 lg:pl-6 font-medium text-xs md:text-sm lg:text-md xl:text-lg uppercase leading-3 <?php if($active_page == "contact") { echo "active"; } ?>"><a href="#contact" title="Link to Contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>