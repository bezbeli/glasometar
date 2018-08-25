<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:14:27
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb733a8ef9_47559509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05737ff76a1235ddb66c5e36cdf40b9dcddf52fa' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-tabs.tpl',
      1 => 1410212101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:match-table.tpl' => 1,
    'file:match-matrix.tpl' => 1,
    'file:match-eu.tpl' => 1,
  ),
),false)) {
function content_5b7eeb733a8ef9_47559509 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab" id="tabs-home"><i class="fa fa-list-ol"></i> <?php echo $_smarty_tpl->tpl_vars['text']->value['result_results'];?>
</a></li>
  <li><a href="#comparison" data-toggle="tab" id="tabs-comparison"><strong><i class="fa fa-th"></i> <?php echo $_smarty_tpl->tpl_vars['text']->value['result_comparison'];?>
</strong></a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content"> 
  <?php $_smarty_tpl->_subTemplateRender("file:match-table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:match-matrix.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:match-eu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div> <!-- /.tab-content -->
<?php }
}
