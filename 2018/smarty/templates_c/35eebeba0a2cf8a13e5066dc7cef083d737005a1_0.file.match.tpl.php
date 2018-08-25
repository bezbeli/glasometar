<?php
/* Smarty version 3.1.32, created on 2018-08-21 05:09:48
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/match.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7b9e9c3b5c77_31427772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35eebeba0a2cf8a13e5066dc7cef083d737005a1' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2014/match.tpl',
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
function content_5b7b9e9c3b5c77_31427772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6020488635b7b9e9c3786a7_93860670', 'additionalHead');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8178577165b7b9e9c37ca25_27897312', 'lastHead');
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19916052635b7b9e9c388a24_34499090', 'body');
?>
 
    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18513256805b7b9e9c3a78c4_91780030', 'outsideBody');
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1339580345b7b9e9c3ad3a3_49511438', 'footer');
?>

   
   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15334684815b7b9e9c3b0cd0_46505751', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'additionalHead'} */
class Block_6020488635b7b9e9c3786a7_93860670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'additionalHead' => 
  array (
    0 => 'Block_6020488635b7b9e9c3786a7_93860670',
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
class Block_8178577165b7b9e9c37ca25_27897312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'lastHead' => 
  array (
    0 => 'Block_8178577165b7b9e9c37ca25_27897312',
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
class Block_19916052635b7b9e9c388a24_34499090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19916052635b7b9e9c388a24_34499090',
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
class Block_18513256805b7b9e9c3a78c4_91780030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'outsideBody' => 
  array (
    0 => 'Block_18513256805b7b9e9c3a78c4_91780030',
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
class Block_1339580345b7b9e9c3ad3a3_49511438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1339580345b7b9e9c3ad3a3_49511438',
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
class Block_15334684815b7b9e9c3b0cd0_46505751 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_15334684815b7b9e9c3b0cd0_46505751',
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
