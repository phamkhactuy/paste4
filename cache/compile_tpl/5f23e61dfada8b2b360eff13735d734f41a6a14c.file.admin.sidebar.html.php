<?php /* Smarty version Smarty-3.1.6, created on 2014-06-10 22:30:43
         compiled from "C:\wamp\www\paste4/themes/bootstrap\admin.sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:446953971693814bb3-53475685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f23e61dfada8b2b360eff13735d734f41a6a14c' => 
    array (
      0 => 'C:\\wamp\\www\\paste4/themes/bootstrap\\admin.sidebar.html',
      1 => 1396881054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '446953971693814bb3-53475685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'getConfigs' => 0,
    'lang' => 0,
    'hooks' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5397169389483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5397169389483')) {function content_5397169389483($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include 'C:\\wamp\\www\\paste4\\libs\\plugins\\modifier.sortby.php';
?><div class="span2 offset1">
         <div class="base-block">         
 		  <div class="title">Admin cp</div>
 
 
            <div id="sidemenu">
            	<ul class="nav nav-list">
 
 	            <li>
 	            	<a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/admincp/settings/?tokenAdmin=<?php echo $_COOKIE['tokenAdmin'];?>
">
 	            		<i class="icon-wrench"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['adminsettings'];?>

 	           		</a>
 	            </li>
 	            <li>
 	            	<a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/admincp/users/?tokenAdmin=<?php echo $_COOKIE['tokenAdmin'];?>
">
 	            		<i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['adminusers'];?>

 	            	</a>
 	            </li>                   
 	            <li>
	 	            <a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/admincp/pastes/?tokenAdmin=<?php echo $_COOKIE['tokenAdmin'];?>
">
	 	            	<i class="icon-file"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['adminpastes'];?>

	 	            </a>
 	            </li>  
 
 
 	            		<li>
 	            			<a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/admincp/plugins/?tokenAdmin=<?php echo $_COOKIE['tokenAdmin'];?>
">
 	            				 <i class="icon-magnet"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['adminplugins'];?>

 	            			</a>
 	            		</li>
 	            		<?php if (!empty($_smarty_tpl->tpl_vars['hooks']->value->linkplug)){?>
	 	            		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->linkplug,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
	 	            		<li>
	 	            			<a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['link'];?>
/?tokenAdmin=<?php echo $_COOKIE['tokenAdmin'];?>
">
	 	            				<img src="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/themes/default/img/icons/sidemenu/magnify.png" width="16" height="16" alt="icon"/><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

	 	            			</a>
	 	            		</li> 	            		
	 	            		<?php } ?>
 	            		<?php }?>
 	            	</ul>
 
 
            </div>   
        </div>
        </div>
 
<?php }} ?>