<?php
/* Smarty version 3.1.31, created on 2020-10-21 04:53:51
  from "/home1/alexorco/public_html/library/alexor/themes/simple/auth/passwordRecovery.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f90133f0f2272_27872907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd14321f3435ba72ce725c259bf8d66084f7eec6b' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/themes/simple/auth/passwordRecovery.tpl',
      1 => 1519083616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/errors.tpl' => 1,
  ),
),false)) {
function content_5f90133f0f2272_27872907 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="KAASoft">
        <meta name="robots" content="noindex,nofollow">
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/css/style.css" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("favIconFilePath");?>
">
    </head>
    <body style="min-height: 100%;background: linear-gradient(180deg,#f0f0f0 0,#dee1e3 100%) !important;">
        <section id="wrapper">
            <div class="login-register">
                <div class="login-box card">
                    <div class="card-body">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("logoFilePath");?>
" class="d-flex ml-auto mr-auto mb-4 mt-2" alt="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Logo<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
"/>
                        <?php $_smarty_tpl->_subTemplateRender('file:admin/errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("passwordRecovery");?>
">
                            <div class="form-group ">
                                <h3 class="text-center mb-3"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Recover Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h3>
                                <p class="text-muted"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Enter your Email and instructions will be sent to you!<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="email" placeholder="Email" name="email" autocomplete="off">
                            </div>
                            <div class="form-message"></div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary btn-block recover" type="submit"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Reset<?php $_block_repeat=false;
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
        </section>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/jquery/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/plugins/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['resourcePath']->value;?>
assets/js/main.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            $('.recover').on('click', function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
                var email = $('#email').val();
                if (email != null && email != '') {
                    $.ajax({
                        dataType: 'json',
                        method: 'POST',
                        data: form.serialize(),
                        url: $(form).attr('action'),
                        beforeSend: function (data) {
                            app.card.loading.start($('.login-box'));
                        },
                        success: function (data) {
                            if (data.error == undefined) {
                                $(form).find('.form-message').addClass('alert alert-success alert-dismissable').text(data.success).fadeIn();
                                $(form).find("input[type=text], textarea").val("");
                                setTimeout(function () {
                                    $(form).find('.form-message').removeClass('alert alert-success alert-dismissable').fadeOut();
                                }, 5000);
                            } else {
                                $(form).find('.form-message').addClass('alert alert-danger alert-dismissable').html(data.error).fadeIn();
                                setTimeout(function () {
                                    $(form).find('.form-message').removeClass('alert alert-danger alert-dismissable').fadeOut();
                                }, 50000);
                            }
                        },
                        error: function (jqXHR, exception) {
                            console.log(app.getErrorMessage(jqXHR, exception));
                            $(form).find('.form-message').addClass('alert alert-danger alert-dismissable').text('Failed to send your message. Please try later or contact the administrator by another method.').fadeIn();
                            setTimeout(function () {
                                $(form).find('.form-message').removeClass('alert alert-danger alert-dismissable').fadeOut();
                            }, 5000);
                        },
                        complete: function (data) {
                            app.card.loading.finish($('.login-box'));
                        }
                    });
                } else {
                    $(form).find('.form-message').addClass('alert alert-danger alert-dismissable').text('Validation errors occurred. Please confirm the fields and submit it again.').fadeIn();
                    setTimeout(function () {
                        $(form).find('.form-message').removeClass('alert alert-danger alert-dismissable').fadeOut();
                    }, 50000);
                }
            });
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
