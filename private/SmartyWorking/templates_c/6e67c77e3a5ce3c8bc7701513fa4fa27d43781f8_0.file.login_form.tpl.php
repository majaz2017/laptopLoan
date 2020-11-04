<?php
/* Smarty version 3.1.31, created on 2020-11-03 13:52:45
  from "C:\wamp64\www\laptoploan\laptopLoan\themes\simple\auth\login_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5fa160ad1392e7_48990506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e67c77e3a5ce3c8bc7701513fa4fa27d43781f8' => 
    array (
      0 => 'C:\\wamp64\\www\\laptoploan\\laptopLoan\\themes\\simple\\auth\\login_form.tpl',
      1 => 1604410369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa160ad1392e7_48990506 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\wamp64\\www\\laptoploan\\laptopLoan\\private\\Smarty\\plugins\\block.t.php';
?>
<form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("adminLogin");?>
" method="post" class="form-horizontal">
    <div class="form-group ">
        <div class="col-xs-12">
            <input type="text" name="login" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['login']->value) && !empty($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['login']->value != false) {
echo $_smarty_tpl->tpl_vars['login']->value;
}?>">
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12">
            <input type="password" name="password" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-8 col-xs-8">
                <div class="app-checkbox">
                    <label>
                        <input type="checkbox" name="rememberMe"> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Remember me<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    </label>
                </div>
            </div>
            <div class="col-md-4 col-xs-4">
                <button class="btn btn-success btn-block"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
            </div>
            <div class="col-md-12 mt-2">
                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("passwordRecovery");?>
" class="btn btn-secondary btn-block"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Forgot password?<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableRegistration")) {?>
                <div class="col-md-12 mt-2">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userRegistration");?>
" class="btn btn-info btn-block"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sign Up<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                </div>
            <?php }?>
        </div>
    </div>
</form><?php }
}
