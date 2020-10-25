<?php
/* Smarty version 3.1.31, created on 2020-08-14 04:42:48
  from "/home1/alexorco/public_html/library/alexor/private/Templates/admin/public/pages/page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f366aa85248e7_03160472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b67505080f2a3ad24473f67963e020131f83fc5' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/private/Templates/admin/public/pages/page.tpl',
      1 => 1519083606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f366aa85248e7_03160472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'printSelectValues' => 
  array (
    'compiled_filepath' => '/home1/alexorco/public_html/library/alexor/private/SmartyWorking/templates_c/3b67505080f2a3ad24473f67963e020131f83fc5_0.file.page.tpl.php',
    'uid' => '3b67505080f2a3ad24473f67963e020131f83fc5',
    'call_name' => 'smarty_template_function_printSelectValues_1145316575f366aa83fbd50_16993677',
  ),
));
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17265500245f366aa843ecd9_81718731', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1712394255f366aa8450681_68047298', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16419186275f366aa8459ec5_94981401', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17136498325f366aa845c836_21299872', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3791786195f366aa84fce81_46379507', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10422109885f366aa8501cf0_96170033', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_17265500245f366aa843ecd9_81718731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17265500245f366aa843ecd9_81718731',
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
Add Page<?php $_block_repeat=false;
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
Edit Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_1712394255f366aa8450681_68047298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_1712394255f366aa8450681_68047298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {?>
        <div class="heading-elements">
            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("pageViewPublic",array("pageUrl"=>$_smarty_tpl->tpl_vars['page']->value->getUrl()));?>
" class="btn btn-success btn-icon-fixed" target="_blank">
                <i class="fa fa-eye"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
View Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </a>
        </div>
    <?php }
}
}
/* {/block 'toolbar'} */
/* {block 'headerCss'} */
class Block_16419186275f366aa8459ec5_94981401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_16419186275f366aa8459ec5_94981401',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/summernote/summernote-bs4.css" rel="stylesheet"/>
<?php
}
}
/* {/block 'headerCss'} */
/* smarty_template_function_printSelectValues_1145316575f366aa83fbd50_16993677 */
if (!function_exists('smarty_template_function_printSelectValues_1145316575f366aa83fbd50_16993677')) {
function smarty_template_function_printSelectValues_1145316575f366aa83fbd50_16993677($_smarty_tpl,$params) {
$params = array_merge(array('node'=>null,'offset'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
                                <?php if (isset($_smarty_tpl->tpl_vars['node']->value) && $_smarty_tpl->tpl_vars['node']->value->getValue() !== null) {?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['node']->value->getValue()->getId();?>
"<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value->getParentId() === $_smarty_tpl->tpl_vars['node']->value->getValue()->getId()) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['offset']->value;
echo $_smarty_tpl->tpl_vars['node']->value->getValue()->getTitle();?>
</option>
                                <?php }?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value->getChildren(), 'subNode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subNode']->value) {
?>
                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'printSelectValues', array('node'=>$_smarty_tpl->tpl_vars['subNode']->value,'offset'=>($_smarty_tpl->tpl_vars['offset']->value).("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;")), true);?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php
}}
/*/ smarty_template_function_printSelectValues_1145316575f366aa83fbd50_16993677 */
/* {block 'content'} */
class Block_17136498325f366aa845c836_21299872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17136498325f366aa845c836_21299872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>
        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("pageCreate"));
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['page']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("pageEdit",array("pageId"=>$_smarty_tpl->tpl_vars['page']->value->getId())));
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "delete") {?>
        <?php $_smarty_tpl->_assignInScope('route', '');
?>
    <?php }?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" class="row validate page-form" data-edit="<?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>false<?php } else { ?>true<?php }?>">
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <input type="hidden" name="id" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value->getId();
}?>" class="pageId">
                    <input type="hidden" name="imageId" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value->getImageId();
}?>" class="imageId">
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
                        <input type="text" name="title" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value->getTitle();
}?>">
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['page']->value) && ($_smarty_tpl->tpl_vars['page']->value->getId() == 0 || $_smarty_tpl->tpl_vars['page']->value->getId() == 1000)) {?>
                        <input type="hidden" name="partialUrl" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value->getPartialUrl();
}?>">
                    <?php } else { ?>
                        <div class="form-group">
                            <label for="partialUrl"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                            <input type="text" name="partialUrl" class="form-control input-sm" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value->getPartialUrl();
}?>" id="urlPath">
                        </div>
                    <?php }?>
                    <a data-toggle="modal" href="#pageGallery" class="btn btn-outline-info btn-icon-fixed mb-2" id="openGallery">
                        <i class="fa fa-image"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Gallery<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    </a>
                    <div class="form-group">
                        <label for="content"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Content<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <textarea class="" name="content" id="content-box"><?php if (isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value->getContent();
}?></textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="metaTitle"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Meta Title<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <input type="text" name="metaTitle" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaTitle();
}?>">
                    </div>
                    <div class="form-group">
                        <label for="shortDescription"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Meta Keywords<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <select name="metaKeySelect" id="meta-key" class="form-control" multiple>
                            <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {?>
                                <?php $_smarty_tpl->_assignInScope('tagList', explode(",",$_smarty_tpl->tpl_vars['page']->value->getMetaKeywords()));
?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tagList']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['tag']->value != null) {?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</option>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </select>
                        <input type="hidden" name="metaKeywords" id="metaKeyList" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaKeywords();
}?>">
                    </div>
                    <div class="form-group">
                        <label for="shortDescription"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Meta Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <textarea name="metaDescription" cols="30" rows="5" style="width:100% !important" class="form-control"><?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
