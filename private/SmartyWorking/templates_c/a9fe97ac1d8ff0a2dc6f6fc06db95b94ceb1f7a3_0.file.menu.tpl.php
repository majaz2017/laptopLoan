<?php
/* Smarty version 3.1.31, created on 2020-10-04 02:20:06
  from "/home1/alexorco/public_html/library/alexor/private/Templates/admin/general/menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f7985b65f04e0_31804767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9fe97ac1d8ff0a2dc6f6fc06db95b94ceb1f7a3' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/private/Templates/admin/general/menu.tpl',
      1 => 1519083606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7985b65f04e0_31804767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'printMenu' => 
  array (
    'compiled_filepath' => '/home1/alexorco/public_html/library/alexor/private/SmartyWorking/templates_c/a9fe97ac1d8ff0a2dc6f6fc06db95b94ceb1f7a3_0.file.menu.tpl.php',
    'uid' => 'a9fe97ac1d8ff0a2dc6f6fc06db95b94ceb1f7a3',
    'call_name' => 'smarty_template_function_printMenu_7425922715f7985b656eb47_94613716',
  ),
));
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9583003975f7985b659c5d7_90525077', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17561580545f7985b65a8888_57890344', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7747866925f7985b65aba56_97800764', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5325392235f7985b65e0319_65097869', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18519567175f7985b65e23f9_47463181', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_9583003975f7985b659c5d7_90525077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9583003975f7985b659c5d7_90525077',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['action']->value == "create") {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Menu<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit Menu<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_17561580545f7985b65a8888_57890344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_17561580545f7985b65a8888_57890344',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/nestedSortable/jquery.nested-sortable.css" rel="stylesheet"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/draganddrop/draganddrop.css" rel="stylesheet"/>
<?php
}
}
/* {/block 'headerCss'} */
/* smarty_template_function_printMenu_7425922715f7985b656eb47_94613716 */
if (!function_exists('smarty_template_function_printMenu_7425922715f7985b656eb47_94613716')) {
function smarty_template_function_printMenu_7425922715f7985b656eb47_94613716($_smarty_tpl,$params) {
$params = array_merge(array('node'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
                            <?php if (isset($_smarty_tpl->tpl_vars['node']->value) && $_smarty_tpl->tpl_vars['node']->value->getValue() !== null) {?>
                                <?php $_smarty_tpl->_assignInScope('menuItem', $_smarty_tpl->tpl_vars['node']->value->getValue());
?>
                                <li id="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getId();?>
">
                                    <div class="card card-border menu-item">
                                        <div class="card-header">
                                            <i class="icon-cursor-move move-item"></i>
                                            <span class="item-title"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getTitle();?>
</span>
                                            <div class="heading-elements">
                                                <i class="icon-arrow-up collapse-item"></i>
                                                <i class="fa fa-trash-o delete-item"></i>
                                            </div>
                                        </div>
                                        <div class="card-body collapse show">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="title"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Title<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                                        <input class="form-control title" type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getTitle();?>
">
                                                    </div>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->getPage() != null) {?>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="pageId"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                                            <select name="pageId" class="form-control page-select">
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getPage()->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getPage()->getTitle();?>
</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['menuItem']->value->getPost() != null) {?>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="postId"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Post<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                                            <select name="postId" class="form-control post-select">
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getPost()->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getPost()->getTitle();?>
</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="link"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
URL<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                                            <input class="form-control" type="text" name="link" value="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getLink();?>
">
                                                        </div>
                                                    </div>
                                                <?php }?>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="class"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Class<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                                        <input class="form-control" type="text" name="class" value="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getClass();?>
">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value->getChildren(), 'subNode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subNode']->value) {
?>
                                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'printMenu', array('node'=>$_smarty_tpl->tpl_vars['subNode']->value), true);?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </li>
                            <?php }?>
                        <?php
}}
/*/ smarty_template_function_printMenu_7425922715f7985b656eb47_94613716 */
/* {block 'content'} */
class Block_7747866925f7985b65aba56_97800764 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7747866925f7985b65aba56_97800764',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card main-card">
                <div class="card-body">
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>
                        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("menuCreate"));
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['post']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("menuEdit",array("menuId"=>$_smarty_tpl->tpl_vars['menu']->value->getId())));
?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "delete") {?>
                        <?php $_smarty_tpl->_assignInScope('route', '');
?>
                    <?php }?>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
