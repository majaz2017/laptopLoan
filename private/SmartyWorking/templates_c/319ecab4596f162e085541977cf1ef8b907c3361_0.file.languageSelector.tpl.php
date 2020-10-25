<?php
/* Smarty version 3.1.31, created on 2020-08-14 04:27:06
  from "/home1/alexorco/public_html/library/alexor/private/Templates/admin/general/languageSelector.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f3666fa0b8232_83847011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '319ecab4596f162e085541977cf1ef8b907c3361' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/private/Templates/admin/general/languageSelector.tpl',
      1 => 1519083606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3666fa0b8232_83847011 (Smarty_Internal_Template $_smarty_tpl) {
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
