<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "About | Jessica Lee Front&dash;End Developer";
        include('partials/global/head.php'); 
    ?>
    <body>
        <div class="wrapper">
            <?php include('partials/global/header.php'); ?>
            <main>
                <section class="about subpg-section">
                    <div class="container">
                        <h1 data-aos="fade-right">About Jessica</h1>
                        <p class="about-subtitle" data-aos="fade-left" data-aos-delay="150">Who is this creative team&dash;player&comma; <br> passionate about digital experiences&quest;</p>
                        <div class="bio flex">
                            <img class="box-shadow" data-aos="fade-right" data-aos-delay="250"src="images/jessicamlee_profilepicture.jpg" alt="Profile picture of Jessica">
                            <div class="bio-desc">
                                <p data-aos="fade-left" data-aos-delay="350">I&apos;m a curious learner and systematic problem&dash;solver with a background in English Literature and Creative Writing&period;</p>
                                <p data-aos="fade-left" data-aos-delay="450">My hobby of analyzing stories led me to past experiences as a content writer&comma; and managing editor&period; I now build interfaces for everyone to experience and to share the captivating stories and projects of businesses and organizations&period;</p>
                                <p data-aos="fade-left" data-aos-delay="550">Besides unwinding with a cup of matcha&comma; I spend time building new projects&comma; reading manga&comma; dissecting films and anime&comma; trying different workout videos&comma; or getting my steps exploring a non&dash;digital city&period;</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="proud-moments subpg-section">
                    <h2 data-aos="fade-right">A few of moments <br class="hide-tablet"> I&apos;m proud of&colon;</h2>
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="150">
                            <p class="about-highlight">BCIT New Media Design & Web Development Award</p>
                            <p class="highlight-date">🏅Graduation Award &vert; June 2023</p>
                            <p class="highlight-desc">Recognition of highest average in the final year of their program while maintaining a 100% course load <br> &mdash; my project management skills really helped here&excl;</p>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="250">
                            <p class="about-highlight">BCIT Women in Computing Club</p>
                            <p class="highlight-date">📅 Networking Events &vert; Oct 2022 &dash; May 2023</p>
                            <p class="highlight-desc">Co&dash;Vice President&comma; previously Club Executive&comma; to plan&comma; organize&comma; and promote networking and Q&amp;A events for BCIT tech students&period;</p>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="350">
                            <p class="about-highlight">BCIT Hack the Break 2023</p>
                            <p class="highlight-date">👩🏻‍💻 Hackathon Event &vert; March 2023</p>
                            <p class="highlight-desc">Front&dash;end Developer and Event Organizer on behalf of BCIT Women in Computing Club for over 200 hackers&period;</p>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="450">
                            <p class="about-highlight">Hack the 6ix 2023</p>
                            <p class="highlight-date">👨🏻‍💻 Hackathon Event &vert; August 2023</p>
                            <p class="highlight-desc">Web Development Executive for 2023 Landing page and 2023 Hacker Dashboard for over 600 attendees&period;</p>
                        </li>
                    </ul>
                </section>
                <?php include('partials/global/contact.php'); ?>
            </main>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>