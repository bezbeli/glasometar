<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:13:35
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/page-indicators.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb3fb56332_68996803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30f3ff11ee37e461e9041ab26ec72154bb7975a7' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/page-indicators.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7eeb3fb56332_68996803 (Smarty_Internal_Template $_smarty_tpl) {
?>        <ol class="carousel-indicators">
        <?php $_smarty_tpl->_assignInScope('i', 0);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
?>
          <li data-target="#carousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['i']->value == 0)) {?> class="active"<?php }?> id="indicator-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></li>
          <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
<?php }
}
