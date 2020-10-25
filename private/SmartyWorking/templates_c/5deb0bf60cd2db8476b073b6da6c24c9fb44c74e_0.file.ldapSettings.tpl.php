<?php
/* Smarty version 3.1.31, created on 2020-08-14 04:37:58
  from "/home1/alexorco/public_html/library/alexor/private/Templates/admin/ldapSettings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5f366986915515_51908542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5deb0bf60cd2db8476b073b6da6c24c9fb44c74e' => 
    array (
      0 => '/home1/alexorco/public_html/library/alexor/private/Templates/admin/ldapSettings.tpl',
      1 => 1519083606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f366986915515_51908542 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_t')) require_once '/home1/alexorco/public_html/library/alexor/private/Smarty/plugins/block.t.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13051579405f366986859a18_78258757', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15394359495f366986862cb4_10297020', 'headerCss');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9081898025f3669868681f7_12451304', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6251173275f3669868f5ab6_60956908', 'footerPageJs');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20181608565f3669868fd185_46072776', 'footerCustomJs');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/admin.tpl');
}
/* {block 'title'} */
class Block_13051579405f366986859a18_78258757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13051579405f366986859a18_78258757',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
LDAP Settings<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'headerCss'} */
class Block_15394359495f366986862cb4_10297020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headerCss' => 
  array (
    0 => 'Block_15394359495f366986862cb4_10297020',
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
class Block_9081898025f3669868681f7_12451304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9081898025f3669868681f7_12451304',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style>
        .tooltip-inner {
            min-width: 250px; //the minimum width
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("ldapSettings");?>
" method="post" class="validate" id="general-form">
                    <ul class="nav nav-tabs customtab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#general" role="tab" aria-expanded="true">
                                <span class="hidden-xs-down"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
General<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#connection" role="tab" aria-expanded="false">
                                <span class="hidden-xs-down"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Connection<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#roleMapping" role="tab" aria-expanded="false">
                                <span class="hidden-xs-down"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Role Mapping<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#attributeMapping" role="tab" aria-expanded="false">
                                <span class="hidden-xs-down"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Attribute Mapping<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane p-20 active" id="general" role="tabpanel" aria-expanded="true">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Enable LDAP<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Check to enable LDAP authentication"></i></label>
                                        <br>
                                        <label class="switch switch-sm">
                                            <input type="checkbox" name="isEnabled" value="1"<?php if ($_smarty_tpl->tpl_vars['ldapSettings']->value->isEnabled()) {?> checked<?php }?>>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Enable Auto Registering Users<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Check to enable automatic LDAP users registration to database"></i></label>
                                        <br>
                                        <label class="switch switch-sm">
                                            <input type="checkbox" name="isUserAutoRegistration" value="1"<?php if ($_smarty_tpl->tpl_vars['ldapSettings']->value->isUserAutoRegistration()) {?> checked<?php }?>>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Enable Both Authentication<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Check to use default authentication in the same time with LDAP"></i></label>
                                        <br>
                                        <label class="switch switch-sm">
                                            <input type="checkbox" name="isUseBothAuth" value="1"<?php if ($_smarty_tpl->tpl_vars['ldapSettings']->value->isUseBothAuth()) {?> checked<?php }?>>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane p-20" id="connection" role="tabpanel" aria-expanded="true">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Server<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify LDAP server IP or domain name (e.g. ldap.library-cms.com)"></i></label>
                                        <input type="text" class="form-control" name="server" value="<?php echo $_smarty_tpl->tpl_vars['ldapSettings']->value->getServer();?>
">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Port<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify LDAP server port (default is 389)"></i></label>
                                        <input type="text" class="form-control" name="port" value="<?php echo $_smarty_tpl->tpl_vars['ldapSettings']->value->getPort();?>
">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Service Account DN<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify LDAP DN of user with at least read only access to users and groups. This user will be used to search LDAP users during login (e.g. uid=admin,cn=users,dc=library-cms,dc=com)"></i></label>
                                        <input type="text" class="form-control" name="serviceAccountDN" value="<?php echo $_smarty_tpl->tpl_vars['ldapSettings']->value->getServiceAccountDN();?>
">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Service Account Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify password for Service Account DN"></i></label>
                                        <input type="password" class="form-control" name="serviceAccountPassword" value="<?php echo $_smarty_tpl->tpl_vars['ldapSettings']->value->getServiceAccountPassword();?>
">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Search Base(s)<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify user search path (e.g. cn=users,dc=library-cms,dc=com)"></i></label>
                                        <input type="text" class="form-control" name="searchBase" value="<?php echo $_smarty_tpl->tpl_vars['ldapSettings']->value->getSearchBase();?>
">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane p-20" id="roleMapping" role="tabpanel" aria-expanded="false">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
<strong>Admin</strong> Group Name<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify administrator group name (e.g. cn=administrators,cn=groups,dc=library-cms,dc=com). Users from this group will be Library CMS administrators"></i>
                                        </label>
                                        <input type="text" class="form-control" name="adminGroupName" value="<?php echo $_smarty_tpl->tpl_vars['ldapSettings']->value->getAdminGroupName();?>
">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
<strong>Librarian</strong> Group Name<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify librarian group name (e.g. cn=librarians,cn=groups,dc=library-cms,dc=com). Users from this group will be Library CMS librarians"></i></label>
                                        <input type="text" class="form-control" name="librarianGroupName" value="<?php echo $_smarty_tpl->tpl_vars['ldapSettings']->value->getLibrarianGroupName();?>
">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
<strong>Member</strong> Group Name<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify member group name (e.g. cn=users,cn=groups,dc=library-cms,dc=com). Users from this group will be Library CMS members"></i>
                                        </label>
                                        <input type="text" class="form-control" name="userGroupName" value="<?php echo $_smarty_tpl->tpl_vars['ldapSettings']->value->getUserGroupName();?>
">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane p-20" id="attributeMapping" role="tabpanel" aria-expanded="false">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
<strong>Login</strong> Attribute Name<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify login attribute name (e.g. uid)"></i></label>
                                        <input type="text" class="form-control" name="loginAttributeName" value="<?php echo $_smarty_tpl->tpl_vars['ldapSettings']->value->getLoginAttributeName();?>
">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
<strong>DN</strong> Attribute Name<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify DN attribute name (e.g. dn)"></i>
                                        </label>
                                        <input type="text" class="form-control" name="dnAttributeName" value="<?php echo $_smarty_tpl->tpl_vars['ldapSettings']->value->getDnAttributeName();?>
">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
<strong>Email</strong> Attribute Name<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify mail attribute name (e.g. mail)"></i></label>
                                        <input type="text" class="form-control" name="emailAttributeName" value="<?php echo $_smarty_tpl->tpl_vars['ldapSettings']->value->getEmailAttributeName();?>
">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
<strong>First Name</strong> Attribute Name<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify mail attribute name (e.g. fn)"></i></label>
                                        <input type="text" class="form-control" name="firstNameAttributeName" value="<?php echo $_smarty_tpl->tpl_vars['ldapSettings']->value->getFirstNameAttributeName();?>
">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('escape'=>'no'));
$_block_repeat=true;
echo smarty_block_t(array('escape'=>'no'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
<strong>Last Name</strong> Attribute Name<?php $_block_repeat=false;
echo smarty_block_t(array('escape'=>'no'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify mail attribute name (e.g. ln)"></i></label>
                                        <input type="text" class="form-control" name="lastNameAttributeName" value="<?php echo $_smarty_tpl->tpl_vars['ldapSettings']->value->getLastNameAttributeName();?>
">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <button type="submit" class="btn btn-success pull-right mt-1 mb-4">
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
                </form>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['routes']->value->getRouteString("ldapTest");?>
" method="post" class="validate" id="test-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify LDAP user name to test"></i></label>
                                    <input type="text" class="form-control" name="login" id="testLogin">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Password<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <i class="icon-info"  data-toggle="tooltip" data-placement="top" title="Specify LDAP user's password"></i></label>
                                    <input type="password" class="form-control" name="password" id="testPassword">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-primary testConnection">
                                        <i class="fa fa-rocket" aria-hidden="true"></i> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Test Connection<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                                    </button>
                                </div>
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
class Block_6251173275f3669868f5ab6_60956908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerPageJs' => 
  array (
    0 => 'Block_6251173275f3669868f5ab6_60956908',
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
assets/js/plugins/bootstrap-select/bootstrap-select.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'footerPageJs'} */
/* {block 'footerCustomJs'} */
class Block_20181608565f3669868fd185_46072776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footerCustomJs' => 
  array (
    0 => 'Block_20181608565f3669868fd185_46072776',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
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
                    server: {
                        required: true
                    },
                    port: {
                        required: true
                    },
                    serviceAccountDN: {
                        required: true
                    },
                    serviceAccountPassword: {
                        required: true
                    },
                    searchBase: {
                        required: true
                    },
                    loginAttributeName: {
                        required: true
                    },
                    dnAttributeName: {
                        required: true
                    }
                }
            });




            $('.testConnection').on('click', function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
                $.ajax({
                    type: "POST",
                    url: form.attr('action'),
                    data: $('#general-form').serialize() + '&' + form.serialize(),
                    dataType: 'json',
                    beforeSend: function () {
                        app.card.loading.start($(form).closest('.card'));
                    },
                    success: function (data) {
                        if (data.redirect) {
                            window.location.href = data.redirect;
                        } else {
                            if (data.warning) {
                                app.notification('warning', data.warning);
                            } else if (data.error) {
                                app.notification('error', data.error);
                            } else {
                                var table = "<hr>";
                                if (data.success.email != null) {
                                    table += "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Email/Login<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
: " + data.success.email + "<br>";
                                }
                                if (data.success.firstName != null) {
                                    table += "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
First Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
: " + data.success.firstName + "<br>";
                                }
                                if (data.success.lastName != null) {
                                    table += "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Last Name<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
: " + data.success.lastName + "<br>";
                                }
                                if (data.success.role.id == "1") {
                                    table += "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Role<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
: Admin";
                                } else if (data.success.role.id == "2") {
                                    table += "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Role<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
: Librarian";
                                } else {
                                    table += "<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Role<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
: User";
                                }
                                app.notification('success', '<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat=true;
echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>
Congratulations! User is successfully logged and have required permissions to log in Library CMS.<?php $_block_repeat=false;
echo smarty_block_t(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
' + table);
                            }
                        }
                    },
                    complete: function () {
                        app.card.loading.finish($(form).closest('.card'));
                    },
                    error: function (jqXHR, exception) {
                        app.notification('error', app.getErrorMessage(jqXHR, exception));
                    }
                });
            });


            $('.add-row').on('click', function (e) {
                e.preventDefault();
                var container = $(this).data('container');
                var template = $(container).find('.copy-template');
                var newRow = template.clone();
                var rowLength = $(container).data('count');
                var count = parseInt(rowLength + 1);
                $('input,select,textarea', newRow).each(function () {
                    $.each(this.attributes, function (index, element) {
                        this.value = this.value.replace('[count]', '[' + count + ']');
                    });
                });
                newRow.removeClass('copy-template');
                newRow.find('input,select,textarea').removeAttr('disabled');
                //newRow.find('select').select2();
                newRow.appendTo(container);
                $(container).data('count', count);
                app.tooltip_popover();
                return false;
            });
            $(document).on('click', '.remove-row', function () {
                var row = $(this).closest('.repeat-row');
                var container = $(this).data('container');
                var rowLength = $(container).data('count');
                row.remove();
                $(container).data('count', rowLength - 1);
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
