<?php
/* Smarty version 3.1.33, created on 2018-09-26 12:17:06
  from '/home/vagrant/Code/glasometar.ba/templates/2018/match-tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab78c2991b86_39755966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66256dd4182f1c53d1af221295fe67e609278ea1' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/match-tabs.tpl',
      1 => 1537960308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:match-table.tpl' => 1,
    'file:match-matrix.tpl' => 1,
  ),
),false)) {
function content_5bab78c2991b86_39755966 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav nav-tabs bg-light pt-3 pl-3">
    <li>
        <a class="nav-link active" href="#home" data-toggle="tab" id="tabs-home"><i class="fa fa-list-ol"></i> <?php echo $_smarty_tpl->tpl_vars['text']->value['result_results'];?>
</a>
    </li>
    <li>
        <a class="nav-link" href="#comparison" data-toggle="tab" id="tabs-comparison"><strong><i class="fa fa-th"></i> <?php echo $_smarty_tpl->tpl_vars['text']->value['result_comparison'];?>
</strong></a></lki>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content pt-2">
  <?php $_smarty_tpl->_subTemplateRender("file:match-table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:match-matrix.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div> <!-- /.tab-content -->
<?php }
}
