<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "About &vert; Jessica Lee";
        require ('partials/global/head.php');
    ?>
    <body class="bg-ghost text-dviolet font-medium">
        <?php 
            $active_page = "about";
            require ('partials/global/header.php'); 
        ?>
        <main>
            <section class="px-40 pt-8 pb-14">
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h1 class="font-semibold text-5xl leading-relaxed mb-2">About</h1>
                        <p class="leading-7 mt-4">I am currently studying New Media and Web Development to become a <b>Front&dash;End Developer</b> who specializes in the user&apos;s experience&period;</p>
                        <p class="leading-7 mt-4 mb-9">When I&apos;m not at my desk&comma; you can find me catching up on a show or film&comma; reconnecting with friends and family&comma; or planning another adventure to explore a new place&period;</p>
                        <a class="py-3.5 px-7 my-8 font-semibold border-solid border-2 border-dviolet rounded-full uppercase shadow-vi bg-winter" href="#contact">Get in touch</a>
                    </div>
                    <img class="rounded-2xl shadow-vi" src="images/about/jessicalee_profilepicture.jpg" alt="Jessica Lee Profile Picture">
                </div>
            </section>
            <section class="px-40 py-14 bg-winter">
                <h2 class="font-semibold text-4xl leading-relaxed mb-2">What matters to me&colon;</h2>
                <div class="grid grid-cols-2 gap-7">
                    <div class="grid grid-cols-6">
                        <img class="w-14 pr-2 rotate-180" src="images/icons/arrow_button.svg" alt="Core Value Icon">
                        <div class="col-span-5">
                            <h3 class="font-semibold text-lg">Integrity</h3>
                            <p class="mt-2">Being honest about my contributions and obstacles to produce my best work&period;</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-6">
                        <img class="w-14 pr-2 rotate-180" src="images/icons/arrow_button.svg" alt="Core Value Icon">
                        <div class="col-span-5">
                            <h3 class="font-semibold text-lg">Empathy</h3>
                            <p class="mt-2">Build stronger relationships and resolve problems better together&period;</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-6">
                        <img class="w-14 pr-2 rotate-180" src="images/icons/arrow_button.svg" alt="Core Value Icon">
                        <div class="col-span-5">
                            <h3 class="font-semibold text-lg">Growth</h3>
                            <p class="mt-2">Become a wiser problem&dash;solver with stronger skills as a curious learner&period;</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-6">
                        <img class="w-14 pr-2 rotate-180" src="images/icons/arrow_button.svg" alt="Core Value Icon">
                        <div class="col-span-5">
                            <h3 class="font-semibold text-lg">Freedom</h3>
                            <p class="mt-2">Freedom of creativity to consider any and all solutions to resolve problems quicker&period;</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="px-40 py-14 grid grid-cols-2 gap-8">
                <div>
                    <h2 class="font-semibold text-4xl leading-relaxed mb-2">Why Development&quest;</h2>
                    <p class="leading-7 mb-4">When I completed my Bachelor&apos;s in English Literature and Creative Writing&comma; I knew I wanted to contribute to the digital world&period;</p>
                    <p class="leading-7">I started as a writer and editor for multiple website projects&period;</p>
                    <p class="leading-7 mt-4 mb-9">The projects ranged from analyzing literature and stories to contributing to topics about the environment&comma; finance&comma; wellness&comma; and technology&period;</p>
                </div>
                <div>
                    <!-- animation -->
                    <img class="rounded-2xl shadow-vi" src="images/about/animation_2.jpg" alt="Preloader Animation created by Jessica Lee">
                </div>
            </section>
            <section class="bg-winter px-40 py-14 grid grid-cols-2 gap-8">
                <div>
                    <!-- animation -->
                    <img class="rounded-2xl shadow-vi" src="images/about/animation_3.jpg" alt="Traffic Lights Animation created by Jessica Lee">
                </div>
                <div>
                    <p class="leading-7 mb-4">A year later&comma; I realized I wanted to learn more about Information Architecture&comma; User Experiences&comma; and User&dash;Centered Design to create better websites expeirences for users&period;</p>
                    <p class="leading-7">My curiosity led me to Front&dash;End Development&period;</p>
                    <p class="leading-7 mt-4 mb-9">I choose the developer&apos;s path because development gives me the opportunity to learn new ways to bring design to life while sharing fun and insightful experiences with everyone&period;</p>
                </div>
            </section>
        </main>
        <?php require ('partials/global/footer.php'); ?>
        <script></script>
    </body>
</html>