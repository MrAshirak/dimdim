<?php
use zion\core\System;

System::add('cssList',"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
System::add('cssList',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
System::add("cssList","web/public/view/css/style.css");
System::add('jsList',"https://code.jquery.com/jquery-3.6.3.min.js");
System::add('jsList',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js");

define("library\FrontEnd",System::getAll());