echo $_smarty_tpl->tpl_vars['page']->value->getMetaDescription();
}?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="status"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Status<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <?php if (isset($_smarty_tpl->tpl_vars['postStatuses']->value)) {?>
                            <select name="status" class="form-control select-picker">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['postStatuses']->value, 'pageStatusValue', false, 'pageStatusKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pageStatusKey']->value => $_smarty_tpl->tpl_vars['pageStatusValue']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['pageStatusKey']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && $_smarty_tpl->tpl_vars['page']->value->getStatus() !== null && $_smarty_tpl->tpl_vars['page']->value->getStatus() === $_smarty_tpl->tpl_vars['pageStatusValue']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['pageStatusValue']->value;?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </select>
                        <?php }?>
                    </div>
                    <div class="form-group">
                        <label for="parentId"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Parent<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <select class="form-control select-picker" name="parentId" id="parentId">
                            

                            <?php if (isset($_smarty_tpl->tpl_vars['pageTree']->value)) {?>
                                <option value="null"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Please select parent page:<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageTree']->value->getRootNodes(), 'rootNode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rootNode']->value) {
?>
                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'printSelectValues', array('node'=>$_smarty_tpl->tpl_vars['rootNode']->value,'offset'=>"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"), true);?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="indexTitle"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Published on<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                        <input class="form-control date-time-picker" type="text" name="publishDateTime" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value->getPublishDateTime();
}?>">
                    </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['customTemplates']->value)) {?>
                        <div class="form-group">
                            <label for="customTemplate" class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Custom Template<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>

                            <select name="customTemplate" class="select-picker" style="width: 100% !important;">
                                <option value="">Select custom template</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customTemplates']->value, 'template', false, NULL, 'template', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value->getFullTemplateFileName();?>
"<?php if (isset($_smarty_tpl->tpl_vars['page']->value) && strcmp($_smarty_tpl->tpl_vars['template']->value->getFullTemplateFileName(),$_smarty_tpl->tpl_vars['page']->value->getCustomTemplate()) === 0) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value->getDisplayName();?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </select>
                        </div>
                    <?php }?>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-secondary disabled btn-icon-fixed pull-right save-page">
                            <span class="fa fa-floppy-o"></span> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
                </div>
            </div>

            <div class="card" id="image-block">
                <div class="card-body main-image-upload">
                    <label for="file"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Image<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                    <div class="fileinput <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['page']->value->getImageId() != null) {?>fileinput-exists<?php } else { ?>fileinput-new<?php }?>" style="width: 100%;" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 100%; min-height: 150px;">
                            <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['page']->value->getImage() != null) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['page']->value->getImage()->getWebPath('small');?>
