<?php

    class FeatProject {
        
        public $image_url;
        public $alt;
        public $project_title;
        public $subtitle;
        public $project_link;

        // Create the connection to pass the details from data/projects.php as a $props/property in the following function.
        public function __construct($props = []) {
            $this->image_url = $props['image_url'] ?? null;
            $this->alt = $props['alt'] ?? null;
            $this->project_title = $props['project_title'] ?? null;
            $this->subtitle = $props['subtitle'] ?? null;
            $this->project_link = $props['project_link'] ?? null;
        }                  
    }