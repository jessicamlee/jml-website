<!DOCTYPE html>
<html class="scroll-smooth" lang="en-CA">
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
            <section class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 md:py-12 lg:py-14">
                <div class="container max-w-screen-xl mx-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="xl:mr-20">
                            <h1 class="font-semibold text-4xl md:leading-10 md:text-5xl leading-relaxed lg:mb-2.5">About</h1>
                            <p class="leading-6 mt-0 md:mt-4 mb-3">I am currently studying New Media Design and Web Development at BCIT to become a <b>Front&dash;End Developer</b> who specializes in optimizing user experiences&period;</p>
                            <p class="leading-6 mt-3 mb-6">When I&apos;m not at my desk&comma; you can find me analyzing a show or film&comma; reconnecting with friends and family&comma; or planning another adventure to explore a new place&period;</p>
                            <a class="btn-gh xl:hover:bg-dviolet xl:hover:text-ghost transition ease-in-out duration-500" href="#contact">Get in touch</a>
                        </div>
                        <img class="rounded-full shadow-vi justify-self-center self-center w-5/6 sm:w-full" src="images/jessicalee_profilepicture.jpg" alt="Jessica Lee Profile Picture">
                    </div>
                </div>
            </section>
            <section class="bg-gray-300 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 md:py-12 lg:py-14">
                <div class="container max-w-screen-xl mx-auto">
                    <h2 class="font-semibold text-xl xs:text-2xl lg:text-3xl leading-8 xs:leading-relaxed lg:mb-2.5">What matters <br class="2xs:hidden">to me&colon;</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mt-8">
                        <div class="grid grid-cols-6 gap-x-2 md:gap-x-3">
                            <div class="mt-4 flex justify-center self-start">
                                <svg class="w-12 h-14 animate-bounce ease-in-out" viewBox="0 0 73 50" fill="none" xmlns="http://www.w3.org/2000/svg" alt="Violet outlined eye icon" title="Bouncing eye icon">
                                    <path d="M36.5 6.74984C48.9754 6.74984 60.1012 13.7611 65.5325 24.854C60.1012 35.9469 48.9754 42.9582 36.5 42.9582C24.0245 42.9582 12.8987 35.9469 7.46746 24.854C12.8987 13.7611 24.0245 6.74984 36.5 6.74984ZM36.5 0.166504C20.0416 0.166504 5.98621 10.4036 0.291626 24.854C5.98621 39.3044 20.0416 49.5415 36.5 49.5415C52.9583 49.5415 67.0137 39.3044 72.7083 24.854C67.0137 10.4036 52.9583 0.166504 36.5 0.166504ZM36.5 16.6248C41.0425 16.6248 44.7291 20.3115 44.7291 24.854C44.7291 29.3965 41.0425 33.0832 36.5 33.0832C31.9575 33.0832 28.2708 29.3965 28.2708 24.854C28.2708 20.3115 31.9575 16.6248 36.5 16.6248ZM36.5 10.0415C28.3366 10.0415 21.6875 16.6907 21.6875 24.854C21.6875 33.0173 28.3366 39.6665 36.5 39.6665C44.6633 39.6665 51.3125 33.0173 51.3125 24.854C51.3125 16.6907 44.6633 10.0415 36.5 10.0415Z" fill="#2b0462"/>
                                </svg>
                            </div>
                            <div class="col-span-5 ml-2">
                                <h3 class="font-semibold leading-4 text-lg">Integrity</h3>
                                <p class="mt-2">Being honest about my contributions and obstacles to produce my best work&period;</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-x-2 md:gap-x-3">
                            <div class="mt-4 flex justify-center self-start">
                                <svg class="w-12 h-16 animate-bounce ease-in-out" viewBox="0 0 55 67" fill="none" xmlns="http://www.w3.org/2000/svg" alt="Violet person with waving hand icon" title="Bouncing person with waving hand icon">
                                    <path d="M26.4998 13.7502C30.1357 13.7502 33.0832 10.8027 33.0832 7.16683C33.0832 3.53095 30.1357 0.583496 26.4998 0.583496C22.864 0.583496 19.9165 3.53095 19.9165 7.16683C19.9165 10.8027 22.864 13.7502 26.4998 13.7502Z" fill="#2b0462"/>
                                    <path d="M39.3045 20.6956C38.0208 19.4118 35.8154 17.0418 31.5362 17.0418C30.845 17.0418 26.862 17.0418 23.1754 17.0418C14.1233 17.0089 6.74996 9.63558 6.74996 0.583496H0.166626C0.166626 10.9852 7.11204 19.8068 16.625 22.6706V66.4168H23.2083V46.6668H29.7916V66.4168H36.375V27.0814L49.377 40.0835L54.0183 35.4422L39.3045 20.6956Z" fill="#2b0462"/>
                                </svg>
                            </div>
                            <div class="col-span-5 ml-2">
                                <h3 class="font-semibold leading-4 text-lg">Empathy</h3>
                                <p class="mt-2">Build stronger relationships and resolve problems better together&period;</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-x-2 md:gap-x-3">
                            <div class="mt-4 flex justify-center self-start">
                                <svg class="w-12 h-14 animate-bounce ease-in-out" viewBox="0 0 47 67" fill="none" xmlns="http://www.w3.org/2000/svg" alt="Violet outlined lightbulb icon" title="Bouncing lightbulb icon">
                                    <path d="M13.625 63.1252C13.625 64.9356 15.1063 66.4168 16.9167 66.4168H30.0834C31.8938 66.4168 33.375 64.9356 33.375 63.1252V59.8335H13.625V63.1252ZM23.5 0.583496C10.7942 0.583496 0.458374 10.9193 0.458374 23.6252C0.458374 31.4593 4.37546 38.3389 10.3334 42.5193V49.9585C10.3334 51.7689 11.8146 53.2502 13.625 53.2502H33.375C35.1855 53.2502 36.6667 51.7689 36.6667 49.9585V42.5193C42.6246 38.3389 46.5417 31.4593 46.5417 23.6252C46.5417 10.9193 36.2059 0.583496 23.5 0.583496ZM32.8813 37.121L30.0834 39.096V46.6668H16.9167V39.096L14.1188 37.121C9.67504 34.0268 7.04171 28.9906 7.04171 23.6252C7.04171 14.5402 14.415 7.16683 23.5 7.16683C32.585 7.16683 39.9584 14.5402 39.9584 23.6252C39.9584 28.9906 37.325 34.0268 32.8813 37.121Z" fill="#2b0462"/>
                                </svg>
                            </div>
                            <div class="col-span-5 ml-2">
                                <h3 class="font-semibold leading-4 text-lg">Growth</h3>
                                <p class="mt-2">Become a wiser problem&dash;solver with stronger skills as a curious learner&period;</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-x-2 md:gap-x-3">
                            <div class="mt-4 flex justify-center self-start">
                                <svg class="w-16 h-12 animate-bounce ease-in-out" viewBox="0 0 67 55" fill="none" xmlns="http://www.w3.org/2000/svg" alt="Violet waves icon" title="Bouncing waves icon">
                                    <path d="M49.9584 43.9253C45.5146 43.9253 42.7167 45.3078 40.248 46.5586C38.1084 47.6449 36.3638 48.5336 33.5 48.5336C30.5375 48.5336 28.8917 47.7107 26.7521 46.5586C24.2834 45.3078 21.5842 43.9253 17.0417 43.9253C12.4992 43.9253 9.80004 45.3078 7.33129 46.5586C5.19171 47.6449 3.48004 48.5336 0.583374 48.5336V54.9524C5.02712 54.9524 7.82504 53.5699 10.2938 52.319C12.4334 51.2328 14.145 50.344 17.0417 50.344C19.9384 50.344 21.65 51.167 23.7896 52.319C26.2584 53.5699 28.9575 54.9524 33.5 54.9524C38.0425 54.9524 40.7417 53.5699 43.2105 52.319C45.35 51.2328 47.0946 50.344 49.9584 50.344C52.9209 50.344 54.5667 51.167 56.7063 52.319C59.175 53.5699 61.9071 54.9524 66.4167 54.9524V48.5336C63.4542 48.5336 61.8084 47.7107 59.6688 46.5586C57.2 45.3078 54.4021 43.9253 49.9584 43.9253ZM49.9584 29.2774C45.5146 29.2774 42.7167 30.6928 40.248 31.9107C38.1084 32.964 36.3638 33.8857 33.5 33.8857C30.5375 33.8857 28.8917 33.0628 26.7521 31.9107C24.2834 30.6599 21.5842 29.2774 17.0417 29.2774C12.4992 29.2774 9.80004 30.6928 7.33129 31.9107C5.19171 32.964 3.48004 33.8857 0.583374 33.8857V40.3045C5.02712 40.3045 7.82504 38.889 10.2938 37.6711C12.4334 36.519 14.0792 35.6961 17.0417 35.6961C20.0042 35.6961 21.65 36.519 23.7896 37.6711C26.2584 38.9219 28.9575 40.3045 33.5 40.3045C38.0425 40.3045 40.7417 38.889 43.2105 37.6711C45.35 36.519 46.9959 35.6961 49.9584 35.6961C52.9209 35.6961 54.5667 36.519 56.7063 37.6711C59.175 38.9219 61.9071 40.3045 66.4167 40.3045V33.8857C63.4542 33.8857 61.8084 33.0628 59.6688 31.9107C57.2 30.6599 54.4021 29.2774 49.9584 29.2774ZM59.6688 2.6807C57.2 1.42986 54.468 0.0473633 49.9584 0.0473633C45.4488 0.0473633 42.7167 1.42986 40.248 2.6807C38.1084 3.73403 36.3638 4.6557 33.5 4.6557C30.5375 4.6557 28.8917 3.83278 26.7521 2.6807C24.2834 1.46278 21.5842 0.0473633 17.0417 0.0473633C12.4992 0.0473633 9.80004 1.42986 7.33129 2.6807C5.19171 3.76695 3.48004 4.6557 0.583374 4.6557V11.0086C5.02712 11.0086 7.82504 9.5932 10.2938 8.37528C12.4334 7.28903 14.145 6.40028 17.0417 6.40028C19.9384 6.40028 21.65 7.2232 23.7896 8.37528C26.2584 9.62611 28.9575 11.0086 33.5 11.0086C38.0425 11.0086 40.7417 9.5932 43.2105 8.37528C45.35 7.32195 47.0946 6.40028 49.9584 6.40028C52.9209 6.40028 54.5667 7.2232 56.7063 8.37528C59.175 9.62611 61.9071 11.0086 66.4167 11.0086V4.58986C63.4542 4.58986 61.8084 3.76695 59.6688 2.6807ZM49.9584 14.6294C45.5146 14.6294 42.7167 16.0449 40.248 17.2628C38.1084 18.4149 36.4625 19.2378 33.5 19.2378C30.5375 19.2378 28.8917 18.4149 26.7521 17.2628C24.2834 16.0119 21.5842 14.6294 17.0417 14.6294C12.4992 14.6294 9.80004 16.0449 7.33129 17.2628C5.19171 18.4149 3.54587 19.2378 0.583374 19.2378V25.6565C5.02712 25.6565 7.82504 24.2411 10.2938 23.0232C12.4334 21.9699 14.178 21.0482 17.0417 21.0482C19.9055 21.0482 21.65 21.8711 23.7896 23.0232C26.2584 24.274 28.9575 25.6565 33.5 25.6565C38.0425 25.6565 40.7417 24.2411 43.2105 23.0232C45.35 21.9699 47.0946 21.0482 49.9584 21.0482C52.9209 21.0482 54.5667 21.8711 56.7063 23.0232C59.175 24.274 61.9071 25.6565 66.4167 25.6565V19.2378C63.4542 19.2378 61.8084 18.4149 59.6688 17.2628C57.2 16.0119 54.4021 14.6294 49.9584 14.6294Z" fill="#2b0462"/>
                                </svg>
                            </div>
                            <div class="col-span-5 ml-2">
                                <h3 class="font-semibold leading-4 text-lg">Freedom</h3>
                                <p class="mt-2">Freedom of creativity to consider any and all solutions to resolve problems quicker&period;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 md:py-12 lg:py-14">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 container max-w-screen-xl mx-auto">
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
                </div>
            </section>
            <section class="bg-gray-300 px-10 xs:px-14 sm:px-18 md:px-24 lg:px-28 xl:px-32 py-10 md:py-12 lg:py-14">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 container max-w-screen-xl mx-auto">
                    <div class="justify-self-center">
                        <!-- animation -->
                        <img class="rounded-full shadow-vi" src="images/about/animation_3.jpg" alt="Traffic Lights Animation created by Jessica Lee">
                    </div>
                    <div class="justify-self-center">
                        <p class="leading-6 my-3">A year later&comma; I realized I wanted to learn more about Information Architecture&comma; User Experiences&comma; and User&dash;Centered Design to create better websites expeirences for users&period;</p>
                        <p class="leading-6 my-3">My curiosity led me to Front&dash;End Development&period;</p>
                        <p class="leading-6 my-3">I choose the developer&apos;s path because development gives me the opportunity to learn new ways to bring design to life while sharing fun and insightful experiences with everyone&period;</p>
                    </div>
                </div>
            </section>
        </main>
        <?php require ('partials/global/footer.php'); ?>
        <script></script>
    </body>
</html>