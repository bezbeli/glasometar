<?php
/* Smarty version 3.1.33, created on 2018-09-30 10:56:32
  from '/home/vagrant/Code/glasometar.ba/templates/2018/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb0abe0034372_70984914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62498f2d822ab09f024759def82d19752e0dff46' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/page.tpl',
      1 => 1538702009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:page-carousel.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bb0abe0034372_70984914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_906270755bb0abdfe33a70_58748502', 'additionalHead');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5558964295bb0abdfe37044_33039127', 'lastHead');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2181668475bb0abdfeb2933_30785452', 'body');
?>


   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21268975125bb0abe0029750_44923914', 'footer');
?>


   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21240396685bb0abe002fc07_21711577', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'additionalHead'} */
class Block_906270755bb0abdfe33a70_58748502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'additionalHead' => 
  array (
    0 => 'Block_906270755bb0abdfe33a70_58748502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'additionalHead'} */
/* {block 'lastHead'} */
class Block_5558964295bb0abdfe37044_33039127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'lastHead' => 
  array (
    0 => 'Block_5558964295bb0abdfe37044_33039127',
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
class Block_2181668475bb0abdfeb2933_30785452 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2181668475bb0abdfeb2933_30785452',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:page-carousel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <?php
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_21268975125bb0abe0029750_44923914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_21268975125bb0abe0029750_44923914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <?php
}
}
/* {/block 'footer'} */
/* {block 'js'} */
class Block_21240396685bb0abe002fc07_21711577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_21240396685bb0abe002fc07_21711577',
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
>
        $(".slider").slick({
            dots: false,
            speed: 200,
            infinite: false,
            adaptiveHeight: true,
            arrows: false
        });
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="/js/carousel.js"><?php echo '</script'; ?>
>

   <?php
}
}
/* {/block 'js'} */
}
