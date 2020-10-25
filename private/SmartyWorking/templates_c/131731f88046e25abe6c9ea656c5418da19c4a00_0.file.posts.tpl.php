<?php
/* Smarty version 3.1.31, created on 2020-08-16 05:05:57
  from "/home1/alexorco/public_html/library/alexor/themes/simple/blog/posts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f391315536963_16531107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '131731f88046e25abe6c9ea656c5418da19c4a00' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/themes/simple/blog/posts.tpl',
      1 => 1519083616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:general/pagination.tpl' => 1,
  ),
),false)) {
function content_5f391315536963_16531107 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7380123035f391315507681_65671736', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12730856255f391315516337_85380119', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3382563505f391315518894_85492755', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11771181295f39131551aa84_68955058', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_7380123035f391315507681_65671736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_7380123035f391315507681_65671736',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['category']->value)) {
echo $_smarty_tpl->tpl_vars['category']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['blog']->value->getMetaTitle();
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
if ($_smarty_tpl->tpl_vars['page']->value->isCurrent()) {
if ($_smarty_tpl->tpl_vars['page']->value->getTitle() != 1) {?> : Page #<?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();
}
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_12730856255f391315516337_85380119 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_12730856255f391315516337_85380119',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['category']->value)) {
echo $_smarty_tpl->tpl_vars['category']->value->getMetaDescription();
} else {
echo $_smarty_tpl->tpl_vars['blog']->value->getMetaDescription();
}
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_3382563505f391315518894_85492755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_3382563505f391315518894_85492755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['category']->value)) {
echo $_smarty_tpl->tpl_vars['category']->value->getMetaKeywords();
} else {
echo $_smarty_tpl->tpl_vars['blog']->value->getMetaKeywords();
}
}
}
/* {/block 'metaKeywords'} */
/* {block 'content'} */
class Block_11771181295f39131551aa84_68955058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11771181295f39131551aa84_68955058',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="page-header text-center">
        <div class="container">
            <?php if (isset($_smarty_tpl->tpl_vars['category']->value)) {?>
                <h1><?php echo $_smarty_tpl->tpl_vars['category']->value->getTitle();?>
</h1>
            <?php } else { ?>
                <h1><?php echo $_smarty_tpl->tpl_vars['blog']->value->getSecondTitle();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
if ($_smarty_tpl->tpl_vars['page']->value->isCurrent()) {
if ($_smarty_tpl->tpl_vars['page']->value->getTitle() != 1) {?> : Page #<?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();
}
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</h1>
            <?php }?>
        </div>
    </header>
    <div class="page blog-posts">
        <div class="row">
            <?php if (isset($_smarty_tpl->tpl_vars['posts']->value) && $_smarty_tpl->tpl_vars['posts']->value != null) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post', false, NULL, 'post', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                    <div class="post col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <?php if ($_smarty_tpl->tpl_vars['post']->value->getImage() != null) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postViewPublic",array("postUrl"=>$_smarty_tpl->tpl_vars['post']->value->getUrl()));?>
" class="post-img">
                                        <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getWebPath('small');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
">
                                    </a>
                                <?php }?>
                            </div>
                            <div class="col-lg-8">
                                <div class="post-content">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postViewPublic",array("postUrl"=>$_smarty_tpl->tpl_vars['post']->value->getUrl()));?>
" class="post-title">
                                        <h5><?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
</h5>
                                    </a>
                                    <div class="post-meta">
                                        <p>
                                            <i class="ti-calendar"></i> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->getPublishDateTime(),"%d %b %Y");?>

                                            <i class="ti-user ml-3"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value->getUser()->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value->getUser()->getLastName();?>

                                        </p>
                                    </div>
                                    <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getShortDescription();?>
</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12">
                <?php $_smarty_tpl->_subTemplateRender("file:general/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
