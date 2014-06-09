<?php /* Smarty version Smarty-3.1.6, created on 2014-06-10 02:41:31
         compiled from "C:\wamp\www\paste4/themes/bootstrap\login.html" */ ?>
<?php /*%%SmartyHeaderCode:36765396c3316120c2-32518796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df50b3d0d43e138eb2f74d39c90f239f502cb6bd' => 
    array (
      0 => 'C:\\wamp\\www\\paste4/themes/bootstrap\\login.html',
      1 => 1402339278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36765396c3316120c2-32518796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5396c3316b072',
  'variables' => 
  array (
    'hooks' => 0,
    'errorLogin' => 0,
    'lang' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5396c3316b072')) {function content_5396c3316b072($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include 'C:\\wamp\\www\\paste4\\libs\\plugins\\modifier.sortby.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>$_smarty_tpl->tpl_vars['hooks']->value->title->title_login), 0);?>

 
      <div class="row-fluid">
			<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
        <div class="span8"> 

            <?php if ($_smarty_tpl->tpl_vars['errorLogin']->value){?>
                	 <br />
            <div class="alert alert-error">
                   	<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['error'];?>
 :</b> Đăng nhập gặp lỗi !
                   	<a href="#" class="close" data-dismiss="alert">&times;</a>
            </div>
            <?php }?> 

  
				   <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->addcontentlogin,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
					 	<?php if ($_smarty_tpl->tpl_vars['i']->value['id']=='defaultLogin'){?>
      					<div class="base-block">          
 							<div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['registration'];?>
</div>  				
								<div class="loginform"> 
								   	  <form id="form1" name="form1" method="post" action="zone-login.html" enctype="multipart/form-data">
									  	<label class="log-lab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
</label>
										<input name="user" type="text" class="login-input-user" id="textfield" />
									  	<label class="log-lab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['password'];?>
</label>
										<input name="pass" type="password" class="login-input-pass" id="textfield" /><br />										 
										<input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['login'];?>
" class="btn"/>
								   	  </form>	 
								</div>
							</div>	
						<?php }else{ ?>            
			 	 			<?php echo $_smarty_tpl->tpl_vars['i']->value['content'];?>
	 
			 	 		<?php }?>            
				   <?php } ?>  

        </div><!--/span-->
      </div><!--/row-->
 
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>