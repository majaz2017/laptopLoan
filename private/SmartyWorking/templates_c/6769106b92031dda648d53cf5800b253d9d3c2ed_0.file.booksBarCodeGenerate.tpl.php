<?php
/* Smarty version 3.1.31, created on 2020-08-14 04:57:26
  from "/home1/alexorco/public_html/library/alexor/private/Templates/admin/books/booksBarCodeGenerate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f366e160a7448_12016128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6769106b92031dda648d53cf5800b253d9d3c2ed' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/private/Templates/admin/books/booksBarCodeGenerate.tpl',
      1 => 1519083606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f366e160a7448_12016128 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5855561925f366e16062336_92154294', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17717131675f366e160695b5_43934751', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_587764135f366e1606a4b6_09067926', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17426970025f366e1606e044_44137849', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3734663815f366e16093994_14056846', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17684188325f366e16095892_72274765', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_5855561925f366e16062336_92154294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5855561925f366e16062336_92154294',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Barcode Generation<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_17717131675f366e160695b5_43934751 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_17717131675f366e160695b5_43934751',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'toolbar'} */
/* {block 'headerCss'} */
class Block_587764135f366e1606a4b6_09067926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_587764135f366e1606a4b6_09067926',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/barcode.css" rel="stylesheet" media="print"/>
<?php
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_17426970025f366e1606e044_44137849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17426970025f366e1606e044_44137849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row print-hide">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="border-top-0">
                                    <select name="bookIds[]" id="bookId" class="form-control"></select>
                                </td>
                                <td class="border-top-0" style="width: 65px;">
                                    <a href="#" class="btn btn-success" id="add-book" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form id="books" class="validate-books <?php if (isset($_smarty_tpl->tpl_vars['books']->value) && $_smarty_tpl->tpl_vars['books']->value != null) {
} else { ?>d-none<?php }?>">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                    <th style="width: 160px;" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Quantity<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                    <th style="width: 65px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($_smarty_tpl->tpl_vars['books']->value) && $_smarty_tpl->tpl_vars['books']->value != null) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book', false, NULL, 'book', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_book']->value['index']++;
?>
                                        <tr data-id="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_book']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_book']->value['index'] : null);?>
">
                                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
</td>
                                            <td>
                                                <input type="hidden" class="form-control" name="bookIds[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_book']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_book']->value['index'] : null);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->getId();?>
">
                                                <input type="text" class="form-control form-control-sm" name="barCodeQuantity[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_book']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_book']->value['index'] : null);?>
]" value="1">
                                            </td>
                                            <td class="text-center">
                                                <a href='#' class='btn btn-default remove-book' title='<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
