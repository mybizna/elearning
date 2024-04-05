<?php

/** @var \Modules\Base\Classes\Fetch\Rights $this */

//Category.php  Course.php  Topic.php  Usercourse.php  Usertopic.php

$this->add_right("elearning", "course", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "course", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "course", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "course", "staff", view:true, add:true, edit:true);
$this->add_right("elearning", "course", "registered", view:true, add:true);
$this->add_right("elearning", "course", "guest", view:true, );

$this->add_right("elearning", "category", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "category", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "category", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "category", "staff", view:true, add:true, edit:true);
$this->add_right("elearning", "category", "registered", view:true, add:true);
$this->add_right("elearning", "category", "guest", view:true, );

$this->add_right("elearning", "topic", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "topic", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "topic", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "topic", "staff", view:true, add:true, edit:true);
$this->add_right("elearning", "topic", "registered", view:true, add:true);
$this->add_right("elearning", "topic", "guest", view:true, );

$this->add_right("elearning", "usercourse", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "usercourse", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "usercourse", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "usercourse", "staff", view:true, add:true, edit:true);
$this->add_right("elearning", "usercourse", "registered", view:true, add:true);
$this->add_right("elearning", "usercourse", "guest", view:true, );

$this->add_right("elearning", "usertopic", "administrator", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "usertopic", "manager", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "usertopic", "supervisor", view:true, add:true, edit:true, delete:true);
$this->add_right("elearning", "usertopic", "staff", view:true, add:true, edit:true);
$this->add_right("elearning", "usertopic", "registered", view:true, add:true);
$this->add_right("elearning", "usertopic", "guest", view:true, );
