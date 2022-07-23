<?php

    $active_page = $active_page ?? '';

?><header id="header" class="py-4 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 text-ghost bg-dviolet">
    <div class="xs:flex">
        <a class="basis-2/5 flex justify-center xs:justify-start" href="index.php" title="Home Page">
            <img class="w-20 content-center" src="images/jessicalee_favicon.svg" alt="Jessica Lee Wordmark">
            <p class="hidden xs:flex items-center leading-4 sm:text-md md:text-lg">Jessica Lee</p>
        </a>
        <div class="basis-1/5"></div>
        <nav class="basis-2/5 mt-4 xs:mt-0 flex justify-center content-center xs:justify-end">
            <ul class="flex items-center text-sm lg:text-base xl:text-lg uppercase leading-3 font-semibold">
                <li class="pr-4 lg:pr-6 <?php if($active_page == "about") { echo "active"; } ?>"><a href="about.php" title="About Jessica">About</a></li>
                <li class="<?php if($active_page == "development") { echo "active"; } ?>"><a href="projects.php" title="Projects by Jessica">Projects</a></li>
                <li class="pl-4 lg:pl-6 <?php if($active_page == "contact") { echo "active"; } ?>"><a href="#contact" title="Contact Jessica">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>