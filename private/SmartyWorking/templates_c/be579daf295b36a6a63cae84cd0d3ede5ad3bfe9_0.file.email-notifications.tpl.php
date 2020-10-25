<?php
/* Smarty version 3.1.31, created on 2020-08-14 04:33:00
  from "/home1/alexorco/public_html/library/alexor/private/Templates/admin/email-notifications/email-notifications.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f36685c043e57_95842432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be579daf295b36a6a63cae84cd0d3ede5ad3bfe9' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/private/Templates/admin/email-notifications/email-notifications.tpl',
      1 => 1519083606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/general/pagination.tpl' => 1,
  ),
),false)) {
function content_5f36685c043e57_95842432 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14235591345f36685c005dd0_82295864', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6650600365f36685c00f225_69273306', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7843684365f36685c03cff9_23858235', 'footerJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13807495325f36685c03ddf8_95207296', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_14235591345f36685c005dd0_82295864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14235591345f36685c005dd0_82295864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email Notifications<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_6650600365f36685c00f225_69273306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6650600365f36685c00f225_69273306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="card" id="notifications">
                <table class="table table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                            <th style="width: 75px" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Enabled<?php $_block_repeat=false;
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
Trigger<?php $_block_repeat=false;
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
Subject<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                            <th style="width: 70px" class="text-center"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Actions<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['emailNotifications']->value, 'emailNotification', false, NULL, 'emailNotification', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['emailNotification']->value) {
?>
                            <tr>
                                <td class="text-center">
                                    <label class="switch switch-sm margin-0">
                                        <input type="checkbox" name="isEnabled" class="enabled-flag" value="1"<?php if ($_smarty_tpl->tpl_vars['emailNotification']->value->isEnabled()) {?> checked<?php }?> data-route="<?php echo $_smarty_tpl->tpl_vars['emailNotification']->value->getRoute();?>
">
                                    </label>
                                </td>
                                <td>
                                    <?php $_smarty_tpl->_assignInScope('routesArray', $_smarty_tpl->tpl_vars['routes']->value->getRoutes());
?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("emailNotificationEdit",array("route"=>$_smarty_tpl->tpl_vars['emailNotification']->value->getRoute()));?>
"><?php echo $_smarty_tpl->tpl_vars['routesArray']->value[$_smarty_tpl->tpl_vars['emailNotification']->value->getRoute()]->getTitle();?>
</a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['emailNotification']->value->getSubject();?>
</td>
                                <td class="text-center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("emailNotificationEdit",array("route"=>$_smarty_tpl->tpl_vars['emailNotification']->value->getRoute()));?>
" class="btn btn-outline-info btn-sm" data-container="body" data-toggle="tooltip" title="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Edit<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"><i class="fa fa-pencil"></i></a>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </tbody>
                </table>
                <?php $_smarty_tpl->_subTemplateRender("file:admin/general/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footerJs'} */
class Block_7843684365f36685c03cff9_23858235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerJs' => 
  array (
    0 => 'Block_7843684365f36685c03cff9_23858235',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'footerJs'} */
/* {block 'footerCustomJs'} */
class Block_13807495325f36685c03ddf8_95207296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_13807495325f36685c03ddf8_95207296',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            var changeStatusUrl = '<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("emailNotificationEnable",array());?>
';
            $(document).on('change', '.enabled-flag', function () {
                var status;
                if ($(this).is(':checked')) {
                    status = 'enable';
                } else {
                    status = 'disable';
                }
                var url = $(this).attr('data-route');
                $.ajax({
                    dataType: 'json',
                    method: 'POST',
                    url: changeStatusUrl.replace("[route]", url).replace("[enable]", status),
                    beforeSend: function () {
                        app.card.loading.start('#notifications');
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                if ($(this).is(':checked')) {
                                    app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email Notification Successfully Enabled.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                } else {
                                    app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email Notification Successfully Disabled.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
');
                                }
                            }
                        }
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    },
                    complete: function () {
                        app.card.loading.finish('#notifications');
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
