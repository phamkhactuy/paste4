<?php /* Smarty version Smarty-3.1.6, created on 2014-06-10 16:32:33
         compiled from "C:\wamp\www\paste4/themes/bootstrap\index.html" */ ?>
<?php /*%%SmartyHeaderCode:38915396c2a123e3d5-34202851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a2e03582dc27e4db197697232a32010c491a25f' => 
    array (
      0 => 'C:\\wamp\\www\\paste4/themes/bootstrap\\index.html',
      1 => 1396881054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38915396c2a123e3d5-34202851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hooks' => 0,
    'errorInstallFile' => 0,
    'lang' => 0,
    'errorPaste' => 0,
    'errorCaptcha' => 0,
    'i' => 0,
    'getLangs' => 0,
    'item' => 0,
    'getCaptchaStatus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5396c2a13b460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5396c2a13b460')) {function content_5396c2a13b460($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include 'C:\\wamp\\www\\paste4\\libs\\plugins\\modifier.sortby.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>$_smarty_tpl->tpl_vars['hooks']->value->title->home_title), 0);?>


      <div class="row-fluid">
			<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
        <div class="span8">
            <?php if ($_smarty_tpl->tpl_vars['errorInstallFile']->value){?>
                	 <br />
            <div class="alert alert-error">
                   	<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['error'];?>
 :</b> Attention! Your file install.php exists. Your site is not secure. Delete it as soon as possible
                   	<a href="#" class="close" data-dismiss="alert">&times;</a>
            </div>
            <?php }?>  
            
            <?php if (isset($_smarty_tpl->tpl_vars['errorPaste']->value)){?>
               	 	<br />
            <div class="alert alert-error">
                   	<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['error'];?>
 :</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value['nopaste'];?>

                   	<a href="#" class="close" data-dismiss="alert">&times;</a>
            </div>
            <?php }?>  
                                                         	
            <?php if (isset($_smarty_tpl->tpl_vars['errorCaptcha']->value)){?>
                	 <br />
            <div class="alert alert-error">
                   	<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['error'];?>
 :</b> <?php echo $_smarty_tpl->tpl_vars['lang']->value['wrongCaptcha'];?>

                   	<a href="#" class="close" data-dismiss="alert">&times;</a>
            </div>
            <?php }?>    
 
        				
        <form method="POST" name="addpaste" id="addpaste" enctype="multipart/form-data">  
		 <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->addblock,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
	 	 	<?php if ($_smarty_tpl->tpl_vars['i']->value['id']=='pasteForm'){?>
            <div class="base-block">
            <div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['newPaste'];?>
</div>
            <p align="center"><textarea data-placement="top" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['Intro'];?>
" rows="12" class="span12" name="paste" id="paste" style="resize:none;"><?php if (isset($_POST['paste'])){?><?php echo $_POST['paste'];?>
<?php }?></textarea></p>
            </div> 
            
 		   <?php }elseif($_smarty_tpl->tpl_vars['i']->value['id']=='pasteOptions'){?> 		   
           <div class="row-fluid">
            <div class="base-block span6">
              <div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['Ops'];?>
</div>
              <h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['syntax'];?>
</h4>
              <p>
                 <select name="syntax" id="select1" class="uniform" data-placement="right" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['selectlang'];?>
" >
				       <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['getLangs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	                   		<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</option>
				       <?php } ?> 
                 </select>              
              </p>
              <h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['eXpiration'];?>
</h4>
              <p>
				<select name="expiration" class="uniform" data-placement="right" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['selectlife'];?>
">
					<option value="never"><?php echo $_smarty_tpl->tpl_vars['lang']->value['never'];?>
</option>
				    <option value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['10mn'];?>
</option>
				    <option value="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['1h'];?>
</option>
				    <option value="3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['1d'];?>
</option>
				    <option value="4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['1m'];?>
</option>
				</select>             
              </p>  
              <h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['exposure'];?>
</h4>
              <p>
				<select name="exposure" class="uniform" data-placement="right" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['selectprivate'];?>
">
				    <option value="public"><?php echo $_smarty_tpl->tpl_vars['lang']->value['public'];?>
</option>
				    <option value="private"><?php echo $_smarty_tpl->tpl_vars['lang']->value['private'];?>
</option>
				</select>              
              </p>                            
            </div><!--/span-->
            
            <?php }elseif($_smarty_tpl->tpl_vars['i']->value['id']=='pasteName'){?>            
            <div class="base-block span6">
              <div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pasteName'];?>
</div>
              <h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['pasteName'];?>
</h4>
              <p>
				<input data-placement="right" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['pasteName'];?>
" name="title" type="text" value="<?php if (isset($_POST['title'])){?><?php echo $_POST['title'];?>
<?php }?>" class="st-forminput" /><br />
		      </p>
          <?php if ($_smarty_tpl->tpl_vars['getCaptchaStatus']->value=='yes'){?>
              <h4>Captcha</h4>
              <p>
 			 	 
				<input data-placement="right" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['validcaptcha'];?>
" id="txtCaptcha" type="text" name="txtCaptcha" maxlength="5" size="13" /><br />
				<img data-placement="right" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['CoCtrit'];?>
" id="imgCaptcha" src="libs/captcha/create_image.php" onclick="setTimeout('refreshimg()', 300); return false;" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['CoCtrit'];?>
" /><br />
          <?php }?>

        <br />
				<input name="submit" type="submit" value="Submit" id="submit" class="btn btn-primary" />
              </p>
            </div><!--/span-->

	 		<?php }else{ ?>
            <div class="base-block <?php echo $_smarty_tpl->tpl_vars['i']->value['size'];?>
">
              <div class="title"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</div>
              <p><?php echo $_smarty_tpl->tpl_vars['i']->value['content'];?>
</p>
            </div><!--/span-->
 
	 		<?php }?> 
	 
		<?php } ?>  
          </form>   
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->
      
		<script type="text/javascript">
		  $(document).ready(function () {
			$("[rel=tooltip]").tooltip();
		  });
		</script> 
		
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>