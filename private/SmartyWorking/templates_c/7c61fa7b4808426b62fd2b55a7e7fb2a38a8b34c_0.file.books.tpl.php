<?php
/* Smarty version 3.1.31, created on 2020-10-11 01:59:28
  from "/home1/alexorco/public_html/library/alexor/themes/simple/notifications/books.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f82bb602163f6_37301799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c61fa7b4808426b62fd2b55a7e7fb2a38a8b34c' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/themes/simple/notifications/books.tpl',
      1 => 1519083618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f82bb602163f6_37301799 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="100%" cellpadding="0" cellspacing="0" class="table-bordered" border="1">
    <thead>
        <tr>
            <th>Book</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
            <tr>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SiteURL']->value;
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
</a>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </tbody>
</table><?php }
}
