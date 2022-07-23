<?php 
    require('init.php');
?>
<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "Jessica Lee &vert; Front&dash;End Development";
        require ('partials/global/head.php'); 
    ?>
    <body class="bg-ghost text-dviolet font-medium">
        <?php 
            $active_page = "home";
            require ('partials/global/header.php'); 
        ?>
        <main>
            <section class="bg-dviolet px-20 lg:px-40 py-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div>
                        <h2 class="font-semibold md:text-3xl lg:text-4xl xl:text-5xl leading-relaxed mb-4 xl:mb-1.5 text-ghost">Hi&comma; I&apos;m Jessica</h2>
                        <p class="leading-6 mb-6 text-ghost font-light">I&apos;m a curious storyteller and systematic problem&dash;solver&comma; currently pursuing a career in <span class="font-bold">Front&dash;End Development</span> in Vancouver&comma; British Columbia&period;</p>
                        <a class="btn-vi btn-vi:hover" href="#contact">Get in touch</a>
                    </div>
                    <!-- Logo Animation Here -->
                    <img class="" src="images/jessicalee_favicon.svg" alt="JL Logo Animation">
                </div>
                <!-- Not currently visible -->
                <div class="grid grid-cols-1 mt-8">
                    <a class="place-self-center" href="#projects">
                        <img class="w-8 rotate-270" src="images/icons/arrow_button.svg" title="Discover more below">
                    </a>
                </div>
            </section>
            <section id="projects" class="px-20 lg:px-40 py-14">
                <h2 class="font-semibold text-4xl leading-relaxed mb-1.5">Projects</h2>
                <div class="lg:flex mt-4 justify-center">
                    <div class="overflow-hidden mr-6 rounded-2xl shadow-vi w-72 mt-4">
                        <a href="projects/loclo-homepage.php" title="Link to project">
                            <img class="min-w-full lg:h-64 xl:h-80" src="images/projects/loclo_dev_card.jpg" alt="LOCLO Homepage Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full lg:p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold lg:text-md xl:text-lg">LOCLO Homepage</h3>
                                <p class="mt-2 font-normal text-sm">A Responsive e&dash;Commerce website experience&period;</p>
                            </div>
                        </a>
                    </div>
                    <div class="overflow-hidden rounded-2xl shadow-vi w-72 mt-4">
                        <a href="projects/loclo-homepage.php" title="Link to project">
                            <img class="min-w-fit lg:h-64 xl:h-80" src="images/projects/toDoList_3.jpg" alt="To Do List Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full lg:p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold lg:text-md xl:text-lg">My To&dash;Do List</h3>
                                <p class="mt-2 font-normal text-sm">Let your worries go in a To-Do List in Dark Mode&excl;</p>
                            </div>
                        </a>
                    </div>
                    <div class="overflow-hidden lg:ml-6 rounded-2xl shadow-vi w-72 mt-4">
                        <a href="projects/loclo-homepage.php" title="Link to project">
                            <img class="min-w-fit lg:h-64 xl:h-80" src="images/projects/get_ien_home.jpg" alt="Get IEN the Alien Home Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full lg:p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold lg:text-md xl:text-lg">Get IEN Home&excl;</h3>
                                <p class="mt-2 font-normal text-sm">A simple game to help IEN the alien return home&period;</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <section class="bg-gray-300 px-20 lg:px-40 py-14">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div>
                        <h2 class="font-semibold text-4xl leading-relaxed mb-1.5">About</h2>
                        <p class="leading-6 mb-6">I want to crafting user&dash;centered projects to share stories in immersive&comma; insightful&comma; and memorable experiences&period;</p>
                        <a class="btn-gh btn-gh:hover" href="about.php">More about me</a>
                    </div>
                    <img class="rounded-full shadow-vi" src="images/about/jessicalee_profilepicture.jpg" alt="Jessica Lee Profile Picture">
                </div>
            </section>
        </main>
        <?php require ('partials/global/footer.php'); ?>
        <script></script>
    </body>
</html>