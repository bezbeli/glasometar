<?php
/* Smarty version 3.1.33, created on 2018-09-26 12:17:06
  from '/home/vagrant/Code/glasometar.ba/templates/2018/match-comparison.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab78c2ae2391_15416755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3797940100e11038b967b4569e51356844252118' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/match-comparison.tpl',
      1 => 1537960308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bab78c2ae2391_15416755 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modalLabel"><?php echo $_smarty_tpl->tpl_vars['text']->value['result_comparison'];?>
</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="comparison-close-top">&times;</button>
      </div>
      <div class="modal-body" id="comparison-dialog" >
             <i class="fa fa-spinner"></i>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="comparison-close-bottom"><?php echo $_smarty_tpl->tpl_vars['text']->value['result_close'];?>
</button>
      </div>
    </div>
  </div>
</div> <!-- /Modal -->

<?php }
}
