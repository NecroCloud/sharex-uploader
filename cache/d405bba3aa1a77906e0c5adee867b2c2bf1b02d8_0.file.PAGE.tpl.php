<?php
/* Smarty version 3.1.38, created on 2021-02-09 17:03:36
  from 'C:\Users\Ben\Documents\Projects\sharex-uploader\sharex-uploader\src\templates\PAGE.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6022b258e837e9_81653034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd405bba3aa1a77906e0c5adee867b2c2bf1b02d8' => 
    array (
      0 => 'C:\\Users\\Ben\\Documents\\Projects\\sharex-uploader\\sharex-uploader\\src\\templates\\PAGE.tpl',
      1 => 1612886615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6022b258e837e9_81653034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
         <?php echo $_smarty_tpl->tpl_vars['config']->value->read('siteName');?>
 &bull; Files
    </title>
    <link rel="stylesheet" href="/src/assets/css/style.css">

    <!-- Page Style-->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13803857786022b258e81ff3_87948389', 'css');
?>

</head>
<body class="bg-gray-200 dark:bg-gray-800">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3062541256022b258e82963_46126113', 'pageContent');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15437482506022b258e83157_01660372', 'js');
?>

</body>
</html><?php }
/* {block 'css'} */
class Block_13803857786022b258e81ff3_87948389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_13803857786022b258e81ff3_87948389',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'css'} */
/* {block 'pageContent'} */
class Block_3062541256022b258e82963_46126113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_3062541256022b258e82963_46126113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'pageContent'} */
/* {block 'js'} */
class Block_15437482506022b258e83157_01660372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_15437482506022b258e83157_01660372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
