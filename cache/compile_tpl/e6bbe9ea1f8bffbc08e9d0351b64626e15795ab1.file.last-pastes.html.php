<?php /* Smarty version Smarty-3.1.6, created on 2014-06-10 16:35:17
         compiled from "C:\wamp\www\paste4/themes/bootstrap\last-pastes.html" */ ?>
<?php /*%%SmartyHeaderCode:210505396c3457cb6a1-57900598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6bbe9ea1f8bffbc08e9d0351b64626e15795ab1' => 
    array (
      0 => 'C:\\wamp\\www\\paste4/themes/bootstrap\\last-pastes.html',
      1 => 1396881054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210505396c3457cb6a1-57900598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hooks' => 0,
    'i' => 0,
    'lang' => 0,
    'getPastespaginate' => 0,
    'item' => 0,
    'getConfigs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5396c34590e12',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5396c34590e12')) {function content_5396c34590e12($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include 'C:\\wamp\\www\\paste4\\libs\\plugins\\modifier.sortby.php';
if (!is_callable('smarty_modifier_capitalize')) include 'C:\\wamp\\www\\paste4\\libs\\plugins\\modifier.capitalize.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>$_smarty_tpl->tpl_vars['hooks']->value->title->laste_paste), 0);?>

 
      <div class="row-fluid">
			<?php echo $_smarty_tpl->getSubTemplate ("sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
        <div class="span8"> 

       
				 	 <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->addblock,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
					 	<?php if ($_smarty_tpl->tpl_vars['i']->value['id']=='defaultLastpates'){?>      	      

      					<div class="base-block">          
 							<div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['recentPastes'];?>
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
												                <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['author'];?>
</th>
												            </tr>
												       	</thead>
												        
												        <tbody>
												        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['getPastespaginate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
												            	<td class="center"><i class="icon-user"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['getConfigs']->value['baseurl'];?>
/user/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
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
 
 
	 		<?php }?>            
	 <?php } ?>            
            
        </div><!--/span-->
      </div><!--/row-->

  
				
				<script type="text/javascript" charset="utf-8">
					$(document).ready(function() {
    					var oTable = $('#example').dataTable({
    					"oSearch": {"sSearch": "<?php if (isset($_GET['searchPaste'])){?><?php echo htmlspecialchars($_GET['searchPaste'], ENT_QUOTES, 'UTF-8', true);?>
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