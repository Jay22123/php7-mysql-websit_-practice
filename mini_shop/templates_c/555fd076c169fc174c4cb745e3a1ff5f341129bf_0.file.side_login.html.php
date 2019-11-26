<?php
/* Smarty version 3.1.29, created on 2019-11-25 16:52:23
  from "D:\UniServerZ\www\mini_shop\templates\side_login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ddb9647c22696_24433705',
  'file_dependency' => 
  array (
    '555fd076c169fc174c4cb745e3a1ff5f341129bf' => 
    array (
      0 => 'D:\\UniServerZ\\www\\mini_shop\\templates\\side_login.html',
      1 => 1574671794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddb9647c22696_24433705 ($_smarty_tpl) {
?>
<form action="index.php" method="post" role="form" class="form-horizontal">
<div class="form-group">
  <label class="col-md-4 control-label">帳號:</label>
  <div class="col-md-8">
    <input type="text" name="user_name" value="" class="form-control" placeholder="輸入帳號">
  </div>
</div>>
<div class="form-group">
  <label class="col-md-4"></label>
  <div class="col-md-7">
    <input type="hidden" name = "op" value="user_login">
    <button type="sumbit" name="button" class="btn btn-primary btn-block">登入</button>
  </div>
</div>
</form>
<?php }
}
