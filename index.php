<?php 
    require('init.php');
?>
<!DOCTYPE html>
<html class="scroll-smooth dark" lang="en-CA">
    <?php 
        $title_text = "Jessica Lee &vert; Front&dash;End Development";
        require ('partials/global/head.php'); 
    ?>
    <body class="bg-ghost text-dviolet font-medium text-sm lg:text-base">
        <?php 
            $active_page = "home";
            require ('partials/global/header.php'); 
        ?>
        <main>
            <section class="bg-dviolet px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 shadow-vi">
                <div class="container max-w-screen-xl mx-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div>
                            <span class="font-semibold text-4xl leading-10 xl:text-5xl leading-relaxed mb-2 text-ghost">Hi&comma; I&apos;m <h1 class="inline mt-4">Jessica</h1></span>
                            <p class="leading-6 mb-6 text-ghost font-light mt-2">I&apos;m a curious storyteller and systematic problem&dash;solver&comma; currently pursuing a career in <span class="font-bold">Front&dash;End Development</span> in Vancouver&comma; British Columbia&period;</p>
                            <div><a class="btn-gh xl:hover:bg-dviolet xl:hover:text-ghost transition ease-in-out duration-500 border-ghost dark:border-ghost dark:shadow-vindigo" href="#contact">Get in touch</a></div>
                        </div>
                        <div class="hidden sm:block justify-self-center w-1/2 sm:w-3/4 overflow-visible">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 960.32 936" alt="Jessica Lee Logo Animation"><defs></defs>
                            <path class="l-right fill-ghost animate-letterl" d="M960.32,446l-63.41,50.27c-45-.47-101.54-1.13-156.86-1.77-77.9-.91-151.48-1.76-183-2l-25.25-.16V467.16c0-38.22-.72-297.82-1.77-466.84L580.92,0c.91,147.29,1.56,363.36,1.72,441.94,37.61.36,96.45,1,158,1.76C827.13,444.71,916.56,445.74,960.32,446Z"/>
                            <path class="l-left fill-ghost animate-letterl" d="M878.3,511.06l-26.45,21c-46.49-.39-110.07-1-172.16-1.59-76.19-.72-148.16-1.41-179.86-1.62l-10.52-.07V518.23c0-7.76.05-26.9.11-53.91.24-106.51.74-328.15-.11-464.09L510.49.09c.85,136,.34,357.74.1,464.28,0,18.54-.07,33.36-.09,43.34,35.44.27,100.7.89,169.39,1.55C754.69,510,831.73,510.7,878.3,511.06Z"/>
                            <path class="j-right fill-ghost animate-letterj" d="M469.34,0c1.88,298.54,1.88,527.76,1.88,712,0,.44,0,.88,0,1.31C465.78,817.7,378.28,914.1,272,932.74A214.9,214.9,0,0,1,234.85,936c-41.16,0-81.28-12.09-117.74-35.71C70.52,870.11,31.21,822.34,0,758.08l40.94-32.45c53,115.51,133.42,172.6,222.28,157,83.69-14.67,152.6-89.88,157.16-171.39,0-184,0-412.93-1.88-710.95Z"/>
                            <path class="j-left fill-ghost animate-letterj" d="M402.59.13c.62,211.91.43,387.84.27,543.06-.07,62.48-.13,120.73-.13,175.35,0,.32,0,.64,0,1-2.51,27.65-18.28,58.56-43.28,84.8-26.83,28.17-60.48,46.86-94.75,52.61a135.41,135.41,0,0,1-22.52,1.89c-48,0-119.3-25.49-177.71-151.79l17-13.49.08,0C128.21,797,192,847.63,261.14,836c29.79-5,59.24-21.46,82.93-46.33,21.3-22.35,35.28-49.09,37.48-71.64,0-54.48.06-112.58.13-174.87.16-155.2.35-331.11-.28-543Z"/></svg>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <a class="arrow-gh animate-bounce ease-in-out" href="#projects" alt="Violet arrow pointing downward" title="Discover more below">
                            <svg class="fill-ghost" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" title="Bouncing arrow">
                                <path d="M34.2 17.0359L34.2 24.1159L25.24 32.8359L16.28 24.1159L16.28 17.0359L25.24 25.7959L34.2 17.0359Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
            <section id="projects" class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 lg:py-14 dark:bg-vindigo dark:text-ghost">
                <div class="container max-w-screen-xl mx-auto">
                    <h2 class="font-semibold text-2xl 2xs:text-3xl lg:text-4xl leading-8 xs:leading-relaxed lg:mb-2.5">Projects</h2>
                    <div class="mt-2 grid grid-cols-1 xs:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="overflow-hidden rounded-2xl shadow-vi xl:hover:scale-105 transition ease-in-out duration-600 delay-75">
                            <a href="projects/loclo-homepage.php" title="Link to project">
                                <img class="w-full" src="images/projects/loclo_develop/loclo_developed_v2.jpg" alt="LOCLO Homepage Project Cover Photo">
                                <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                    <h3 class="font-bold md:leading-5 text-lg lg:text-xl">LOCLO Homepage</h3>
                                    <p class="mt-2 font-normal text-sm">A Responsive e&dash;Commerce website experience&period;</p>
                                </div>
                            </a>
                        </div>
                        <div class="overflow-hidden rounded-2xl shadow-vi xl:hover:scale-105 transition ease-in-out duration-600 delay-75">
                            <a href="projects/todo-list.php" title="Link to project">
                                <img class="w-full" src="images/projects/todo_list/todo_list_both_modes.jpg" alt="To Do List Project Cover Photo">
                                <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                    <h3 class="font-bold md:leading-5 text-lg lg:text-xl blur-none">To&dash;Do List</h3>
                                    <p class="mt-2 font-normal text-sm blur-none">Let your worries go in a To&dash;Do List in Dark Mode&excl;</p>
                                </div>
                            </a>
                        </div>
                        <div class="overflow-hidden rounded-2xl shadow-vi xl:hover:scale-105 transition ease-in-out duration-600 delay-75">
                            <a href="projects/get-ien-home.php" title="Link to project">
                                <img class="w-full" src="images/projects/get_ien_home/get_ien_home_cover.jpg" alt="Get IEN the Alien Home Project Cover Photo">
                                <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                    <h3 class="font-bold md:leading-5 text-lg lg:text-xl">Get IEN Home&excl;</h3>
                                    <p class="mt-2 font-normal text-sm">A simple game to help IEN the alien return home&period;</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-gray-300 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 dark:bg-dviolet dark:text-ghost">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 container max-w-screen-xl mx-auto">
                    <div>
                        <h2 class="font-semibold text-2xl 2xs:text-3xl lg:text-4xl leading-8 xs:leading-relaxed lg:mb-2.5">About</h2>
                        <p class="leading-6 mt-2 xs:mt-0 mb-6">I want to crafting user&dash;centered projects to share stories in immersive&comma; insightful&comma; and memorable experiences&period;</p>
                        <a class="btn-gh xl:hover:bg-dviolet xl:hover:text-ghost transition ease-in-out duration-500 dark:border-ghost dark:shadow-vindigo" href="about.php">About Me</a>
                    </div>
                    <img class="rounded-full shadow-vi justify-self-center w-5/6 sm:w-4/6 dark:shadow-vindigo" src="images/jessicamlee_profilepicture.jpg" alt="Jessica Lee Profile Picture">
                </div>
            </section>
        </main>
        <?php require ('partials/global/footer.php'); ?>
        <script></script>
    </body>
</html>