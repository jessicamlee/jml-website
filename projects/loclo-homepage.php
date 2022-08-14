<!DOCTYPE html>
<html class="scroll-smooth" lang="en-CA">
    <?php 
        $project_title = "LOCLO Homepage &vert; Jessica Lee";
        require('../partials/global/head_projects.php'); 
    ?>
    <body class="bg-ghost text-dviolet font-medium text-sm lg:text-base">
        <?php require('../partials/global/header_projects.php'); ?>
        <main>
            <div class="pt-6 xs:pt-8 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 dark:bg-vindigo dark:text-ghost">
                <a class="flex content-center container max-w-screen-xl mx-auto" href="../projects.php" title="Back to Previous Page">
                    <div class="rotate-90">
                        <svg class="arrow-vi animate-bounce ease-in-out fill-dviolet dark:fill-ghost dark:border-ghost" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" alt="Violet arrow pointing downward" title="Bouncing arrow">
                            <path d="M34.2 17.0359L34.2 24.1159L25.24 32.8359L16.28 24.1159L16.28 17.0359L25.24 25.7959L34.2 17.0359Z"/>
                        </svg>
                    </div>
                    <p class="text-xs xs:text-sm uppercase font-semibold ml-4 self-center">Back to Projects</p>
                </a>
            </div>
            <section class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 lg:py-14 dark:bg-vindigo dark:text-ghost">
                <div class="container max-w-screen-xl mx-auto">
                    <div>
                        <div class="text-center">
                            <h1 class="font-semibold text-2xl xs:text-3xl lg:text-4xl leading-8 xs:leading-relaxed">LOCLO Homepage</h1>
                            <p class="mb-4 italic">A Responsive e&dash;Commerce Website</p>
                            <p class="leading-6"><a href="#" target="_blank" title="Link to live site of LOCLO's Homepage"><b>Go to Live Site&colon;</b> <span class="border-b-4 border-dviolet border-solid xl:hover:border-dashed transition ease-in-out duration-600 delay-100 dark:border-ghost">LOCLO Homepage</span></a></p>
                        </div>
                        <a href="#" target="_blank" title="Visit the LOCLO's Homepage Live Site">
                            <img class="w-full object-cover object-top overflow-hidden rounded-xl shadow-vi mt-3" src="../images/projects/loclo_develop/loclo_developed_v2.jpg" alt="LOCLO Homepage Project Cover Photo">
                        </a>
                        <p class="leading-6 mt-4 md:px-20 lg:px-24 xl:px-40 text-left">The LOCLO website was designed for a fictional client who is a one-woman entrepreneur&period; The client wants a simple website to sell her products to her target audience who are believed to be mostly mobile users&period;</p>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <a class="arrow-vi animate-bounce ease-in-out dark:border-ghost" href="#project-details" alt="Violet arrow pointing downward" title="Discover more below">
                            <svg class="fill-dviolet dark:fill-ghost" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" title="Bouncing arrow">
                                <path d="M34.2 17.0359L34.2 24.1159L25.24 32.8359L16.28 24.1159L16.28 17.0359L25.24 25.7959L34.2 17.0359Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
            <section class="bg-dviolet text-ghost px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10">
                <div class="container max-w-screen-xl mx-auto">
                    <ul class="xs:grid grid-rows-3 grid-flow-col gap-x-4 xs:gap-x-10 lg:gap-y-4">
                        <li class="mb-4 xs:mb-0">
                            <h3 class="font-semibold text-base lg:text-lg uppercase">Dates&colon;</h3>
                            <p class="font-normal">February 21 &ndash; May 20&comma; 2022</p>
                        </li>
                        <li class="mb-4 xs:mb-0">
                            <h3 class="font-semibold text-base sm:text-lg uppercase">Hours&colon;</h3>
                            <p class="font-normal">19&period;25 hours</p>
                        </li>
                        <li class="mb-4 xs:mb-0">
                            <h3 class="font-semibold text-base sm:text-lg uppercase">Role&colon;</h3>
                            <p class="font-normal">Front&dash;End Developer</p>
                        </li>
                        <li class="mb-4 xs:mb-0">
                            <h3 class="font-semibold text-base sm:text-lg uppercase">Deliverables&colon;</h3>
                            <p class="font-normal">Responsive Homepage</p>
                        </li>
                        <li class="mb-4 xs:mb-0">
                            <h3 class="font-semibold text-base sm:text-lg uppercase">Tools&colon;</h3>
                            <p class="font-normal">HTML&comma; CSS&comma; Visual Studio Code</p>
                        </li>
                        <li>
                            <h3 class="font-semibold text-base sm:text-lg uppercase">Project Goal&colon;</h3>
                            <p class="font-normal">Develop a responsive homepage website based on <a class="border-b-4 border-ghost border-solid xl:hover:border-dashed transition ease-in-out duration-600 delay-100 dark:border-ghost" href="../projects/loclo-ux-design.php" title="Visit LOCLO Website and Mobile UX Project">LOCLO&apos;s website design&period;</a></p>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="project-details" class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 dark:bg-vindigo dark:text-ghost">
                <div class="container max-w-screen-xl mx-auto">
                    <div class="pb-10">
                        <h2 class="font-semibold text-xl xs:text-2xl lg:text-3xl">Phase 1&colon; Planning &amp; Designing</h2>
                        <img class="w-full object-cover object-top rounded-xl shadow-vi my-5" src="../images/projects/loclo_develop/loclo_dev_responsive.jpg" alt="Screenshot of LOCLO Homepage Planning Process">
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">To create a responsive&comma; mobile&dash;first website&comma; I first created high&dash;fidelity wireframes for the most popular screen size breakpoints&period;</p>
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">Creating wireframes helps me work efficiently when developing a mobile&dash;friendly website&period; I start from a 280&dash;pixel wide screen and scale to a large screen size at 1200 pixels wide&period;</p>
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">The next steps were to gather web copy&comma; fonts&comma; and images to be compressed for faster page load speed and a better use experience&period;</p>
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">Planning and outlining each stage of the project helped me manage my time and energy wisely to complete the project in time&period;</p>
                    </div>
                    <div class="pb-10">
                        <h2 class="font-semibold text-xl xs:text-2xl lg:text-3xl">Phase 2&colon; Developing the Basics</h2>
                        <img class="w-full object-cover object-top rounded-xl shadow-vi my-5" src="../images/projects/loclo_develop/loclo_dev_v1.jpg" alt="Screenshot of Problems in LOCLO Homepage">
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">The development phase began with a mobile&dash;friendly approach by structuring and styling the smallest size of 280&dash;pixels wide&period;</p>
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">Mobile&dash;friendly websites are important since most users are navigating digital spaces from mobile devices with smalls screens nowadays&period;</p>
                    </div>
                    <div>
                        <h2 class="font-semibold text-xl xs:text-2xl lg:text-3xl">Phase 3&colon; Reviewing &amp; Resolving Errors</h2>
                        <img class="w-full object-cover object-top rounded-xl shadow-vi my-5" src="../images/projects/loclo_develop/loclo_576px_comparison.jpg" alt="Screenshot of LOCLO Homepage Design">
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">As I styled each larger breakpoint&comma; I encountered problems with overlapping sections because of how I organized the content&period;</p>
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">I first reviewed the styles for the sections at each screen size to ensure there were no syntax errors&period; I then reassigned the parent and child positions for each section to ensure smooth scalability for the larger screen sizes&period;</p>
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">Next&comma; I tested the responsiveness from one breakpoint to another to check that the errors were fixed&period;</p>
                    </div>
                </div>
            </section>
            <div class="py-4 bg-dviolet"></div>
            <section class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 dark:bg-vindigo dark:text-ghost">
                <div class="container max-w-screen-xl mx-auto">
                    <h2 class="font-semibold text-2xl xs:text-3xl lg:text-4xl leading-8 xs:leading-relaxed">Outcome</h2>
                    <div class="my-5 b-dics rounded-xl shadow-vi w-full">
                        <img class="object-cover object-center overflow-hidden" src="../images/projects/loclo_develop/loclo_design_v2.jpg" alt="Before (Design)">
                        <img class="object-cover object-center overflow-hidden" src="../images/projects/loclo_develop/loclo_developed_v2.jpg" alt="After (Developed)">
                    </div>
                    <p class="italic mb-2 text-center text-xs lg:text-base">Move the slider on the image to check out the Before and After&period;</p>
                    <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">Reviewing each line of code helped me avoid missing crucial details that would impeded the user&apos;s experience&period;</p>
                    <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">Conducting the final check also allowed me to make the stylesheet as concise &lpar;or &ldquo;dry&rdquo;&rpar; as possible for easier peer review in the future&period;</p>
                </div>
            </section>
            <section class="bg-gray-300 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 dark:bg-dviolet dark:text-ghost">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 container max-w-screen-xl mx-auto">
                    <h2 class="font-semibold text-xl xs:text-2xl lg:text-3xl mb-1 lg:mb-2.5 xs:col-span-2 md:col-span-1">More Projects <br class="hidden md:inline"> by Jessica</h2>
                    <div class="overflow-hidden rounded-2xl shadow-vi xl:hover:scale-105 transition ease-in-out duration-600 delay-75 dark:border-ghost border-2 dark:border-solid dark:shadow-vindigo">
                        <a href="../projects/todo-list.php" title="Go to My To-Do List Project">
                            <img class="w-full" src="../images/projects/todo_list/todo_list_both_modes.jpg" alt="To Do List Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold md:leading-5 text-lg lg:text-xl">To&dash;Do List</h3>
                                <p class="mt-2 font-normal text-sm">Let your worries go in a To-Do List in Dark Mode&excl;</p>
                            </div>
                        </a>
                    </div>
                    <div class="overflow-hidden rounded-2xl shadow-vi xl:hover:scale-105 transition ease-in-out duration-600 delay-75 dark:border-ghost border-2 dark:border-solid dark:shadow-vindigo">
                        <a href="../projects/get-ien-home.php" title="Go to Get IEN Home Project">
                            <img class="w-full" src="../images/projects/get_ien_home/get_ien_home_cover.jpg" alt="Get IEN the Alien Home Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold md:leading-5 text-lg lg:text-xl">Get IEN Home&excl;</h3>
                                <p class="mt-2 font-normal text-sm">A simple game to help IEN the alien return home&period;</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <?php require('../partials/global/footer_projects.php'); ?>
        <script src="../scripts/dics.js"></script>
        <script src="../scripts/main.js"></script>
    </body>
</html>