<?php
/* Smarty version 3.1.31, created on 2020-10-06 05:47:33
  from "/home1/alexorco/public_html/library/alexor/private/Templates/admin/books/booksBarCode.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f7c59552d3491_79962560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '356b35f8c20fa71486f3d41c3305ce65b998e903' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/private/Templates/admin/books/booksBarCode.tpl',
      1 => 1519083606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7c59552d3491_79962560 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/function.math.php';
$_smarty_tpl->_assignInScope('labelWidth', $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->getLabelWidth());
$_smarty_tpl->_assignInScope('labelHeight', $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->getLabelHeight());
?>

<?php $_smarty_tpl->_assignInScope('cornerRadius', $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->getCornerRadius());
$_smarty_tpl->_assignInScope('gapAcross', $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->getGapAcross());
$_smarty_tpl->_assignInScope('gapDown', $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->getGapDown());
?>

<?php $_smarty_tpl->_assignInScope('primaryFontSize', $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->getPrimaryFontSize());
$_smarty_tpl->_assignInScope('secondaryFontSize', $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->getSecondaryFontSize());
?>

<?php $_smarty_tpl->_assignInScope('pageMarginTop', $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->getPageMarginTop());
$_smarty_tpl->_assignInScope('pageMarginBottom', $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->getPageMarginBottom());
?>

<?php $_smarty_tpl->_assignInScope('pageMarginLeft', $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->getPageMarginLeft());
$_smarty_tpl->_assignInScope('pageMarginRight', $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->getPageMarginRight());
?>

<?php $_smarty_tpl->_assignInScope('maxPageWidth', 210-$_smarty_tpl->tpl_vars['pageMarginLeft']->value-$_smarty_tpl->tpl_vars['pageMarginRight']->value-$_smarty_tpl->tpl_vars['gapAcross']->value);
$_smarty_tpl->_assignInScope('maxPageHeight', 300-$_smarty_tpl->tpl_vars['pageMarginTop']->value-$_smarty_tpl->tpl_vars['pageMarginBottom']->value);
?>

<?php echo smarty_function_math(array('equation'=>"floor(maxPageWidth/labelWidth)",'maxPageWidth'=>$_smarty_tpl->tpl_vars['maxPageWidth']->value,'labelWidth'=>$_smarty_tpl->tpl_vars['labelWidth']->value,'assign'=>'countLabelsByWidth'),$_smarty_tpl);?>

<?php echo smarty_function_math(array('equation'=>"floor(maxPageHeight/labelHeight)",'maxPageHeight'=>$_smarty_tpl->tpl_vars['maxPageHeight']->value,'labelHeight'=>$_smarty_tpl->tpl_vars['labelHeight']->value,'assign'=>'countLabelsByHeight'),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('labelsPerPage', $_smarty_tpl->tpl_vars['countLabelsByHeight']->value*$_smarty_tpl->tpl_vars['countLabelsByWidth']->value);
?>

<?php if (isset($_smarty_tpl->tpl_vars['books']->value) && $_smarty_tpl->tpl_vars['books']->value != null && isset($_smarty_tpl->tpl_vars['barCodePrintSettings']->value)) {?>
    <div class="a4-page" style="padding-top: <?php echo $_smarty_tpl->tpl_vars['pageMarginTop']->value;?>
mm;padding-bottom: <?php echo $_smarty_tpl->tpl_vars['pageMarginBottom']->value;?>
mm; padding-left: <?php echo $_smarty_tpl->tpl_vars['pageMarginLeft']->value;?>
mm; padding-right: <?php echo $_smarty_tpl->tpl_vars['pageMarginRight']->value;?>
mm">
    <?php $_smarty_tpl->_assignInScope('index', "0");
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book', false, NULL, 'book', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
?>
        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['book']->value->getQuantity()+1 - (1) : 1-($_smarty_tpl->tpl_vars['book']->value->getQuantity())+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
            <?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['labelsPerPage']->value) == 0 && $_smarty_tpl->tpl_vars['index']->value != 0) {?>
                <div class="a4-page" style="padding-top: <?php echo $_smarty_tpl->tpl_vars['pageMarginTop']->value;?>
mm;padding-bottom: <?php echo $_smarty_tpl->tpl_vars['pageMarginBottom']->value;?>
mm; padding-left: <?php echo $_smarty_tpl->tpl_vars['pageMarginLeft']->value;?>
mm; padding-right: <?php echo $_smarty_tpl->tpl_vars['pageMarginRight']->value;?>
mm">
            <?php }?>
            <div class="barcode-card" style="width: <?php echo $_smarty_tpl->tpl_vars['labelWidth']->value;?>
mm;height: <?php echo $_smarty_tpl->tpl_vars['labelHeight']->value;?>
mm; border-radius: <?php echo $_smarty_tpl->tpl_vars['cornerRadius']->value;?>
mm;margin-bottom: <?php echo $_smarty_tpl->tpl_vars['gapDown']->value;?>
mm;margin-left: <?php echo $_smarty_tpl->tpl_vars['gapAcross']->value/($_smarty_tpl->tpl_vars['countLabelsByWidth']->value*2);?>
mm; margin-right: <?php echo $_smarty_tpl->tpl_vars['gapAcross']->value/($_smarty_tpl->tpl_vars['countLabelsByWidth']->value*2);?>
mm;">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="book-title" style="font-size: <?php echo $_smarty_tpl->tpl_vars['primaryFontSize']->value;?>
em;"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
</h4>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['barCodePrintSettings']->value->isPrintBookCover() || $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->isPrintBookPrice()) {?>
                        <div class="col-sm-<?php if ($_smarty_tpl->tpl_vars['labelsPerPage']->value == 8) {?>3<?php } elseif ($_smarty_tpl->tpl_vars['labelsPerPage']->value == 16) {?>2<?php } else { ?>4<?php }?> left-part">
                            <div class="cover-container <?php if (!$_smarty_tpl->tpl_vars['barCodePrintSettings']->value->isPrintBookCover()) {?>no-cover<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['barCodePrintSettings']->value->isPrintBookCover()) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['book']->value->getCover() != null) {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->getCover()->getWebPath();?>
" class="img-fluid book-cover">
                                    <?php } else { ?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" class="img-fluid book-cover">
                                    <?php }?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['barCodePrintSettings']->value->isPrintBookPrice() && $_smarty_tpl->tpl_vars['book']->value->getPrice() != null) {?>
                                    <div class="book-price" style="font-size: <?php echo $_smarty_tpl->tpl_vars['primaryFontSize']->value;?>
em;"><?php echo $_smarty_tpl->tpl_vars['book']->value->getPrice();?>
 <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("priceCurrency");?>
</div>
                                <?php }?>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['labelsPerPage']->value != 16) {?>
                        <div class="col-sm-<?php if (!$_smarty_tpl->tpl_vars['barCodePrintSettings']->value->isPrintBookCover() && !$_smarty_tpl->tpl_vars['barCodePrintSettings']->value->isPrintBookPrice()) {?>12 text-center<?php } elseif ($_smarty_tpl->tpl_vars['labelsPerPage']->value == 8) {?>9<?php } elseif ($_smarty_tpl->tpl_vars['labelsPerPage']->value == 16) {?>10<?php } else { ?>8<?php }?> right-part">
                            <!--<div class="book-meta">2014</div>-->
                            <?php if ($_smarty_tpl->tpl_vars['barCodePrintSettings']->value->isPrintBookISBN()) {?>
                                <?php if ($_smarty_tpl->tpl_vars['book']->value->getISBN13() != null) {?>
                                    <div class="book-meta" style="font-size: <?php echo $_smarty_tpl->tpl_vars['secondaryFontSize']->value;?>
em;"><?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN13();?>
</div>
                                <?php } else { ?>
                                    <div class="book-meta" style="font-size: <?php echo $_smarty_tpl->tpl_vars['secondaryFontSize']->value;?>
em;"><?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN10();?>
</div>
                                <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getPublisher() != null && $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->isPrintBookPublisher()) {?>
                                <div class="book-meta" style="font-size: <?php echo $_smarty_tpl->tpl_vars['secondaryFontSize']->value;?>
em;"><?php echo $_smarty_tpl->tpl_vars['book']->value->getPublisher()->getName();?>
</div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getGenres() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getGenres()) && count($_smarty_tpl->tpl_vars['book']->value->getGenres()) > 0 && $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->isPrintBookGenre()) {?>
                                <div class="book-meta" style="font-size: <?php echo $_smarty_tpl->tpl_vars['secondaryFontSize']->value;?>
em;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getGenres(), 'genre', false, NULL, 'genre', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['total'];
?>
                                        <?php echo $_smarty_tpl->tpl_vars['genre']->value->getName();
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['last'] : null)) {
} else { ?>,<?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getAuthors() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getAuthors()) && count($_smarty_tpl->tpl_vars['book']->value->getAuthors()) > 0 && $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->isPrintBookAuthor()) {?>
                                <div class="book-meta" style="font-size: <?php echo $_smarty_tpl->tpl_vars['secondaryFontSize']->value;?>
em;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getAuthors(), 'author', false, NULL, 'author', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['total'];
?>
                                        <?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['last'] : null)) {
} else { ?>,<?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </div>
                            <?php }?>
                        </div>
                    <?php }?>
                    <div class="col-sm-<?php if ($_smarty_tpl->tpl_vars['labelsPerPage']->value == 16) {?>10<?php } else { ?>12<?php }?> text-center" style="<?php if ($_smarty_tpl->tpl_vars['labelsPerPage']->value == 12) {?>margin: 4mm 0 0;<?php }
if ($_smarty_tpl->tpl_vars['labelsPerPage']->value == 16) {?>padding-top: 3mm;<?php }?>">
                        <?php $_smarty_tpl->_assignInScope('rawISBN10', substr($_smarty_tpl->tpl_vars['book']->value->getISBN10(),0,9));
?>
                        <?php $_smarty_tpl->_assignInScope('prefix', 978);
?>
                        <?php $_smarty_tpl->_assignInScope('isbnnum', ($_smarty_tpl->tpl_vars['prefix']->value).($_smarty_tpl->tpl_vars['rawISBN10']->value));
?>
                        <?php $_smarty_tpl->_assignInScope('total', 0);
?>
                        <?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 11+1 - (0) : 0-(11)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
                            <?php if (($_smarty_tpl->tpl_vars['x']->value%2) == 0) {?>
                                <?php $_smarty_tpl->_assignInScope('y', 1);
?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('y', 3);
?>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+(substr($_smarty_tpl->tpl_vars['isbnnum']->value,$_smarty_tpl->tpl_vars['x']->value,1)*$_smarty_tpl->tpl_vars['y']->value));
?>
                        <?php }
}
?>

                        <?php $_smarty_tpl->_assignInScope('mod10', (10-($_smarty_tpl->tpl_vars['total']->value%10))%10);
?>
                        <svg class="barcode"
                             jsbarcode-format="EAN13"
                             jsbarcode-value="<?php if ($_smarty_tpl->tpl_vars['book']->value->getISBN13() != null) {
echo $_smarty_tpl->tpl_vars['book']->value->getISBN13();
} else { ?>978<?php echo $_smarty_tpl->tpl_vars['rawISBN10']->value;
echo $_smarty_tpl->tpl_vars['mod10']->value;
}?>"
                             jsbarcode-textmargin="0"
                             jsbarcode-fontsize="14"
                             jsbarcode-height="<?php if ($_smarty_tpl->tpl_vars['labelsPerPage']->value == 40) {?>40<?php } else { ?>50<?php }?>"
                             <?php if ($_smarty_tpl->tpl_vars['labelsPerPage']->value == 40) {?>jsbarcode-width="1"<?php }?>
                             jsbarcode-margin="0">
                        </svg>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['barCodePrintSettings']->value->getCustomText() != null) {?>
                        <div class="col-sm-12" style="font-size: <?php echo $_smarty_tpl->tpl_vars['secondaryFontSize']->value;?>
em;">
                            <div class="book-meta custom-text"><?php echo $_smarty_tpl->tpl_vars['barCodePrintSettings']->value->getCustomText();?>
</div>
                        </div>
                    <?php }?>
                </div>
            </div>
            <?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['index']->value+1);
?>
            <?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['labelsPerPage']->value) == 0) {?>
                </div>
            <?php }?>
        <?php }
}
?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    <?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['labelsPerPage']->value) != 0) {?>
        </div>
    <?php }
}
}
}
