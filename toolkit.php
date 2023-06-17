<!DOCTYPE html>
<html lang="en-CA">
    <?php 
        $title_text = "Projects by Jessica | Jessica Lee, Front&dash;End Developer";
        include('partials/global/head.php'); 
    ?>
    <body>
        <div class="wrapper">
        <?php include('partials/global/header.php'); ?>
            <main class="artifact-pg">
            <h1>Jessica&apos;s Toolkit</h1>
            <p>A collection of Full&dash;stack and Front&dash;end Development Personal Projects&comma; UX Design Case Studies&comma; and articles and blog posts reflecting Jessica&apos;s interests and skills&period;</p>
                <?php
                    $project_title = 'BCIT Hack the Break 2023 Website';
                    $project_type = 'Responsive React Landing Page';
                    $project_description = 'Anxious about securing a job&quest; We feel that&comma; too&period; Hack the Break 2023 focuses on addressing the challenging job market and fluctuating workforce since the pandemic&period;';
                    $project_skills = 'Typescript &vert; React &vert; CSS Modules';
                    $live_link = 'https://hackthebreak2023.com/';
                    $code_link = 'https://github.com/jmc37/HackTheBreak';
                    $project_img_src = 'htb2023_cover';
                    $project_img_alt = 'Hack the Break 2023 Cover Photo';
                ?>
                <?php include('partials/global/contact.php'); ?>
            </main>
            <?php include('partials/global/footer.php'); ?>
        </div>
        <script src="build/js/main.js"></script>
    </body>
</html>