<?php 
    require('init.php');
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en-CA">
    <?php 
        $title_text = "Jessica Lee &vert; Front&dash;End Development";
        require ('partials/global/head.php'); 
    ?>
    <body class="bg-white text-zinc-900 font-medium text-sm lg:text-base dark:text-white dark:bg-zinc-900">
        <?php 
            $active_page = "home";
            require ('partials/global/header.php'); 
        ?>
        <main>
            <section class="px-6 2xs:px-10 xs:px-14 sm:px-18 md:px-24 xl:px-32 py-20 pb-10">
                <div class="container max-w-screen-lg mx-auto text-center text-dviolet dark:text-white">
                    <h1 class="font-semibold text-5xl">Jessica Lee</h1>
                    <p class="mb-6 italic font-medium text-lg">Front&dash;End Developer</p>
                </div>
            </section>
            <section id="projects" class="px-6 2xs:px-10 xs:px-14 sm:px-18 lg:px-24 pt-20 pb-10 dark:bg-zinc-900 dark:text-white">
                <div class="container max-w-screen-lg mx-auto">
                    <h2 class="tracking-wide text-xl font-medium text-dviolet text-center uppercase mb-2">Latest Projects</h2>
                    <div class="my-8 flex flex-col justify-self-center space-y-4">
                        <div class="overflow-hidden shadow-vi xl:hover:scale-90 transition ease-in-out duration-1000 dark:border-white border-2 dark:border-solid dark:shadow-vindigo xs:mb-12">
                            <a href="projects/loclo-homepage.php" title="Link to project">
                                <img class="w-full" src="images/projects/loclo_develop/loclo_developed_v2.jpg" alt="LOCLO Homepage Project Cover Photo">
                                <div class="bg-dviolet text-white h-full p-6 xl:px-6 xl:py-8">
                                    <h3 class="font-bold md:leading-5 text-lg lg:text-xl">LOCLO Homepage</h3>
                                    <p class="mt-2 font-normal text-sm xs:text-base">A Responsive e&dash;Commerce website experience&period;</p>
                                </div>
                            </a>
                        </div>
                        <div class="md:flex md:mt-8">
                            <div class="overflow-hidden shadow-vi xl:hover:scale-90 transition ease-in-out duration-1000 dark:border-white border-2 dark:border-solid dark:shadow-vindigo md:mr-8 mb-4 md:mb-8 md:mt-16">
                                <a href="projects/todo-list.php" title="Link to project">
                                    <img class="w-full" src="images/projects/todo_list/todo_list_both_modes.jpg" alt="To Do List Project Cover Photo">
                                    <div class="bg-dviolet text-white h-full p-6 xl:px-6 xl:py-8">
                                        <h3 class="font-bold md:leading-5 text-lg lg:text-xl blur-none">To&dash;Do List</h3>
                                        <p class="mt-2 font-normal text-sm xs:text-base">Let your worries go in a To&dash;Do List in Dark Mode&excl;</p>
                                    </div>
                                </a>
                            </div>
                            <div class="overflow-hidden shadow-vi xl:hover:scale-90 transition ease-in-out duration-1000 dark:border-white border-2 dark:border-solid dark:shadow-vindigo md:mb-16">
                                <a href="projects/get-ien-home.php" title="Link to project">
                                    <img class="w-full" src="images/projects/get_ien_home/get_ien_home_cover.jpg" alt="Get IEN the Alien Home Project Cover Photo">
                                    <div class="bg-dviolet text-white h-full p-6 xl:px-6 xl:py-8">
                                        <h3 class="font-bold md:leading-5 text-lg lg:text-xl">Get IEN Home&excl;</h3>
                                        <p class="mt-2 font-normal text-sm xs:text-base">A simple game to help IEN the alien return home&period;</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="px-6 2xs:px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 pt-20 pb-10 dark:bg-zinc-900 dark:text-white">
                <div class="container max-w-screen-lg mx-auto">
                    <p class="tracking-wide text-xl font-medium text-dviolet text-center uppercase mb-2 dark:text-white">About</p>
                    <h2 class="font-semibold text-4xl text-center text-dviolet dark:text-white">Jessica Lee <br class="md:hidden"></h2>
                    <p class="italic text-base font-medium text-dviolet leading-none text-center dark:text-white">Front&dash;End Developer</p>
                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <img class="rounded-full shadow-vi justify-self-center md:justify-self-end w-3/5 sm:w-4/5 md:w-72" src="images/jessicamlee_profilepicture.jpg" alt="Jessica Lee Profile Picture">
                        <div class="lg:w-96">
                            <p class="leading-6 text-sm md:text-base">I&apos;m a curious storyteller and systematic problem&dash;solver with a background in English Literature and Creative Writing&period;</p>
                            <p class="leading-6 mt-4 text-sm md:text-base">My hobby of analyzing stories led me to past experiences as a content writer&comma; and managing editor&period; Now&comma; I want to develop experiences to share captivating stories&period;</p>
                            <p class="leading-6 mt-4 text-sm md:text-base">Besides unwinding with a cup of matcha&comma; I spend my time reading manga&comma; web comics&comma; or getting my steps in exploring Vancouver&comma; BC&period;</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php require ('partials/global/contact.php'); ?>
        <?php require ('partials/global/footer.php'); ?>
    </body>
</html>