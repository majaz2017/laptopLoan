<?php
/* Smarty version 3.1.31, created on 2020-08-14 04:33:04
  from "/home1/alexorco/public_html/library/alexor/themes/simple/public.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f3668606f43c7_36605873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71dafd1f48b37be67c9ef5966ab7cab0a0a1d726' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/themes/simple/public.tpl',
      1 => 1519083618,
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
function content_5f3668606f43c7_36605873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" class="" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15946298275f3668606e44e4_78879785', 'metaTitle');
?>
</title>
        <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4546618005f3668606e5b99_06328070', 'metaDescription');
?>
">
        <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_921593995f3668606e67f2_62171453', 'metaKeywords');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16296614145f3668606e9544_10375414', 'headerCss');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5549039765f3668606efd32_48718455', 'content');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1590925825f3668606f1c67_06356432', 'footerJs');
?>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/main.js"><?php echo '</script'; ?>
>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9755363225f3668606f3828_60942168', 'customJs');
?>

    </body>
</html><?php }
/* {block 'metaTitle'} */
class Block_15946298275f3668606e44e4_78879785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_15946298275f3668606e44e4_78879785',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Library CMS<?php
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_4546618005f3668606e5b99_06328070 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_4546618005f3668606e5b99_06328070',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_921593995f3668606e67f2_62171453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_921593995f3668606e67f2_62171453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_16296614145f3668606e9544_10375414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_16296614145f3668606e9544_10375414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_5549039765f3668606efd32_48718455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5549039765f3668606efd32_48718455',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_1590925825f3668606f1c67_06356432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_1590925825f3668606f1c67_06356432',
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
class Block_9755363225f3668606f3828_60942168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_9755363225f3668606f3828_60942168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'customJs'} */
}
