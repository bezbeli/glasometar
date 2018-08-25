<?php
/* Smarty version 3.1.32, created on 2018-08-21 05:08:17
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/page-carousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7b9e4195d252_23951044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1925d83c4f8831d92f7b1ac09b69db6f12c2b676' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/page-carousel.tpl',
      1 => 1410217727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page-page.tpl' => 1,
    'file:page-last.tpl' => 1,
    'file:page-utm.tpl' => 1,
    'file:page-indicators.tpl' => 1,
    'file:page-arrows.tpl' => 1,
  ),
),false)) {
function content_5b7b9e4195d252_23951044 (Smarty_Internal_Template $_smarty_tpl) {
?>      <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">
        <!-- note: data-interval="false" disables the automatic transition -->
        <!-- note: data-wrap="false" disables the rotation -->
        <form action="./match/" method="get" id="calc">
          <div class="carousel-inner">   
          <?php $_smarty_tpl->_assignInScope('key', 1);?> 
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
?>
            <!-- <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
th page -->
            <?php $_smarty_tpl->_subTemplateRender("file:page-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <!-- /<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
th page -->
            <?php $_smarty_tpl->_assignInScope('key', $_smarty_tpl->tpl_vars['key']->value+1);?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
            <!-- last item - selection of weights -->
            <?php $_smarty_tpl->_subTemplateRender("file:page-last.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <!-- /last item -->
          
          
          </div> <!-- /.carousel-inner -->
          
          <!-- customization -->
          <?php ob_start();
echo $_smarty_tpl->tpl_vars['background']->value;
$_prefixVariable3 = ob_get_clean();
if (($_prefixVariable3)) {?>  
            <input type="hidden" name="background" value="<?php echo $_smarty_tpl->tpl_vars['background_orig']->value;?>
" />
          <?php }?>
          <?php ob_start();
echo $_smarty_tpl->tpl_vars['navbar']->value;
$_prefixVariable4 = ob_get_clean();
if (($_prefixVariable4)) {?>  
            <input type="hidden" name="navbar" value="<?php echo $_smarty_tpl->tpl_vars['navbar']->value;?>
" />
          <?php }?>
          <!-- /customization -->
          
          <!-- utm -->
            <?php $_smarty_tpl->_subTemplateRender("file:page-utm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <!-- /utm -->
          
        </form>
        <?php $_smarty_tpl->_subTemplateRender("file:page-indicators.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:page-arrows.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div> <!-- /#carousel -->  
<?php }
}
