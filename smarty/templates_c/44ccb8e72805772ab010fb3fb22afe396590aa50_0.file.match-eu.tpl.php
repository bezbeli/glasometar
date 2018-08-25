<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:14:27
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-eu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb7342afc2_94066946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44ccb8e72805772ab010fb3fb22afe396590aa50' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/match-eu.tpl',
      1 => 1400423216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7eeb7342afc2_94066946 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tab-pane fade" id="euro">
  <div class="well text-center">
    <p><?php echo $_smarty_tpl->tpl_vars['text']->value['comparison_eu_explained'];?>
</p>
    <a href="<?php echo $_smarty_tpl->tpl_vars['eu_link']->value;?>
" id="eu-map">
      <img src="http://europa.stemwijzer.nl/main/gfx/votemap.png" title="VoteMatch.eu" alt="VoteMatch.eu" />
    </a>
    <br/>
    <a href="<?php echo $_smarty_tpl->tpl_vars['eu_link']->value;?>
" class="btn btn-default btn-lg active" role="button" target="_blank" id="eu-link"><?php echo $_smarty_tpl->tpl_vars['text']->value['comparison_parties_eu'];?>
</a>
  </div>
</div>
<?php }
}
