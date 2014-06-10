<?php /* Smarty version Smarty-3.1.6, created on 2014-06-10 16:54:40
         compiled from "C:\wamp\www\paste4/themes/bootstrap\header.html" */ ?>
<?php /*%%SmartyHeaderCode:130405396c2a13f92b6-78732686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf1ac1d8b2de30b69a4babd354c2c12f15a509ab' => 
    array (
      0 => 'C:\\wamp\\www\\paste4/themes/bootstrap\\header.html',
      1 => 1402390467,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130405396c2a13f92b6-78732686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5396c2a1635b2',
  'variables' => 
  array (
    'title' => 0,
    'Name' => 0,
    'getConfigs' => 0,
    'hooks' => 0,
    'i' => 0,
    'lang' => 0,
    'userId' => 0,
    'userName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5396c2a1635b2')) {function content_5396c2a1635b2($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include 'C:\\wamp\\www\\paste4\\libs\\plugins\\modifier.sortby.php';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['metad'];?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['metak'];?>
" />
    <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['title'];?>
">

    <?php if ($_smarty_tpl->tpl_vars['hooks']->value->add_Css){?>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->add_Css,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?><link href="<?php echo $_smarty_tpl->tpl_vars['i']->value['file'];?>
" rel="stylesheet"><?php } ?>
    <?php }?>  
    	<link href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/themes/bootstrap/style/bootstrap.css" rel="stylesheet">
    	<link href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/themes/bootstrap/style/bootstrap-responsive.css" rel="stylesheet">
	
	
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php if ($_smarty_tpl->tpl_vars['hooks']->value->add_Js){?>
    	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->add_Js,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['i']->value['file'];?>
"></script>
    <?php } ?>
    <?php }?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/themes/bootstrap/js/bootstrap.js"></script>
	
	
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <!--<a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/"><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</a>-->
          <a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/">Pastebin</a>
          <div class="nav-collapse collapse">
 
            <ul class="nav">
			  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->add_Menu,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
			  <li><a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></li>
			  <?php } ?> 
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['changelang'];?>
 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->add_Menu_Lang,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/themes/bootstrap/img/flag/<?php echo $_smarty_tpl->tpl_vars['i']->value['img'];?>
" width="21" height="15" alt="<?php echo $_smarty_tpl->tpl_vars['i']->value['img'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></li>
                <?php } ?>   
                </ul>
              </li>
               
            </ul>
 		<?php if (empty($_smarty_tpl->tpl_vars['userId']->value)){?> 
            <form class="navbar-form pull-right" action="zone-login.html" method="post" enctype="multipart/form-data">
              <input class="span2" type="text" name="user" placeholder="User name">
              <input class="span2" type="password" name="pass" placeholder="Password">
              <input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['login'];?>
" class="btn"/>
            </form> 
			<ul class="nav pull-right">
            	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->add_User_Menu,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?> 
            		<?php if ($_smarty_tpl->tpl_vars['i']->value['id']=='gestcp'){?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/registration.html"><?php echo $_smarty_tpl->tpl_vars['lang']->value['registration'];?>
</a></li>
                	<?php }?>                	
                <?php } ?> 
			</ul>
  		<?php }else{ ?>
  			<ul class="nav pull-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['Loginas'];?>
 <?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
 <b class="caret"></b></a>
                <ul class="dropdown-menu">
            	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->add_User_Menu,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?> 
            	
            		<?php if ($_smarty_tpl->tpl_vars['i']->value['id']=='gestcp'){?>
            		<li class="nav-header">Guest panel</li>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/registration.html"><?php echo $_smarty_tpl->tpl_vars['lang']->value['registration'];?>
</a></li>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/zone-login.html"><?php echo $_smarty_tpl->tpl_vars['lang']->value['login'];?>
</a></li>
                	<?php }elseif($_smarty_tpl->tpl_vars['i']->value['id']=='admincp'){?>
                	<li class="nav-header">Admin panel</li>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/admincp.html?tokenAdmin=<?php echo $_COOKIE['tokenAdmin'];?>
"><i class="icon-wrench"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['adminsettings'];?>
</a></li>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/admincp/users/?tokenAdmin=<?php echo $_COOKIE['tokenAdmin'];?>
"><i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['adminusers'];?>
</a></li>   
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/admincp/pastes/?tokenAdmin=<?php echo $_COOKIE['tokenAdmin'];?>
"><i class="icon-file"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['adminpastes'];?>
</a></li>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/admincp/plugins/?tokenAdmin=<?php echo $_COOKIE['tokenAdmin'];?>
"><i class="icon-magnet"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['adminplugins'];?>
 </a></li>             	
                	<?php }elseif($_smarty_tpl->tpl_vars['i']->value['id']=='usercp'){?>
                	<li class="nav-header">User panel</li>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/account.html"><i class="icon-cog"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['accountSettings'];?>
</a></li>
                	<li class="divider"></li>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/index.php?page=logout"><i class="icon-remove-circle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['logout'];?>
</a></li>
                	<?php }else{ ?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></li>
                	<?php }?>                	
                <?php } ?> 
                </ul>
              </li>
            </ul>           
 		<?php }?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <header class="jumbotron masthead" id="overview">
      <!--
      <div class="inner">
        <div class="container">
          <h1><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</h1> 
        </div>--><!-- /container -->
      <!--</div>-->
    </header>
    <div class="container-fluid">    

<?php }} ?>