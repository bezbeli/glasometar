<?php
/* Smarty version 3.1.32, created on 2018-08-23 17:13:35
  from '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/page-last.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7eeb3fb0b3d5_65406308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8849112d1772ddebedb5602c096db4c0fd4e4b2' => 
    array (
      0 => '/home/vagrant/Code/glasometar.ba/smarty/templates/eu2018/page-last.tpl',
      1 => 1408105500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7eeb3fb0b3d5_65406308 (Smarty_Internal_Template $_smarty_tpl) {
?>            <div class="item" id="item-last">  
              <div class="container">
                <div class="carousel-caption center-block">
                  <h2><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_questions'];?>
</h2>
                  <p><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_legend'];?>
</p>
                  
                  <p>
                    <button class="btn btn-default btn-lg wide-button" type="submit" id="submit-top"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_skip'];?>
 <i class="fa fa-arrow-right"></i></button>
                  </p>
                  
                  <div data-toggle="buttons">
                    <table class="table">
                      <tbody>
                      <?php $_smarty_tpl->_assignInScope('i', 0);?>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
?>
                        <tr id="weightsel-row-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
">
                          <td class="weightsel-td">
                            <label class="weightsel-button btn btn-lg" for="c-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="important-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
">
                              <input type="checkbox" name="c-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
" id="c-<?php echo $_smarty_tpl->tpl_vars['question']->value->id;?>
"/> <?php echo $_smarty_tpl->tpl_vars['question']->value->name;?>

                            </label>
                          </td>
                        </tr>
                      <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>    
                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                      </tbody>
                    </table>
                  </div> <!-- /buttons -->
                  
                  <p>
                    <button class="btn btn-default btn-lg wide-button" type="submit" id="submit-bottom"><?php echo $_smarty_tpl->tpl_vars['text']->value['page_important_results'];?>
 <i class="fa fa-arrow-right"></i></button>
                  </p>

                </div>
              </div>
            </div>
<?php }
}
