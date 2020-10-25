<?php
/* Smarty version 3.1.31, created on 2020-08-14 04:27:06
  from "/home1/alexorco/public_html/library/alexor/private/Templates/admin/general/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f3666fa25a145_38654962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95756e5758834bca3c3e05405dfbe3e0f81cf5af' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/private/Templates/admin/general/footer.tpl',
      1 => 1519083606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3666fa25a145_38654962 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="footer">
    <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("footerCredits");?>

</footer><?php }
}