" class="menu-name-form" method="post" data-edit="<?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>false<?php } else { ?>true<?php }?>">
                        <div class="form-group">
                            <label for="name"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Menu Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                            <input class="form-control" type="text" id="menu-name" name="name" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['menu']->value->getName();
}?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card main-card">
                <div class="card-header">
                    <button type="button" class="btn btn-outline-info btn-icon-fixed <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>ml-1<?php } else { ?>mr-1<?php }?>" id="add-link">
                        <i class="fa fa-plus" aria-hidden="true"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Custom Link<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    </button>
                    <button type="button" class="btn btn-outline-info btn-icon-fixed <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>ml-1<?php } else { ?>mr-1<?php }?>" id="add-page">
                        <i class="fa fa-plus" aria-hidden="true"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    </button>
                    <button type="button" class="btn btn-outline-info btn-icon-fixed" id="add-post">
                        <i class="fa fa-plus" aria-hidden="true"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Post<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    </button>
                    <div class="heading-elements">
                        <i class="fa fa-minus" id="collapse-all" data-trigger="hover" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Collapse All<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"></i>
                    </div>
                </div>
                <div class="card-body menu-items">
                    <form action="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
ob_start();
echo $_smarty_tpl->tpl_vars['menu']->value->getId();
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("menuItemsEdit",array('menuId'=>$_prefixVariable1));
}?>" method="post" class="menu-items-form" data-edit="<?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>false<?php } else { ?>true<?php }?>">

                        
                        <ul class="item-list">
                            <?php if (isset($_smarty_tpl->tpl_vars['menuItemsTree']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuItemsTree']->value->getRootNodes(), 'rootNode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rootNode']->value) {
?>
                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'printMenu', array('node'=>$_smarty_tpl->tpl_vars['rootNode']->value), true);?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </ul>
                        <div class="form-group mt3">
                            <button type="submit" class="btn btn-success btn-icon-fixed pull-right save-menu">
                                <i class="fa fa-floppy-o"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Save<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_5325392235f7985b65e0319_65097869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_5325392235f7985b65e0319_65097869',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/select2/select2.full.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery-validate/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/textchange/jquery.textchange.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/draganddrop/draganddrop.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_18519567175f7985b65e23f9_47463181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_18519567175f7985b65e23f9_47463181',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            var itemList = $('ul.item-list');
            itemList.sortable({
                autocreate: true,
                handle: '.move-item',
                update: function (evt) {
                    var i = 1;
                    $('.item-list li').each(function () {
                        $(this).attr('id', i);
                        i++;
                    });
                    console.log(JSON.stringify($(this).sortable('serialize')));
                }
            });
            var customLinkTemplate = "<div class='col-lg-4'>" +
                    "<div class='form-group'>" +
                    "<label for='link'><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
URL<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>" +
                    "<input class='form-control' type='text' name='link'>" +
                    "</div>" +
                    "</div>";
            var pageTemplate = "<div class='col-lg-4'>" +
                    "<div class='form-group'>" +
                    "<label for='pageId'><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>" +
                    "<select name='pageId' class='form-control page-select'></select>" +
                    "</div>" +
                    "</div>";
            var postTemplate = "<div class='col-lg-4'>" +
                    "<div class='form-group'>" +
                    "<label for='postId'><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Post<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>" +
                    "<select name='postId' class='form-control post-select'></select>" +
                    "</div>" +
                    "</div>";

            function template(type) {
                return "<li>" +
                        "<div class='card card-border menu-item'>" +
                        "<div class='card-header'>" +
                        "<i class='icon-cursor-move move-item'></i>" +
                        "<span class='item-title'></span>" +
                        "<div class='heading-elements'>" +
                        "<i class='icon-arrow-down collapse-item'></i>" +
                        "<i class='fa fa-trash-o delete-item'></i>" +
                        "</div>" +
                        "</div>" +
                        "<div class='card-body collapse show'>" +
                        "<div class='row'>" +
                        "<div class='col-lg-4'>" +
                        "<div class='form-group'>" +
                        "<label for='title'><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Title<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>" +
                        "<input class='form-control title' type='text' name='title'>" +
                        "</div>" +
                        "</div>" +
                        type +
                        "<div class='col-lg-4'>" +
                        "<div class='form-group'>" +
                        "<label for='class'><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Class<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>" +
                        "<input class='form-control' type='text' name='class'>" +
                        "</div>" +
                        "</div>" +
                        "</div>" +
                        "</div>" +
                        "</div>" +
                        "</li>";
            }

            $('#add-link').on('click', function () {
                itemList.append(template(customLinkTemplate));
                var i = 1;
                $('.item-list li').each(function () {
                    $(this).attr('id', i);
                    i++;
                });
            });
            $('#add-post').on('click', function () {
                itemList.append(template(postTemplate));
                var i = 1;
                $('.item-list li').each(function () {
                    $(this).attr('id', i);
                    i++;
                });
                pageSearch();
                postSearch();
            });
            $('#add-page').on('click', function () {
                itemList.append(template(pageTemplate));
                var i = 1;
                $('.item-list li').each(function () {
                    $(this).attr('id', i);
                    i++;
                });
                pageSearch();
                postSearch();
            });
            $('#collapse-all').on('click', function () {
                $('.menu-items .card .collapse').collapse('hide');
                $('.collapse-item').removeClass('icon-arrow-up icon-arrow-down').addClass('icon-arrow-down');
            });
            $(document).on('keyup', '.title', function () {
                $(this).closest('.card').find('.item-title').text($(this).val());
            });
            $(document).on('click', '.collapse-item', function () {
                $(this).toggleClass('icon-arrow-down icon-arrow-up').closest('.card').find('.card-body').collapse('toggle');
            });
            $(document).on('click', '.delete-item', function (e) {
                e.preventDefault();
                var el = $(this).closest('li');
                if ($(this).closest('.menu-item').next('ul').length > 0) {
                    if ($(this).closest('.menu-item').next('ul').find('.post-select').length > 0) {
                        $(this).closest('.menu-item').next('ul').find('.post-select').select2('destroy');
                    }
                    if ($(this).closest('.menu-item').next('ul').find('.page-select').length > 0) {
                        $(this).closest('.menu-item').next('ul').find('.page-select').select2('destroy');
                    }
                    var clone = $(this).closest('.menu-item').next('ul').clone();
                    el.before(clone.find('li'));
                    el.remove();
                    pageSearch();
                    postSearch();
                } else {
                    el.remove();
                }
            });
            var pageSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("pageSearchPublic",array());?>
';
            var postSearchUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("postSearchPublic",array());?>
';

            function pageSearch(element) {
                if (!element) {
                    element = $('.page-select');
                }

                $(element).select2({
                    ajax: {
                        url: function () {
                            return pageSearchUrl;
                        },
                        dataType: 'json',
                        type: 'POST',
                        data: function (params) {
                            return {
                                searchText: params.term
                            };
                        },
                        processResults: function (data, params) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    return {
                                        results: $.map(data, function (item) {
                                            return {
                                                text: item.title,
                                                id: item.id
                                            }
                                        })
                                    };
                                }
                            }
                        },
                        cache: true
                    },
                    minimumInputLength: 2
                });
            }

            function postSearch(element) {
                if (!element) {
                    element = $('.post-select');
                }
                $(element).select2({
                    ajax: {
                        url: function () {
                            return postSearchUrl;
                        },
                        dataType: 'json',
                        type: 'POST',
                        data: function (params) {
                            return {
                                searchText: params.term
                            };
                        },
                        processResults: function (data, params) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    return {
                                        results: $.map(data, function (item) {
                                            return {
                                                text: item.title,
                                                id: item.id
                                            }
                                        })
                                    };
                                }
                            }
                        },
                        cache: true
                    },
                    minimumInputLength: 2
                });
            }

            pageSearch();
            postSearch();
            var menuItemsEditUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("menuItemsEdit",array());?>
