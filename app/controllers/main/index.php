<?php
function _index() {
  $data['pagename']='KISS PHP Framework';

  $data['title'] = 'Simples framework para PHP MVC';

  $data['body'] = View::do_fetch(VIEW_PATH.'main/index.php');

  View::do_dump(VIEW_PATH.'layouts/mainlayout.php',$data);
}
