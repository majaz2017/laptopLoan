<?php
/* Smarty version 3.1.31, created on 2020-10-06 04:58:23
  from "/home1/alexorco/public_html/library/alexor/private/Templates/admin/books/viewBook.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f7c4dcfb863c3_71809438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aa836cf1f831ec2be9f5c48f06f583b679305b8' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/private/Templates/admin/books/viewBook.tpl',
      1 => 1519083606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7c4dcfb863c3_71809438 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17820833925f7c4dcfb02238_08020782', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10944141485f7c4dcfb0f525_76660516', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5289029895f7c4dcfb10ed7_46863053', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5325381435f7c4dcfb12076_53173902', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3543858655f7c4dcfb84700_08206744', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11209630475f7c4dcfb85751_89500364', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_17820833925f7c4dcfb02238_08020782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17820833925f7c4dcfb02238_08020782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
View Book<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_10944141485f7c4dcfb0f525_76660516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_10944141485f7c4dcfb0f525_76660516',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'toolbar'} */
/* {block 'headerCss'} */
class Block_5289029895f7c4dcfb10ed7_46863053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_5289029895f7c4dcfb10ed7_46863053',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_5325381435f7c4dcfb12076_53173902 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5325381435f7c4dcfb12076_53173902',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card table-responsive">
                <table class="table view-book">
                    <tbody>
                        <tr class="heading">
                            <td colspan="2"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Title<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                            <td colspan="2"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Subtitle<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                        </tr>
                        <tr>
                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['book']->value->getTitle();?>
</td>
                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['book']->value->getSubtitle();?>
</td>
                        </tr>

                        <tr class="heading">
                            <td colspan="2"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN 10<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                            <td colspan="2"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
ISBN 13<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                        </tr>
                        <tr>
                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN10();?>
</td>
                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['book']->value->getISBN13();?>
</td>
                        </tr>

                        <tr class="heading">
                            <td colspan="2"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Series<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                            <td colspan="2"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Publisher<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                        </tr>
                        <tr>
                            <td colspan="2"><?php if ($_smarty_tpl->tpl_vars['book']->value->getSeries() != null) {
echo $_smarty_tpl->tpl_vars['book']->value->getSeries()->getName();
}?></td>
                            <td colspan="2"><?php if ($_smarty_tpl->tpl_vars['book']->value->getPublisher() != null) {
echo $_smarty_tpl->tpl_vars['book']->value->getPublisher()->getName();
}?></td>
                        </tr>

                        <tr class="heading">
                            <td colspan="4"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Authors<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getAuthors(), 'author', false, NULL, 'author', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
?>
                                    <?php echo $_smarty_tpl->tpl_vars['author']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value->getFirstName();?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </td>
                        </tr>
                        <tr class="heading">
                            <td colspan="4"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Genres<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getGenres(), 'genre', false, NULL, 'genre', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->value) {
?>
                                    <?php echo $_smarty_tpl->tpl_vars['genre']->value->getName();?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </td>
                        </tr>

                        <tr class="heading">
                            <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edition<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                            <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Published Year<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                            <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Pages<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                            <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Language<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value->getEdition();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value->getPublishingYear();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value->getPages();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value->getLanguage();?>
</td>
                        </tr>

                        <tr class="heading">
                            <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Type<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                            <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Physical Form<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                            <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Size<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                            <td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Binding<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value->getType();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value->getPhysicalForm();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value->getSize();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['book']->value->getBinding();?>
</td>
                        </tr>
                        <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value->getRole() != null && $_smarty_tpl->tpl_vars['user']->value->getRole()->getPriority() > 100) {?>
                            <tr class="heading">
                                <td colspan="4"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Stores<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <?php if ($_smarty_tpl->tpl_vars['book']->value !== null && $_smarty_tpl->tpl_vars['book']->value->getStores() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getStores())) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getStores(), 'store', false, NULL, 'store', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_store']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_store']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_store']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_store']->value['total'];
?>
                                            <?php echo $_smarty_tpl->tpl_vars['store']->value->getName();
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_store']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_store']->value['last'] : null)) {
} else { ?>,<?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    <?php }?>
                                </td>
                            </tr>
                            <tr class="heading">
                                <td colspan="4"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Locations<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <?php if ($_smarty_tpl->tpl_vars['book']->value !== null && $_smarty_tpl->tpl_vars['book']->value->getLocations() !== null && is_array($_smarty_tpl->tpl_vars['book']->value->getLocations())) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['book']->value->getLocations(), 'location', false, NULL, 'location', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_location']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_location']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_location']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_location']->value['total'];
?>
                                            <?php echo $_smarty_tpl->tpl_vars['location']->value->getName();?>
 [<?php echo $_smarty_tpl->tpl_vars['location']->value->getStore()->getName();?>
]<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_location']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_location']->value['last'] : null)) {
} else { ?>,<?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    <?php }?>
                                </td>
                            </tr>
                        <?php }?>
                        <tr class="heading">
                            <td colspan="4"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                        </tr>
                        <tr>
                            <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['book']->value->getDescription();?>
</td>
                        </tr>
                        <tr class="heading">
                            <td colspan="4"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Notes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</td>
                        </tr>
                        <tr>
                            <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['book']->value->getNotes();?>
</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card" id="cover-block">
                <div class="card-body text-center">
                    <?php if ($_smarty_tpl->tpl_vars['book']->value->getCover() != null) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['book']->value->getCover()->getWebPath();?>
" class="img-fluid">
                    <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" class="img-fluid">
                    <?php }?>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['book']->value->getEBookId() != null) {?>
                <div class="card">
                    <div class="card-body text-center">
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
                        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("electronicBookViewAdmin",array("bookId"=>$_smarty_tpl->tpl_vars['book']->value->getId()));?>
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
                    </div>
                </div>
            <?php }?>

        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_3543858655f7c4dcfb84700_08206744 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_3543858655f7c4dcfb84700_08206744',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_11209630475f7c4dcfb85751_89500364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_11209630475f7c4dcfb85751_89500364',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerCustomJs'} */
}
