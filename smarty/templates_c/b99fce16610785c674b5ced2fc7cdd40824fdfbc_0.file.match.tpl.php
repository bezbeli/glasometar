<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:14:27
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb731d0918_32585667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b99fce16610785c674b5ced2fc7cdd40824fdfbc' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match.tpl',
      1 => 1409655279,
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
    'file:match-footer.tpl' => 1,
    'file:match-js.tpl' => 1,
  ),
),false)) {
function content_5b7eeb731d0918_32585667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3571290655b7eeb7319e775_87929432', 'additionalHead');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20619069095b7eeb731a11a3_04524706', 'lastHead');
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_998650445b7eeb731a8ce4_67186928', 'body');
?>
 
    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8956651235b7eeb731c46f2_99133959', 'outsideBody');
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2187777695b7eeb731c9e21_50845936', 'footer');
?>

   
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10670489835b7eeb731cd7e4_39334224', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'additionalHead'} */
class Block_3571290655b7eeb7319e775_87929432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'additionalHead' => 
  array (
    0 => 'Block_3571290655b7eeb7319e775_87929432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <link href="../../css/stylish-portfolio.min.css" rel="stylesheet">
      <link href="../../css/vaa2014.css" rel="stylesheet">
    <?php
}
}
/* {/block 'additionalHead'} */
/* {block 'lastHead'} */
class Block_20619069095b7eeb731a11a3_04524706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'lastHead' => 
  array (
    0 => 'Block_20619069095b7eeb731a11a3_04524706',
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
class Block_998650445b7eeb731a8ce4_67186928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_998650445b7eeb731a8ce4_67186928',
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
class Block_8956651235b7eeb731c46f2_99133959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'outsideBody' => 
  array (
    0 => 'Block_8956651235b7eeb731c46f2_99133959',
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
class Block_2187777695b7eeb731c9e21_50845936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2187777695b7eeb731c9e21_50845936',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <!-- Footer -->
     <?php $_smarty_tpl->_subTemplateRender("file:match-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <!-- /Footer -->
   <?php
}
}
/* {/block 'footer'} */
/* {block 'js'} */
class Block_10670489835b7eeb731cd7e4_39334224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_10670489835b7eeb731cd7e4_39334224',
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
