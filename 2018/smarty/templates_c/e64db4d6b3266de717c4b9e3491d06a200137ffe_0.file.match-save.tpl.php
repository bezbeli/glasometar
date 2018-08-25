<?php
/* Smarty version 3.1.32, created on 2018-08-21 05:09:48
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/match-save.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7b9e9c625151_10807115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64db4d6b3266de717c4b9e3491d06a200137ffe' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/match-save.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7b9e9c625151_10807115 (Smarty_Internal_Template $_smarty_tpl) {
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