" alt="">
                            <?php } else { ?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("noBookImageFilePath");?>
" alt="">
                            <?php }?>
                        </div>
                        <div>
                            <a href="#" class="btn btn-sm btn-outline-secondary fileinput-exists delete-main-img" data-id="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value->getImageId();
}?>" data-dismiss="fileinput"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Remove<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                            <span class="btn btn-sm btn-outline-secondary btn-file file-input">
                                <span class="fileinput-new"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Select image<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                <span class="fileinput-exists"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Change<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                                <input type="file" name="file" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {
if ($_smarty_tpl->tpl_vars['page']->value->getImageId() != null) {
echo $_smarty_tpl->tpl_vars['page']->value->getImageId();
}
}?>">
                            </span>
                            <a href="#" class="btn btn-sm btn-outline-secondary uploadMainImage fileinput-exists">
                                <i class="fa fa-upload"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Upload<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="modal fade" id="pageGallery" tabindex="-1" role="dialog" aria-labelledby="pageGalleryLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 80%;">
            <div class="modal-content card">
                <div class="modal-header">
                    <h2 class="modal-title"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Gallery<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body" id="galleryBlock">
                </div>
                <div class="modal-footer gallery-image-upload">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <span class="btn btn-sm btn-outline-secondary btn-file">
                            <span class="fileinput-new"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Select file<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                            <span class="fileinput-exists"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Change<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                            <input type="file" name="file">
                        </span>
                        <span class="fileinput-filename"></span>
                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                    </div>
                    <a href="#" class="btn btn-sm btn-outline-secondary uploadGalleryImage">
                        <i class="fa fa-upload"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Upload<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_3791786195f366aa84fce81_46379507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_3791786195f366aa84fce81_46379507',
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
assets/js/plugins/jasnyupload/fileinput.min.js"><?php echo '</script'; ?>
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
assets/js/plugins/inputmask/jquery.inputmask.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/moment/moment.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/summernote/summernote-bs4.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_10422109885f366aa8501cf0_96170033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_10422109885f366aa8501cf0_96170033',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('.date-time-picker').datetimepicker({
                format: '<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("inputDateTimeFormatJS");?>
