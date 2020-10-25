<?php
/* Smarty version 3.1.31, created on 2020-08-14 04:55:45
  from "/home1/alexorco/public_html/library/alexor/themes/simple/authors/authors-list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f366db11e9102_47771996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57b9a25a32689f87a9452e67aba5f7224bfef8b2' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/themes/simple/authors/authors-list.tpl',
      1 => 1519083616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:general/pagination.tpl' => 1,
  ),
),false)) {
function content_5f366db11e9102_47771996 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
?>
<div class="top-filter">
    <p class="m-0"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Found <span><?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo $_smarty_tpl->tpl_vars['totalAuthors']->value;?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
authors</span> in total<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</p>
    <select name="sortColumn" id="books-sort">
        <option value="Authors.lastName" data-order="DESC"<?php if ($_SESSION['authorSortingOrderPublic'] == 'DESC' && $_SESSION['authorSortingColumnPublic'] == 'Authors.lastName') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Name Descending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
        <option value="Authors.lastName" data-order="ASC"<?php if ($_SESSION['authorSortingOrderPublic'] == 'ASC' && $_SESSION['authorSortingColumnPublic'] == 'Authors.lastName') {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Name Ascending<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
    </select>
</div>
<div id="preloader-book">
    <div id="loader"></div>
</div>
<div class="row">
    <?php if (isset($_smarty_tpl->tpl_vars['authors']->value) && $_smarty_tpl->tpl_vars['authors']->value != null) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author', false, NULL, 'author', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
            <div class="col-sm-6 col-md-3 col-lg-2">
                <div class="card book card-no-border">
                    <?php if ($_smarty_tpl->tpl_vars['author']->value->getPhoto() != null) {?>
                        <div class="photo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorBooksPublic",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
" class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['author']->value->getPhoto()->getWebPath('medium');?>
" alt="" class="card-img-top"></a>
                        </div>
                    <?php } else { ?>
                        <div class="photo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorBooksPublic",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
" class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
" class="card-img-top"></a>
                        </div>
                    <?php }?>
                    <div class="card-block p-2 text-center">
                        <h4 class="card-title mb-0">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorBooksPublic",array("authorId"=>$_smarty_tpl->tpl_vars['author']->value->getId()));?>
"><?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>
</a>
                        </h4>
                        <span class="count mb-1"><?php echo $_smarty_tpl->tpl_vars['author']->value->getBookCount();?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
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
<div class="books-per-page d-flex">
    <?php $_smarty_tpl->_subTemplateRender("file:general/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<div class="top-filter">
    <p class="m-0"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors per page:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</p>
    <select name="perPage" id="countPerPage">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("authorsPerPagePublic")->getListValues(), 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (($_SESSION['authorPerPagePublic'] == null && strcmp($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['siteViewOptions']->value->getOption("authorsPerPagePublic")->getValue()) === 0) || strcmp($_smarty_tpl->tpl_vars['key']->value,$_SESSION['authorPerPagePublic']) === 0) {?> selected<?php }?>><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Authors"));
$_block_repeat=true;
echo smarty_block_t(array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Authors"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
1 Author<?php $_block_repeat=false;
echo smarty_block_t(array('count'=>$_smarty_tpl->tpl_vars['value']->value,1=>$_smarty_tpl->tpl_vars['value']->value,'plural'=>"%1 Authors"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </select>
</div><?php }
}
