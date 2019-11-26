<?php
/* Smarty version 3.1.29, created on 2019-11-25 16:52:34
  from "D:\UniServerZ\www\mini_shop\templates\side_tools.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ddb9652c03291_85584065',
  'file_dependency' => 
  array (
    '47d449188456fe41d3f9a100e99ac0c91124aab4' => 
    array (
      0 => 'D:\\UniServerZ\\www\\mini_shop\\templates\\side_tools.html',
      1 => 1574671941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddb9652c03291_85584065 ($_smarty_tpl) {
?>
<div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
您好!歡迎光臨<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</div>
<a href="index.php" class="btn btn-block btn-primary">回首頁</a>
<a href="tool.php?op=goods_form" class="btn btn-block btn-success">發布商品</a>
<a href="index.php?op=user_logout" class="btn btn-block btn-danger">登出</a>
<?php }
}