',
                keepOpen: true
            }).on('dp.change', function () {
                $(this).closest('form').attr('data-changed', true);
                $('.save-page').removeClass('btn-outline-secondary disabled').addClass('btn-outline-success');
            });
            $('.validate input,.validate select,.validate textarea').tooltipster({
                trigger: 'custom',
                onlyOne: false,
                position: 'bottom',
                offsetY: -5,
                theme: 'tooltipster-kaa'
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
                    title: {
                        required: true
                    }<?php if ($_smarty_tpl->tpl_vars['action']->value == "create" || ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['page']->value) && ($_smarty_tpl->tpl_vars['page']->value->getId() != 0 || $_smarty_tpl->tpl_vars['page']->value->getId() != 1000))) {?>,
                    partialUrl: {
                        required: true,
                        urlpath: true
                    }<?php }?>
                }
            });
            $('#meta-key').select2({
                multiple: true,
                tags: true,
                allowClear: true,
                language: {
                    noResults: function () {
                        return "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Please enter keywords<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
";
                    }
                }
            }).on('change.select2', function () {
                $("#metaKeyList").val($(this).val());
            });
            $(document).on('click', '.ajax-page', function (e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('href'),
                    dataType: 'json',
                    beforeSend: function () {
                        app.card.loading.start($("#galleryBlock").parents('.modal-content'));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $("#galleryBlock").html(data.html);
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($("#galleryBlock").parents('.modal-content'));
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
            var imagesUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("imageListView",array());?>
';
            $('#openGallery').on('click', function (e) {
                e.preventDefault();
                $.ajax({
                    url: imagesUrl,
                    dataType: 'json',
                    beforeSend: function () {
                        app.card.loading.start($("#galleryBlock").parents('.modal-content'));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $("#galleryBlock").html(data.html);
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($("#galleryBlock").parents('.modal-content'));
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });

            $('#content-box').summernote().on('summernote.change', function () {
                $('.page-form').attr('data-changed', true);
                $('.save-page').removeClass('btn-outline-secondary disabled').addClass('btn-outline-success');
            });

            $(document).on('change', 'input,textarea,select', function () {
                $(this).closest('form').attr('data-changed', true);
                $('.save-page').removeClass('btn-outline-secondary disabled').addClass('btn-outline-success');
            });
            var pageEditUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("pageEdit",array());?>
';
            $('.save-page').on('click', function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
                var dataEdit = form.attr('data-edit');
                var dataChanged = form.attr('data-changed');
                if (dataChanged == 'true') {
                    if (form.valid()) {
                        $.ajax({
                            dataType: 'json',
                            method: 'POST',
                            data: form.serialize(),
                            url: form.attr('action'),
                            beforeSend: function () {
                                app.card.loading.start('.card');
                            },
                            success: function (data) {
                                if (data.redirect) {
                                    window.location.href = data.redirect;
                                } else {
                                    if (data.error) {
                                        app.notification('error', data.error);
                                    } else {
                                        form.attr('action', pageEditUrl.replace("[pageId]", data.pageId)).attr('data-changed', false);
                                        $('.pageId').val(data.pageId);
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
                                        $('.save-page').removeClass('btn-outline-success').addClass('btn-outline-secondary disabled');
                                        if (dataEdit == 'false') {
                                            $('.page-title h3').text('<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit Page<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                            history.pushState(null, '', pageEditUrl.replace("[pageId]", data.pageId));
                                        }
                                        $(form).attr('data-edit', true);
                                    }
                                }
                            },
                            error: function (jqXHR, exception) {
                                app.notification('error', app.getErrorMessage(jqXHR, exception));
                            },
                            complete: function () {
                                app.card.loading.finish('.card');
                            }
                        });
                    } else {
                        app.notification('error', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Validation errors occurred. Please confirm the fields and submit it again.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                    }
                } else {
                    app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
There are no changes<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                }
            });
            $(document).on('click', '.close', function () {
                $(this).closest('.fileinput').find('input:file').removeClass('file-exists');
            });
            var imageDeleteUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("imageDelete",array());?>
';
            $(document).on('clear.bs.fileinput', '.main-image-upload .fileinput', function () {
                var imgId = $(this).find('.delete-main-img').attr('data-id');
                if (imgId != undefined && imgId != null && imgId > 0) {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        url: imageDeleteUrl.replace("[imageId]", imgId),
                        beforeSend: function (data) {
                            app.card.loading.start('#image-block');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $('.imageId').val('');
                                    $('.save-page').click();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function (data) {
                            app.card.loading.finish('#image-block');
                        }
                    });
                }
            });
            $(document).on('change.bs.fileinput', '.main-image-upload .fileinput, .gallery-image-upload .fileinput', function () {
                $(this).attr('data-changed', true);
                $(this).find('input:file').addClass('file-exists');
                $('.save-page').removeClass('btn-outline-secondary disabled').addClass('btn-outline-success');
            });
            var imageUploadUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("pageImageUpload",array());?>
';
            $('.uploadMainImage').on('click', function (e) {
                e.preventDefault();
                var data, fileValue, file;

                var dataChanged = $('.main-image-upload .fileinput').attr('data-changed');
                var imageUploadElement = $('.main-image-upload');

                if (dataChanged == 'true') {
                    data = new FormData();
                    file = $(imageUploadElement).find('input:file');
                    fileValue = $(imageUploadElement).find('input:file').val();
                    var imageId = $('.imageId').val();
                    if ($(file)[0].files[0] != null) {
                        data.append('file', $(file)[0].files[0], fileValue);
                        if (imageId) {
                            data.append('imageId', imageId);
                        }
                    } else if ($(file).closest('.fileinput').hasClass('fileinput-new')) {
                        data.append('file', null);
                        if (imageId) {
                            data.append('imageId', imageId);
                        }
                    } else {
                        data.append('file', '');
                        if (imageId) {
                            data.append('imageId', imageId);
                        }
                    }
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        processData: false,
                        contentType: false,
                        data: data,
                        url: imageUploadUrl,
                        beforeSend: function () {
                            app.card.loading.start('#image-block');
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $('.imageId').val(data.imageId);
                                    $('.delete-main-img').attr('data-id', data.imageId);
                                    $('.save-page').click();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function () {
                            app.card.loading.finish('#image-block');
                        }
                    });
                } else {
                    app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Please Choose Image<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                }
            });
            function dirname(path) {
                return path.replace(/\\/g, '/').replace(/\/[^\/]*$/, '');
            }

            function basename(path) {
                return path.replace(/\\/g, '/').replace(/.*\//, '');
            }

            $('.uploadGalleryImage').on('click', function (e) {
                e.preventDefault();
                var data, fileValue, file;
                var elem = $(this);
                var dataChanged = $('.gallery-image-upload .fileinput').attr('data-changed');
                var imageUploadElement = $('.gallery-image-upload');
                if (dataChanged == 'true') {
                    data = new FormData();
                    file = $(imageUploadElement).find('input:file');
                    fileValue = $(imageUploadElement).find('input:file').val();
                    if ($(file)[0].files[0] != null) {
                        data.append('file', $(file)[0].files[0], fileValue);
                    } else if ($(file).closest('.fileinput').hasClass('fileinput-new')) {
                        data.append('file', null);
                    } else {
                        data.append('file', '');
                    }
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        processData: false,
                        contentType: false,
                        data: data,
                        url: imageUploadUrl,
                        beforeSend: function () {
                            app.card.loading.start($("#galleryBlock").parents('.modal-content'));
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    var row_template = $('.gallery-clone').clone();
                                    $(row_template).removeClass('gallery-clone').prependTo("#image-list");
                                    var path = dirname(data.url);
                                    var filename = basename(data.url);
                                    var smallImg = path + '/small/' + filename;
                                    var originalImg = data.url;
                                    $(row_template).find('.tile-image-title p').text(filename);
                                    $(row_template).find('.thumb-img').attr('src', smallImg);
                                    $(row_template).find('button').attr('data-id', data.imageId);
                                    $(row_template).find('.original-path').attr('data-clipboard-text', originalImg);
                                    $(elem).closest('.gallery-image-upload').find('.close').click();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function () {
                            app.card.loading.finish($("#galleryBlock").parents('.modal-content'));
                        }
                    });
                } else {
                    app.notification('information', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Please Choose Image<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                }

            });
            (function () {
                function createNode(text) {
                    var node = document.createElement('pre');
                    node.style.width = '1px';
                    node.style.height = '1px';
                    node.style.position = 'fixed';
                    node.style.top = '5px';
                    node.textContent = text;
                    return node;
                }

                function copyNode(node) {
                    var selection = getSelection();
                    selection.removeAllRanges();

                    var range = document.createRange();
                    range.selectNodeContents(node);
                    selection.addRange(range);

                    document.execCommand('copy');
                    selection.removeAllRanges();
                }

                function copyText(text) {
                    var node = createNode(text);
                    document.body.appendChild(node);
                    copyNode(node);
                    document.body.removeChild(node);
                }

                function copyInput(node) {
                    node.select();
                    document.execCommand('copy');
                    getSelection().removeAllRanges();
                }

                function isFormInput(element) {
                    return element.nodeName === 'INPUT' || element.nodeName === 'TEXTAREA';
                }

                $(document).on('click', '.copy-path', function () {
                    var text;
                    if (text = this.getAttribute('data-clipboard-text')) {
                        copyText(text);
                    } else {
                        var container = this.closest('.js-copy-container');
                        var content = container.querySelector('.js-copy-target');
                        if (isFormInput(content)) {
                            if (content.type === 'hidden') {
                                copyText(content.value);
                            } else {
                                copyInput(content);
                            }
                        } else {
                            copyNode(content);
                        }
                    }
                    this.blur();
                });
            }).call(this);
            $(document).on('click', '.delete-img', function (e) {
                e.preventDefault();
                var imgId = $(this).attr('data-id');
                var elem = $(this).closest('.gallery-img');
                if (imgId != undefined && imgId != null) {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        url: imageDeleteUrl.replace("[imageId]", imgId),
                        beforeSend: function () {
                            app.card.loading.start($("#galleryBlock").parents('.modal-content'));
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    $(elem).remove();
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function () {
                            app.card.loading.finish($("#galleryBlock").parents('.modal-content'));
                        }
                    });
                }
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
