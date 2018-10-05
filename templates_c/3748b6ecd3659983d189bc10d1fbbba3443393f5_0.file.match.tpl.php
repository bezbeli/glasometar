<?php
/* Smarty version 3.1.33, created on 2018-09-26 12:17:06
  from '/home/vagrant/Code/glasometar.ba/templates/2018/match.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab78c28f0d68_31548675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3748b6ecd3659983d189bc10d1fbbba3443393f5' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/match.tpl',
      1 => 1537960308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:match-winners.tpl' => 1,
    'file:match-tabs.tpl' => 1,
    'file:match-sharer.tpl' => 1,
    'file:match-comparison.tpl' => 1,
    'file:match-save.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:match-js.tpl' => 1,
  ),
),false)) {
function content_5bab78c28f0d68_31548675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15430310715bab78c28cec05_59980323', 'lastHead');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7465790885bab78c28d6580_55853247', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16214352045bab78c28e43d6_27104031', 'outsideBody');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8315252355bab78c28e9b88_72643069', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19441676655bab78c28ed606_32932638', 'js');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
/* {block 'lastHead'} */
class Block_15430310715bab78c28cec05_59980323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'lastHead' => 
  array (
    0 => 'Block_15430310715bab78c28cec05_59980323',
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
class Block_7465790885bab78c28d6580_55853247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7465790885bab78c28d6580_55853247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- header -->
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- /header -->

<!-- results -->
<div class="container results px-3">
    <!-- winners -->
    <?php $_smarty_tpl->_subTemplateRender("file:match-winners.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- /winners -->
    <!-- tabs -->
    <?php $_smarty_tpl->_subTemplateRender("file:match-tabs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- /tabs -->
    <!-- sharer -->
    <?php $_smarty_tpl->_subTemplateRender("file:match-sharer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- /sharer -->
</div>
<!-- /results -->
<?php
}
}
/* {/block 'body'} */
/* {block 'outsideBody'} */
class Block_16214352045bab78c28e43d6_27104031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'outsideBody' => 
  array (
    0 => 'Block_16214352045bab78c28e43d6_27104031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- support -->
<?php $_smarty_tpl->_subTemplateRender("file:match-comparison.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:match-save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- /support -->
<?php
}
}
/* {/block 'outsideBody'} */
/* {block 'footer'} */
class Block_8315252355bab78c28e9b88_72643069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8315252355bab78c28e9b88_72643069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Footer -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- /Footer -->
<?php
}
}
/* {/block 'footer'} */
/* {block 'js'} */
class Block_19441676655bab78c28ed606_32932638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_19441676655bab78c28ed606_32932638',
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
