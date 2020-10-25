<?php
/* Smarty version 3.1.31, created on 2020-10-04 03:17:33
  from "/home1/alexorco/public_html/library/alexor/themes/simple/books/rating.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f79932d0ac4b0_55258243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4610e15246daaadb6dcaba826df457266f85f393' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/themes/simple/books/rating.tpl',
      1 => 1519083618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f79932d0ac4b0_55258243 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <ul class="rating-stars <?php if ($_smarty_tpl->tpl_vars['readOnly']->value) {?>readOnly<?php }?> d-inline-block" <?php if ($_smarty_tpl->tpl_vars['showTooltip']->value) {?>data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['tooltipMessage']->value;?>
"<?php }?>>
        <?php
$_smarty_tpl->tpl_vars['ratingIndex'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['ratingIndex']->step = 1;$_smarty_tpl->tpl_vars['ratingIndex']->total = (int) ceil(($_smarty_tpl->tpl_vars['ratingIndex']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['ratingIndex']->step));
if ($_smarty_tpl->tpl_vars['ratingIndex']->total > 0) {
for ($_smarty_tpl->tpl_vars['ratingIndex']->value = 1, $_smarty_tpl->tpl_vars['ratingIndex']->iteration = 1;$_smarty_tpl->tpl_vars['ratingIndex']->iteration <= $_smarty_tpl->tpl_vars['ratingIndex']->total;$_smarty_tpl->tpl_vars['ratingIndex']->value += $_smarty_tpl->tpl_vars['ratingIndex']->step, $_smarty_tpl->tpl_vars['ratingIndex']->iteration++) {
$_smarty_tpl->tpl_vars['ratingIndex']->first = $_smarty_tpl->tpl_vars['ratingIndex']->iteration == 1;$_smarty_tpl->tpl_vars['ratingIndex']->last = $_smarty_tpl->tpl_vars['ratingIndex']->iteration == $_smarty_tpl->tpl_vars['ratingIndex']->total;?>
            <?php if ($_smarty_tpl->tpl_vars['rating']->value >= $_smarty_tpl->tpl_vars['ratingIndex']->value) {?>
                <li class="star selected" data-value="<?php echo $_smarty_tpl->tpl_vars['ratingIndex']->value;?>
">
                    <i class="fa fa-star"></i>
                </li>
            <?php } elseif (($_smarty_tpl->tpl_vars['ratingIndex']->value-$_smarty_tpl->tpl_vars['rating']->value) <= 0.5 && ($_smarty_tpl->tpl_vars['ratingIndex']->value-$_smarty_tpl->tpl_vars['rating']->value) < 1) {?>
                <li class="star selected" data-value="<?php echo $_smarty_tpl->tpl_vars['ratingIndex']->value;?>
">
                    <i class="fa  fa-star-half"></i>
                </li>
            <?php } else { ?>
                <li class="star" data-value="<?php echo $_smarty_tpl->tpl_vars['ratingIndex']->value;?>
">
                    <i class="fa fa-star"></i>
                </li>
            <?php }?>
        <?php }
}
?>

    </ul><?php }
}
