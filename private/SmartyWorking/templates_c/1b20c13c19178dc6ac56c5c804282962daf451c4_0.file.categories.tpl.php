<?php
/* Smarty version 3.1.31, created on 2020-08-16 05:06:05
  from "/home1/alexorco/public_html/library/alexor/private/Templates/admin/public/categories/categories.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f39131d99f6b4_88447600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b20c13c19178dc6ac56c5c804282962daf451c4' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/private/Templates/admin/public/categories/categories.tpl',
      1 => 1519083606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f39131d99f6b4_88447600 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11101236615f39131d96aa33_50789306', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1334421305f39131d971295_77802887', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1141384475f39131d996547_74397273', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6163901425f39131d9971d2_43167757', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_11101236615f39131d96aa33_50789306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11101236615f39131d96aa33_50789306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Categories<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_1334421305f39131d971295_77802887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1334421305f39131d971295_77802887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-sm-12">
            <div class="card" id="categories">
                <table class="table table-hover table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                            <th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Category Name<?php $_block_repeat=false;
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
URL<?php $_block_repeat=false;
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
Title<?php $_block_repeat=false;
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
Meta Title<?php $_block_repeat=false;
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
Meta Keywords<?php $_block_repeat=false;
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
Meta Description<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                            <th style="width: 70px;"></th>
                        </tr>
                    </thead>
                    <tbody class="repeat-container">
                        <?php if (isset($_smarty_tpl->tpl_vars['categories']->value) && 'categories' != null) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, NULL, 'category', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                <tr class="category" data-action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['category']->value->getId();
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("categoryEdit",array('categoryId'=>$_prefixVariable1));?>
" data-changed="false">
                                    <td>
                                        <input name="id" class="category-id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->getId();?>
"/>
                                        <input class="form-control" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->getName();?>
">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="url" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->getUrl();?>
">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->getTitle();?>
">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="metaTitle" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->getMetaTitle();?>
">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="metaKeywords" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->getMetaKeywords();?>
">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="metaDescription" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->getMetaDescription();?>
">
                                    </td>
                                    <td class="text-center">
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
                                                    <button class="btn btn-outline-secondary delete-category" data-delete="<?php ob_start();
echo $_smarty_tpl->tpl_vars['category']->value->getId();
$_prefixVariable2=ob_get_clean();
echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("categoryDelete",array('categoryId'=>$_prefixVariable2));?>
">
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
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        <?php }?>
                        <tr class="copy-template category" data-action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("categoryCreate");?>
" data-changed="">
                            <td>
                                <input name="id" class="category-id" type="hidden" value=""/>
                                <input class="form-control category-name" type="text" name="name">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="url">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="title">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="metaTitle">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="metaKeywords">
                            </td>
                            <td>
                                <input class="form-control" type="text" name="metaDescription">
                            </td>
                            <td class="text-center">
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
                                            <button class="btn btn-outline-secondary delete-category">
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
                            <td colspan="6"></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-outline-success category-add" data-trigger="hover" data-toggle="tooltip" data-title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Add Category<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success mb-2 <?php if ($_smarty_tpl->tpl_vars['activeLanguage']->value->isRTL()) {?>ml-2<?php } else { ?>mr-2<?php }?> pull-right save-category">
                            <i class="fa fa-fw fa-floppy-o"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_1141384475f39131d996547_74397273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_1141384475f39131d996547_74397273',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_6163901425f39131d9971d2_43167757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_6163901425f39131d9971d2_43167757',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('.category-add').on('click', function (e) {
                e.preventDefault();
                var template = $('.copy-template');
                var container = template.closest('.repeat-container');
                var newRow = template.clone();
                newRow.insertBefore(container);
                newRow.removeClass('copy-template');
                app.tooltip_popover();
                return false;
            });
            $(document).on('change', 'input,textarea,select', function () {
                $(this).closest('tr').attr('data-changed', true);
            });
            var categoryEditUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("categoryEdit",array());?>
';
            var categoryDeleteUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("categoryDelete",array());?>
';
            $('.save-category').on('click', function (e) {
                e.preventDefault();
                var rowData;
                $('tr').each(function (index, element) {
                    var name, dataChanged = $(element).attr('data-changed');
                    if (dataChanged == 'true') {
                        rowData = $(element).find('input,textarea,select').serialize();
                        $.ajax({
                            dataType: 'json',
                            method: 'POST',
                            data: rowData,
                            url: $(element).attr('data-action'),
                            beforeSend: function () {
                                app.card.loading.start($("#categories"));
                            },
                            success: function (data) {
                                if (data.redirect) {
                                    window.location.href = data.redirect;
                                } else {
                                    if (data.error) {
                                        app.notification('error', data.error);
                                    } else {
                                        $(element).attr('data-action', categoryEditUrl.replace("[categoryId]", data.categoryId)).attr('data-changed', false).find('.category-id').val(data.categoryId);
                                        $(element).find('.delete-category').attr('data-delete', categoryDeleteUrl.replace("[categoryId]", data.categoryId));
                                        name = $(element).find('.category-name').val();
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
                            },
                            complete: function () {
                                app.card.loading.finish($("#categories"));
                            }
                        });
                    }
                });
            });
            $(document).on('click', '.delete-category', function () {
                var url = $(this).attr('data-delete');
                var row = $(this).closest('tr');
                if (url) {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        url: $(this).attr('data-delete'),
                        beforeSend: function () {
                            app.card.loading.start($("#categories"));
                        },
                        success: function (data) {
                            if (data.redirect) {
                                window.location.href = data.redirect;
                            } else {
                                if (data.error) {
                                    app.notification('error', data.error);
                                } else {
                                    row.remove();
                                    app.notification('success', data.success);
                                }
                            }
                        },
                        error: function (jqXHR, exception) {
                            app.notification('error', app.getErrorMessage(jqXHR, exception));
                        },
                        complete: function () {
                            app.card.loading.finish($("#categories"));
                        }
                    });
                } else {
                    row.remove();
                    $('.tooltip.show').remove();
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
