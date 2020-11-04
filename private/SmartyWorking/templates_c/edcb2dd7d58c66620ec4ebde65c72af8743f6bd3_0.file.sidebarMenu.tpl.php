<?php
/* Smarty version 3.1.31, created on 2020-11-03 13:54:20
  from "C:\wamp64\www\laptoploan\laptopLoan\private\Templates\admin\general\sidebarMenu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5fa1610ce6e962_79808631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edcb2dd7d58c66620ec4ebde65c72af8743f6bd3' => 
    array (
      0 => 'C:\\wamp64\\www\\laptoploan\\laptopLoan\\private\\Templates\\admin\\general\\sidebarMenu.tpl',
      1 => 1604410369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa1610ce6e962_79808631 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\wamp64\\www\\laptoploan\\laptopLoan\\private\\Smarty\\plugins\\block.t.php';
?>
<nav class="sidebar-nav">
    <ul id="sidebar-menu">
        <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() <= 100) {?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userBooksView') {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userBooksView");?>
" aria-expanded="false"><img src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/icons/books.png" alt=""><span class="hide-menu"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                </a>
            </li>
            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userRequestListView') {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userRequestListView");?>
" aria-expanded="false"><img src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/icons/req-book.png" alt=""><span class="hide-menu"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Requested Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></a>
            </li>
            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userIssuedBooksView') {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userIssuedBooksView");?>
" aria-expanded="false"><img src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/icons/issue-book.png" alt=""><span class="hide-menu"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issued Books History<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                </a>
            </li>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() > 100) {?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'adminIndex') {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("adminIndex");?>
" aria-expanded="false"><img src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/icons/dashboard.png" alt=""><span class="hide-menu"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Dashboard<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                </a>
            </li>
            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookCreate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookEdit') {?>active<?php }?>">
                <a class="has-arrow " href="#" aria-expanded="false"><img src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/icons/books.png" alt=""><span class="hide-menu"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookListView') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookCreate') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookCreate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookCreate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                     <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() > 255) {?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'publisherListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'publisherCreate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'publisherEdit') {?>active<?php }?>">
                        <a class="has-arrow " href="#" aria-expanded="false"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publishers<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'publisherListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publisherListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'publisherListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Publishers<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'publisherCreate') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publisherCreate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'publisherCreate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'seriesListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'seriesCreate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'seriesEdit') {?>active<?php }?>">
                        <a class="has-arrow " href="#" aria-expanded="false"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Series<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'seriesListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("seriesListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'seriesListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Series<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'seriesCreate') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("seriesCreate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'seriesCreate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Series<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'authorListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'authorCreate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'authorEdit') {?>active<?php }?>">
                        <a class="has-arrow " href="#" aria-expanded="false"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'authorListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'authorListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Authors<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'authorCreate') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("authorCreate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'authorCreate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Author<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'genreListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'genreCreate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'genreEdit') {?>active<?php }?>">
                        <a class="has-arrow " href="#" aria-expanded="false"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genres<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'genreListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("genreListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'genreListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Genres<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'genreCreate') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("genreCreate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'genreCreate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Genre<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'storeListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'storeCreate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'locationListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'locationCreate') {?>active<?php }?>">
                        <a class="has-arrow " href="#" aria-expanded="false"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Stores & Locations<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'storeListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("storeListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'storeListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Stores<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'storeCreate') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("storeCreate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'storeCreate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Store<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'locationListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("locationListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'locationListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Locations<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'locationCreate') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("locationCreate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'locationCreate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Location<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'reviewListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'reviewCreate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'reviewEdit') {?>active<?php }?>">
                        <a class="has-arrow " href="#" aria-expanded="false"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Reviews<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'reviewListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("reviewListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'reviewListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Reviews<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'reviewCreate') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("reviewCreate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'reviewCreate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Review<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookBulkBarCodeGenerate') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookBulkBarCodeGenerate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookBulkBarCodeGenerate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Barcode Generation<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                     <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() >= 255) {?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'importExport') {?>active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("importExport");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'importExport') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Import & Export CSV<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        </li>
                    <?php }?>
                </ul>
            </li>
            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'issueListView') {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("issueListView");?>
" aria-expanded="false"><img src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/icons/issue-book.png" alt=""><span class="hide-menu"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Issued Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></a>
            </li>
            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'requestListView') {?>active<?php }?>">
                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("requestListView");?>
" aria-expanded="false"><img src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/icons/req-book.png" alt=""><span class="hide-menu"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Requested Books<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></a>
            </li>
             <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() > 255) {?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'postListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'createPost') {?>active<?php }?>">
                <a class="has-arrow " href="#" aria-expanded="false"><img src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/icons/public.png" alt=""><span class="hide-menu"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Public<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'postListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'postCreate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'postEdit') {?>active<?php }?>">
                        <a class="has-arrow " href="#" aria-expanded="false"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Posts<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'postListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'postListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Posts<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'postCreate') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postCreate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'postCreate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Post<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'pageListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'pageCreate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'pageEdit') {?>active<?php }?>">
                        <a class="has-arrow " href="#" aria-expanded="false"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Pages<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'pageListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("pageListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'pageListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Pages<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'pageCreate') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("pageCreate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'pageCreate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'categoryListView') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("categoryListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'categoryListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Categories<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userMessageListView') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userMessageListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userMessageListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Messages<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'menuListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'menuCreate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'menuEdit') {?>active<?php }?>">
                        <a class="has-arrow " href="#" aria-expanded="false"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Menus<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'menuListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("menuListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'menuListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Menus<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'menuCreate') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("menuCreate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'menuCreate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Menu<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
                
            </li>
             <?php }?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userCreate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userEdit' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'roleListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'roleCreate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'roleEdit') {?>active<?php }?>">
                <a class="has-arrow " href="#" aria-expanded="false"><img src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/icons/users.png" alt=""><span class="hide-menu"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Users<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userListView') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Users<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userCreate') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userCreate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'userCreate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add User<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                    <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() >= 255) {?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'roleListView') {?>active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("roleListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'roleListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Roles<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        </li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'roleCreate') {?>active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("roleCreate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'roleCreate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Role<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        </li>
                    <?php }?>
                </ul>
            </li>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() >= 255) {?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'permissionListUpdate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'optionListView') {?>active<?php }?>">
                <a class="has-arrow " href="#" aria-expanded="false"><img src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/icons/settings.png" alt=""><span class="hide-menu"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Settings<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'themesListView') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("themesListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'themesListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Themes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'emailNotificationListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'emailNotificationCreate' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'staticShortCodeListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'dynamicShortCodeListView') {?>active<?php }?>">
                        <a class="has-arrow " href="#" aria-expanded="false"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Notifications<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'emailNotificationListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("emailNotificationListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'emailNotificationListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
All Notifications<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'staticShortCodeListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("staticShortCodeListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'staticShortCodeListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Static ShortCodes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'googleSettings') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("googleSettings");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'googleSettings') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Google Books Settings<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'emailSettings') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("emailSettings");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'emailSettings') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email Settings<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'smtpSettings') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("smtpSettings");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'smtpSettings') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
SMTP Settings<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'languageListView') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("languageListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'languageListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Languages<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'permissionListUpdate') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("permissionListUpdate");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'permissionListUpdate') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Permissions<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'ldapSettings') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("ldapSettings");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'ldapSettings') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
LDAP Settings<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'databaseSettings') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("databaseSettings");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'databaseSettings') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Database Setting<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bindingListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookSizeListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookTypeListView' || $_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'physicalFormListView') {?>active<?php }?>">
                        <a class="has-arrow " href="#" aria-expanded="false"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Book Fields<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                        <ul aria-expanded="false" class="collapse">
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bindingListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bindingListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bindingListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Bindings<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookSizeListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSizeListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookSizeListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sizes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookTypeListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookTypeListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'bookTypeListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Types<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'physicalFormListView') {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("physicalFormListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'physicalFormListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Physical Forms<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'optionListView') {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("optionListView");?>
" class="<?php if ($_smarty_tpl->tpl_vars['activeRoute']->value->getName() == 'optionListView') {?>active<?php }?>"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Site View Setting<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
docs" target="_blank" aria-expanded="false"><img src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/images/icons/docs.png" alt=""><span class="hide-menu"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Documentation<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span></a>
            </li>
        <?php }?>
    </ul>
</nav><?php }
}
