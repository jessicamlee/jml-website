<section id="work" class="work section">
    <div class="container">
        <h2 data-aos="fade-right">Featured Work</h2>
        <ul class="work-collection collection-container flex">
            <?php
                $work_title = 'Inspirational Quote Generator';
                $work_desc = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie massa et neque pharetra, quis dignissim lacus vulputate. Sed non pharetra velit, non dapibus nisi. Ut a erat commodo, suscipit felis quis, aliquam nulla. Mauris suscipit vel odio sit amet commodo. Aenean lacinia elit vel dapibus luctus.';
                $work_skills = 'TypeScript | Next.js | AWS';
                $work_img_src = 'htb2023_cover';
                $work_img_alt = 'Inspirational Quote Generator Home Page Cover Photo';
                $live_link = 'https://prod.d28hmooal1ffyl.amplifyapp.com/';
                include('partials/cards/work-card.php');
            ?>
            <?php
                $work_title = 'CMJSH Agency';
                $work_desc = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie massa et neque pharetra, quis dignissim lacus vulputate. Sed non pharetra velit, non dapibus nisi. Ut a erat commodo, suscipit felis quis, aliquam nulla. Mauris suscipit vel odio sit amet commodo. Aenean lacinia elit vel dapibus luctus.';
                $work_skills = 'React.js | TailwindCSS | BrowserStack';
                $work_img_src = 'cmjsh_cover';
                $work_img_alt = 'CMJSH Agency Website Cover Photo';
                $live_link = 'https://jessicamlee.github.io/CMJSH-agency';
                include('partials/cards/work-card.php');
            ?>
            <?php
                $work_title = 'Spring Local 2022';
                $work_desc = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie massa et neque pharetra, quis dignissim lacus vulputate. Sed non pharetra velit, non dapibus nisi. Ut a erat commodo, suscipit felis quis, aliquam nulla. Mauris suscipit vel odio sit amet commodo. Aenean lacinia elit vel dapibus luctus.';
                $work_skills = 'PHP | MySQL | SASS | HTML5';
                $work_img_src = 'loclo_cover';
                $work_img_alt = 'LOCLO Homepage Project Cover Photo';
                $live_link = 'https://locloclothing.jessicamlee.dev/';
                include('partials/cards/work-card.php');
            ?>
        </ul>
    </div>
</section>