<?php

    $active_page = $active_page ?? '';

?><header id="header" class="py-6 px-20 lg:px-40" style="background-color:#d3f7ff;">
    <div class="flex">
        <a class="basis-1/4" href="../index.php" title="Home Page">
            <img class="w-auto" src="../images/jessicalee_wordmark.png" alt="Jessica Lee Wordmark">
        </a>
        <div class="basis-1/2"></div>
        <nav class="basis-1/4 flex items-center justify-end font-semibold">
            <ul class="flex items-center">
                <li class="px-4 text-base <?php if($active_page == "about") { echo "active"; } ?>"><a href="../about.php" title="Link to About">About</a></li>
                <li class="px-4 text-base <?php if($active_page == "development") { echo "active"; } ?>"><a href="../projects.php" title="Link to Development Projects">Projects</a></li>
                <li class="pl-4 text-base <?php if($active_page == "contact") { echo "active"; } ?>"><a href="#contact" title="Link to Contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>