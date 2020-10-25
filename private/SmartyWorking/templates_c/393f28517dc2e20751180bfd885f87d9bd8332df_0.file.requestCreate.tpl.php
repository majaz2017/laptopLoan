<?php
/* Smarty version 3.1.31, created on 2020-10-11 01:59:28
  from "/home1/alexorco/public_html/library/alexor/themes/simple/notifications/requestCreate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f82bb6023ba73_40783639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '393f28517dc2e20751180bfd885f87d9bd8332df' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/themes/simple/notifications/requestCreate.tpl',
      1 => 1519083618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f82bb6023ba73_40783639 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        [STYLES_1]
    </head>

    <body>
        <table class="body-wrap">
            <tr>
                <td></td>
                <td class="container" width="600">
                    <div class="content">
                        <table class="main" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="alert alert-info">
                                    <img src="[LOGO]" alt="LibraryCMS">
                                </td>
                            </tr>
                            <tr>
                                <td class="content-wrap">
                                    <table width="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td class="content-block aligncenter pb-0">
                                                <h2>[FIRST_NAME] [LAST_NAME] Requested Books</h2>
                                                <p>[REQUEST_DATE]</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content-block">
                                                [BOOKS]
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <div class="footer">
                            <table width="100%">
                                <tr>
                                    <td class="aligncenter content-block"><a href="[SITE_LINK]">[SITE_NAME]</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </td>
                <td></td>
            </tr>
        </table>
    </body>
</html><?php }
}
