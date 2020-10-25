<?php
/* Smarty version 3.1.31, created on 2020-08-14 05:21:45
  from "/home1/alexorco/public_html/library/alexor/private/Templates/admin/email-notifications/email-notification.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f3673c96f7fc1_72021760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f36d9d4c2dfbcd982e045c9b76614ef9c891b519' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/private/Templates/admin/email-notifications/email-notification.tpl',
      1 => 1519083606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3673c96f7fc1_72021760 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5423897785f3673c967f678_44488842', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17086879095f3673c96a50a3_29609060', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12172591005f3673c96a99e4_16958343', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13060574105f3673c96f3e84_03652834', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15151984655f3673c96f6241_18793060', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_5423897785f3673c967f678_44488842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5423897785f3673c967f678_44488842',
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
Add Email Notification<?php $_block_repeat=false;
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
Edit Email Notification<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_17086879095f3673c96a50a3_29609060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_17086879095f3673c96a50a3_29609060',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
<?php
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_12172591005f3673c96a99e4_16958343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12172591005f3673c96a99e4_16958343',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['action']->value == "create") {?>
            <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("emailNotificationCreate"));
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['emailNotification']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('route', $_smarty_tpl->tpl_vars['routes']->value->getRouteString("emailNotificationEdit",array("route"=>$_smarty_tpl->tpl_vars['emailNotification']->value->getRoute())));
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['action']->value == "delete") {?>
            <?php $_smarty_tpl->_assignInScope('route', '');
?>
        <?php }?>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['route']->value;?>
" method="post" class="validate">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Route Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['emailNotification']->value)) {
echo $_smarty_tpl->tpl_vars['emailNotification']->value->getId();
}?>">
                                        <select name="route" class="form-control select-picker" <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {?>disabled<?php }?>>
                                            <option value="null">Select trigger:</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortedRoutes']->value, 'selectRoute', false, 'routeName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['routeName']->value => $_smarty_tpl->tpl_vars['selectRoute']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['routeName']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['emailNotification']->value) && $_smarty_tpl->tpl_vars['emailNotification']->value->getRoute() == $_smarty_tpl->tpl_vars['routeName']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['selectRoute']->value->getTitle();?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </select>
                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == "edit") {?>
                                            <input type="hidden" name="route" value="<?php echo $_smarty_tpl->tpl_vars['emailNotification']->value->getRoute();?>
">
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Subject<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input type="text" name="subject" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['emailNotification']->value)) {
echo $_smarty_tpl->tpl_vars['emailNotification']->value->getSubject();
}?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
From Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input type="text" name="fromName" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['emailNotification']->value)) {
echo $_smarty_tpl->tpl_vars['emailNotification']->value->getFrom()->getName();
}?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
From<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input type="text" name="from" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['emailNotification']->value)) {
echo $_smarty_tpl->tpl_vars['emailNotification']->value->getFrom()->getEmail();
}?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
To<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label>
                                        <input type="text" name="to" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && isset($_smarty_tpl->tpl_vars['emailNotification']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emailNotification']->value->getTo(), 'emailAddress');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['emailAddress']->value) {
echo $_smarty_tpl->tpl_vars['emailAddress']->value->getEmail();
if ($_smarty_tpl->tpl_vars['emailAddress']->value->getName() != null) {?>|<?php echo $_smarty_tpl->tpl_vars['emailAddress']->value->getName();
}
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_emailAddress']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_emailAddress']->value['last'] : null)) {
} else { ?>;<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="isEnabled"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Enabled<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</label><br>
                                    <label class="switch switch-sm">
                                        <input type="checkbox" name="isEnabled" value="1"<?php if ($_smarty_tpl->tpl_vars['action']->value == "edit" && $_smarty_tpl->tpl_vars['emailNotification']->value->isEnabled()) {?> checked<?php }?>>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="content"><?php if (isset($_smarty_tpl->tpl_vars['emailNotification']->value)) {
echo $_smarty_tpl->tpl_vars['emailNotification']->value->getContent();
}?></textarea>
                                    <textarea name="code" id="code"><?php if (isset($_smarty_tpl->tpl_vars['emailNotification']->value)) {
echo $_smarty_tpl->tpl_vars['emailNotification']->value->getContent();
}?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 margin-top-30">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-icon-fixed pull-right">
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
class Block_13060574105f3673c96f3e84_03652834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_13060574105f3673c96f3e84_03652834',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery-validate/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/select2/select2.full.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/ace/ace.js" charset="utf-8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_15151984655f3673c96f6241_18793060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_15151984655f3673c96f6241_18793060',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            var editor = ace.edit("code");
            editor.setTheme("ace/theme/monokai");
            editor.session.setMode("ace/mode/smarty");
            editor.setOptions({
                maxLines: 50,
                showPrintMargin: false,
                fontSize: '14px'
            });
            var textarea = $('textarea[name="content"]').hide();
            editor.getSession().setValue(textarea.val());
            editor.getSession().on('change', function(){
                textarea.val(editor.getSession().getValue());
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
                    route: {
                        required: true
                    },
                    from: {
                        required: true
                    }
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
