<?php
/* Smarty version 4.3.1, created on 2023-05-14 14:20:12
  from 'C:\xampp\htdocs\php_projekt\PHP\app\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6460d1fc9fe6d8_30539112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79df2368b1340ebc1e829269f5f6511ee4ce0bb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_projekt\\PHP\\app\\index.html',
      1 => 1684066810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6460d1fc9fe6d8_30539112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15297930036460d1fc9f28d1_69177623', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5814519266460d1fc9f30c5_35140561', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9665851406460d1fc9f3541_54116373', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'header'} */
class Block_15297930036460d1fc9f28d1_69177623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_15297930036460d1fc9f28d1_69177623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_5814519266460d1fc9f30c5_35140561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_5814519266460d1fc9f30c5_35140561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_9665851406460d1fc9f3541_54116373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9665851406460d1fc9f3541_54116373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<header id="header">
				<div class="content">
					<h4>Kalkulator zużycia prądu</h4>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
	<label for="id_moc">Pobór mocy w watach: </label>
	<input id="id_moc" type="text" name="moc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->moc;?>
" /><br />
    
	<label for="id_czas">Czas w godzinach: </label>
	<input id="id_czas" type="text" name="czas" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->czas;?>
" /><br />
    
    <label for="id_cena">Cena prądu za 1kWh: </label>
    <input id="id_cena" type="text" name="cena" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cena;?>
" /><br />
    

    <input type="submit" value="Oblicz" />
</form>	

    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
    
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/inna_chroniona.php" class="pure-button pure-button-active">Inna strona</a>


	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h2>Wystąpiły błędy: </h2>
	<div>
	<ol>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

				</div>
				<div class="image phone"><div class="inner"><img src="images/screen.jpg" alt="" /></div></div>
			</header>

			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
