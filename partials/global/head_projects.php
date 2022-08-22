<?php

    $project_title = $project_title ?? 'Jessica Lee &vert; Front&dash;End Developer';

?><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $project_title; ?></title>
    <link rel="icon" type="image/svg" href="../images/jessicamlee_favicon.svg">
    <meta name="description" content="Jessica Lee | I develop experiences to share stories in immersive, insightful, and memorable ways.">
    <meta name="keywords" content="web developer, front end developer, Jessica Lee front end developer, Jessica Lee bcit new media portfolio, Jessica Lee vancouver starfish canada">
    <meta name="author" content="Jessica Lee">
    <meta property="image" content="https://jessicamlee.dev/images/jessicamlee_home.jpg">
    <!-- OG Content -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jessicamlee.dev">
    <meta property="og:title" content="Jessica Lee | Front-End Developer">
    <meta property="og:description" content="Jessica Lee | I develop experiences to share stories in immersive, insightful, and memorable ways.">
    <meta property="og:image" content="https://jessicamlee.dev/images/jessicamlee_home.jpg">
    <!-- Twitter Content -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://jessicamlee.dev">
    <meta property="twitter:title" content="Jessica Lee | Front-End Developer">
    <meta property="twitter:description" content="Jessica Lee | I develop experiences to share stories in immersive, insightful, and memorable ways.">
    <meta property="twitter:image" content="https://jessicamlee.dev/images/jessicamlee_home.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400&display=swap">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../styles/dics.css">
    <!-- Light/Dark/System Modes Appearance -->
    <script>
        // To support light mode, dark mode, and the OS's preference: (added inline to avoid Flash of Unstyled Content or 'FOUC')
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
        
        // For when users select light mode as their preference:
        localhome.pnge = 'light';

        // For when users select dark mode as their preference:
        localStorage.theme = 'dark';

        // For when user choses the OS' setting as their preference:
        localStorage.removeItem('theme');
    </script>
</head>