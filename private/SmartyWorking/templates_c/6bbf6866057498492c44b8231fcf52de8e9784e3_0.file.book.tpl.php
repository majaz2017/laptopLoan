<?php
/* Smarty version 3.1.31, created on 2020-10-04 03:17:33
  from "/home1/alexorco/public_html/library/alexor/themes/simple/books/book.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f79932d0833d5_22603191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bbf6866057498492c44b8231fcf52de8e9784e3' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/themes/simple/books/book.tpl',
      1 => 1519083616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:books/rating.tpl' => 2,
  ),
),false)) {
function content_5f79932d0833d5_22603191 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/modifier.date_format.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12489939995f79932cf1a962_65073391', 'metaTitle');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2699917035f79932cf285b2_96849371', 'metaDescription');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9236943225f79932cf33136_42468666', 'metaKeywords');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11366288515f79932cf346c0_53288170', 'headerCss');
?>

<?php $_smarty_tpl->_assignInScope('pageURL', ((string)$_smarty_tpl->tpl_vars['SiteURL']->value).((string)$_SERVER['REQUEST_URI']));
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20169960625f79932d0008d1_14685200', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6555492665f79932d07aef9_99782151', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17731862485f79932d07c090_06916278', 'customJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'metaTitle'} */
class Block_12489939995f79932cf1a962_65073391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaTitle' => 
  array (
    0 => 'Block_12489939995f79932cf1a962_65073391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['book']->value->getMetaTitle() !== null) {
echo $_smarty_tpl->tpl_vars['book']->value->getMetaTitle();
} else {
echo $_smarty_tpl->tpl_vars['book']->value->getTitle();
}
}
}
/* {/block 'metaTitle'} */
/* {block 'metaDescription'} */
class Block_2699917035f79932cf285b2_96849371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaDescription' => 
  array (
    0 => 'Block_2699917035f79932cf285b2_96849371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['book']->value->getMetaDescription(),'"','');
}
}
/* {/block 'metaDescription'} */
/* {block 'metaKeywords'} */
class Block_9236943225f79932cf33136_42468666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'metaKeywords' => 
  array (
    0 => 'Block_9236943225f79932cf33136_42468666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['book']->value->getMetaKeywords();
}
}
/* {/block 'metaKeywords'} */
/* {block 'headerCss'} */
class Block_11366288515f79932cf346c0_53288170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_11366288515f79932cf346c0_53288170',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_20169960625f79932d0008d1_14685200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20169960625f79932d0008d1_14685200',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page single-book" data-book="<?php echo $_smarty_tpl->tpl_vars['book']->value->getId();?>
">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="book-img">
                    <?php if ($_smarty_tpl->tpl_vars['book']->value->getCover() != null) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->getCover()->getWebPath('medium');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
">
                    <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
">
                    <?php }?>
                </div>
                <?php if (isset($_SERVER['REQUEST_URI'])) {?>
                    <div class="social-btns text-center">
                        <a class="btn facebook" href="https://www.facebook.com/share.php?u=<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" target="blank"><i class="fa fa-facebook"></i></a>
                        <a class="btn twitter" href="https://twitter.com/intent/tweet?status=<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
+<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
" target="blank"><i class="fa fa-twitter"></i></a>
                        <a class="btn google" href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
" target="blank"><i class="fa fa-google"></i></a>
                        <a class="btn vk" href="http://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
" target="blank"><i class="fa fa-vk"></i></a>
                        <a class="btn pinterest" href="http://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['pageURL']->value;?>
&description=<?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
" target="blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['book']->value->getEBookId() != null) {?>
                    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("showDownloadLink") || (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() > 100)) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("electronicBookGet",array("electronicBookId"=>$_smarty_tpl->tpl_vars['book']->value->getEBookId()));?>
" class="btn btn-outline-info btn-block mt-2"><i class="fa fa-download" aria-hidden="true"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Download<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        </a>
                    <?php }?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("electronicBookView",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
" class="btn btn-outline-info btn-block mt-2"><i class="fa fa-eye" aria-hidden="true"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Read<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    </a>
                <?php }?>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="main-content">
                    <h1 class=""><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();
if ($_smarty_tpl->tpl_vars['book']->value->getSubTitle() != null) {?> <?php echo $_smarty_tpl->tpl_vars['book']->value->getSubTitle();
}?></h1>
                    <p class="book-year"><?php echo $_smarty_tpl->tpl_vars['book']->value->getPublishingYear();?>
</p>
                    <div class="book-rating">
                        <?php $_prefixVariable1=$_smarty_tpl->tpl_vars['book']->value->getRating();
