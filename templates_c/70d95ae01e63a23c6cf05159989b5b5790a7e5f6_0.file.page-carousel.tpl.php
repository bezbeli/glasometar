<?php
/* Smarty version 3.1.33, created on 2018-09-26 12:16:13
  from '/home/vagrant/Code/glasometar.ba/templates/2018/page-carousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab788d279b17_51020813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70d95ae01e63a23c6cf05159989b5b5790a7e5f6' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/page-carousel.tpl',
      1 => 1537960308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page-page.tpl' => 1,
    'file:page-last.tpl' => 1,
  ),
),false)) {
function content_5bab788d279b17_51020813 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
<div class="mb-3"></div>
  <div class="row">
    <div class="col">
        <form action="./match/" method="get" id="calc">
        <div class="slider pb-5">
          <?php $_smarty_tpl->_assignInScope('key', 1);?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
?>
            <?php $_smarty_tpl->_subTemplateRender("file:page-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
          <?php $_smarty_tpl->_assignInScope('key', $_smarty_tpl->tpl_vars['key']->value+1);?> <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

          <!-- last item - selection of weights -->
          <?php $_smarty_tpl->_subTemplateRender("file:page-last.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <!-- /last item -->

          <!-- customization -->

          
          
          <!-- /customization -->

        </div>
      </form>
    </div>
  </div>
</div>
<?php }
}
