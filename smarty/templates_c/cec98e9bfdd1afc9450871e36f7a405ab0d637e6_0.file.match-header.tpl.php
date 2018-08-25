<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:14:27
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb731f7d20_12978880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cec98e9bfdd1afc9450871e36f7a405ab0d637e6' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-header.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7eeb731f7d20_12978880 (Smarty_Internal_Template $_smarty_tpl) {
?><nav id="navbar" class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/" id="header-home"><i class="fa fa-home"></i><span class="hidden-xs"> <?php echo $_smarty_tpl->tpl_vars['text']->value['calc'];?>
</span></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text"><a href="#" data-toggle="modal" data-target="#modal-save-results" id="header-save"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['text']->value['match_save'];?>
</a></p>
      <p class="navbar-text navbar-right"><a href="/info" id="header-info"><i class="fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['text']->value['info'];?>
</a></p>
    </div>
  </div>
</nav>
<?php }
}
