<?php 

    require_once(get_project_path('/Classes/FeatProjects.php'));

    $loclo_dev = new FeatProject ([
        "image_url" => "loclo_develop/loclo_developed_v2.jpg",
        "alt" => "LOCLO Homepage Project Cover Photo",
        "project_title" => "Spring Local 2022 by LOCLO",
        "subtitle" => "Responsive e-Commerce Homepage",
        "project_link" => "loclo-homepage.php",
    ]);

    $mytodo_list = new FeatProject ([
        "image_url" => "todo_list/todo_list_both_modes.jpg",
        "alt" => "To Do List Project Cover Photo",
        "project_title" => "My To-Do List",
        "subtitle" => "Temporary JavaScript To-Do List",
        "project_link" => "todo-list.php",
    ]);

    $cafehop = new FeatProject ([
        "image_url" => "cafehop/cafehop_cover.jpg",
        "alt" => "Cafe Hop App Cover Photo",
        "project_title" => "Café Hop",
        "subtitle" => "Android-based Mobile Application",
        "project_link" => "cafehop.php",
    ]);

    $projects = [
        $loclo_dev,
        $mytodo_list,
        $cafehop,
    ];