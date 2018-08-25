<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:13:35
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb3f8cc867_18924945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c36952a66d0064d7f7872ef600ac12208e1f1b3' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/page.tpl',
      1 => 1400423216,
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
function content_5b7eeb3f8cc867_18924945 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12277493235b7eeb3f86bed4_94771838', 'additionalHead');
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19613641525b7eeb3f871716_07021963', 'lastHead');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21139169075b7eeb3f88f729_61754879', 'body');
?>

   
   
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16713272515b7eeb3f8bc9e5_89943946', 'footer');
?>

   
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1434592745b7eeb3f8c3ca8_53023577', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'additionalHead'} */
class Block_12277493235b7eeb3f86bed4_94771838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'additionalHead' => 
  array (
    0 => 'Block_12277493235b7eeb3f86bed4_94771838',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <link href="../css/stylish-portfolio.min.css" rel="stylesheet">
      <link href="../css/carousel.min.css" rel="stylesheet">
      <link href="../css/vaa2014.css" rel="stylesheet">
    <?php
}
}
/* {/block 'additionalHead'} */
/* {block 'lastHead'} */
class Block_19613641525b7eeb3f871716_07021963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'lastHead' => 
  array (
    0 => 'Block_19613641525b7eeb3f871716_07021963',
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
class Block_21139169075b7eeb3f88f729_61754879 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_21139169075b7eeb3f88f729_61754879',
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
class Block_16713272515b7eeb3f8bc9e5_89943946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16713272515b7eeb3f8bc9e5_89943946',
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
class Block_1434592745b7eeb3f8c3ca8_53023577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_1434592745b7eeb3f8c3ca8_53023577',
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
