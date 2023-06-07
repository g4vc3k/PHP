<?php
/* Smarty version 4.3.1, created on 2023-06-07 19:49:18
  from 'C:\xampp\htdocs\php_projekt\PHP\app\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6480c31e419bf2_13493145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ff7e24c11c669cc8325191e48649715aa34e8b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_projekt\\PHP\\app\\views\\index.html',
      1 => 1686158520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.html' => 1,
  ),
),false)) {
function content_6480c31e419bf2_13493145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1794246516480c31e40bc47_49430328', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18151415096480c31e40c425_46653625', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11538129946480c31e40c904_71830230', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'header'} */
class Block_1794246516480c31e40bc47_49430328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1794246516480c31e40bc47_49430328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_18151415096480c31e40c425_46653625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18151415096480c31e40c425_46653625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_11538129946480c31e40c904_71830230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11538129946480c31e40c904_71830230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<header id="header">
				<div class="content">
					<h4>Kalkulator zużycia prądu</h4>
					<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">
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

    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="pure-button pure-button-active">Wyloguj</a>
    
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
chroniona" class="pure-button pure-button-active">Inna strona</a>


<?php $_smarty_tpl->_subTemplateRender('file:messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isWynik()) {?>
                <h3>Wynik:</h3>
                <div>
                    <ol>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getWynik(), 'wyn');
$_smarty_tpl->tpl_vars['wyn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wyn']->value) {
$_smarty_tpl->tpl_vars['wyn']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['wyn']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ol>
                </div>
                <?php }?>

				</div>
				
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
