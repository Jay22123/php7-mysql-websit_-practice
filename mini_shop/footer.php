<?php
  if (isset($_SESSION['user_name']) and $_SESSION['user_name'] != '') {
      $smarty->assign('user_name', $_SESSION['user_name']);
  }
$smarty->assign('shop_name', _WEB_NAME);
$smarty->assign('op', $op);
$smarty->display('index.html');
