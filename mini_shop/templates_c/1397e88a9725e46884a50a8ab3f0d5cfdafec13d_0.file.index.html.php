<?php
/* Smarty version 3.1.29, created on 2019-11-26 23:02:39
  from "D:\UniServerZ\www\mini_shop\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ddd3e8f197ce0_97506958',
  'file_dependency' => 
  array (
    '1397e88a9725e46884a50a8ab3f0d5cfdafec13d' => 
    array (
      0 => 'D:\\UniServerZ\\www\\mini_shop\\templates\\index.html',
      1 => 1574780506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:goods_form.html' => 1,
    'file:index_side.html' => 1,
  ),
),false)) {
function content_5ddd3e8f197ce0_97506958 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</title>

    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">



    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="bootstrap/js/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="bootstrap/js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 src="bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/jquery-migrate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="container">

      <div id="web_head">
        <a href="index.php">
          <img src="images/head.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
" class="img-responsive">
        </a>
      </div>

      <div id="web_main" class="row">
      <div class="col-md-9 col-sm-8" >
        <?php if ($_smarty_tpl->tpl_vars['op']->value == "goods_form") {?>
          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:goods_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php } else { ?>
          主內容區
        <?php }?>
      </div>
        <div class="col-md-3 col-sm-4">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index_side.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      </div>

      <div id="web_foot">
        <div>地址:高雄縣岡山區灣裡里18巷32弄1號</div>
        <div>電話:0975030721</div>
        <div>版權所有@copyright</div>
      </div>

    </div>


  </body>
  </html>
<?php }
}
