<?php 
    require('init.php');
?>
<!DOCTYPE html>
<html lang="en-CA">
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
            <section class="bg-dviolet px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div>
                        <h2 class="font-semibold text-4xl leading-10 xl:text-5xl leading-relaxed mb-4 text-ghost">Hi&comma; I&apos;m Jessica</h2>
                        <p class="leading-6 mb-6 text-ghost font-light">I&apos;m a curious storyteller and systematic problem&dash;solver&comma; currently pursuing a career in <span class="font-bold">Front&dash;End Development</span> in Vancouver&comma; British Columbia&period;</p>
                        <a class="btn-vi xl:btn-vi:hover" href="#contact">Get in touch</a>
                    </div>
                    <!-- Logo Animation Here -->
                    <img class="justify-self-center w-1/2 sm:w-3/4" src="images/jessicalee_favicon.svg" alt="JL Logo Animation">
                </div>
                <!-- Not currently visible -->
                <div class="mt-2 flex">
                    <a class="justify-self-center" href="#projects">
                        <img class="w-8 rotate-270" src="images/icons/arrow_button.svg" title="Discover more below">
                    </a>
                </div>
            </section>
            <section id="projects" class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 lg:py-14">
                <h2 class="font-semibold text-3xl lg:text-4xl leading-relaxed lg:mb-2.5">Projects</h2>
                <div class="mt-4 grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 gap-4">
                    <div class="overflow-hidden rounded-2xl shadow-vi">
                        <a href="projects/loclo-homepage.php" title="Link to project">
                            <img class="w-full lg:min-w-fit" src="images/projects/loclo_dev_card.jpg" alt="LOCLO Homepage Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold md:leading-5 text-base md:text-lg lg:text-xl">LOCLO Homepage</h3>
                                <p class="mt-2 font-normal text-sm">A Responsive e&dash;Commerce website experience&period;</p>
                            </div>
                        </a>
                    </div>
                    <div class="overflow-hidden rounded-2xl shadow-vi">
                        <a href="projects/loclo-homepage.php" title="Link to project">
                            <img class="w-full lg:min-w-fit" src="images/projects/toDoList_3.jpg" alt="To Do List Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold text-base md:text-lg lg:text-xl">My To&dash;Do List</h3>
                                <p class="mt-2 font-normal text-sm">Let your worries go in a To-Do List in Dark Mode&excl;</p>
                            </div>
                        </a>
                    </div>
                    <div class="overflow-hidden rounded-2xl shadow-vi">
                        <a href="projects/loclo-homepage.php" title="Link to project">
                            <img class="w-full lg:min-w-fit" src="images/projects/get_ien_home.jpg" alt="Get IEN the Alien Home Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold text-base md:text-lg lg:text-xl">Get IEN Home&excl;</h3>
                                <p class="mt-2 font-normal text-sm">A simple game to help IEN the alien return home&period;</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <section class="bg-gray-300 px-8 xs:px-12 sm:px-16 md:px-24 lg:px-28 xl:px-32 py-14 ">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h2 class="font-semibold text-3xl lg:text-4xl leading-relaxed lg:mb-2.5">About</h2>
                        <p class="leading-6 mb-6">I want to crafting user&dash;centered projects to share stories in immersive&comma; insightful&comma; and memorable experiences&period;</p>
                        <a class="btn-gh xl:btn-gh:hover" href="about.php">About Me</a>
                    </div>
                    <img class="rounded-full shadow-vi justify-self-center w-4/6 md:w-full" src="images/about/jessicalee_profilepicture.jpg" alt="Jessica Lee Profile Picture">
                </div>
            </section>
        </main>
        <?php require ('partials/global/footer.php'); ?>
        <script></script>
    </body>
</html>