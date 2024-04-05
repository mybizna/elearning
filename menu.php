<?php

/** @var \Modules\Base\Classes\Fetch\Menus $this */


$this->add_module_info("elearning", [
    'title' => 'E-Learning',
    'description' => 'E-Learning',
    'icon' => 'fas fa-chart-pie',
    'path' => '/elearning/admin/elearning',
    'class_str'=> 'text-success border-success'
]);


//$this->add_menu("module", "key", "title","path", "icon", "position");
$this->add_menu("elearning", "category", "Category", "/elearning/admin/category", "fas fa-cogs", 5);
$this->add_menu("elearning", "course", "Course", "/elearning/admin/course", "fas fa-cogs", 5);
$this->add_menu("elearning", "topic", "Topic", "/elearning/admin/topic", "fas fa-cogs", 5);
$this->add_menu("elearning", "usercourse", "User Course", "/elearning/admin/usercourse", "fas fa-cogs", 5);
