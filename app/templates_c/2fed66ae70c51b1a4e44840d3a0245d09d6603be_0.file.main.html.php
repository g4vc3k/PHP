<?php
/* Smarty version 4.3.1, created on 2023-05-03 00:03:31
  from 'C:\xampp\htdocs\php_projekt\PHP\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645188b300a9a2_96920273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fed66ae70c51b1a4e44840d3a0245d09d6603be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_projekt\\PHP\\templates\\main.html',
      1 => 1683064988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645188b300a9a2_96920273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Fractal by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

	
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_385632314645188b30061f6_78197469', 'header');
?>

<nav id="nav">
    <div class="splash-container">
        <div class="splash">
            <h3 class="splash-head"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h3>
            <p class="splash-subhead"></p>
        </div>
    </div>
</nav>
        <div>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2000532167645188b3009f13_84141930', 'content');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_584716936645188b300a561_85793235', 'footer');
?>

	
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				</ul>
				<p class="copyright">&copy; Wykonał: Gracjan Knopik. Credits: <a href="http://html5up.net">HTML5 UP</a></p>
			</footer>
        </div>
	
        </body>
</html><?php }
/* {block 'header'} */
class Block_385632314645188b30061f6_78197469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_385632314645188b30061f6_78197469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_2000532167645188b3009f13_84141930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2000532167645188b3009f13_84141930',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_584716936645188b300a561_85793235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_584716936645188b300a561_85793235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
