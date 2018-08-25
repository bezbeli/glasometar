<?php
/* Smarty version 3.1.32, created on 2018-08-23 23:47:09
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/page-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7f477d311033_57427305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7c1a79f92058a9616ee843d2c6c9ff3102fc709' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/page-footer.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7f477d311033_57427305 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div data-role="footer" data-theme="<?php if (isset($_smarty_tpl->tpl_vars['partner']->value)) {
echo $_smarty_tpl->tpl_vars['partner']->value['swatch_bar'];
} else { ?>f<?php }?>">  
	  <div class="footerContainer"> 
		<div class="right computer">
			<a href="http://kohovolit.eu">
				<img src="../image/kohovolit-logo-dark-small.png" title="KohoVolit.eu" alt="KohoVolit.eu"/>
			</a>
		  <?php if (isset($_smarty_tpl->tpl_vars['partner']->value) && ($_smarty_tpl->tpl_vars['partner']->value['name'] != 'default')) {?><img src="/image/<?php echo $_smarty_tpl->tpl_vars['partner']->value['name'];?>
.png"><?php }?>
		  </div>
		 </div>
	  </div>
	</div>
<?php }
}
