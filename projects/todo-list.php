<!DOCTYPE html>
<html class="scroll-smooth" lang="en-CA">
    <?php 
        $project_title = "To&dash;Do List &vert; Jessica Lee";
        require('../partials/global/head_projects.php'); 
    ?>
    <body class="bg-white text-dviolet font-medium text-sm lg:text-base">
        <?php require('../partials/global/header_projects.php'); ?>
        <main>
            <div class="pt-6 xs:pt-8 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 dark:bg-vindigo dark:text-white">
                <a class="flex content-center container max-w-screen-lg mx-auto" href="../projects.php" title="Back to Previous Page">
                    <div class="rotate-90">
                        <svg class="arrow-vi animate-bounce ease-in-out fill-dviolet dark:fill-white dark:border-white"  viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" alt="Violet arrow pointing downward" title="Bouncing arrow">
                            <path d="M34.2 17.0359L34.2 24.1159L25.24 32.8359L16.28 24.1159L16.28 17.0359L25.24 25.7959L34.2 17.0359Z"/>
                        </svg>
                    </div>
                    <p class="text-xs xs:text-sm uppercase font-semibold ml-4 self-center">Back to Projects</p>
                </a>
            </div>
            <section class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 lg:py-14 dark:bg-vindigo dark:text-white">
                <div class="container max-w-screen-lg mx-auto">
                    <div>
                        <div class="text-center">
                            <h1 class="font-semibold text-2xl xs:text-3xl lg:text-4xl leading-8 xs:leading-relaxed">To&dash;Do List</h1>
                            <p class="mb-6 sm:mb-8 italic">Let your worries go in a To&dash;Do List in Dark Mode&excl;</p>
                            <p class="leading-6"><a href="https://github.com/jessicamlee/todolist" target="_blank" title="Link to GitHub Repository"><b>Review the Code&colon;</b> <span class="border-b-4 border-dviolet border-solid xl:hover:border-dashed transition ease-in-out duration-700 delay-100 dark:border-white">To&dash;Do List with Dark Mode</span></a></p>
                        </div>
                        <img class="w-full object-cover object-top overflow-hidden shadow-vi mt-3" src="../images/projects/todo_list/todo_list_both_modes.jpg" alt="To-Do List Cover Photo">
                        <p class="leading-6 mt-4 md:px-20 lg:px-24 xl:px-40 text-left">The To&dash;Do List project reflects my passion for organization and challenges my current knowledge of basic JavaScript&period;</p>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <a class="arrow-vi animate-bounce ease-in-out" href="#project-details" alt="Violet arrow pointing downward" title="Discover more below">
                            <svg class="fill-dviolet dark:fill-white" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" title="Bouncing arrow">
                                <path d="M34.2 17.0359L34.2 24.1159L25.24 32.8359L16.28 24.1159L16.28 17.0359L25.24 25.7959L34.2 17.0359Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
            <section class="bg-dviolet text-white px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10">
                <div class="container max-w-screen-lg mx-auto">
                    <ul class="xs:grid grid-rows-3 grid-flow-col gap-x-4 xs:gap-x-10 lg:gap-y-4">
                        <li class="mb-4 xs:mb-0">
                            <h3 class="font-semibold text-base lg:text-lg uppercase">Dates&colon;</h3>
                            <p class="font-normal">May 9 &ndash; May 20&comma; 2022</p>
                        </li>
                        <li class="mb-4 xs:mb-0">
                            <h3 class="font-semibold text-base sm:text-lg uppercase">Hours&colon;</h3>
                            <p class="font-normal">8&period;75 hours</p>
                        </li>
                        <li class="mb-4 xs:mb-0">
                            <h3 class="font-semibold text-base sm:text-lg uppercase">Role&colon;</h3>
                            <p class="font-normal">Front&dash;End Developer</p>
                        </li>
                        <li class="mb-4 xs:mb-0">
                            <h3 class="font-semibold text-base sm:text-lg uppercase">Deliverables&colon;</h3>
                            <p class="font-normal">To&dash;Do List Browser Experience</p>
                        </li>
                        <li class="mb-4 xs:mb-0">
                            <h3 class="font-semibold text-base sm:text-lg uppercase">Tools&colon;</h3>
                            <p class="font-normal">HTML&comma; CSS&comma; JavaScript&comma; Visual Studio Code</p>
                        </li>
                        <li>
                            <h3 class="font-semibold text-base sm:text-lg uppercase">Project Goal&colon;</h3>
                            <p class="font-normal">Create&comma; design&comma; and develop a To&dash;Do List using my current knowledge of JavaScript&comma; HTML&comma; and CSS&period;</p>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="project-details" class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 dark:bg-vindigo dark:text-white">
                <div class="container max-w-screen-lg mx-auto">
                    <div class="pb-10">
                        <h2 class="font-semibold text-xl xs:text-2xl lg:text-3xl">Phase 1&colon; Researching &amp; Planning</h2>
                        <img class="w-full object-cover object-top shadow-vi my-5" src="../images/projects/todo_list/todo_list_brainstorm.jpg" alt="Screenshot of To-Do List Planning Process">
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">I first conducted research to explore other ways to structure and style the to&dash;do list&period;</p>
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">The primary target audience is students and workaholics who need an organizational system&period;</p>
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">To resolve the targeted audience&apos;s pain points, the purpose of the to&dash;do list is to provide a single space to organize everything for the day&period;</p>
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">For a more comfortable experience&comma; I researched the various ways to add a Dark Mode toggle&period;</p>
                    </div>
                    <div class="pb-10">
                        <h2 class="font-semibold text-xl xs:text-2xl lg:text-3xl">Phase 2&colon; Designing &amp; Developing</h2>
                        <img class="w-full object-cover object-top shadow-vi my-5" src="../images/projects/todo_list/todo_list_experimenting.jpg" alt="Screenshot of Dark Mode Toggle and To Do List Experimenting files">
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">In the design stage&comma; I considered the laws of interface design, specifically Law of Clarity&comma; Law of Preferred Action&comma; Law of Easting&comma; and&comma; most importantly&comma; Law of Feedback&period;</p>
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">Integrating these design laws would help make the interface more intuitive for users to engage with&period;</p>
                    </div>
                    <div>
                        <h2 class="font-semibold text-xl xs:text-2xl lg:text-3xl">Phase 3&colon; Reviewing Problems &amp; Solutions</h2>
                        <img class="w-full object-cover object-top shadow-vi my-5" src="../images/projects/todo_list/todo_list_problems.jpg" alt="Screenshot of Initial Problems on To-Do List interface">
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">The obstacles I faced were the to&dash;do list could not be centered&comma; the font colors had low color contrast ratios in both modes&comma; and the Dark Mode toggle overlapped content&period;</p>
                        <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">After reviewing the problematic areas&comma; I revised the affected by adding a &lt;div&gt; to apply a relative parent container to place the child elements at their intended positions&period;</p>
                    </div>
                </div>
            </section>
            <div class="py-4 bg-dviolet"></div>
            <section class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 dark:bg-vindigo dark:text-white">
                <div class="container max-w-screen-lg mx-auto">
                    <h2 class="font-semibold text-2xl xs:text-3xl lg:text-4xl leading-8 xs:leading-relaxed">Outcome &amp; Next Steps</h2>
                    <div class="my-5 b-dics shadow-vi w-full">
                        <img class="object-cover object-center overflow-hidden" src="../images/projects/todo_list/todo_list_light_mode.jpg" alt="Light Mode">
                        <img class="object-cover object-center overflow-hidden" src="../images/projects/todo_list/todo_list_dark_mode.jpg" alt="Dark Mode">
                    </div>
                    <p class="italic mb-2 text-center text-xs lg:text-base">Move the slider on the image to check out the Light and Dark Modes&period;</p>
                    <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">For this initial draft&comma; the result met the project goal while inspiring other ideas for me to learn to implement for future iterations&period;</p>
                    <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left"><b>Next Steps&colon;</b> My plan for the project in the future is to add filters and tags to sort each task into different categories&period;</p>
                    <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">Having sorting options would visually group the tasks into whichever view the users would prefer for a personalized experience&period;</p>
                </div>
            </section>
            <section class="bg-gray-300 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 dark:bg-dviolet dark:text-white">
                <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 gap-4 container max-w-screen-lg mx-auto">
                    <h2 class="font-semibold text-xl xs:text-2xl lg:text-3xl mb-1 lg:mb-2.5 xs:col-span-2 md:col-span-1">More Projects <br class="hidden md:inline"> by Jessica</h2>
                    <div class="overflow-hidden rounded-2xl shadow-vi xl:hover:scale-105 transition ease-in-out duration-700 delay-75 dark:border-white border-2 dark:border-solid dark:shadow-vindigo">
                        <a href="../projects/loclo-homepage.php" title="Go to My To-Do List Project">
                            <img class="w-full" src="../images/projects/loclo_develop/loclo_developed_v2.jpg" alt="LOCLO Homepage Project Cover Photo">
                            <div class="bg-dviolet text-white h-full p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold text-base md:text-lg lg:text-xl">LOCLO Homepage</h3>
                                <p class="mt-2 font-normal text-sm">A Responsive e&dash;Commerce website experience&period;</p>
                            </div>
                        </a>
                    </div>
                    <div class="overflow-hidden rounded-2xl shadow-vi xl:hover:scale-105 transition ease-in-out duration-700 delay-75 dark:border-white border-2 dark:border-solid dark:shadow-vindigo">
                        <a href="../projects/get-ien-home.php" title="Go to My To-Do List Project">
                            <img class="w-full" src="../images/projects/get_ien_home/get_ien_home_cover.jpg" alt="Get IEN the Alien Home Project Cover Photo">
                            <div class="bg-dviolet text-white h-full p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold text-base md:text-lg lg:text-xl">Get IEN Home&excl;</h3>
                                <p class="mt-2 font-normal text-sm">A simple game to help IEN the alien return home&period;</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <?php require('../partials/global/contact.php'); ?>
        <?php require('../partials/global/footer.php'); ?>
        <script src="../scripts/dics.js"></script>
        <script src="../scripts/main.js"></script>
    </body>
</html>