if (!empty($_prefixVariable1)) {?>
                            <?php ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo "Average Book Rating";
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('tooltipMessage', ((string)$_smarty_tpl->tpl_vars['book']->value->getRating())." ".$_prefixVariable2);
?>
                        <?php } else { ?>
                            <?php ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo "Be the first to vote";
$_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('tooltipMessage', $_prefixVariable3);
?>
                        <?php }?>

                        <?php if (!isset($_smarty_tpl->tpl_vars['user']->value) || isset($_smarty_tpl->tpl_vars['userBookRating']->value)) {?>
                            <?php $_smarty_tpl->_assignInScope('isRead', true);
?>
                        <?php }?>

                        <?php $_smarty_tpl->_subTemplateRender('file:books/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['book']->value->getRating(),'readOnly'=>$_smarty_tpl->tpl_vars['isRead']->value,'tooltipMessage'=>$_smarty_tpl->tpl_vars['tooltipMessage']->value,'showTooltip'=>true), 0, false);
?>


                        <div class="whole-rating d-inline-block">
                            <span><?php echo $_smarty_tpl->tpl_vars['book']->value->getBookRatingVotesNumber();?>
</span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Votes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if (isset($_smarty_tpl->tpl_vars['userBookRating']->value)) {?>, <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Your mark is <?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                <strong class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['userBookRating']->value;?>
</strong>
                                .<?php }?>
                        </div>
                    </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() > 200) {?>
                        <p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookEdit",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
"><i class="ion-edit" aria-hidden="true"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </a>
                        </p>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['book']->value->getDescription()) {?>
                        <div class="sub-title">
                            <h4><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h4>
                        </div>
                        <div class="book-description">
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->getDescription();?>

                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-12">
                <?php if ($_smarty_tpl->tpl_vars['book']->value->getSeries() != null) {?>
                    <div class="book-additional-info">
                        <h6><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Series:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 </h6>
                        <p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("seriesBooksPublic",array("seriesId"=>$_smarty_tpl->tpl_vars['book']->value->getSeries()->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->getSeries()->getName();?>
</a>
                        </p>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['book']->value->getPublisher() != null) {?>
                    <div class="book-additional-info">
                        <h6><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 </h6>
                        <p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publisherBooksPublic",array("publisherId"=>$_smarty_tpl->tpl_vars['book']->value->getPublisher()->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['book']->value->getPublisher()->getName();?>
</a>
                        </p>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['book']->value->getGenres() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getGenres()) && count($_smarty_tpl->tpl_vars['book']->value->getGenres()) > 0) {?>
                    <div class="book-additional-info">
                        <h6><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genres:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 </h6>
                        <p>
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
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("genreBooksPublic",array("genreId"=>$_smarty_tpl->tpl_vars['genre']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['genre']->value->getName();?>
</a><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_genre']->value['last'] : null)) {
} else { ?>,<?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </p>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['book']->value->getAuthors() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getAuthors()) && count($_smarty_tpl->tpl_vars['book']->value->getAuthors()) > 0) {?>
                    <div class="book-additional-info">
                        <h6><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 </h6>
                        <p>
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
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorBooksPublic",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
</a><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_author']->value['last'] : null)) {
} else { ?>,<?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </p>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['book']->value->getPages() != null) {?>
                    <div class="book-additional-info">
                        <h6><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Pages:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 </h6>
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->getPages();?>

                        </p>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['book']->value->getBinding() !== null) {?>
                    <div class="book-additional-info">
                        <h6><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Binding:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 </h6>
                        <p>
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getBinding() == 'Softcover') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Softcover<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
                            <?php if ($_smarty_tpl->tpl_vars['book']->value->getBinding() == 'Hardcover') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Hardcover<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
                        </p>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['book']->value->getISBN10() != null) {?>
                    <div class="book-additional-info">
                        <h6><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN10:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 </h6>
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN10();?>

                        </p>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['book']->value->getISBN13() != null) {?>
                    <div class="book-additional-info">
                        <h6><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN13:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 </h6>
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN13();?>

                        </p>
                    </div>
                <?php }?>
            </div>
            <div class="col-lg-12">
                <?php if (strcmp($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator"),"Nobody") != 0 || ($_smarty_tpl->tpl_vars['book']->value->getReviews() != null && count($_smarty_tpl->tpl_vars['book']->value->getReviews()) > 0)) {?>
                    <div class="row mt-5 mb-3">
                        <div class="col-lg-6 col-6">
                            <h2><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Reviews<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
                        </div>
                        <div class="col-lg-6 col-6 text-right">
                            <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator") == "Everybody" || ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator") == "User" && isset($_smarty_tpl->tpl_vars['user']->value))) {?>
                                <button class="btn btn-primary btn-rounded shadow add-review-collapse" data-toggle="collapse" data-target="#addReview" aria-expanded="false" aria-controls="addReview"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Write a review<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                            <?php }?>
                        </div>
                    </div>
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator") == "Everybody" || ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator") == "User" && isset($_smarty_tpl->tpl_vars['user']->value))) {?>
                    <form class="add-review validate-review collapse" id="addReview">
                        <div class="row">
                            <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator") == "Everybody" && !isset($_smarty_tpl->tpl_vars['user']->value)) {?>
                                <div class="col-lg-12">
                                    <div class="notes"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Required fields are marked *. Your email address will not be published.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="name" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 *" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input name="email" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 *" type="text">
                                    </div>
                                </div>
                            <?php }?>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="hidden" name="bookId" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->getId();?>
