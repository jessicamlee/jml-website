<!DOCTYPE html>
<html lang="en-CA">
    <?php require('partials/global/head.php'); ?>
    <body class="bg-ghost text-dviolet font-medium">
        <?php require('partials/global/header.php'); ?>
        <main>
            <section class="px-28 pt-8 pb-10">
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h1 class="font-semibold text-5xl leading-relaxed mb-2">Projects</h1>
                        <p class="leading-7 mt-4 mb-9">Check out my latest <b>Front&dash;End Development</b> projects <br>with a sprinkle of user experience design&period;</p>
                        <a class="btn" href="#more-projects">More Projects</a>
                    </div>
                    <div class="overflow-hidden mr-6 mt-4 rounded-3xl shadow-vi">
                        <a href="/projects/loclo-homepage.html" title="Go to LOCLO Homepage Project">
                            <img src="images/projects/loclo_dev_1.jpg" alt="LOCLO Homepage Project Cover Photo">
                            <div class="bg-dviolet text-ghost px-6 py-8">
                                <h2 class="font-semibold text-xl">LOCLO Homepage</h2>
                                <p class="mt-2">A Responsive e&dash;Commerce website experience&period;</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-1 mt-8">
                    <a class="place-self-center" href="#more-projects">
                        <img class="w-8 rotate-270" src="images/icons/arrow_button.svg" title="Discover more below">
                    </a>
                </div>
            </section>
            <section id="more-projects" class="px-28 py-12 bg-winter grid grid-cols-3">
                <div class="overflow-hidden mr-6 rounded-3xl shadow-vi">
                    <img class="min-w-fit" src="images/projects/loclo_design_1.jpg" alt="LOCLO Web and App Project Cover Photo">
                    <div class="bg-dviolet text-ghost px-6 py-8">
                        <h3 class="font-semibold text-lg">LOCLO Web &amp; Mobile</h3>
                        <p class="mt-2">A User Experience design for a local shopping experience&period;</p>
                    </div>
                </div>
                <div class="overflow-hidden rounded-3xl shadow-vi">
                    <img class="min-w-fit h-80" src="images/projects/toDoList_3.jpg" alt="To Do List Project Cover Photo">
                    <div class="bg-dviolet text-ghost px-6 py-8">
                        <h3 class="font-semibold text-lg">My To&dash;Do List</h3>
                        <p class="mt-2">Let your worries go in a To-Do List in Dark Mode&excl;</p>
                    </div>
                </div>
                <div class="overflow-hidden ml-6 rounded-3xl shadow-vi">
                    <img class="min-w-fit h-80" src="images/projects/get_ien_home.jpg" alt="Get IEN the Alien Home Project Cover Photo">
                    <div class="bg-dviolet text-ghost px-6 py-8">
                        <h3 class="font-semibold text-lg">Get IEN Home&excl;</h3>
                        <p class="mt-2">A simple game to help IEN the alien return home&period;</p>
                    </div>
                </div>
            </section>
        </main>
        <?php require('partials/global/footer.php'); ?>
        <script></script>
    </body>
</html>