';
            var menuEditUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("menuEdit",array());?>
';
            var menuCreateUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("menuCreate",array());?>
';
            $('.save-menu').on('click', function (e) {
                e.preventDefault();
                var menuNameForm = $('.menu-name-form');
                var menuNameVal = $('#menu-name').val();
                var dataEdit = menuNameForm.attr('data-edit');
                var menuNameEdit = $(menuNameForm).attr('data-edit');
                if (menuNameVal) {
                    if (menuNameEdit != 'true') {
                        $(menuNameForm).attr('action', menuCreateUrl);
                    }
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        data: menuNameForm.serialize(),
                        url: menuNameForm.attr('action'),
                        beforeSend: function () {
                            app.card.loading.start('.main-card');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $(menuNameForm).attr('action', menuEditUrl.replace("[menuId]", data.menuId)).attr('data-edit', true);
                                    var menuId = data.menuId;
                                    var treeString = JSON.stringify(itemList.sortable('serialize'));
                                    $.ajax({
                                        dataType: 'json',
                                        method: 'POST',
                                        data: {
                                            'tree': treeString
                                        },
                                        url: menuItemsEditUrl.replace('[menuId]', menuId),
                                        success: function (data) {
                                            if (data.redirect) {
                                                window.location.href = data.redirect;
                                            } else {
                                                if (data.error) {
                                                    app.notification('error', data.error);
                                                } else {
                                                    app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Data has been saved successfully<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                                }
                                            }
                                        },
                                        error: function (jqXHR, exception) {
                                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                                        }
                                    });
                                    if (dataEdit == 'false') {
                                        $('.page-title h3').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit Menu<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                        history.pushState(null, '', menuEditUrl.replace("[menuId]", data.menuId));
                                    }
                                    $(menuNameForm).attr('data-edit', true);
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        }
                    });
                } else {
                    app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Please Enter Menu Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                }
            });
            $(document).ajaxStop(function () {
                app.card.loading.finish('.main-card');
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
