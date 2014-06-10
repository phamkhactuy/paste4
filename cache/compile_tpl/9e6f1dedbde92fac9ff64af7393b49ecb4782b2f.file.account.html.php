<?php /* Smarty version Smarty-3.1.6, created on 2014-06-10 22:31:51
         compiled from "C:\wamp\www\paste4/themes/bootstrap\account.html" */ ?>
<?php /*%%SmartyHeaderCode:17674539716d73c25c2-43054040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e6f1dedbde92fac9ff64af7393b49ecb4782b2f' => 
    array (
      0 => 'C:\\wamp\\www\\paste4/themes/bootstrap\\account.html',
      1 => 1396881054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17674539716d73c25c2-43054040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hooks' => 0,
    'i' => 0,
    'lang' => 0,
    'getUserdata' => 0,
    'getGravatar' => 0,
    'getConfigs' => 0,
    'getMyPastes' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_539716d75b854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539716d75b854')) {function content_539716d75b854($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include 'C:\\wamp\\www\\paste4\\libs\\plugins\\modifier.sortby.php';
if (!is_callable('smarty_function_mailto')) include 'C:\\wamp\\www\\paste4\\libs\\plugins\\function.mailto.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\wamp\\www\\paste4\\libs\\plugins\\modifier.capitalize.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>$_smarty_tpl->tpl_vars['hooks']->value->title->title_account), 0);?>

 
      <div class="row-fluid">
			<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
        <div class="span8"> 

		 <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->addblock,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
	 	 	<?php if ($_smarty_tpl->tpl_vars['i']->value['id']=='infoUser'){?> 
	 	 	
      					<div class="base-block">          
 							<div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['userdetailof'];?>
 <?php echo $_smarty_tpl->tpl_vars['getUserdata']->value->name;?>
</div>  				
						<div class="row-fluid">
						<div class="span2" align="center">
								<img src='<?php echo $_smarty_tpl->tpl_vars['getGravatar']->value;?>
' class="img-rounded" /> 
								<br /><br />
								<a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/edit-account.html" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['editProfile'];?>
</a>
						</div>
						<div class="span4">
							<h5><?php echo $_smarty_tpl->tpl_vars['lang']->value['userInfo'];?>
</h5>
								<ul>
									<li>Username: <?php echo $_smarty_tpl->tpl_vars['getUserdata']->value->name;?>
</li>
									<?php if ($_smarty_tpl->tpl_vars['getUserdata']->value->seemail=='true'){?>
									<li><?php echo $_smarty_tpl->tpl_vars['lang']->value['mail'];?>
: <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['getUserdata']->value->mail,'encode'=>"hex"),$_smarty_tpl);?>
 </li>
									<?php }?>
									<li>Level: <?php echo $_smarty_tpl->tpl_vars['getUserdata']->value->level;?>
</li>
									<?php if (!empty($_smarty_tpl->tpl_vars['getUserdata']->value->location)){?>
									<li><?php echo $_smarty_tpl->tpl_vars['lang']->value['userloc'];?>
: <?php echo $_smarty_tpl->tpl_vars['getUserdata']->value->location;?>
</li>
									<?php }?>
									<?php if (!empty($_smarty_tpl->tpl_vars['getUserdata']->value->website)){?>
									<li><?php echo $_smarty_tpl->tpl_vars['lang']->value['userweb'];?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['getUserdata']->value->website;?>
" target="_BLANK"><?php echo $_smarty_tpl->tpl_vars['getUserdata']->value->website;?>
</a></li>
									<?php }?>
								</ul>    
						</div>
						
							<?php }elseif($_smarty_tpl->tpl_vars['i']->value['id']=='getPrenium'){?>	
							
						<div class="span4">
							<h5><?php echo $_smarty_tpl->tpl_vars['lang']->value['userSigna'];?>
</h5>
							<div class="thumbnails"><?php echo $_smarty_tpl->tpl_vars['getUserdata']->value->signature;?>

						</div>		
							</div>
						</div>
						
					</div>	
							<?php }elseif($_smarty_tpl->tpl_vars['i']->value['id']=='getMypaste'){?>
      					<div class="base-block">          
 							<div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['allpasteof'];?>
 <?php echo $_smarty_tpl->tpl_vars['getUserdata']->value->name;?>
</div>  				
								<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
												    
														<thead>
															<tr>
															<th><?php echo $_smarty_tpl->tpl_vars['lang']->value['added'];?>
</th>
												            	<th><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</th>
												                
												                <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['expires'];?>
</th>
												                <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['syntax'];?>
</th>
												                <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['hits'];?>
</th>
												                <th>Delete</th>
												            </tr>
												       	</thead>
												        
												        <tbody>
												        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['getMyPastes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?> 
												            <tr class="gradeA">
												            <td><i class="icon-calendar"></i> <?php echo date('Y-m-d H:s',$_smarty_tpl->tpl_vars['item']->value['date']);?>
</td>
												            	<td><a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['uniqueid'];?>
"><i class="icon-file"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
												            	
												            	<td>
													 			<?php if ($_smarty_tpl->tpl_vars['item']->value['expire']=='1'){?>
																	  <?php echo $_smarty_tpl->tpl_vars['lang']->value['10mn'];?>

																	<?php }elseif($_smarty_tpl->tpl_vars['item']->value['expire']=='2'){?>
																	  <?php echo $_smarty_tpl->tpl_vars['lang']->value['1h'];?>

																	<?php }elseif($_smarty_tpl->tpl_vars['item']->value['expire']=='3'){?>
																	  <?php echo $_smarty_tpl->tpl_vars['lang']->value['1d'];?>

																	<?php }elseif($_smarty_tpl->tpl_vars['item']->value['expire']=='4'){?>
																	  <?php echo $_smarty_tpl->tpl_vars['lang']->value['10m'];?>

																	<?php }else{ ?>
																	  <?php echo $_smarty_tpl->tpl_vars['lang']->value['never'];?>

																<?php }?>	                                   	
												            	</td>
												            	<td class="center"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['item']->value['lang']);?>
</td>
												            	<td class="center"><i class="icon-eye-open"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['hits'];?>
</td>
												            	<td class="center"><a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/account.html?delPaste=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"> <i class="icon-remove"></i> Delete</a></td>
												            </tr>
												        <?php } ?>     
						 
						 
										</tbody>
								</table>
 
							</div>	 
 				<?php }else{ ?>
            <div class="base-block">
              <div class="title"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</div>
	 						<?php echo $_smarty_tpl->tpl_vars['i']->value['content'];?>

		       </div> 
				</div>
	 		<?php }?>  	
	 		
	 	<?php } ?> 	
	 	
        </div><!--/span-->
      </div><!--/row-->
 				
				<script type="text/javascript" charset="utf-8">
					$(document).ready(function() {
    					var oTable = $('#example').dataTable({
    					"oSearch": {"sSearch": "<?php if (isset($_POST['searchPaste'])){?><?php echo $_POST['searchPaste'];?>
<?php }?>"},
        				"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
        				"sPaginationType": "bootstrap",        				 
        				"oLanguage": {
					      "sSearch": "<?php echo $_smarty_tpl->tpl_vars['lang']->value['filterRecords'];?>
:",
					      "sLengthMenu": "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_smarty_tpl->tpl_vars['lang']->value['display'];?>
 _MENU_ <?php echo $_smarty_tpl->tpl_vars['lang']->value['records'];?>
",
					      "sInfo": "<?php echo $_smarty_tpl->tpl_vars['lang']->value['gotAtotal'];?>
 _TOTAL_ <?php echo $_smarty_tpl->tpl_vars['lang']->value['entriesToshow'];?>
 (_START_ - _END_)"
					    }					    
        				});
        				oTable.fnSort( [ [0,'desc'] ] );
    				} );
    			</script>
    			
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>