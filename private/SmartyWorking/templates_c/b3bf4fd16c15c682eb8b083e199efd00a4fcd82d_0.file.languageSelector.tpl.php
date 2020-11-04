<?php
/* Smarty version 3.1.31, created on 2020-11-03 13:54:20
  from "C:\wamp64\www\laptoploan\laptopLoan\private\Templates\admin\general\languageSelector.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5fa1610ccec7d4_59223677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3bf4fd16c15c682eb8b083e199efd00a4fcd82d' => 
    array (
      0 => 'C:\\wamp64\\www\\laptoploan\\laptopLoan\\private\\Templates\\admin\\general\\languageSelector.tpl',
      1 => 1604410369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa1610ccec7d4_59223677 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['languages']->value)) {?>
    <a class="nav-link dropdown-toggle text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="icon-globe"></i>
    </a>
    <div class="dropdown-menu <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>dropdown-menu-left<?php } else { ?>dropdown-menu-right<?php }?> animated bounceIn">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['language']->value->isActive()) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("languageChange",array("languageCode"=>$_smarty_tpl->tpl_vars['language']->value->getCode()));?>
" class="dropdown-item <?php if (strcmp($_smarty_tpl->tpl_vars['language']->value->getCode(),$_smarty_tpl->tpl_vars['activeLanguage']->value->getCode()) === 0) {?>active<?php }?>"><i class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['language']->value->getShortCode();?>
"></i><?php echo $_smarty_tpl->tpl_vars['language']->value->getName();?>
</a>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </div>
<?php }
}
}
