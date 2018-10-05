<?php
/* Smarty version 3.1.33, created on 2018-09-26 12:17:06
  from '/home/vagrant/Code/glasometar.ba/templates/2018/match-save.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab78c2afd3d3_76264863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90e463e664aec797e17da93994d9fc7b5e3cf2fd' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/match-save.tpl',
      1 => 1537960308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bab78c2afd3d3_76264863 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal save votes -->
<div class="modal fade" id="modal-save-results" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['text']->value['match_save'];?>
</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body" id="comparison-dialog" >
             <p><?php echo $_smarty_tpl->tpl_vars['text']->value['result_save_description'];?>
<p>
             <textarea rows="4" cols="50"><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&return=1</textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['text']->value['result_close'];?>
</button>
      </div>
    </div>
  </div>
</div> <!-- /Modal -->
<?php }
}
