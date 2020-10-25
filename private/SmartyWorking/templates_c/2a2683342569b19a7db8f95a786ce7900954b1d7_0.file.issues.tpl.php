<?php
/* Smarty version 3.1.31, created on 2020-10-11 00:56:28
  from "/home1/alexorco/public_html/library/alexor/themes/simple/notifications/issues.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f82ac9c893473_06293543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a2683342569b19a7db8f95a786ce7900954b1d7' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/themes/simple/notifications/issues.tpl',
      1 => 1519083618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f82ac9c893473_06293543 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/modifier.date_format.php';
?>
<table width="100%" cellpadding="0" cellspacing="0" class="table-bordered" border="0">
    <thead>
        <tr>
            <th>Book</th>
            <th class="aligncenter">Issue Date</th>
            <th class="aligncenter">Expiry Date</th>
            <th class="aligncenter">Penalty</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['book']->value->getIssue()->isExpired()) {?>
                <tr>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['SiteURL']->value;
ob_start();
echo $_smarty_tpl->tpl_vars['book']->value->getId();
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_prefixVariable1));?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
</a>
                    </td>
                    <td class="aligncenter">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['book']->value->getIssue()->getIssueDate(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("dateFormat"));?>

                    </td>
                    <td class="aligncenter">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['book']->value->getIssue()->getExpiryDate(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("dateFormat"));?>

                    </td>
                    <td class="aligncenter">
                        <?php echo $_smarty_tpl->tpl_vars['book']->value->getIssue()->getPenalty();?>
 <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("priceCurrency");?>

                    </td>
                </tr>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </tbody>
</table><?php }
}
