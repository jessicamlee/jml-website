<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $project_title = "LOCLO Clothing UX Case Study &vert; Jessica Lee";
        include('../partials/global/head_projects.php');
    ?>
    <body>
        <div class="wrapper">
            <?php include('../partials/global/header_projects.php'); ?>
            <main class="cs-body">
                <?php
                    $ux_project_title = 'LOCLO Clothing';
                    $ux_project_img_src = 'loclo_ux_cover';
                    $ux_project_img_alt = 'Cover Photo of LOCLO Clothing text with two screenshots below of LOCLO\'s home page in desktop and mobile screen sizes.';
                    $ux_project_type = 'Cross-Platform Project <br> (Website & Mobile Application)';
                    $ux_project_roles = 'UX Designer, UX Researcher, Visuals, Interaction';
                    $ux_project_duration = '5 Weeks';
                    $prototype_link = 'https://xd.adobe.com/view/4b3bff5a-9d4f-4634-9865-26d9e5e8f1d1-1e68/';
                    include('../partials/cards/ux-project-card.php');
                ?>
                <section class="subpg-section cs-section">
                    <div class="container">
                        <h2>Project Vision</h2>
                        <p>LOCLO is a local&comma; fictional&comma; small business providing ethically made minimalist apparel from sustainably sourced materials&period;</p>
                        <p>The goal for this project focused on creating simple Account Login and Checkout processes to build a strong relationship with local shoppers through the curbside pick&dash;up option&period;</p>
                        <p>Prioritizing a simple yet effective Login and Checkout process is a shared goal across the dedicated mobile application and responsive website for LOCLO Clothing&period;</p>
                    </div>
                </section>
                <section class="subpg-section cs-section">
                    <div class="container">
                        <h2>Challenges</h2>
                        <p>With consideration of the project&apos;s scope, budget, and timeline, the challenges for this cross-platform project include the following:</p>
                        <ul>
                            <li>Designing for users who have short attention spans</li>
                            <li>Testing and revising the shopping experience to feel less overwhelming</li>
                            <li>Resolving abandoned shopping cart user journeys</li>
                        </ul>
                    </div>
                </section>
                <section class="subpg-section cs-section">
                    <div class="container">
                        <h2>Researching</h2>
                        <p>Since LOCLO Clothing is the final project part of the Google UX Certificate course&comma; I combined my knowledge from past projects&comma; like the Vancity Sushi Project and The Sweat Crew project&comma; to design a cohesive cross-platform experience&period;</p>
                        <p><span class="bolded">Research Goals&colon;</span> The primary goal is to understand the user&apos;s expectations for a cross&dash;platform experience and to make the experience <span class="bolded-italic">accessible</span> and <span class="bolded-italic">user&dash;friendly</span>&period;</p>
                        <p class="bolded mb-sm">Research Questions&colon;</p>
                        <ul>
                            <li>How does a user feel about navigating the website&quest;</li>
                            <li>What challenges do users have when browsing the products and placing an order&quest;</li>
                            <li>What are some ways to improve the experience&quest;</li>
                            <li>How likely would users return to place another order in the future based on their experience&quest;</li>
                            <li>What are the disregarded pain points in the low&dash;fidelity prototype&quest;</li>
                        </ul>
                    </div>
                </section>
                <section class="subpg-section cs-section">
                    <div class="container">
                        <h2>Research Findings &amp; Pain Points</h2>
                        <p>The User Research process started with looking for direct and indirect competitors&period; I wanted first&dash;hand experience understanding a user&apos;s process when searching and ordering clothes from a website to a dedicated mobile application&period;</p>
                        <p class="mb-sm">After researching and testing competitors&apos; products and inquiring about mobile&dash;to&dash;website shopping experiences&comma; I chose two primary pain points to resolve in this project&apos;s iteration&colon;</p>
                        <ol>
                            <li><span class="bolded">Lack of Consistency&colon; </span>Some participants commented that they wanted more time to learn how to use the mobile application because the placement of elements was different compared to their expectations based on the website experience&period;</li>
                            <li><span class="bolded">Long Shopping Experience on Mobile&colon; </span> Optimizing the number of steps for the shopping and checkout processes can help with abandoned and frustrating user experiences&period;</li>
                        </ol>
                    </div>
                </section>
                <section class="subpg-section cs-section">
                    <div class="container">
                        <h2>Competitive Analysis</h2>
                        <p>Since LOCLO Clothing&apos;s goals are to prioritize local shoppers&comma; focus on only clothing products&comma; and have a niche audience to target social media users&comma; its competitors include Good for Sunday&comma; Okay to Rest&comma; Tentree&comma; and DRMERS CLUB&period;</p>
                        <div class="img-container cs-body-img-container">
                            <img class="img-thumb" src="../images/case-studies/loclo_ux/loclo_competitor.jpg" alt="Presentation slide of a red curly haired woman smiling off camera toward her right hand side.">
                            <p class="cs-img-caption">Screenshots of Good for Sunday&comma; Okay to Rest&comma; and Tentree&apos;s home pages&period;</p>
                        </div>
                        <p class="mb-sm">The <span class="bolded">primary weaknesses</span> observed include the following&colon;</p>
                        <ul>
                            <li>Lack of support for abandoned experiences</li>
                            <li>Lack of support for local shopping options during checkout</li>
                            <li>Low counts of returning customers and/or prospective customers</li>
                        </ul>
                    </div>
                </section>
                <section class="subpg-section cs-section">
                    <div class="container">
                        <h2>Meet the Persona</h2>
                        <p>The demographic for LOCLO Clothing&apos;s users consists of 18 to 29&dash;year&dash;olds who want to shop for themselves from an online interface that is based in a local city near them in the primary target audience group, followed by 30 to 40&dash;year&dash;olds in the secondary group who would shop for someone else they know.</p>
                        <p>I spoke with 5 participants who want quality&comma; sustainably sourced clothing from Canada and can imagine themselves shopping at an online e&dash;commerce store or mobile application like LOCLO&period;</p>
                        <div class="img-container cs-body-img-container">
                            <img class="img-thumb" src="../images/case-studies/loclo_ux/loclo_persona.jpg" alt="Presentation slide of a red curly haired woman smiling off camera toward her right hand side.">
                            <p class="cs-img-caption">Persona Summary for Sarah Smith</p>
                        </div>
                        <p>Sarah &lpar;22&rpar; studies Environmental Sciences and Statistics at the University of Victoria&period; Sarah tries to find affordable clothing from local online businesses&comma; but most online merchants she discovered require more than &dollar;100 purchases to get free shipping&period;</p>
                        <p>The top <span class="bolded">goals</span> and <span class="bolded">frustrations</span> of this persona include the following&colon;</p>
                        <p class="mb-sm bolded">Goals&colon;</p>
                        <ul>
                            <li>Become an Environmental Policy Analyst for Vancouver</li>
                            <li>Live sustainably by shopping locally</li>
                            <li>Save money by reducing spending on poor quality items to then move out and build her own greenhouse</li>
                        </ul>
                        <p class="mb-sm bolded">Frustrations&colon;</p>
                        <ul class="mb-md">
                            <li>Shops in nearby neighbourhood are all fast fashion options and have poor material quality</li>
                            <li>Local thrift shops lack variety in styles and sizing</li>
                            <li>Challenging to find locally&comma;sustainably made loungewear that is designed in an aesthetically pleasing way</li>
                            <li>Cannot shop online nor opt for local pickup from local merchants or local thrift shops</li>
                        </ul>
                        <p>A user&dash;friendly experience aligns with Sarah&apos;s values of saving time and money by investing in quality&comma; long&dash;lasting items made and shipped locally within Canada&period;</p>
                        <p>With a persona established&comma; the research process proceeded to learn more about LOCLO Clothing&apos;s competitors&period;</p>
                    </div>
                </section>
                <section class="subpg-section cs-section">
                    <div class="container">
                        <h2>Outlining the Journey</h2>
                        <p>Considering the needs for this project and the persona&apos;s User Journey&comma; the following flowchart outlines the users&apos; journey from when they visit the website for the first time to the purchase confirmation screen&period;</p>
                        <p>Mobile users would be prompted with a similar user flow but with a default prompt to create an account or sign in before beginning their shopping experience&period;</p>
                        <div class="img-container cs-body-img-container">
                            <div class="cs-flex-img-box">
                                <img class="cs-flex-img" src="../images/case-studies/loclo_ux/loclo_flowchart_1.jpg" alt="Flowchart Part One for LOCLO's website user experience.">
                                <img class="cs-flex-img" src="../images/case-studies/loclo_ux/loclo_flowchart_2.jpg" alt="Flowchart Part Two for LOCLO's website user experience.">
                            </div>
                            <p class="cs-img-caption">Screenshots of Good for Sunday&comma; Okay to Rest&comma; and Tentree&apos;s home pages&period;</p>
                        </div>
                    </div>
                </section>
                <section class="subpg-section cs-section">
                    <div class="container">
                        <h2>Wireframing</h2>
                        <p>Utilizing the Crazy Eights method, I sketched multiple variations for each screen of the primary user flow to include the most valuable and effective elements to feature for each screen.</p>
                        <div class="img-container cs-body-img-container">
                            <img class="img-thumb" src="../images/case-studies/loclo_ux/loclo_paperpen_accountpage.jpg" alt="Pen and paper wireframes of the account page's welcome and saved items screens.">
                            <p class="cs-img-caption">Pen &amp; Paper Wireframes of Account Page</p>
                        </div>
                        <p>After finalizing the sketches, I made digital, low-fidelity wireframes to optimize the layout of the elements for specific screen sizes across the website and mobile application screens.</p>
                        <div class="img-container cs-body-img-container">
                            <div class="cs-flex-img-box">
                            <img class="img-thumb" src="../images/case-studies/loclo_ux/loclo_lofi_accountpage.png" alt="Digital grey-scale wireframe of the account page screen.">
                            <img class="img-thumb" src="../images/case-studies/loclo_ux/loclo_hifi_accountpage.png" alt="Digital coloured wireframe of the account page screen with stock image of sweat suit product.">
                            </div>
                            <p class="cs-img-caption">Digital Low&dash;Fidelity Wireframe of Account Page on Website</p>
                        </div>
                        <div class="img-container cs-body-img-container">
                            <img class="img-thumb" src="../images/case-studies/loclo_ux/loclo_hifi_accountpage.png" alt="Digital coloured wireframe of the account page screen with stock image of sweat suit product.">
                            <p class="cs-img-caption">Digital High&dash;Fidelity Wireframe of Account Page on Website</p>
                        </div>
                    </div>
                </section>
                <section class="subpg-section cs-section">
                    <div class="container">
                        <h2>Iterations</h2>
                        <p>The Usability Testing Results for both mobile application and website interfaces provided further insights about unidentified pain points and simple revisions that can improve the ease of access to the interface&period;</p>
                        <p>The new pain points discovered from the Usability Study included insufficient emphasis on call&dash;to&dash;action buttons and links and unclear progression for the checkout experience as many users unexpectedly misclicked on non&dash;clickable areas on the screen&period;</p>
                    </div>
                </section>
                <section class="subpg-section cs-section">
                    <div class="container">
                        <h2>Reflecting on the Challenges</h2>
                        <p>From the Usability Tests using UseBerry, I gathered a few solutions to apply to the screens to reduce confusion about how to proceed with the next task, boost users’ confidence for the entire journey, and increase excitement about completing a purchase.</p>
                        <p class="mb-sm">The <span class="bolded">proposed and applied solutions</span> include the following&colon;</p>
                        <ol>
                            <li>Emphasize section item on the User Account page&semi;</li>
                            <li>Reorganize components to above the fold&semi;</li>
                            <li>Remove emphasis on the Discount Code field and Checkout Navigation bar&semi;</li>
                            <li>Focus users’ attention on Payment input fields&semi; and</li>
                            <li>Encourage users to review information on the Review page to reduce errors&period;</li>
                        </ol>
                        <p>Below are three examples of the high-fidelity wireframes before and after the Usability Study that significantly impact the user’s shopping experience:</p>
                        <p class="bolded-italic">img container, img, img caption</p>
                        <p class="bolded-italic">img container, img, img caption</p>
                        <p class="bolded-italic">img container, img, img caption</p>
                        <p><span class="bolded">&ast;Note&colon;</span> Explore the <a>low-fidelity prototype here</a> first. When ready, check out the <a>high-fidelity prototype here</a> to view the changes.</p>
                    </div>
                </section>
                <section class="subpg-section cs-section">
                    <div class="container">
                        <h2>Takeaways</h2>
                        <p>After completing two prior projects, I learned that I brainstormed different questions to better empathize with the users and identify overlooked pain points from before the research process.</p>
                        <p>Testing and observing the key differences, strengths, and weaknesses of LOCLO Clothing’s competitors helped me better understand how users prioritize visual elements before reading textual content.</p>
                        <div class="peer-feedback-box">
                            <p class="peer-feedback-heading"></p>
                            <p class="peer-feedback-quote"></p>
                            <p class="peer-feedback-source"></p>
                        </div>
                        <p class="bolded">What I Learned&colon;</p>
                        <p>The usability tests helped me learn more about users’ behaviour, such as users preferring to experiment with the interface by selecting any clickable item or rounded element.</p>
                        <p>Taking note of these actions helped me learn about users’ expectations that were not verbally expressed or that all users aware of their actions.</p>
                    </div>
                </section>
                <section class="subpg-section cs-section">
                    <div class="container">
                        <h2>Next Steps</h2>
                        <p class="mb-sm">With more time, I would like to add more details and make additional changes to improve the website to be more accessible to users. Here are the first three steps I would want to take:</p>
                        <ol>
                            <li><span class="bolded">Consider Secondary Audience:</span> I would like to learn how a parent or a more mature user navigates the interface and what challenges they would face.</li>
                            <li><span class="bolded">More Diverse Testing Group:</span> With accessibility in mind, I would like to test and learn how to improve the design to support shoppers with a permanent, temporary, or situational disability that prevents them from exploring the entire website or mobile application.</li>
                            <li><span class="bolded">Developing Other Pages:</span> With more pages, users will be navigating additional steps that can make the shopping experience more complex and prone to errors. I would like to create more pages that require different layouts to challenge myself to learn how to improve the design to avoid information overload.</li>
                        </ol>
                        <p class="bolded-italic text-center">Thank you for viewing my work&excl;</p>
                    </div>
                </section>
                <?php include('../partials/global/contact.php'); ?>
            </main>
            <?php include('../partials/global/footer.php'); ?>
        </div>
        <script src="../build/js/main.js"></script>
    </body>
</html>