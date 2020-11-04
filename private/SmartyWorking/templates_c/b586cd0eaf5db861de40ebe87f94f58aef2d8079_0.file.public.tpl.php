<?php
/* Smarty version 3.1.31, created on 2020-11-04 07:46:17
  from "C:\wamp64\www\laptoploan\laptopLoan\themes\simple\public.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5fa25c495088d5_73869551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b586cd0eaf5db861de40ebe87f94f58aef2d8079' => 
    array (
      0 => 'C:\\wamp64\\www\\laptoploan\\laptopLoan\\themes\\simple\\public.tpl',
      1 => 1604410369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:general/header.tpl' => 1,
    'file:general/footer.tpl' => 1,
    'file:auth/login.tpl' => 1,
  ),
),false)) {
function content_5fa25c495088d5_73869551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" class="" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20796251675fa25c494fabf6_35707324', 'metaTitle');
?>
</title>
        <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5149218935fa25c494fb784_47321128', 'metaDescription');
?>
">
        <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9386223965fa25c494fbe07_48087458', 'metaKeywords');
?>
">
        <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("favIconFilePath");?>
"/>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/plugins/select2/select2.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/themify-icons.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/flag-icon.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/css/style.css">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12908374565fa25c495002d8_43493588', 'headerCss');
?>

    </head>
    <body>
        <?php if (($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("publicForRegisteredUsersOnly") && isset($_smarty_tpl->tpl_vars['user']->value)) || !$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("publicForRegisteredUsersOnly")) {?>
            <div class="content-wrapper">
                <?php $_smarty_tpl->_subTemplateRender('file:general/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="d-none" id="message-block"></div>
                            </div>
                        </div>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20529700875fa25c495057d9_95021265', 'content');
?>

                    </div>
                </div>
                <?php $_smarty_tpl->_subTemplateRender('file:general/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender('file:auth/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19986216365fa25c49506836_25934535', 'footerJs');
?>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/main.js"><?php echo '</script'; ?>
>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3560271015fa25c49507f63_65298377', 'customJs');
?>

    </body>
</html><?php }
/* {block 'metaTitle'} */
class Block_20796251675fa25c494fabf6_35707324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_20796251675fa25c494fabf6_35707324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Library CMS<?php
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_5149218935fa25c494fb784_47321128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_5149218935fa25c494fb784_47321128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_9386223965fa25c494fbe07_48087458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_9386223965fa25c494fbe07_48087458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_12908374565fa25c495002d8_43493588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_12908374565fa25c495002d8_43493588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_20529700875fa25c495057d9_95021265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20529700875fa25c495057d9_95021265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_19986216365fa25c49506836_25934535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_19986216365fa25c49506836_25934535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/jquery.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/plugins/bootstrap/popper.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/plugins/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/plugins/select2/select2.full.min.js"><?php echo '</script'; ?>
>
        <?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_3560271015fa25c49507f63_65298377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_3560271015fa25c49507f63_65298377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'customJs'} */
}
