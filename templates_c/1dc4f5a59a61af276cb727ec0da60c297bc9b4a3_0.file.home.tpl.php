<?php
<<<<<<< HEAD
/* Smarty version 3.1.29, created on 2016-06-08 15:23:08
=======
/* Smarty version 3.1.29, created on 2016-06-09 12:56:03
>>>>>>> fac99621881a25ac8362745b079cee5d62a29781
  from "/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
<<<<<<< HEAD
  'unifunc' => 'content_57581c3c5bdb25_69300060',
=======
  'unifunc' => 'content_57594b434918c0_39161165',
>>>>>>> fac99621881a25ac8362745b079cee5d62a29781
  'file_dependency' => 
  array (
    '1dc4f5a59a61af276cb727ec0da60c297bc9b4a3' => 
    array (
      0 => '/var/www/site_perso/my_phpmyadmin/phpmyadmin/Views/views/templates/home.tpl',
<<<<<<< HEAD
      1 => 1465392187,
=======
      1 => 1465469762,
>>>>>>> fac99621881a25ac8362745b079cee5d62a29781
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_57581c3c5bdb25_69300060 ($_smarty_tpl) {
=======
function content_57594b434918c0_39161165 ($_smarty_tpl) {
>>>>>>> fac99621881a25ac8362745b079cee5d62a29781
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<div class="container interface">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default interfaceColor">
                <div class="panel-body">
                    <div class="page-header">
<<<<<<< HEAD
                        <a href="index.php?action=logout" ><p class="pull-right deconnectButton"><i class="fa fa-times fa-2x" aria-hidden="true">Logout</i></p></a>
=======
                        <a href="index.php?action=logout" class="pull-right deconnectButton"><i class="fa fa-times fa-2x" aria-hidden="true"></i> </a>
>>>>>>> fac99621881a25ac8362745b079cee5d62a29781
                        <a href="index.php"><img class="logoPhpmyadmin" src="Asset/img/logoPhpmyadmin2.png" alt="logoPhpmyadmin"></a>
                    </div>
                    <div class="col-md-3">
                        <div class="jumbotron jumbotronColor">
                            <h3 class="titleJumbotron">Toolbox</h3>
                            <p class="titleJumbotron">
                                <a href="index.php"><i class="fa fa-home fa-lg iconJumbotron" aria-hidden="true"></i></a>
                                <a href="https://docs.phpmyadmin.net/en/latest/"><i class="fa fa-question fa-lg iconJumbotron" aria-hidden="true"></a></i>
                                <a href="http://dev.mysql.com/doc/refman/5.5/en/"><i class="fa fa-book fa-lg iconJumbotron" aria-hidden="true"></a></i>
                                <a href="#" id="page_refresh"><i class="fa fa-repeat fa-lg iconJumbotron" aria-hidden="true"></a></i>
                            </p>
                            <p class="bodyJumbotron">
                                <a class="linkJumbotron" href="index.php?action=addDB"><b>Create new database</b></a><br>
                                <?php
$_from = $_smarty_tpl->tpl_vars['dbnames']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_dbname_0_saved_item = isset($_smarty_tpl->tpl_vars['dbname']) ? $_smarty_tpl->tpl_vars['dbname'] : false;
$_smarty_tpl->tpl_vars['dbname'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['dbname']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dbname']->value) {
$_smarty_tpl->tpl_vars['dbname']->_loop = true;
$__foreach_dbname_0_saved_local_item = $_smarty_tpl->tpl_vars['dbname'];
?>
                                    <a class="linkJumbotron" href="index.php?action=showDB&db=<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
"><b><?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
</b></a><br>
                                <?php
$_smarty_tpl->tpl_vars['dbname'] = $__foreach_dbname_0_saved_local_item;
}
if ($__foreach_dbname_0_saved_item) {
$_smarty_tpl->tpl_vars['dbname'] = $__foreach_dbname_0_saved_item;
}
?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-default informationColor">
                            <div class="panel-body">
                                <div class="col-md-12">
                                <div class="tableView">
                                    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
<<<<<<< HEAD
  0 => 'block_92587314657581c3c5b8dc9_59481228',
=======
  0 => 'block_176315060257594b43488e96_75056929',
>>>>>>> fac99621881a25ac8362745b079cee5d62a29781
  1 => false,
  3 => 0,
  2 => 0,
));
?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
<<<<<<< HEAD
/* {block 'tableBody'}  file:Views/views/templates/home.tpl */
function block_92587314657581c3c5b8dc9_59481228($_smarty_tpl, $_blockParentStack) {
=======
/* {block 'tableBody'}  file:./home.tpl */
function block_176315060257594b43488e96_75056929($_smarty_tpl, $_blockParentStack) {
>>>>>>> fac99621881a25ac8362745b079cee5d62a29781
?>

                                        <h1 class="informationMessage">Welcome <span class="userColor"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</span> !<h1>
                                    <?php
}
/* {/block 'tableBody'} */
}
