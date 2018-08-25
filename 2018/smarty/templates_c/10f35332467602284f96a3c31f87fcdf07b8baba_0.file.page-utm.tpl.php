<?php
/* Smarty version 3.1.32, created on 2018-08-21 05:08:17
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/page-utm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7b9e419ec418_34812677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10f35332467602284f96a3c31f87fcdf07b8baba' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/page-utm.tpl',
      1 => 1410217727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7b9e419ec418_34812677 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['utms']->value, 'utm', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['utm']->value) {
?>
<input type="hidden" name="utm_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['utm']->value;?>
" />
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
