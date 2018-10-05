<?php
/* Smarty version 3.1.33, created on 2018-09-26 12:16:13
  from '/home/vagrant/Code/glasometar.ba/templates/2018/page-last.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab788d2edba7_61336931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99675f3acf28d660f1c0a16e9f0d6e39bd4b36fc' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/templates/2018/page-last.tpl',
      1 => 1537960308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bab788d2edba7_61336931 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="item" id="item-last">
    <div class="px-5">
        <h2><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_questions'];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_legend'];?>
</p>

        <div data-toggle="buttons">
            <ul class="list-group weightsel">
                <?php $_smarty_tpl->_assignInScope('i', 0);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
?>
                <li id="weightsel-row-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" class="list-group-item">
                    <label class="btn btn-sm weightsel-button" for="c-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="important-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
">
                        <input type="checkbox" name="c-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="c-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" /> <?php echo $_smarty_tpl->tpl_vars['question']->value->name;?>

                    </label>
                </li>
                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
        <!-- /buttons -->
        <div class="row">
            <div class="col">
                <button class="btn btn-light btn-lg btn-block" type="submit" id="submit-top"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_skip'];?>

                <i class="fa fa-arrow-right"></i>
                </button>
            </div>
            <div class="col">
                <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit-bottom"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_results'];?>

                <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<?php }
}