">
                                    <textarea name="text" cols="30" rows="5" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Review<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 *"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button class="btn btn-primary shadow submit-review"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Submit<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                            </div>
                        </div>
                    </form>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['book']->value->getReviews() != null) {?>
                    <div class="reviews">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getReviews(), 'review', false, NULL, 'review', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
                            <div class="review">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <strong class="review-user">
                                            <?php if ($_smarty_tpl->tpl_vars['review']->value->getUserId() != null && $_smarty_tpl->tpl_vars['review']->value->getUser() != null) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['review']->value->getUser()->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['review']->value->getUser()->getLastName();?>

                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['review']->value->getName();?>

                                            <?php }?>
                                        </strong>
                                        <span class="review-meta"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['review']->value->getCreationDateTime(),$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("dateFormat"));?>
</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <?php if ($_smarty_tpl->tpl_vars['review']->value->getBookRating() != null) {?>
                                            <div class="review-rating">
                                                <?php $_smarty_tpl->_subTemplateRender('file:books/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['review']->value->getBookRating(),'readOnly'=>true), 0, true);
?>

                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="review-content">
                                            <?php echo $_smarty_tpl->tpl_vars['review']->value->getText();?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </div>
                <?php }?>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_6555492665f79932d07aef9_99782151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_6555492665f79932d07aef9_99782151',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['themePath']->value;?>
resources/js/plugins/jquery-validate/jquery.validate.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerJs'} */
/* {block 'customJs'} */
class Block_17731862485f79932d07c090_06916278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customJs' => 
  array (
    0 => 'Block_17731862485f79932d07c090_06916278',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        app.bootstrap_tooltip();
        $('.rating-stars:not(.readOnly) li').on('mouseover', function () {
            var onStar = parseInt($(this).data('value'), 10);
            $(this).parent().children('li.star').each(function (e) {
                if (e < onStar) {
                    $(this).addClass('hover');
                }
                else {
                    $(this).removeClass('hover');
                }
            });

        }).on('mouseout', function () {
            $(this).parent().children('li.star').each(function (e) {
                $(this).removeClass('hover');
            });
        });

        $('.rating-stars:not(.readOnly) li').on('click', function () {
            var _this = $(this);
            var onStar = parseInt($(this).data('value'), 10);
            var stars = $(this).parent().children('li.star');
            var bookId = $('.single-book').data('book');
            var url = '/book/[bookId]/set-rating/[rating]';
            url = url.replace('[bookId]', bookId);
            for (i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }

            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }

            if (bookId = !null) {
                $.ajax({
                    dataType: 'json',
                    method: 'POST',
                    url: url.replace('[rating]', onStar),
                    success: function (data) {
                        if (data.redirect) {
                            app.ajax_redirect(data.redirect);
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $('.rating-stars:not(.readOnly) li').unbind();
                                $(_this).closest('ul').addClass('readOnly').find('.star').removeClass('hover');
                            }
                        }
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', data.error);
                    }
                });
            }
        });

        <?php if (strcmp($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("reviewCreator"),"Nobody") != 0) {?>
        $(".validate-review").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                name: {
                    required: true
                }
            }
        });
        var reviewCreatePublicUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("reviewCreatePublic");?>
';
        $('.submit-review').on('click', function (e) {
            e.preventDefault();
            var form = $(this).closest('.add-review');
            if (form.valid()) {
                $.ajax({
                    dataType: 'json',
                    method: 'POST',
                    data: $(form).serialize(),
                    url: reviewCreatePublicUrl,
                    beforeSend: function (data) {
                        $(form).append('<div class="form-message"><i class="fa fa-spinner fa-spin"></i><span class="sr-only"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Loading...<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sending, Please Wait..<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 </div>');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            app.ajax_redirect(data.redirect);
                        } else {
                            if (data.error) {
                                $(form).find('.form-message').addClass('error').text(data.error);
                            } else {
                                $(form).find('.form-message').addClass('success').text(data.success);
                                $(form).find('input, textarea').val('');
                            }
                        }
                    },
                    error: function (jqXHR, exception) {
                        $(form).find('.form-message').addClass('error').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Failed to send your message. Please try later or contact the administrator<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("adminEmail");?>
');
                    },
                    complete: function (data) {
                        setTimeout(function () {
                            $(form).find('.form-message').fadeOut().remove();
                            $('#addReview').collapse('hide');
                        }, 5000);
                    }
                });
            }
        });

        <?php }?>

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'customJs'} */
}
