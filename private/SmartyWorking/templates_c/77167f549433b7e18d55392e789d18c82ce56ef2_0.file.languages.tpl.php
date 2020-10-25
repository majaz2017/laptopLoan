<?php
/* Smarty version 3.1.31, created on 2020-08-14 04:27:15
  from "/home1/alexorco/public_html/library/alexor/private/Templates/admin/languages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f3667032029e9_65724309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77167f549433b7e18d55392e789d18c82ce56ef2' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/private/Templates/admin/languages.tpl',
      1 => 1519083606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3667032029e9_65724309 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10170442795f3667031d58d2_56400978', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1791526685f3667031dbdf2_61846190', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3216746005f366703201877_90884972', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_10170442795f3667031d58d2_56400978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10170442795f3667031d58d2_56400978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Languages<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_1791526685f3667031dbdf2_61846190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1791526685f3667031dbdf2_61846190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-sm-12">
            <div class="card" id="languages">
                <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("languageListView");?>
" method="post">
                    <table class="table table-hover table-striped table-hover">
                        <thead>
                            <tr>
                                <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Language Name<?php $_block_repeat=false;
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
Language Code<?php $_block_repeat=false;
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
Language Short Code<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
RTL<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Status<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                                <th style="width: 70px"></th>
                            </tr>
                        </thead>
                        <tbody class="repeat-container">
                            <?php if (isset($_smarty_tpl->tpl_vars['allLanguages']->value) && 'allLanguages' != null) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allLanguages']->value, 'language', false, NULL, 'language', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_language']->value['index']++;
?>
                                    <tr class="language">
                                        <td>
                                            <input class="form-control" type="text" name="name[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_language']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_language']->value['index'] : null);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value->getName();?>
">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="code[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_language']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_language']->value['index'] : null);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value->getCode();?>
">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="shortCode[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_language']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_language']->value['index'] : null);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value->getShortCode();?>
">
                                        </td>
                                        <td class="text-center">
                                            <label class="switch switch-sm">
                                                <input type="checkbox" name="RTL[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_language']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_language']->value['index'] : null);?>
]" value="1"<?php if ($_smarty_tpl->tpl_vars['language']->value->isRTL()) {?> checked<?php }?>>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <label class="switch switch-sm">
                                                <input type="checkbox" name="status[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_language']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_language']->value['index'] : null);?>
]" value="1"<?php if ($_smarty_tpl->tpl_vars['language']->value->isActive()) {?> checked<?php }?>>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <input type="hidden" name="id[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_language']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_language']->value['index'] : null);?>
]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value->getId();?>
"/>
                                            <?php if ($_smarty_tpl->tpl_vars['language']->value->getId() != 1) {?>
                                                <div class="dropdown" data-trigger="hover" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                                    <button class="btn btn-outline-info" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-trash-o"></i>
                                                    </button>
                                                    <ul class="dropdown-menu <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>dropdown-menu-left<?php } else { ?>dropdown-menu-right<?php }?>">
                                                        <li class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Do you really want to delete?<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</li>
                                                        <li class="divider"></li>
                                                        <li class="text-center">
                                                            <button class="btn btn-outline-secondary delete-lang">
                                                                <i class="fa fa-trash-o"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            <?php }?>
                                        </td>
                                    </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            <?php }?>
                            <tr class="copy-template language">
                                <td>
                                    <input class="form-control" type="text" name="name[count]" disabled>
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="code[count]" disabled>
                                </td>
                                <td>
                                    <input class="form-control" type="text" name="shortCode[count]" disabled>
                                    <input type="hidden" name="RTL[count]" value="0" disabled>
                                </td>
                                <td class="text-center">
                                    <label class="switch switch-sm">
                                        <input type="checkbox" name="RTL[count]" value="1" disabled>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="switch switch-sm">
                                        <input type="checkbox" name="status[count]" value="1" disabled>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <input type="hidden" name="id[count]" disabled>
                                    <div class="dropdown" data-trigger="hover" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                        <button class="btn btn-outline-info" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                        <ul class="dropdown-menu <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>dropdown-menu-left<?php } else { ?>dropdown-menu-right<?php }?>">
                                            <li class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Do you really want to delete?<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</li>
                                            <li class="divider"></li>
                                            <li class="text-center">
                                                <button class="btn btn-outline-secondary delete-lang">
                                                    <i class="fa fa-trash-o"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Delete<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5"></td>
                                <td class="text-center">
                                    <button type="button" class="add btn btn-success lang-add">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <button type="submit" class="btn btn-success pull-right <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>ml-3<?php } else { ?>mr-3<?php }?> mb-3">
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
                </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerCustomJs'} */
class Block_3216746005f366703201877_90884972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_3216746005f366703201877_90884972',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('.lang-add').on('click', function (e) {
                e.preventDefault();
                var template = $('.copy-template');
                var container = template.closest('.repeat-container');
                var newRow = template.clone();
                var langLength = container.find('tr:visible').length;
                var count = langLength + 1;
                $('input', newRow).each(function () {
                    $.each(this.attributes, function (index, element) {
                        this.value = this.value.replace('[count]', '[' + count + ']');
                    });
                });
                newRow.removeClass('copy-template');
                newRow.find('input').removeAttr('disabled');
                newRow.appendTo(container);
                app.tooltip_popover();
                return false;
            });

            $(document).on('click', '.delete-lang', function () {
                var row = $(this).closest('tr');
                row.remove();
                $('.tooltip.show').remove();
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