'><i class='fa fa-remove'></i></a>
                                            </td>
                                        </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                <?php }?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <form class="validate card" id="barcode-settings">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="preset" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Preset<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <select name="preset" class="form-control select-picker" id="preset">
                                    <option value="8">8 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Per Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (97.1 mm x 67.1 mm)</option>
                                    <option value="12">12 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Per Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (95 mm x 40 mm)</option>
                                    <option value="16">16 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Per Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (99.1 mm x 33.9 mm)</option>
                                    <option value="24">24 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Per Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (63 mm x 33.9 mm)</option>
                                    <option value="30">30 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Per Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (60 mm x 25 mm)</option>
                                    <option value="40">40 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Per Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (45.7 mm x 25.5 mm)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="labelWidth" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Label Width<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (mm)</label>
                                <input type="text" class="form-control width-barcode" name="labelWidth" id="labelWidth" value="99.1">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="labelHeight" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Label Height<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (mm)</label>
                                <input type="text" class="form-control height-barcode" name="labelHeight" id="labelHeight" value="67.7">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="cornerRadius" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Corner Radius<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (mm)</label>
                                <input type="text" class="form-control height-barcode" name="cornerRadius" id="cornerRadius" value="1.5">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="primaryFontSize" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Primary Font Size<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (em)</label>
                                <input type="text" class="form-control height-barcode" name="primaryFontSize" id="primaryFontSize" value="1">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="secondaryFontSize" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Secondary Font Size<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (em)</label>
                                <input type="text" class="form-control height-barcode" name="secondaryFontSize" id="secondaryFontSize" value="0.750">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4">
                            <div class="form-group">
                                <label for="pageMarginTop" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Page Margin Top<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (mm)</label>
                                <input type="text" class="form-control height-barcode" name="pageMarginTop" id="pageMarginTop" value="13.1">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="form-group">
                                <label for="pageMarginBottom" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Page Margin Bottom<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (mm)</label>
                                <input type="text" class="form-control height-barcode" name="pageMarginBottom" id="pageMarginBottom" value="13.1">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="form-group">
                                <label for="pageMarginLeft" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Page Margin Left<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (mm)</label>
                                <input type="text" class="form-control height-barcode" name="pageMarginLeft" id="pageMarginLeft" value="4.4">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="form-group">
                                <label for="pageMarginRight" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Page Margin Right<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (mm)</label>
                                <input type="text" class="form-control height-barcode" name="pageMarginRight" id="pageMarginRight" value="4.4">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="form-group">
                                <label for="gapAcross" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Gap Across<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (mm)</label>
                                <input type="text" class="form-control height-barcode" name="gapAcross" id="gapAcross" value="3">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="form-group">
                                <label for="gapDown" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Gap Down<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (mm)</label>
                                <input type="text" class="form-control height-barcode" name="gapDown" id="gapDown" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 col-md-2">
                            <div class="form-group">
                                <label for="isPrintBookTitle" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Title<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label><br>
                                <label class="switch switch-sm">
                                    <input type="checkbox" name="isPrintBookTitle" id="isPrintBookTitle" value="1" checked>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-2">
                            <div class="form-group">
                                <label for="isPrintBookCover" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Cover<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label><br>
                                <label class="switch switch-sm">
                                    <input type="checkbox" name="isPrintBookCover" id="isPrintBookCover" value="1" checked>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-2">
                            <div class="form-group">
                                <label for="isPrintBookISBN" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label><br>
                                <label class="switch switch-sm">
                                    <input type="checkbox" name="isPrintBookISBN" id="isPrintBookISBN" value="1" checked>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-2">
                            <div class="form-group">
                                <label for="isPrintBookPublisher" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label><br>
                                <label class="switch switch-sm">
                                    <input type="checkbox" name="isPrintBookPublisher" id="isPrintBookPublisher" value="1" checked>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-2">
                            <div class="form-group">
                                <label for="isPrintBookGenre" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genre<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label><br>
                                <label class="switch switch-sm">
                                    <input type="checkbox" name="isPrintBookGenre" id="isPrintBookGenre" value="1" checked>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-2">
                            <div class="form-group">
                                <label for="isPrintBookAuthor" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Author<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label><br>
                                <label class="switch switch-sm">
                                    <input type="checkbox" name="isPrintBookAuthor" id="isPrintBookAuthor" value="1" checked>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-2">
                            <div class="form-group">
                                <label for="isPrintBookPrice" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Price<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label><br>
                                <label class="switch switch-sm">
                                    <input type="checkbox" name="isPrintBookPrice" id="isPrintBookPrice" value="1" checked>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4">
                            <div class="form-group">
                                <label for="customText" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Custom Text<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                <input type="text" class="form-control height-barcode" name="customText" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
