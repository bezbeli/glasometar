<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:14:27
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-comparison.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb73448268_64138330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99358f512eabdd5de572535c7ea2799c48e6f760' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-comparison.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7eeb73448268_64138330 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="comparison-close-top">&times;</button>
        <h4 class="modal-title" id="modalLabel"><?php echo $_smarty_tpl->tpl_vars['text']->value['result_comparison'];?>
</h4>
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
