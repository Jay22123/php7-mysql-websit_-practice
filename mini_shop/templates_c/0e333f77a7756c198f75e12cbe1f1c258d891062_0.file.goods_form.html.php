<?php
/* Smarty version 3.1.29, created on 2019-11-26 23:01:11
  from "D:\UniServerZ\www\mini_shop\templates\goods_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ddd3e37138e87_80513018',
  'file_dependency' => 
  array (
    '0e333f77a7756c198f75e12cbe1f1c258d891062' => 
    array (
      0 => 'D:\\UniServerZ\\www\\mini_shop\\templates\\goods_form.html',
      1 => 1574693283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddd3e37138e87_80513018 ($_smarty_tpl) {
?>
<h1>編輯商品</h1>
<form action="tool.php" method="post" class="form-horizontal" role="form">
  <div class="form-group">
    <label class="col-md-2 control-label">商品名稱:</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="goods_title" id="goods_title" placeholder="請輸入產品名稱" value="">
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-2 control-label">商品內容:</label>
    <div class="col-md-10">
      <textarea class="form-control" name="goods_content" id="goods_content" placeholder="請輸入產品內容"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-2 control-label">商品價格:</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="goods_price" id="goods_price" placeholder="請輸入產品價格" value="">
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
      <input type="hidden" name="op" value="insert_goods">
      <button type="submit" class="btn btn-primary">儲存商品</button>
    </div>
  </div>
</form>
<?php }
}
