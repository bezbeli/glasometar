<?php
/* Smarty version 3.1.33, created on 2018-09-30 03:10:27
  from '/home/vagrant/Code/glasometar.ba/templates/2018/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb03ea3341d65_80183697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23d6cbf934cd2b34d28537dd6a9f867c6eaa6779' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/header.tpl',
      1 => 1538640766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb03ea3341d65_80183697 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark bg-dark d-flex">
    <a class="navbar-brand" href="/" id="header-home"><img src="/2018/images/glasometar_logo.svg" alt="<?php echo $_smarty_tpl->tpl_vars['text']->value['calc'];?>
" /></a>

    <div class="ml-auto d-flex">
        <?php if (isset($_smarty_tpl->tpl_vars['show_download_link']->value)) {?>
        <div class="download"><a class="nav-link" href="#" data-toggle="modal" data-target="#modal-save-results" id="header-save"><i class="fa fa-download"></i> <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['text']->value['match_save'];?>
</span></a></div>
        <?php }?>
        <div><a class="nav-link" href="/info" id="header-info"><i class="fa fa-info-circle"></i> <span class="d-none d-md-inline"><?php echo $_smarty_tpl->tpl_vars['text']->value['info'];?>
</a></div>
    </div>
</nav>
<div class="progress mb-3">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<?php }
}
