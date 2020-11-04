<?php
/* Smarty version 3.1.31, created on 2020-11-04 07:46:17
  from "C:\wamp64\www\laptoploan\laptopLoan\themes\simple\404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5fa25c494992d7_06060055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '303a420c4e1684366e7f8915b58f6bd358c08e7c' => 
    array (
      0 => 'C:\\wamp64\\www\\laptoploan\\laptopLoan\\themes\\simple\\404.tpl',
      1 => 1604410369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/errors.tpl' => 1,
  ),
),false)) {
function content_5fa25c494992d7_06060055 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once 'C:\\wamp64\\www\\laptoploan\\laptopLoan\\private\\Smarty\\plugins\\block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_343508875fa25c49492798_63946351', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public.tpl');
}
/* {block 'content'} */
class Block_343508875fa25c49492798_63946351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_343508875fa25c49492798_63946351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page error-page">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-content">
                    <h1 class="text-center">404</h1>
                    <div class="error-messages">
                        <p class="not-found text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
The page you are looking for was not found!<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</p>
                        <?php $_smarty_tpl->_subTemplateRender('file:admin/errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
