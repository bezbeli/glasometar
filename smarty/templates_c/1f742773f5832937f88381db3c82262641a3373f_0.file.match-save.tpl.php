<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:14:27
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-save.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb734626c9_08157607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f742773f5832937f88381db3c82262641a3373f' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-save.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7eeb734626c9_08157607 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal save votes -->
<div class="modal fade" id="modal-save-results" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['text']->value['match_save'];?>
</h4>
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
