<?php
/* Smarty version 3.1.32, created on 2018-08-24 00:09:08
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/page-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7f4ca473dce7_97663470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59127383f56676bc54159617e79fe7db0d4058d9' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/page-info.tpl',
      1 => 1535195255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page-header.tpl' => 1,
    'file:page-content.tpl' => 1,
    'file:page-footer.tpl' => 1,
  ),
),false)) {
function content_5b7f4ca473dce7_97663470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20180487975b7f4ca4721b20_26294176', 'additionalHead');
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16933176035b7f4ca4726f94_07422555', 'lastHead');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14221946385b7f4ca472f141_74008674', 'body');
?>

   
   
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2361809595b7f4ca4737089_23487968', 'footer');
?>

   <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'additionalHead'} */
class Block_20180487975b7f4ca4721b20_26294176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'additionalHead' => 
  array (
    0 => 'Block_20180487975b7f4ca4721b20_26294176',
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
class Block_16933176035b7f4ca4726f94_07422555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'lastHead' => 
  array (
    0 => 'Block_16933176035b7f4ca4726f94_07422555',
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
class Block_14221946385b7f4ca472f141_74008674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14221946385b7f4ca472f141_74008674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <!-- header -->
    <?php $_smarty_tpl->_subTemplateRender('file:page-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- /header -->
    
    <?php $_smarty_tpl->_subTemplateRender('file:page-content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      
   <?php
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_2361809595b7f4ca4737089_23487968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2361809595b7f4ca4737089_23487968',
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
}
