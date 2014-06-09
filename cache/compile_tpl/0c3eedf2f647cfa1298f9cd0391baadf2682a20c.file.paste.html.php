<?php /* Smarty version Smarty-3.1.6, created on 2014-06-10 02:37:52
         compiled from "C:\wamp\www\paste4/themes/bootstrap\paste.html" */ ?>
<?php /*%%SmartyHeaderCode:176155396c31a3f7d06-65790958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c3eedf2f647cfa1298f9cd0391baadf2682a20c' => 
    array (
      0 => 'C:\\wamp\\www\\paste4/themes/bootstrap\\paste.html',
      1 => 1402330893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176155396c31a3f7d06-65790958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5396c31a4827d',
  'variables' => 
  array (
    'hooks' => 0,
    'getPaste' => 0,
    'i' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5396c31a4827d')) {function content_5396c31a4827d($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include 'C:\\wamp\\www\\paste4\\libs\\plugins\\modifier.sortby.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>$_smarty_tpl->tpl_vars['hooks']->value->title->title_paste), 0);?>


      <div class="row-fluid">
			<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
        <div class="span8"> 
      		<div class="base-block">          
 				<div class="title"><?php echo $_smarty_tpl->tpl_vars['getPaste']->value['title'];?>
</div>
      
					  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->add_contentPaste,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
					 	<?php if ($_smarty_tpl->tpl_vars['i']->value['id']=='defaultpaste'){?>	 	
								<?php if (empty($_smarty_tpl->tpl_vars['result']->value)){?> 
								        <div class="error-page">
								            <h2 class="red">Opps... Paste Not Avaible ! </h2>
								        </div>
								<?php }else{ ?>				  
								 	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 
								<?php }?>				
						 	<?php }else{ ?>	 	
					 		<?php echo $_smarty_tpl->tpl_vars['i']->value['content'];?>

					 	<?php }?>
					 <?php } ?>	
	 
	 		
			</div>	
        </div><!--/span-->
      </div><!--/row-->
       
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>