<?php
/* Smarty version 3.1.31, created on 2020-08-14 04:33:04
  from "/home1/alexorco/public_html/library/alexor/themes/simple/general/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f3668607352b4_89383019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b344d15a65994440c092130b970196f2fc31517' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/themes/simple/general/footer.tpl',
      1 => 1519083618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3668607352b4_89383019 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
?>
<footer class="footer">
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <p><?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("footerCredits");?>
</p>
                </div>
                <div class="col-sm-3 text-lg-right">
                    <a href="#" id="back-to-top"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Back to top<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  <i class="ti-angle-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer><?php }
}
