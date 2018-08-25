<?php
/* Smarty version 3.1.32, created on 2018-08-23 22:38:55
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7f377fa74084_25991362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c36952a66d0064d7f7872ef600ac12208e1f1b3' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/page.tpl',
      1 => 1535189842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page-header.tpl' => 1,
    'file:page-carousel.tpl' => 1,
    'file:page-footer.tpl' => 1,
    'file:page-js.tpl' => 1,
  ),
),false)) {
function content_5b7f377fa74084_25991362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10974731335b7f377fa502f9_47368357', 'additionalHead');
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4519104545b7f377fa54664_92063473', 'lastHead');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2669057125b7f377fa5c838_02800044', 'body');
?>

   
   
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10047973705b7f377fa69df9_12958178', 'footer');
?>

   
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20200490265b7f377fa6fa16_38873644', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'additionalHead'} */
class Block_10974731335b7f377fa502f9_47368357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'additionalHead' => 
  array (
    0 => 'Block_10974731335b7f377fa502f9_47368357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <link href="../css/stylish-portfolio.min.css" rel="stylesheet">
      <link href="../css/carousel.min.css" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">
    <?php
}
}
/* {/block 'additionalHead'} */
/* {block 'lastHead'} */
class Block_4519104545b7f377fa54664_92063473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'lastHead' => 
  array (
    0 => 'Block_4519104545b7f377fa54664_92063473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <title><?php echo $_smarty_tpl->tpl_vars['text']->value['title'];?>
</title>
    <?php
}
}
/* {/block 'lastHead'} */
/* {block 'body'} */
class Block_2669057125b7f377fa5c838_02800044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2669057125b7f377fa5c838_02800044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- header -->
      <?php $_smarty_tpl->_subTemplateRender("file:page-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <!-- /header -->
      
      <!-- carousel -->
      <?php $_smarty_tpl->_subTemplateRender("file:page-carousel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <!-- /carousel -->
   <?php
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_10047973705b7f377fa69df9_12958178 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10047973705b7f377fa69df9_12958178',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <!-- Footer -->
     <?php $_smarty_tpl->_subTemplateRender("file:page-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <!-- /Footer -->
   <?php
}
}
/* {/block 'footer'} */
/* {block 'js'} */
class Block_20200490265b7f377fa6fa16_38873644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_20200490265b7f377fa6fa16_38873644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php echo '<script'; ?>
>
       var user = $.parseJSON('<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
');
     <?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="../js/page.js"><?php echo '</script'; ?>
>
     <!-- js -->
     <?php $_smarty_tpl->_subTemplateRender("file:page-js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <!-- /js -->
   <?php
}
}
/* {/block 'js'} */
}
