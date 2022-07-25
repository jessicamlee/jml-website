<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $project_title = "To&dash;Do List &vert; Jessica Lee";
        require('../partials/global/head_projects.php'); 
    ?>
    <body class="bg-ghost text-dviolet font-medium text-sm lg:text-base">
        <?php require('../partials/global/header_projects.php'); ?>
        <main>
            <a class="pt-6 xs:pt-8 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 flex content-center" href="../projects.php" title="Back to Previous Page">
                <div class="rotate-90">
                    <svg class="arrow-vi animate-bounce ease-in-out" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" alt="Violet arrow pointing downward" title="Bouncing arrow">
                        <path d="M34.2 17.0359L34.2 24.1159L25.24 32.8359L16.28 24.1159L16.28 17.0359L25.24 25.7959L34.2 17.0359Z" fill="#2b0462"/>
                    </svg>
                </div>
                <p class="text-xs xs:text-sm uppercase font-semibold ml-4 self-center">Back to Projects</p>
            </a>
            <section class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 lg:py-14">
                <div>
                    <div class="text-center">
                        <h1 class="font-semibold text-2xl xs:text-3xl lg:text-4xl leading-8 xs:leading-relaxed">To&dash;Do List</h1>
                        <p class="mb-6 sm:mb-8 italic">Let your worries go in a To&dash;Do List in Dark Mode&excl;</p>
                        <p class="leading-6"><a href="#" target="_blank" title="Visit live site of To Do List with Dark Mode"><b>Go to Live Site&colon;</b> To&dash;Do List with Dark Mode</a></p>
                    </div>
                    <a href="#" target="_blank" title="Visit live site of To Do List with Dark Mode">
                        <img class="w-full xl:min-w-fit h-96 object-cover object-top overflow-hidden rounded-2xl shadow-vi mt-3" src="../images/projects/loclo_dev_1.jpg" alt="LOCLO Homepage Project Cover Photo">
                    </a>
                    <p class="leading-6 mt-4 md:px-20 lg:px-24 xl:px-40 text-left">The To&dash;Do List project reflects my passion for organization and challenges my current knowledge of basic JavaScript&period;</p>
                </div>
                <div class="mt-8 flex justify-center">
                    <a class="arrow-vi animate-bounce ease-in-out" href="#project-details" alt="Violet arrow pointing downward" title="Discover more below">
                        <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" title="Bouncing arrow">
                            <path d="M34.2 17.0359L34.2 24.1159L25.24 32.8359L16.28 24.1159L16.28 17.0359L25.24 25.7959L34.2 17.0359Z" fill="#2b0462"/>
                        </svg>
                    </a>
                </div>
            </section>
            <section class="bg-dviolet text-ghost px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10">
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
            </section>
            <section id="project-details" class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10">
                <div class="pb-10">
                    <h2 class="font-semibold text-xl xs:text-2xl lg:text-3xl">Phase 1&colon; Researching &amp; Planning</h2>
                    <img class="w-full xl:min-w-fit h-96 object-cover object-top rounded-2xl shadow-vi my-5" src="../images/projects/loclo_dev_planning.jpg" alt="Screenshot of LOCLO Homepage Planning Process">
                    <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">I first conducted research to explore other ways to structure and style the to&dash;do list&period;</p>
                    <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">The primary target audience is students and workaholics who need an organizational system&period;</p>
                    <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">To resolve the targeted audience&apos;s pain points, the purpose of the to&dash;do list is to provide a single space to organize everything for the day&period;</p>
                    <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">For a more comfortable experience&comma; I researched the various ways to add a Dark Mode toggle&period;</p>
                </div>
                <div class="pb-10">
                    <h2 class="font-semibold text-xl xs:text-2xl lg:text-3xl">Phase 2&colon; Designing &amp; Developing</h2>
                    <img class="w-full xl:min-w-fit h-96 object-cover object-top rounded-2xl shadow-vi my-5" src="../images/projects/loclo_dev_problems.jpg" alt="Screenshotof Problems in LOCLO Homepage">
                    <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">In the design stage&comma; I considered the laws of interface design, specifically Law of Clarity&comma; Law of Preferred Action&comma; Law of Easting&comma; and&comma; most importantly&comma; Law of Feedback&period;</p>
                    <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">Integrating these design laws would help make the interface more intuitive for users to engage with&period;</p>
                </div>
                <div>
                    <h2 class="font-semibold text-xl xs:text-2xl lg:text-3xl">Phase 3&colon; Reviewing Problems &amp; Solutions</h2>
                    <div class="flex my-5 shadow-vi rounded-2xl h-96 overflow-none">
                        <img class="w-full xl:min-w-fit object-cover object-center rounded-l-2xl px-4" src="../images/projects/loclo_dev_280px_des.jpg" alt="Screenshot of LOCLO Homepage Design">
                        <img class="w-full xl:min-w-fit object-cover object-center rounded-l-2xl px-4" src="../images/projects/loclo_dev_280px_dev.jpg" alt="Screenshot of developed LOCLO Homepage">
                    </div>
                    <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">The obstacles I faced were the to&dash;do list could not be centered&comma; the font colors had low color contrast ratios in both modes&comma; and the Dark Mode toggle overlapped content&period;</p>
                    <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">After reviewing the problematic areas&comma; I revised the affected by adding a &lt;div&gt; to apply a relative parent container to place the child elements at their intended positions&period;</p>
                </div>
            </section>
            <div class="py-4 bg-dviolet"></div>
            <section class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10">
                <h2 class="font-semibold text-2xl xs:text-3xl lg:text-4xl leading-8 xs:leading-relaxed">Outcome &amp; Next Steps</h2>
                <p class="italic">Move the slider on the image below to see the Before and After&period;</p>
                <div class="my-5 b-dics rounded-2xl shadow-vi" style="width: 1000px;">
                    <img class="object-cover object-center overflow-hidden mt-1" src="../images/projects/loclo_design_v3.jpg" alt="Before (Design)">
                    <img class="object-cover object-center overflow-hidden" src="../images/projects/loclo_dev_1.jpg" alt="After (Developed)">
                </div>
                <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">For this initial draft&comma; the result met the project goal while inspiring other ideas for me to learn to implement for future iterations&period;</p>
                <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left"><b>Next Steps&colon;</b> My plan for the project in the future is to add filters and tags to sort each task into different categories&period;</p>
                <p class="leading-6 my-4 md:px-20 lg:px-24 xl:px-40 text-left">Having sorting options would visually group the tasks into whichever view the users would prefer for a personalized experience&period;</p>
            </section>
            <section class="bg-gray-300 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10">
                <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-3 gap-4">
                    <h2 class="font-semibold text-xl xs:text-2xl lg:text-3xl mb-1 lg:mb-2.5 xs:col-span-2 md:col-span-1">More Projects <br class="hidden md:inline"> by Jessica</h2>
                    <div class="overflow-hidden rounded-2xl shadow-vi">
                        <a href="#" title="Go to My To-Do List Project">
                            <img class="w-full xl:min-w-fit" src="../images/projects/loclo_dev_card.jpg" alt="To Do List Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold text-base md:text-lg lg:text-xl">LOCLO Homepage</h3>
                                <p class="mt-2 font-normal text-sm">A Responsive e&dash;Commerce website experience&period;</p>
                            </div>
                        </a>
                    </div>
                    <div class="overflow-hidden rounded-2xl shadow-vi">
                        <a href="#" title="Go to My To-Do List Project">
                            <img class="w-full xl:min-w-fit" src="../images/projects/get_ien_home.jpg" alt="Get IEN the Alien Home Project Cover Photo">
                            <div class="bg-dviolet text-ghost h-full p-6 xl:px-6 xl:py-8">
                                <h3 class="font-bold text-base md:text-lg lg:text-xl">Get IEN Home&excl;</h3>
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