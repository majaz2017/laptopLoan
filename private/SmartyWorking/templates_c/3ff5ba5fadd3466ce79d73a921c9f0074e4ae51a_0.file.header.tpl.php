<?php
/* Smarty version 3.1.31, created on 2020-11-04 07:46:17
  from "C:\wamp64\www\laptoploan\laptopLoan\themes\simple\general\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5fa25c496b5f36_75495312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ff5ba5fadd3466ce79d73a921c9f0074e4ae51a' => 
    array (
      0 => 'C:\\wamp64\\www\\laptoploan\\laptopLoan\\themes\\simple\\general\\header.tpl',
      1 => 1604410369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa25c496b5f36_75495312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'printMenu' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\laptoploan\\laptopLoan\\private\\SmartyWorking\\templates_c\\3ff5ba5fadd3466ce79d73a921c9f0074e4ae51a_0.file.header.tpl.php',
    'uid' => '3ff5ba5fadd3466ce79d73a921c9f0074e4ae51a',
    'call_name' => 'smarty_template_function_printMenu_156550145fa25c495c09a5_18735759',
  ),
));
if (!is_callable('smarty_block_t')) require_once 'C:\\wamp64\\www\\laptoploan\\laptopLoan\\private\\Smarty\\plugins\\block.t.php';
?>
<header class="header">
    <div class="container">
        <nav class="navbar navbar-toggleable-lg primary-menu">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-toggle" aria-controls="navbar-toggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>

            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publicIndex");?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("logoFilePath");?>
" alt="Logo"></a>

            <div class="collapse navbar-collapse justify-content-end" id="navbar-toggle">
                
                <ul class="navbar-nav primary-menu-items">
                    <?php if (isset($_smarty_tpl->tpl_vars['menu1']->value)) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu1']->value->getRootNodes(), 'rootNode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rootNode']->value) {
?>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'printMenu', array('node'=>$_smarty_tpl->tpl_vars['rootNode']->value), true);?>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <?php }?>
                </ul>
            </div>
            <ul class="nav-search">
                <?php if (isset($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value != null) {?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->getFirstName() != null) {?>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("adminIndex");?>
" class="open-login-box">
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->getFirstName();?>

                            </a>
                        </li>
                    <?php }?>
                <?php } else { ?>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login-box" class="open-login-box">
                            <i class="ti-lock"></i>
                        </a>
                    </li>
                <?php }?>
                <li>
                    <a href="#" class="search-open">
                        <i class="ti-search"></i>
                    </a>
                </li>
                <?php if (isset($_smarty_tpl->tpl_vars['languages']->value)) {?>
                    <li class="languages">
                        <a class="lang-select" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-world"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['language']->value->isActive()) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("languageChange",array("languageCode"=>$_smarty_tpl->tpl_vars['language']->value->getCode()));?>
" class="dropdown-item <?php if ($_smarty_tpl->tpl_vars['language']->value->getCode() == $_smarty_tpl->tpl_vars['activeLanguage']->value->getCode()) {?>active<?php }?>"><i class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['language']->value->getShortCode();?>
"></i><?php echo $_smarty_tpl->tpl_vars['language']->value->getName();?>

                                    </a>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </div>
                    </li>
                <?php }?>
            </ul>
            <div class="search-header">
                <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("bookSearchPublic");?>
" method="post" id="headerSearchForm">
                    <input class="search-input" name="searchText" autocomplete="off" type="text">
                    <button type="submit" class="form-icon">
                        <i class="ti-search search-icon"></i>
                    </button>
                    <span class="close search-close form-icon">
							<i class="ti-close"></i>
						</span>
                </form>
            </div>
        </nav>
    </div>
</header>
<div class="header-spacer"></div>
<div class="modal login-box fade" id="login-box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card card-no-border">
                    <div class="card-body">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("logoFilePath");?>
" class="d-flex ml-auto mr-auto mb-4 mt-2" alt="Login">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("publicLogin");?>
" method="post" class="form-horizontal form-material">
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input name="login" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" value="" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input name="password" class="form-control" placeholder="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8 col-xs-8">
                                        <div class="app-checkbox">
                                            <label>
                                                <input type="checkbox" name="rememberMe"> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Remember me<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-4">
                                        <button class="btn btn-success btn-block"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</button>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['siteViewOptions']->value->getOptionValue("enableRegistration")) {?>
                                        <div class="col-md-12 mt-2">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("userRegistration");?>
" class="btn btn-primary btn-block"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Sign Up<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
/* smarty_template_function_printMenu_156550145fa25c495c09a5_18735759 */
if (!function_exists('smarty_template_function_printMenu_156550145fa25c495c09a5_18735759')) {
function smarty_template_function_printMenu_156550145fa25c495c09a5_18735759($_smarty_tpl,$params) {
$params = array_merge(array('node'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}?>
                    <?php if (isset($_smarty_tpl->tpl_vars['node']->value) && $_smarty_tpl->tpl_vars['node']->value->getValue() !== null) {?>
                        <?php $_smarty_tpl->_assignInScope('menuItem', $_smarty_tpl->tpl_vars['node']->value->getValue());
?>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['node']->value->getChildren() == null) {?>nav-item<?php }?> <?php if ($_smarty_tpl->tpl_vars['node']->value->getChildren() != null) {?>dropdown<?php }?> <?php if ($_smarty_tpl->tpl_vars['menuItem']->value->getClass() != null) {
echo $_smarty_tpl->tpl_vars['menuItem']->value->getClass();
}?>">
                            <a href="<?php if ($_smarty_tpl->tpl_vars['menuItem']->value->getPageId() != null) {
echo $_smarty_tpl->tpl_vars['pageUrls']->value[$_smarty_tpl->tpl_vars['menuItem']->value->getPageId()];
} elseif ($_smarty_tpl->tpl_vars['menuItem']->value->getPostId() != null) {
echo $_smarty_tpl->tpl_vars['postUrls']->value[$_smarty_tpl->tpl_vars['menuItem']->value->getPostId()];
} elseif ($_smarty_tpl->tpl_vars['menuItem']->value->getLink() != null) {
echo $_smarty_tpl->tpl_vars['menuItem']->value->getLink();
}?>" class="nav-link" <?php if ($_smarty_tpl->tpl_vars['node']->value->getChildren() != null) {?> data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"<?php }?>><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getTitle();?>
</a>
                            <?php if ($_smarty_tpl->tpl_vars['node']->value->getChildren() != null) {?>
                                <ul class="dropdown-menu">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value->getChildren(), 'subNode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subNode']->value) {
?>
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'printMenu', array('node'=>$_smarty_tpl->tpl_vars['subNode']->value), true);?>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </ul>
                            <?php }?>
                        </li>
                    <?php }?>
                <?php
}}
/*/ smarty_template_function_printMenu_156550145fa25c495c09a5_18735759 */
}
