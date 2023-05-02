<?php
/* Smarty version 4.3.1, created on 2023-05-03 00:35:02
  from 'C:\xampp\htdocs\php_projekt\PHP\app\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6451901651d451_48572748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57107405f668956e7d653b6619ec441eae2c5d63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_projekt\\PHP\\app\\index.html',
      1 => 1683066897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6451901651d451_48572748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2974867016451901650f2a2_47668353', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20439582156451901650faf0_36670705', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27118469064519016510080_64886410', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'header'} */
class Block_2974867016451901650f2a2_47668353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2974867016451901650f2a2_47668353',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_20439582156451901650faf0_36670705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20439582156451901650faf0_36670705',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_27118469064519016510080_64886410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_27118469064519016510080_64886410',
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

		<!-- One -->
			<section id="one" class="wrapper style2 special">
				<header class="major">
					<h2>Sed ipsum magna lorem tempus amet<br />
					vehicula et gravida elementum</h2>
				</header>
				<ul class="icons major">
					<li><span class="icon solid fa-camera-retro"><span class="label">Shoot</span></span></li>
					<li><span class="icon solid fa-sync"><span class="label">Process</span></span></li>
					<li><span class="icon solid fa-cloud"><span class="label">Upload</span></span></li>
				</ul>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper">
				<div class="inner alt">
					<section class="spotlight">
						<div class="image"><img src="images/pic01.jpg" alt="" /></div>
						<div class="content">
							<h3>Magna sed ultrices</h3>
							<p>Morbi mattis ornare ornare. Duis quam turpis, gravida at leo elementum elit fusce accumsan dui libero, quis vehicula lectus ultricies eu. In convallis amet leo non sapien iaculis efficitur consequat lorem ipsum.</p>
						</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic02.jpg" alt="" /></div>
						<div class="content">
							<h3>Ultrices nullam aliquam</h3>
							<p>Morbi mattis ornare ornare. Duis quam turpis, gravida at leo elementum elit fusce accumsan dui libero, quis vehicula lectus ultricies eu. In convallis amet leo non sapien iaculis efficitur consequat lorem ipsum.</p>
						</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/pic03.jpg" alt="" /></div>
						<div class="content">
							<h3>Aliquam sed magna</h3>
							<p>Morbi mattis ornare ornare. Duis quam turpis, gravida at leo elementum elit fusce accumsan dui libero, quis vehicula lectus ultricies eu. In convallis amet leo non sapien iaculis efficitur consequat lorem ipsum.</p>
						</div>
					</section>
					<section class="special">
						<ul class="icons labeled">
							<li><span class="icon solid fa-camera-retro"><span class="label">Ipsum lorem accumsan</span></span></li>
							<li><span class="icon solid fa-sync"><span class="label">Sed vehicula elementum</span></span></li>
							<li><span class="icon solid fa-cloud"><span class="label">Elit fusce consequat</span></span></li>
							<li><span class="icon solid fa-code"><span class="label">Lorem nullam tempus</span></span></li>
							<li><span class="icon solid fa-desktop"><span class="label">Adipiscing amet sapien</span></span></li>
						</ul>
					</section>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2 special">
				<header class="major">
					<h2>Magna leo sapien gravida</h2>
					<p>Gravida at leo elementum elit fusce accumsan dui libero, quis vehicula<br />
					lectus ultricies eu. In convallis amet leo sapien iaculis efficitur.</p>
				</header>
				<ul class="actions special">
					<li><a href="#" class="button primary icon solid fa-download">Download</a></li>
					<li><a href="#" class="button">Learn More</a></li>
				</ul>
			</section>

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
