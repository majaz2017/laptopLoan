<?php
/* Smarty version 3.1.31, created on 2020-11-04 07:47:04
  from "C:\wamp64\www\laptoploan\laptopLoan\private\Templates\admin\users\users.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5fa25c7844bb53_15303100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '547cdf4514a3e70366239f3a506f077a88ddb51c' => 
    array (
      0 => 'C:\\wamp64\\www\\laptoploan\\laptopLoan\\private\\Templates\\admin\\users\\users.tpl',
      1 => 1604410369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/users/user-list.tpl' => 1,
  ),
),false)) {
function content_5fa25c7844bb53_15303100 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\wamp64\\www\\laptoploan\\laptopLoan\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14634215815fa25c78442252_77371270', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5865734265fa25c78445c60_17199388', 'toolbar');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8893754935fa25c78448fa6_85293114', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13818361475fa25c7844a3b6_89884663', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11277889555fa25c7844aa22_14446802', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_14634215815fa25c78442252_77371270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14634215815fa25c78442252_77371270',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Users<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'toolbar'} */
class Block_5865734265fa25c78445c60_17199388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'toolbar' => 
  array (
    0 => 'Block_5865734265fa25c78445c60_17199388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="heading-elements">
        <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userCreate");?>
" class="btn btn-success btn-icon-fixed" target="_blank">
            <i class="fa fa-plus"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
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
    </div>
<?php
}
}
/* {/block 'toolbar'} */
/* {block 'content'} */
class Block_8893754935fa25c78448fa6_85293114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8893754935fa25c78448fa6_85293114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-12">
            <div class="card" id="userList">
                <?php $_smarty_tpl->_subTemplateRender("file:admin/users/user-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerPageJs'} */
class Block_13818361475fa25c7844a3b6_89884663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_13818361475fa25c7844a3b6_89884663',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_11277889555fa25c7844aa22_14446802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_11277889555fa25c7844aa22_14446802',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $(document).on('click', '.delete-user', function (e) {
                var url = $(this).attr('data-url');
                var row = $(this).closest('tr');
                $.ajax({
                    dataType: 'json',
                    type: 'POST',
                    url: url,
                    beforeSend: function () {
                        app.card.loading.start('#userList');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                app.notification('success', data.success);
                                $(row).remove();
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish('#userList');
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
            $(document).on('click', '.ajax-page', function (e) {
                e.preventDefault();
                $.ajax({
                    dataType: 'json',
                    url: $(this).attr('href'),
                    beforeSend: function () {
                        app.card.loading.start($("#userList"));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                $("#userList").html(data.html);
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($("#userList"));
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerCustomJs'} */
}
