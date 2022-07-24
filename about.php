<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "About &vert; Jessica Lee";
        require ('partials/global/head.php');
    ?>
    <body class="bg-ghost text-dviolet font-medium text-sm lg:text-base">
        <?php 
            $active_page = "about";
            require ('partials/global/header.php'); 
        ?>
        <main>
            <section class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div>
                        <h1 class="font-semibold text-4xl leading-10 md:text-5xl leading-relaxed lg:mb-2.5">About</h1>
                        <p class="leading-6 my-3">I am currently studying New Media and Web Development to become a <b>Front&dash;End Developer</b> who specializes in the user&apos;s experience&period;</p>
                        <p class="leading-6 mt-3 mb-6">When I&apos;m not at my desk&comma; you can find me catching up on a show or film&comma; reconnecting with friends and family&comma; or planning another adventure to explore a new place&period;</p>
                        <a class="btn-gh btn-gh:hover" href="#contact">Get in touch</a>
                    </div>
                    <img class="rounded-full shadow-vi" src="images/about/jessicalee_profilepicture.jpg" alt="Jessica Lee Profile Picture">
                </div>
            </section>
            <section class="bg-gray-300 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 lg:py-14">
                <h2 class="font-semibold text-2xl xs:text-3xl lg:text-4xl leading-8 xs:leading-relaxed lg:mb-2.5">What matters <br class="2xs:hidden">to me&colon;</h2>
                <div class="grid grid-cols-1 xs:grid-cols-2 gap-8 mt-8">
                    <div class="grid grid-cols-6">
                        <div class="mt-4 flex justify-center self-start rotate-270">
                            <svg class="arrow-vi animate-bounce ease-in-out" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" alt="Violet arrow pointing downward" title="Bouncing arrow">
                                <path d="M34.2 17.0359L34.2 24.1159L25.24 32.8359L16.28 24.1159L16.28 17.0359L25.24 25.7959L34.2 17.0359Z" fill="#2b0462"/>
                            </svg>
                        </div>
                        <div class="col-span-5 ml-2">
                            <h3 class="font-semibold leading-4 text-lg">Integrity</h3>
                            <p class="mt-2">Being honest about my contributions and obstacles to produce my best work&period;</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-6">
                        <div class="mt-4 flex justify-center self-start rotate-270">
                            <svg class="arrow-vi animate-bounce ease-in-out" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" alt="Violet arrow pointing downward" title="Bouncing arrow">
                                <path d="M34.2 17.0359L34.2 24.1159L25.24 32.8359L16.28 24.1159L16.28 17.0359L25.24 25.7959L34.2 17.0359Z" fill="#2b0462"/>
                            </svg>
                        </div>
                        <div class="col-span-5 ml-2">
                            <h3 class="font-semibold leading-4 text-lg">Empathy</h3>
                            <p class="mt-2">Build stronger relationships and resolve problems better together&period;</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-6">
                        <div class="mt-4 flex justify-center self-start rotate-270">
                            <svg class="arrow-vi animate-bounce ease-in-out" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" alt="Violet arrow pointing downward" title="Bouncing arrow">
                                <path d="M34.2 17.0359L34.2 24.1159L25.24 32.8359L16.28 24.1159L16.28 17.0359L25.24 25.7959L34.2 17.0359Z" fill="#2b0462"/>
                            </svg>
                        </div>
                        <div class="col-span-5 ml-2">
                            <h3 class="font-semibold leading-4 text-lg">Growth</h3>
                            <p class="mt-2">Become a wiser problem&dash;solver with stronger skills as a curious learner&period;</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-6">
                        <div class="mt-4 flex justify-center self-start rotate-270">
                            <svg class="arrow-vi animate-bounce ease-in-out" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" alt="Violet arrow pointing downward" title="Bouncing arrow">
                                <path d="M34.2 17.0359L34.2 24.1159L25.24 32.8359L16.28 24.1159L16.28 17.0359L25.24 25.7959L34.2 17.0359Z" fill="#2b0462"/>
                            </svg>
                        </div>
                        <div class="col-span-5 ml-2">
                            <h3 class="font-semibold leading-4 text-lg">Freedom</h3>
                            <p class="mt-2">Freedom of creativity to consider any and all solutions to resolve problems quicker&period;</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="font-semibold text-2xl xs:text-3xl lg:text-4xl leading-8 xs:leading-relaxed mb-1.5">Why Development&quest;</h2>
                    <p class="leading-6 my-3 self-center">When I completed my Bachelor&apos;s in English Literature and Creative Writing&comma; I knew I wanted to contribute to the digital world&period;</p>
                    <p class="leading-6 my-3 self-center">I started as a writer and editor for multiple website projects&period;</p>
                    <p class="leading-6 my-3 self-center">The projects ranged from analyzing literature and stories to contributing to topics about the environment&comma; finance&comma; wellness&comma; and technology&period;</p>
                </div>
                <div class="justify-self-center">
                    <!-- animation -->
                    <img class="rounded-full shadow-vi" src="images/about/animation_2.jpg" alt="Preloader Animation created by Jessica Lee">
                </div>
            </section>
            <section class="bg-gray-300 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 lg:py-14 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="justify-self-center">
                    <!-- animation -->
                    <img class="rounded-full shadow-vi" src="images/about/animation_3.jpg" alt="Traffic Lights Animation created by Jessica Lee">
                </div>
                <div class="justify-self-center">
                    <p class="leading-6 my-3">A year later&comma; I realized I wanted to learn more about Information Architecture&comma; User Experiences&comma; and User&dash;Centered Design to create better websites expeirences for users&period;</p>
                    <p class="leading-6 my-3">My curiosity led me to Front&dash;End Development&period;</p>
                    <p class="leading-6 my-3">I choose the developer&apos;s path because development gives me the opportunity to learn new ways to bring design to life while sharing fun and insightful experiences with everyone&period;</p>
                </div>
            </section>
        </main>
        <?php require ('partials/global/footer.php'); ?>
        <script></script>
    </body>
</html>