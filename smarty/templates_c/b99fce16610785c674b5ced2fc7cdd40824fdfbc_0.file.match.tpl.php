<?php
/* Smarty version 3.1.32, created on 2018-08-24 00:21:14
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7f4f7a9e93c0_87876559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b99fce16610785c674b5ced2fc7cdd40824fdfbc' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match.tpl',
      1 => 1535195779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:match-header.tpl' => 1,
    'file:match-winners.tpl' => 1,
    'file:match-sharer.tpl' => 1,
    'file:match-fb.tpl' => 2,
    'file:match-tabs.tpl' => 1,
    'file:match-comparison.tpl' => 1,
    'file:match-save.tpl' => 1,
    'file:page-footer.tpl' => 1,
    'file:match-js.tpl' => 1,
  ),
),false)) {
function content_5b7f4f7a9e93c0_87876559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3196186365b7f4f7a9b53b3_09600361', 'additionalHead');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21467632065b7f4f7a9b7e17_45603036', 'lastHead');
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_569578075b7f4f7a9bef00_88093864', 'body');
?>
 
    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13860747955b7f4f7a9d78e6_77399778', 'outsideBody');
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2866703535b7f4f7a9dd0b1_12013184', 'footer');
?>

   
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10631372025b7f4f7a9e28b1_65519353', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'additionalHead'} */
class Block_3196186365b7f4f7a9b53b3_09600361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'additionalHead' => 
  array (
    0 => 'Block_3196186365b7f4f7a9b53b3_09600361',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <link href="../../css/stylish-portfolio.min.css" rel="stylesheet">
      <link href="../../css/style.css" rel="stylesheet">
    <?php
}
}
/* {/block 'additionalHead'} */
/* {block 'lastHead'} */
class Block_21467632065b7f4f7a9b7e17_45603036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'lastHead' => 
  array (
    0 => 'Block_21467632065b7f4f7a9b7e17_45603036',
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
class Block_569578075b7f4f7a9bef00_88093864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_569578075b7f4f7a9bef00_88093864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- header -->
      <?php $_smarty_tpl->_subTemplateRender("file:match-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <!-- /header -->
      
      <!-- results -->
      <div class="container results">
        <!-- winners -->
          <?php $_smarty_tpl->_subTemplateRender("file:match-winners.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!-- /winners -->
        <!-- sharer -->
          <?php $_smarty_tpl->_subTemplateRender("file:match-sharer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!-- /sharer -->
        <!-- fb -->
          <?php $_smarty_tpl->_assignInScope('fb_pos', "top");?>
          <?php $_smarty_tpl->_subTemplateRender("file:match-fb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!-- /fb -->
        <!-- tabs -->
          <?php $_smarty_tpl->_subTemplateRender("file:match-tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!-- /tabs -->
          <?php $_smarty_tpl->_assignInScope('fb_pos', "bottom");?>
          <?php $_smarty_tpl->_subTemplateRender("file:match-fb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
          

      </div>
      <!-- /results -->
      
    <?php
}
}
/* {/block 'body'} */
/* {block 'outsideBody'} */
class Block_13860747955b7f4f7a9d78e6_77399778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'outsideBody' => 
  array (
    0 => 'Block_13860747955b7f4f7a9d78e6_77399778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- support -->
      <?php $_smarty_tpl->_subTemplateRender("file:match-comparison.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:match-save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- /support -->
    <?php
}
}
/* {/block 'outsideBody'} */
/* {block 'footer'} */
class Block_2866703535b7f4f7a9dd0b1_12013184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2866703535b7f4f7a9dd0b1_12013184',
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
class Block_10631372025b7f4f7a9e28b1_65519353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_10631372025b7f4f7a9e28b1_65519353',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <!-- js -->
     <?php $_smarty_tpl->_subTemplateRender("file:match-js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <!-- /js -->
   <?php
}
}
/* {/block 'js'} */
}