e.g. Library Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" value="Library CMS">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-primary pull-right" id="generate">
                                <i class="icon-magic-wand"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Generate<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </button>
                            <button type="button" class="btn btn-primary pull-left" id="print">
                                <i class="icon-printer"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Print<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="pages"></div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_3734663815f366e16093994_14056846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_3734663815f366e16093994_14056846',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/JsBarcode/JsBarcode.all.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery-validate/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/select2/select2.full.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_17684188325f366e16095892_72274765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_17684188325f366e16095892_72274765',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $('.validate input,.validate select,.validate textarea,.validate-books input').tooltipster({
            trigger: 'custom',
            onlyOne: false,
            position: 'bottom',
            offsetY: -5,
            theme: 'tooltipster-kaa'
        });
        $('.validate-books').validate({
            errorPlacement: function (error, element) {
                if (element != undefined) {
                    $(element).tooltipster('update', $(error).text());
                    $(element).tooltipster('show');
                }
            },
            success: function (label, element) {
                $(element).tooltipster('hide');
            },
            rules: {
                'barCodeQuantity[]': {
                    required: true,
                    digits: true,
                    min: 1
                }
            }
        });

        $('.validate').validate({
            errorPlacement: function (error, element) {
                if (element != undefined) {
                    $(element).tooltipster('update', $(error).text());
                    $(element).tooltipster('show');
                }
            },
            success: function (label, element) {
                $(element).tooltipster('hide');
            },
            rules: {
                labelWidth: {
                    required: true,
                    number: true,
                    min: 1
                },
                labelHeight: {
                    required: true,
                    number: true,
                    min: 1
                },
                cornerRadius: {
                    required: true,
                    number: true
                },
                primaryFontSize: {
                    required: true,
                    number: true
                },
                secondaryFontSize: {
                    required: true,
                    number: true
                },
                pageMarginTop: {
                    required: true,
                    number: true
                },
                pageMarginBottom: {
                    required: true,
                    number: true
                },
                pageMarginLeft: {
                    required: true,
                    number: true
                },
                pageMarginRight: {
                    required: true,
                    number: true
                },
                gapAcross: {
                    required: true,
                    number: true
                },
                gapDown: {
                    required: true,
                    number: true
                }
            }
        });
        window.onbeforeprint = function () {
            $(".fix-header .header").trigger("sticky_kit:detach");
        };
        window.onafterprint = function () {
            app.sticky_header();
        };
        $(document).on('click', '#print', function (e) {
            e.preventDefault();
            window.print();
        });
        var sizes = {
            size8: {
                labelWidth: 99.1,
                labelHeight: 67.7,
                cornerRadius: 1.5,
                primaryFontSize: 1,
                secondaryFontSize: 0.750,
                pageMarginTop: 13.1,
                pageMarginBottom: 13.1,
                pageMarginLeft: 4.4,
                pageMarginRight: 4.4,
                gapAcross: 3,
                gapDown: 0,
                isPrintBookTitle: true,
                isPrintBookCover: true,
                isPrintBookISBN: true,
                isPrintBookPublisher: true,
                isPrintBookGenre: true,
                isPrintBookAuthor: true,
                isPrintBookPrice: true
            },
            size12: {
                labelWidth: 63.5,
                labelHeight: 72,
                cornerRadius: 1.5,
                primaryFontSize: 1,
                secondaryFontSize: 0.750,
                pageMarginTop: 4.5,
                pageMarginBottom: 4.5,
                pageMarginLeft: 7.75,
                pageMarginRight: 7.75,
                gapAcross: 2,
                gapDown: 0,
                isPrintBookTitle: true,
                isPrintBookCover: true,
                isPrintBookISBN: true,
                isPrintBookPublisher: true,
                isPrintBookGenre: true,
                isPrintBookAuthor: true,
                isPrintBookPrice: true
            },
            size16: {
                labelWidth: 99.1,
                labelHeight: 33.9,
                cornerRadius: 1.5,
                primaryFontSize: 0.750,
                secondaryFontSize: 0.750,
                pageMarginTop: 12.9,
                pageMarginBottom: 12.9,
                pageMarginLeft: 4.9,
                pageMarginRight: 4.9,
                gapAcross: 2,
                gapDown: 0,
                isPrintBookTitle: true,
                isPrintBookCover: true,
                isPrintBookISBN: false,
                isPrintBookPublisher: false,
                isPrintBookGenre: false,
                isPrintBookAuthor: false,
                isPrintBookPrice: false
            },
            size24: {
                labelWidth: 63,
                labelHeight: 33.9,
                cornerRadius: 1.5,
                primaryFontSize: 1,
                secondaryFontSize: 0.750,
                pageMarginTop: 12.9,
                pageMarginBottom: 12.9,
                pageMarginLeft: 7,
                pageMarginRight: 7,
                gapAcross: 2,
                gapDown: 0,
                isPrintBookTitle: true,
                isPrintBookCover: false,
                isPrintBookISBN: false,
                isPrintBookPublisher: false,
                isPrintBookGenre: false,
                isPrintBookAuthor: false,
                isPrintBookPrice: false
            },
            size30: {
                labelWidth: 60,
                labelHeight: 25,
                cornerRadius: 1.5,
                primaryFontSize: 0.550,
                secondaryFontSize: 0.750,
                pageMarginTop: 13,
                pageMarginBottom: 13,
                pageMarginLeft: 9,
                pageMarginRight: 9,
                gapAcross: 6,
                gapDown: 3,
                isPrintBookTitle: true,
                isPrintBookCover: false,
                isPrintBookISBN: false,
                isPrintBookPublisher: false,
                isPrintBookGenre: false,
                isPrintBookAuthor: false,
                isPrintBookPrice: false
            },
            size40: {
                labelWidth: 45.7,
                labelHeight: 25.5,
                cornerRadius: 1.5,
                primaryFontSize: 0.750,
                secondaryFontSize: 0.750,
                pageMarginTop: 21,
                pageMarginBottom: 21,
                pageMarginLeft: 10.6,
                pageMarginRight: 10.6,
                gapAcross: 2,
                gapDown: 0,
                isPrintBookTitle: true,
                isPrintBookCover: false,
                isPrintBookISBN: false,
                isPrintBookPublisher: false,
                isPrintBookGenre: false,
                isPrintBookAuthor: false,
                isPrintBookPrice: false
            }
        };
        $('#preset').on('change', function (e) {
            e.preventDefault();
            var value = $(this).val();
            $('#labelWidth').val(sizes['size' + value].labelWidth);
            $('#labelHeight').val(sizes['size' + value].labelHeight);
            $('#cornerRadius').val(sizes['size' + value].cornerRadius);
            $('#primaryFontSize').val(sizes['size' + value].primaryFontSize);
            $('#secondaryFontSize').val(sizes['size' + value].secondaryFontSize);
            $('#pageMarginTop').val(sizes['size' + value].pageMarginTop);
            $('#pageMarginBottom').val(sizes['size' + value].pageMarginBottom);
            $('#pageMarginLeft').val(sizes['size' + value].pageMarginLeft);
            $('#pageMarginRight').val(sizes['size' + value].pageMarginRight);
            $('#gapAcross').val(sizes['size' + value].gapAcross);
            $('#gapDown').val(sizes['size' + value].gapDown);

            if (sizes['size' + value].isPrintBookTitle == true) {
                $('#isPrintBookTitle').attr("checked", true);
            } else {
                $('#isPrintBookTitle').attr("checked", false);
            }
            if (sizes['size' + value].isPrintBookCover == true) {
                $('#isPrintBookCover').attr("checked", true);
            } else {
                $('#isPrintBookCover').attr("checked", false);
            }
            if (sizes['size' + value].isPrintBookISBN == true) {
                $('#isPrintBookISBN').attr("checked", true);
            } else {
                $('#isPrintBookISBN').attr("checked", false);
            }
            if (sizes['size' + value].isPrintBookPublisher == true) {
                $('#isPrintBookPublisher').attr("checked", true);
            } else {
                $('#isPrintBookPublisher').attr("checked", false);
            }
            if (sizes['size' + value].isPrintBookGenre == true) {
                $('#isPrintBookGenre').attr("checked", true);
            } else {
                $('#isPrintBookGenre').attr("checked", false);
            }
            if (sizes['size' + value].isPrintBookAuthor == true) {
                $('#isPrintBookAuthor').attr("checked", true);
            } else {
                $('#isPrintBookAuthor').attr("checked", false);
            }
            if (sizes['size' + value].isPrintBookPrice == true) {
                $('#isPrintBookPrice').attr("checked", true);
            } else {
                $('#isPrintBookPrice').attr("checked", false);
            }
        });

        function extractText(str) {
            var ret = "";

            if (/"/.test(str)) {
                ret = str.match(/"(.*?)"/)[1];
            } else {
                ret = str;
            }

            return ret;
        }

        var genURL = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookBulkBarCodeGenerate",array());?>
