<?php /* Smarty version Smarty-3.1.6, created on 2014-06-10 22:30:43
         compiled from "C:\wamp\www\paste4/themes/bootstrap\admincp.settings.html" */ ?>
<?php /*%%SmartyHeaderCode:28844539716936b3506-88701556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd6f6ab942fa4fb386ab4ad4951509812b969b67' => 
    array (
      0 => 'C:\\wamp\\www\\paste4/themes/bootstrap\\admincp.settings.html',
      1 => 1396881054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28844539716936b3506-88701556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'getConfigs' => 0,
    'getThemes' => 0,
    'v' => 0,
    'getStatuts' => 0,
    'i' => 0,
    'hooks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5397169380561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5397169380561')) {function content_5397169380561($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include 'C:\\wamp\\www\\paste4\\libs\\plugins\\modifier.sortby.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Admincp'), 0);?>

		<script type="text/javascript">
		  $(document).ready(function () {
			$("[rel=tooltip]").tooltip();
		  });
		</script> 
      <div class="row-fluid">
			<?php echo $_smarty_tpl->getSubTemplate ("admin.sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
        <div class="span8">
		

    <form class="form-horizontal" id="form2" name="form2" method="post" action="">
        
            <div class="base-block">
              <div class="title">GENERAL SETTINGS</div>        


    
			<div class="control-group">
			<label class="control-label" for="baseurl">Domaine</label>
				<div class="controls">
				
					<input data-placement="right" rel="tooltip" data-original-title="Whitout / eg: http://localhost.com" type="text" id="baseurl" name="baseurl" value="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
">
					 
				</div>
			</div>

			<div class="control-group">
			<label class="control-label" for="title">Website title</label>
				<div class="controls">
					<input data-placement="right" rel="tooltip" data-original-title="Title of all pages" type="text" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['title'];?>
">
				</div>
			</div>

			<div class="control-group">
			<label class="control-label" for="timecache">Cache lifetime</label>
				<div class="controls">
					<input data-placement="right" rel="tooltip" data-original-title="Zero to dislable it" type="text" id="timecache" name="timecache" value="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['timecache'];?>
">
				</div>
			</div>

			<div class="control-group">
			<label class="control-label" for="lang">Default Language</label>
				<div class="controls">
                                   	<select name="lang" id="lang" class="uniform" data-placement="right" rel="tooltip" data-original-title="Select your default language">
                           	  		  <option value="en">English</option>
                           	  		  <option value="fr">French</option>
                           	  		  <option value="ru">Russe</option>
                               		</select>
				</div>
			</div>

			<div class="control-group">
			<label class="control-label" for="theme">Default theme</label>
				<div class="controls">
                                   	<select name="theme" id="theme" class="uniform" data-placement="right" rel="tooltip" data-original-title="Select your default theme">
                                         <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['getThemes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
                                         <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['getConfigs']->value['theme']==$_smarty_tpl->tpl_vars['v']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                                         <?php } ?>
                               		</select>
				</div>
			</div>

			<div class="control-group">
			<label class="control-label" for="metad">Meta description</label>
				<div class="controls">
					<textarea data-placement="right" rel="tooltip" data-original-title="Your meta description" name="metad" class="st-forminput" id="metad" style="width:510px" rows="3" cols="47"><?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['metad'];?>
</textarea> 
				</div>
			</div>
			
			<div class="control-group">
			<label class="control-label" for="metak">Meta keywords</label>
				<div class="controls">
					<textarea data-placement="right" rel="tooltip" data-original-title="Your meta keywords" name="metak" class="st-forminput" id="metak" style="width:510px" rows="3" cols="47"><?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['metak'];?>
</textarea> 
				</div>
			</div>			
 
		</div>		

            <div class="base-block">
              <div class="title">Paypal Settings</div>   
                		
			<div class="control-group">
			<label class="control-label" for="paypalmail">Paypal mail</label>
				<div class="controls">
					<input data-placement="right" rel="tooltip" data-original-title="Your paypal mail" type="text" name="paypalmail" id="paypalmail" value="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['paypalmail'];?>
">
				</div>
			</div>	
 
                		
			<div class="control-group">
			<label class="control-label" for="amout">Amout premium</label>
				<div class="controls">
					<input data-placement="right" rel="tooltip" data-original-title="Amout of premium account" type="text" id="amout" value="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['amout'];?>
">
				</div>
			</div>				
				
			</div>	

            <div class="base-block">
              <div class="title">Pastes Settings</div>   

            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['myId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['getStatuts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['myId']->value = $_smarty_tpl->tpl_vars['i']->key;
?> 
			<div class="control-group">
			<label class="control-label" for="maxline_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Max line for <?php echo $_smarty_tpl->tpl_vars['i']->value['level'];?>
</label>
				<div class="controls">
					<input type="text" name="maxline_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" id="maxline_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['maxlines'];?>
">
				</div>
			</div>	
			<?php } ?>   
				
			</div>	

			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->addblock,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
			<div class="control-group">
			<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</label>
				<div class="controls">
					<?php echo $_smarty_tpl->tpl_vars['i']->value['content'];?>

				</div>
			</div>	
			<?php } ?>

            <div class="base-block">
              <div class="title">Captcha settings</div>

			<div class="control-group">
			<label class="control-label" for="use_captcha">Use Captcha</label>
				<div class="controls">
					<select name="use_captcha" id="use_captcha" class="uniform" data-placement="right" rel="tooltip" data-original-title="Use Captcha">
						<option value="yes"<?php if ($_smarty_tpl->tpl_vars['getConfigs']->value['use_captcha']=='yes'||$_smarty_tpl->tpl_vars['getConfigs']->value['use_captcha']==null){?> selected<?php }?>>Yes</option>
						<option value="no"<?php if ($_smarty_tpl->tpl_vars['getConfigs']->value['use_captcha']=='no'){?> selected<?php }?>>No</option>
					</select>
				</div>
			</div>

			</div>

            <div class="base-block">
              <div class="title">Submit</div>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
				
			</div>	
			
    </form>

     </div>
</div>
   
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>