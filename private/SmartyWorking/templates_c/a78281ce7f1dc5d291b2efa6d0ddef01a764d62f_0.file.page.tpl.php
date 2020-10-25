<?php
/* Smarty version 3.1.31, created on 2020-10-11 02:43:43
  from "/home1/alexorco/public_html/library/alexor/themes/simple/page/page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f82c5bf6204d3_65463657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a78281ce7f1dc5d291b2efa6d0ddef01a764d62f' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/themes/simple/page/page.tpl',
      1 => 1519083618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f82c5bf6204d3_65463657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21153317915f82c5bf6096d5_87214899', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14095197855f82c5bf616339_13678176', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6441702975f82c5bf617907_55728393', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4124451475f82c5bf618dd9_99848055', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13538004045f82c5bf6198d9_60606247', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21046009265f82c5bf61efa0_06964708', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14445324315f82c5bf61fb94_07261087', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_21153317915f82c5bf6096d5_87214899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_21153317915f82c5bf6096d5_87214899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value->getMetaTitle()) {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['page']->value->getTitle();
}
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_14095197855f82c5bf616339_13678176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_14095197855f82c5bf616339_13678176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaDescription();
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_6441702975f82c5bf617907_55728393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_6441702975f82c5bf617907_55728393',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaKeywords();
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_4124451475f82c5bf618dd9_99848055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_4124451475f82c5bf618dd9_99848055',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_13538004045f82c5bf6198d9_60606247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13538004045f82c5bf6198d9_60606247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="page-header text-center">
        <div class="container">
            <h1><?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();?>
</h1>
        </div>
    </header>
    <div class="page">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-content">
                    <?php if ($_smarty_tpl->tpl_vars['page']->value->getImage() != null) {?>
                        <div class="text-center mb-3">
                            <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['page']->value->getImage()->getWebPath('');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['page']->value->getTitle();?>
">
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['page']->value->getContent()) {?>
                        <?php echo $_smarty_tpl->tpl_vars['page']->value->getContent();?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_21046009265f82c5bf61efa0_06964708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_21046009265f82c5bf61efa0_06964708',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_14445324315f82c5bf61fb94_07261087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_14445324315f82c5bf61fb94_07261087',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'customJs'} */
}
