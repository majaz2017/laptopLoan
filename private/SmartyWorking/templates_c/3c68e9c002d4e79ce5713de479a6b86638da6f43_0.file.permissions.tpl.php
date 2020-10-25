<?php
/* Smarty version 3.1.31, created on 2020-08-14 04:32:40
  from "/home1/alexorco/public_html/library/alexor/private/Templates/admin/roles/permissions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f36684871e219_83556964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c68e9c002d4e79ce5713de479a6b86638da6f43' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/private/Templates/admin/roles/permissions.tpl',
      1 => 1519083606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f36684871e219_83556964 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14480237465f3668486ff462_51545402', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15496899365f366848705956_35587211', 'breadcrumb');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_632241545f366848707223_36203328', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17484336545f366848707dc4_20778709', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14352041285f36684871c9f3_35971122', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15958954215f36684871d628_97061821', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_14480237465f3668486ff462_51545402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14480237465f3668486ff462_51545402',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Permissions<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'breadcrumb'} */
class Block_15496899365f366848705956_35587211 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_15496899365f366848705956_35587211',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="active"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Permissions<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</li><?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'headerCss'} */
class Block_632241545f366848707223_36203328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_632241545f366848707223_36203328',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'headerCss'} */
/* {block 'content'} */
class Block_17484336545f366848707dc4_20778709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17484336545f366848707dc4_20778709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("permissionListUpdate");?>
" method="post" class="">
                    <div class="block-heading">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-clean pull-right mt-3 <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>ml-3<?php } else { ?>mr-3<?php }?> mb-3 save-role">
                                <i class="fa fa-floppy-o"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Update Permissions<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                            </button>
                        </div>
                    </div>
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th width="40">#</th>
                                <th width="70" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Public Access<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Permission Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 (<span class="route-size"></span>)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($_smarty_tpl->tpl_vars['permissions']->value) && $_smarty_tpl->tpl_vars['permissions']->value != null) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions']->value, 'permission', false, NULL, 'permission', array (
));
$_smarty_tpl->tpl_vars['permission']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->index++;
$__foreach_permission_0_saved = $_smarty_tpl->tpl_vars['permission'];
?>
                                    <tr <?php if ($_smarty_tpl->tpl_vars['permission']->value->isPublic()) {?>class="bg-success text-white"<?php }?>>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['permission']->index+1;?>

                                        </td>
                                        <td class="text-center">
                                            <?php if ($_smarty_tpl->tpl_vars['permission']->value->isPublic()) {?>yes<?php } else { ?>no<?php }?>
                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['permission']->value->getRouteTitle();?>

                                        </td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['permission'] = $__foreach_permission_0_saved;
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
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_14352041285f36684871c9f3_35971122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_14352041285f36684871c9f3_35971122',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_15958954215f36684871d628_97061821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_15958954215f36684871d628_97061821',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            var count = $('table tr').length;
            $('.route-size').text(count);
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
