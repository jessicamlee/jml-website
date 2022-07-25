<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "Projects &vert; Jessica Lee";
        require('partials/global/head.php'); 
    ?>
    <body class="bg-ghost text-dviolet font-medium text-sm lg:text-base">
        <?php 
            $active_page = "projects";
            require('partials/global/header.php'); 
        ?>
        <main>
            <section class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div>
                        <h1 class="font-semibold text-4xl leading-10 md:text-5xl leading-relaxed lg:mb-2.5">Projects</h1>
                        <p class="leading-6 mt-3 mb-6">Check out my latest <b>Front&dash;End Development</b> projects with a sprinkle of user experience design&period;</p>
                        <a class="btn-gh xl:hover:bg-dviolet xl:hover:text-ghost transition ease-in-out duration-500" href="#more-projects">More Projects</a>
                    </div>
                    <div class="overflow-hidden mt-4 rounded-2xl shadow-vi">
                        <a href="projects/loclo-homepage.php" title="Go to LOCLO Homepage Project">
                            <img class="w-full lg:min-w-fit" src="images/projects/loclo_dev_1.jpg" alt="LOCLO Homepage Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                <h2 class="font-bold md:leading-5 text-base md:text-lg lg:text-xl">LOCLO Homepage</h2>
                                <p class="mt-2 font-normal text-sm">A Responsive e&dash;Commerce website experience&period;</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="mt-8 flex justify-center">
                    <a class="arrow-vi animate-bounce ease-in-out" href="#more-projects" alt="Violet arrow pointing downward" title="Discover more below">
                        <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" title="Bouncing arrow">
                            <path d="M34.2 17.0359L34.2 24.1159L25.24 32.8359L16.28 24.1159L16.28 17.0359L25.24 25.7959L34.2 17.0359Z" fill="#2b0462"/>
                        </svg>
                    </a>
                </div>
            </section>
            <section id="more-projects" class="bg-gray-300 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10">
                <div class="mt-4 grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 gap-4">
                    <div class="overflow-hidden rounded-2xl shadow-vi">
                        <a href="projects/loclo-ux-design.php" title="Go to project">
                            <img class="w-full lg:min-w-fit" src="images/projects/loclo_dev_card.jpg" alt="LOCLO Website and UX Design Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold md:leading-5 text-base md:text-lg lg:text-xl">LOCLO Web &amp; Design</h3>
                                <p class="mt-2 font-normal text-sm">A User Experience design for a local shopping experience&period;</p>
                            </div>
                        </a>
                    </div>
                    <div class="overflow-hidden rounded-2xl shadow-vi">
                        <a href="projects/todo-list.php" title="Go to project">
                            <img class="w-full lg:min-w-fit" src="images/projects/toDoList_3.jpg" alt="To Do List Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold md:leading-5 text-base md:text-lg lg:text-xl">To&dash;Do List</h3>
                                <p class="mt-2 font-normal text-sm">Let your worries go in a To-Do List in Dark Mode&excl;</p>
                            </div>
                        </a>
                    </div>
                    <div class="overflow-hidden rounded-2xl shadow-vi">
                        <a href="projects/get-ien-home.php" title="Go to project">
                            <img class="w-full lg:min-w-fit" src="images/projects/get_ien_home.jpg" alt="Get IEN the Alien Home Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold md:leading-5 text-base md:text-lg lg:text-xl">Get IEN Home&excl;</h3>
                                <p class="mt-2 font-normal text-sm">A simple game to help IEN the alien return home&period;</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <?php require('partials/global/footer.php'); ?>
        <script></script>
    </body>
</html>