<?php

    $active_page = $active_page ?? '';

?><header id="header" class="py-6 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 text-ghost bg-dviolet shadow-vi">
    <div class="xs:flex">
        <a class="basis-2/5 flex justify-center xs:justify-start" href="index.php" title="Home Page">
            <div class="w-20 pr-2 content-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 960.32 936" alt="Jessica Lee Logo"><defs></defs><g id="Layer_2" data-name="Layer 2"><g id="Design"><path class="cls-1" d="M960.32,446l-63.41,50.27c-45-.47-101.54-1.13-156.86-1.77-77.9-.91-151.48-1.76-183-2l-25.25-.16V467.16c0-38.22-.72-297.82-1.77-466.84L580.92,0c.91,147.29,1.56,363.36,1.72,441.94,37.61.36,96.45,1,158,1.76C827.13,444.71,916.56,445.74,960.32,446Z" fill="#f7fcfe"/><path class="cls-1" d="M878.3,511.06l-26.45,21c-46.49-.39-110.07-1-172.16-1.59-76.19-.72-148.16-1.41-179.86-1.62l-10.52-.07V518.23c0-7.76.05-26.9.11-53.91.24-106.51.74-328.15-.11-464.09L510.49.09c.85,136,.34,357.74.1,464.28,0,18.54-.07,33.36-.09,43.34,35.44.27,100.7.89,169.39,1.55C754.69,510,831.73,510.7,878.3,511.06Z" fill="#f7fcfe"/><path class="cls-1" d="M469.34,0c1.88,298.54,1.88,527.76,1.88,712,0,.44,0,.88,0,1.31C465.78,817.7,378.28,914.1,272,932.74A214.9,214.9,0,0,1,234.85,936c-41.16,0-81.28-12.09-117.74-35.71C70.52,870.11,31.21,822.34,0,758.08l40.94-32.45c53,115.51,133.42,172.6,222.28,157,83.69-14.67,152.6-89.88,157.16-171.39,0-184,0-412.93-1.88-710.95Z" fill="#f7fcfe"/><path class="cls-1" d="M402.59.13c.62,211.91.43,387.84.27,543.06-.07,62.48-.13,120.73-.13,175.35,0,.32,0,.64,0,1-2.51,27.65-18.28,58.56-43.28,84.8-26.83,28.17-60.48,46.86-94.75,52.61a135.41,135.41,0,0,1-22.52,1.89c-48,0-119.3-25.49-177.71-151.79l17-13.49.08,0C128.21,797,192,847.63,261.14,836c29.79-5,59.24-21.46,82.93-46.33,21.3-22.35,35.28-49.09,37.48-71.64,0-54.48.06-112.58.13-174.87.16-155.2.35-331.11-.28-543Z" fill="#f7fcfe"/></g></g></svg>
            </div>
            <p class="hidden xs:flex items-center leading-4 sm:text-md md:text-lg">Jessica Lee</p>
        </a>
        <div class="basis-1/5"></div>
        <nav class="basis-2/5 mt-6 xs:mt-0 flex justify-center content-center xs:justify-end">
            <ul class="flex items-center text-sm lg:text-base xl:text-lg uppercase leading-3 font-semibold">
                <li class="mr-4 lg:mr-6 pb-1 xl:hover:scale-125 xl:hover:border-ghost xl:hover:border-b-2 transition ease-in-out duration-600 border-solid delay-100 <?php if($active_page == "about") { echo "active"; } ?>"><a class="xl:hover:border-ghost xl:hover:border-b-4 transition ease-in-out duration-600 border-solid" href="about.php" title="About Jessica">About</a></li>
                <li class="pb-1 xl:hover:scale-125 xl:hover:border-ghost xl:hover:border-b-2 transition ease-in-out duration-600 border-solid delay-100 <?php if($active_page == "development") { echo "active"; } ?>"><a class="xl:hover:border-ghost xl:hover:border-b-4 transition ease-in-out duration-600 border-solid" href="projects.php" title="Projects by Jessica">Projects</a></li>
                <li class="ml-4 lg:ml-6 pb-1 xl:hover:scale-125 xl:hover:border-ghost xl:hover:border-b-2 transition ease-in-out duration-600 border-solid delay-100 <?php if($active_page == "contact") { echo "active"; } ?>"><a class="xl:hover:border-ghost xl:hover:border-b-4 transition ease-in-out duration-600 border-solid" href="#contact" title="Contact Jessica">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>