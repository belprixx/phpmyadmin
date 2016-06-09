<?php
/* Smarty version 3.1.29, created on 2016-06-09 19:38:34
  from "/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5759a99acc6e36_99613000',
  'file_dependency' => 
  array (
    'd4ef5b8459706ef752e8b9e716a2e89ed3814e2c' => 
    array (
      0 => '/Applications/MAMP/htdocs/TWEB-phpmyadmin/phpmyadmin/Views/views/templates/home.tpl',
      1 => 1465483739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5759a99acc6e36_99613000 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!-- Home Page -->

<!-- Entire interface -->

<div class="container interface">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default interfaceColor">
                <div class="panel-body">
                    <div class="page-header">
                        <a href="index.php?action=logout" class="pull-right deconnectButton"><i class="fa fa-times fa-2x" aria-hidden="true"></i> </a>
                        <a href="index.php"><img class="logoPhpmyadmin" src="Asset/img/logoPhpmyadmin2.png" alt="logoPhpmyadmin"></a>
                    </div>

                    <!-- Jumbotron - Left sidebar -->

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

                                <!-- Display the databases name -->

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

                    <!-- Panel - Right section -->

                    <div class="col-md-9">
                        <div class="panel panel-default informationColor">
                            <div class="panel-body">
                                <div class="col-md-12">
                                <div class="tableView">

                                    <!-- Display the user name -->

                                    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "tableBody", array (
  0 => 'block_2862277345759a99acc3887_29183406',
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
/* {block 'tableBody'}  file:./home.tpl */
function block_2862277345759a99acc3887_29183406($_smarty_tpl, $_blockParentStack) {
?>

                                        <h1 class="informationMessage">Welcome <span class="userColor"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</span> !<h1>
                                    <?php
}
/* {/block 'tableBody'} */
}
