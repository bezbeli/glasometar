<?php
/* Smarty version 3.1.32, created on 2018-08-21 05:08:17
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7b9e41882ae3_56628564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ca543110eb2ddbb5dd0db7a44a3a8b5573fb522' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/page.tpl',
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
function content_5b7b9e41882ae3_56628564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17809676375b7b9e4184b535_43976623', 'additionalHead');
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_811263335b7b9e4184e4c7_71202437', 'lastHead');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1930191095b7b9e4185e2b5_56369089', 'body');
?>

   
   
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_565304165b7b9e41879d35_37884503', 'footer');
?>

   
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15624027515b7b9e4187e083_71214736', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'additionalHead'} */
class Block_17809676375b7b9e4184b535_43976623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'additionalHead' => 
  array (
    0 => 'Block_17809676375b7b9e4184b535_43976623',
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
class Block_811263335b7b9e4184e4c7_71202437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'lastHead' => 
  array (
    0 => 'Block_811263335b7b9e4184e4c7_71202437',
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
class Block_1930191095b7b9e4185e2b5_56369089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1930191095b7b9e4185e2b5_56369089',
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
class Block_565304165b7b9e41879d35_37884503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_565304165b7b9e41879d35_37884503',
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
class Block_15624027515b7b9e4187e083_71214736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_15624027515b7b9e4187e083_71214736',
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