';
        $('#generate').on('click', function (e) {
            e.preventDefault();
            var form = $('#barcode-settings');
            if (form.valid()) {
                $.ajax({
                    dataType: 'json',
                    method: 'POST',
                    data: $('#barcode-settings, #books').serialize(),
                    url: genURL,
                    beforeSend: function (data) {
                        app.card.loading.start('#barcode-settings');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $('#pages').html(data.html);
                                try {
                                    JsBarcode(".barcode").init();
                                } catch (err) {
                                    app.notification('error', extractText(err) + ' <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
is not a valid ISBN<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                }
                            }
                        }
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    },
                    complete: function (data) {
                        app.card.loading.finish('#barcode-settings');
                    }
                });
            }
        });
        var bookSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSearch",array());?>
';
        $('#bookId').select2({
            ajax: {
                url: function () {
                    return bookSearchUrl;
                },
                dataType: 'json',
                type: 'POST',
                delay: 400,
                data: function (params) {
                    return {
                        searchText: params.term
                    };
                },
                error: function (jqXHR, exception) {
                    if (jqXHR.statusText == 'abort') {
                        return;
                    }
                    app.notification('error', app.getErrorMessage(jqXHR, exception));
                },
                processResults: function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        if (data.error) {
                            app.notification('error', data.error);
                        } else {
                            return {
                                results: data.books
                            };
                        }
                    }
                },
                cache: true
            },
            escapeMarkup: function (markup) {
                return markup;
            },
            minimumInputLength: 2,
            templateResult: formatBook,
            templateSelection: formatBookSelection
        });
        function formatBook(book) {
            if (book.loading) return book.text;
            var i, lastIndex, markup = "<div class='select-book'>";
            markup += "<div class='select-book-cover'>";
            if (book.cover) {
                markup += '<img src="' + book.cover.webPath + '" class="img-fluid">';
            } else {
                markup += '<img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" class="img-fluid">';
            }
            markup += "</div>";
            markup += "<div class='select-book-info'>";
            markup += "<div class='select-book-title'>" + book.title + "";
            if (book.publishingYear) {
                markup += " <span>(" + book.publishingYear + ")</span>";
            }
            markup += "</div>";
            if (book.publisher) {
                markup += "<div class='select-book-publisher'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.publisher.name + "</div>";
            }
            if (book.ISBN10) {
                markup += "<div class='select-book-isbn'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN10:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.ISBN10 + "</div>";
            } else if (book.ISBN13) {
                markup += "<div class='select-book-isbn'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN13:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> " + book.ISBN13 + "</div>";
            }
            if (book.genres.length > 0) {
                markup += "<div class='select-book-genre'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genres:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> ";
                lastIndex = book.genres.length - 1;
                for (i = 0; i < book.genres.length; i++) {
                    markup += book.genres[i].name;
                    if (lastIndex != i) {
                        markup += ", ";
                    }
                }
                markup += "</div>";
            }
            if (book.authors.length > 0) {
                markup += "<div class='select-book-author'><strong><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</strong> ";
                lastIndex = book.authors.length - 1;
                for (i = 0; i < book.authors.length; i++) {
                    if (book.authors[i].firstName) {
                        var text = book.authors[i].firstName + ' ' + book.authors[i].lastName;
                    } else {
                        text = book.authors[i].lastName;
                    }
                    markup += text;
                    if (lastIndex != i) {
                        markup += ", ";
                    }
                }
                markup += "</div>";
            }
            markup += "</div></div>";
            return markup;
        }
        function formatBookSelection(book) {
            return book.title || book.text;
        }
        $('#add-book').on('click', function (e) {
            e.preventDefault();
            var book = $("#bookId");
            var bookVal = book.val();
            if (!bookVal) {
                app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book is required<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                return false;
            }
            var count = 0;
            if (bookVal) {
                if ($('#books tbody').find('tr:visible').length > 0) {
                    var langLength = $('#books tbody').find('tr:visible:last-child').attr('data-id');
                } else {
                    langLength = 0;
                }
                count = parseInt(langLength) + 1;
                $('#books').removeClass('d-none').slideDown();
                var data = $(book).select2('data');
                var bookId = data[0].id;
                var title = data[0].title;

                var markup = "<tr data-id='" + count + "'>";
                markup += "<td>" + title + "</td>";
                markup += "<td>";
                markup += "<input type='hidden' class='form-control' name='bookIds[" + count + "]' value='" + bookId + "'>";
                markup += "<input type='text' class='form-control form-control-sm' data-rule-min='1' data-rule-required='true' data-rule-digits='true' name='barCodeQuantity[" + count + "]' value='1'>";
                markup += "</td>";
                markup += "<td class='text-center'>";
                markup += "<a href='#' class='btn btn-default remove-book' title='<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
'><i class='fa fa-remove'></i></a>";
                markup += "</td>";
                markup += "</tr>";
                $('#books tbody').append(markup);
                $('#bookId').empty().trigger('change');
                $('.validate-books input').tooltipster({
                    trigger: 'custom',
                    onlyOne: false,
                    position: 'bottom',
                    offsetY: -5,
                    theme: 'tooltipster-kaa'
                });
                $('.validate-books').validate({
                    errorPlacement: function (error, element) {
                        if (element != undefined) {
                            $(element).tooltipster('update', $(error).text());
                            $(element).tooltipster('show');
                        }
                    },
                    success: function (label, element) {
                        $(element).tooltipster('hide');
                    }
                });
            }
        });
        $(document).on('click', '.remove-book', function (e) {
            e.preventDefault();
            $(this).closest('tr').remove();
            if ($('#books tbody tr').length < 1) {
                $('#books').addClass('d-none');
            }
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
