<?php
/* Smarty version 3.1.31, created on 2020-08-14 04:33:04
  from "/home1/alexorco/public_html/library/alexor/themes/simple/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f3668606d8699_78309307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eb6b127383720b66ed05a2a1d8061aa6a3cdbad' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/themes/simple/index.tpl',
      1 => 1519083618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3668606d8699_78309307 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4734933815f366860698711_79206504', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17975049025f3668606a5c08_44763719', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9034619525f3668606a8ab2_06151319', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7211538195f3668606abc31_62876035', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10109805245f3668606ace46_01870008', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17178672055f3668606d64a7_43953028', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7128385565f3668606d76c2_52124348', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_4734933815f366860698711_79206504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_4734933815f366860698711_79206504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['indexPage']->value != null) {
if ($_smarty_tpl->tpl_vars['indexPage']->value->getMetaTitle() != null) {
echo $_smarty_tpl->tpl_vars['indexPage']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['indexPage']->value->getTitle();
}
}
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_17975049025f3668606a5c08_44763719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_17975049025f3668606a5c08_44763719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['indexPage']->value != null) {
echo $_smarty_tpl->tpl_vars['indexPage']->value->getMetaDescription();
}
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_9034619525f3668606a8ab2_06151319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_9034619525f3668606a8ab2_06151319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['indexPage']->value != null) {
echo $_smarty_tpl->tpl_vars['indexPage']->value->getMetaKeywords();
}
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_7211538195f3668606abc31_62876035 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_7211538195f3668606abc31_62876035',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_10109805245f3668606ace46_01870008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10109805245f3668606ace46_01870008',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="home-book-list p-3">
        <div class="row">
            <div class="col-sm-12">
                <?php if ($_smarty_tpl->tpl_vars['indexPage']->value != null) {?>
                    <?php echo $_smarty_tpl->tpl_vars['indexPage']->value->getContent();?>

                <?php }?>
            </div>
            <div class="col-sm-12">
                <div class="page-title mb-3">
                    <h2 class="text-uppercase title"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
last books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
                </div>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['books']->value) && $_smarty_tpl->tpl_vars['books']->value != null) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book', false, NULL, 'book', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <div class="card book card-no-border">
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getCover()) {?>
                                <div class="cover">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->getCover()->getWebPath('small');?>
" alt="" class="card-img-top"></a>
                                </div>
                            <?php } else { ?>
                                <div class="cover">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookViewPublic",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" class="card-img-top"></a>
                                </div>
                            <?php }?>
                            <div class="card-block p-2 text-center">
                                <h4 class="card-title">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookPublicView",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
 <?php if ($_smarty_tpl->tpl_vars['book']->value->getPublishingYear() != null) {?>(<?php echo $_smarty_tpl->tpl_vars['book']->value->getPublishingYear();?>
)<?php }?></a>
                                </h4>
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
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_17178672055f3668606d64a7_43953028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_17178672055f3668606d64a7_43953028',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_7128385565f3668606d76c2_52124348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_7128385565f3668606d76c2_52124348',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'customJs'} */
}
