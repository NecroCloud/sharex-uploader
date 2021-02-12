<?php
/* Smarty version 3.1.38, created on 2021-02-09 17:03:27
  from 'C:\Users\Ben\Documents\Projects\sharex-uploader\sharex-uploader\src\templates\error\ipVerify.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6022b24fb93ce1_30945489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e34ecf1d1de26624bbc8844fa21b0801976f78d8' => 
    array (
      0 => 'C:\\Users\\Ben\\Documents\\Projects\\sharex-uploader\\sharex-uploader\\src\\templates\\error\\ipVerify.tpl',
      1 => 1612886572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6022b24fb93ce1_30945489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1549261736022b24fb8e6f0_03370071', 'css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14903361336022b24fb8fb70_77690682', 'js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6280697016022b24fb90946_02259175', 'pageContent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'PAGE.tpl');
}
/* {block 'css'} */
class Block_1549261736022b24fb8e6f0_03370071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_1549261736022b24fb8e6f0_03370071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'css'} */
/* {block 'js'} */
class Block_14903361336022b24fb8fb70_77690682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_14903361336022b24fb8fb70_77690682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'js'} */
/* {block 'pageContent'} */
class Block_6280697016022b24fb90946_02259175 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_6280697016022b24fb90946_02259175',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <main aria-labelledby="pageTitle" class="flex items-center justify-center h-screen bg-gray-200 dark:bg-gray-800 dark:text-light">
        <div class="p-4 space-y-4">
            <div class="flex flex-col items-start space-y-3 sm:flex-row sm:space-y-0 sm:items-center sm:space-x-3 -mt-28">
                <p class="font-semibold text-red-500 text-9xl dark:text-red-600">403</p>
                <div class="space-y-2">
                    <h1 id="pageTitle" class="flex items-center space-x-2">

                        <span class="text-xl font-medium text-gray-600 sm:text-2xl dark:text-gray-200">
                            Oops, you cannot access this page!
                        </span>
                    </h1>

                    <p class="text-base font-normal text-gray-600 dark:text-gray-300">
                        If you are the server administrator please add your IP address
                        <br/>to the allowed ips in the <b>config.php</b>
                    </p>

                    <p class="text-base font-normal text-gray-600 dark:text-gray-300">
                        Current IP: <b><?php echo $_smarty_tpl->tpl_vars['userIP']->value;?>
</b>
                    </p>
                </div>
            </div>
        </div>
    </main>
<?php
}
}
/* {/block 'pageContent'} */
}
