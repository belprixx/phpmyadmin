<?php
/* Smarty version 3.1.29, created on 2016-06-06 10:51:40
  from "/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5755399cab1c99_79754013',
  'file_dependency' => 
  array (
    '6383407c2dcf7b67db11e28177b033aec59e750c' => 
    array (
      0 => '/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/add.tpl',
      1 => 1465203098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./home.tpl' => 1,
  ),
),false)) {
function content_5755399cab1c99_79754013 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
  0 => 'block_7553226885755399caaf216_27937245',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'tableBody'}  file:Views/views/templates/add.tpl */
function block_7553226885755399caaf216_27937245($_smarty_tpl, $_blockParentStack) {
?>

    <form action="index.php?action=checkAddDB" method="post">
        <div class="col-md-12">
            <label for="newDB">Nouvelle Base de donnée :</label>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="newDB" class="form-control" placeholder="Donnez-lui un nom">
            </div>
        </div>
        <div class="col-md-6">
            <button type="submit" class="btn btnConfirm">Valider</button>
        </div>
    </form>
<?php
}
/* {/block 'tableBody'} */
}
