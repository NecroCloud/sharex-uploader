<?php
/* Smarty version 3.1.38, created on 2021-02-09 17:38:01
  from 'C:\Users\Ben\Documents\Projects\sharex-uploader\sharex-uploader\src\templates\encryptor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6022ba697961b8_19440067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c88d1c35c5c6804a6f117be18de3b38e64384041' => 
    array (
      0 => 'C:\\Users\\Ben\\Documents\\Projects\\sharex-uploader\\sharex-uploader\\src\\templates\\encryptor.tpl',
      1 => 1612888679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6022ba697961b8_19440067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1055631956022ba6978e047_64386803', 'css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_291980216022ba6978ec17_41758774', 'js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15153553446022ba6978f796_94052308', 'pageContent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'PAGE.tpl');
}
/* {block 'css'} */
class Block_1055631956022ba6978e047_64386803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_1055631956022ba6978e047_64386803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'css'} */
/* {block 'js'} */
class Block_291980216022ba6978ec17_41758774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_291980216022ba6978ec17_41758774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        function count(area){
            let proceed = area.value.length;

            let check1 = document.getElementById('check1')
            let check2 = document.getElementById('check2')
            let check3 = document.getElementById('check3')
            let check4 = document.getElementById('check4')
            let check5 = document.getElementById('check5')

            if (area.value.length < 1){
                check1.classList.remove('bg-green-700')
                check2.classList.remove('bg-green-700')
                check3.classList.remove('bg-green-700')
                check4.classList.remove('bg-green-700')
                check5.classList.remove('bg-green-700')
            }

            if (area.value.length > 15){
                check5.classList.add('bg-green-500')
            }
            else if (area.value.length > 10){
                check4.classList.add('bg-green-500')
                check5.classList.remove('bg-green-500')
            }
            else if (area.value.length > 8){
                check3.classList.add('bg-green-500')
                check4.classList.remove('bg-green-500')
                check5.classList.remove('bg-green-500')
            }
            else if (area.value.length > 5){
                check2.classList.add('bg-green-500')
                check3.classList.remove('bg-green-500')
                check4.classList.remove('bg-green-500')
                check5.classList.remove('bg-green-500')
            }
            else if (area.value.length > 1){
                check1.classList.add('bg-green-500')
                check2.classList.remove('bg-green-500')
                check3.classList.remove('bg-green-500')
                check4.classList.remove('bg-green-500')
                check5.classList.remove('bg-green-500')
            }

            return proceed;
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'js'} */
/* {block 'pageContent'} */
class Block_15153553446022ba6978f796_94052308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_15153553446022ba6978f796_94052308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="min-w-screen min-h-screen flex items-center justify-center px-5 py-5">
        <div class="w-full mx-auto rounded-lg bg-white dark:bg-gray-700 shadow p-5 text-gray-800" style="max-width: 500px">
            <div class="flex items-center space-x-5">
                <div class="h-14 w-14 bg-blue-400 rounded-full flex flex-shrink-0 justify-center items-center text-blue-200 text-2xl font-mono dark:bg-gray-500 dark:text-gray-200">
                    <?php echo substr($_smarty_tpl->tpl_vars['config']->value->read('siteName'),0,1);?>

                </div>
                <div class="block pl-2 font-semibold text-xl self-start text-gray-700 dark:text-gray-300">
                    <h2 class="leading-relaxed"><?php echo $_smarty_tpl->tpl_vars['config']->value->read('siteName');?>
</h2>
                    <p class="text-sm text-gray-500 font-normal leading-relaxed dark:text-gray-200">
                        Please copy the encrypted string and insert it into the <b>config.php</b>
                    </p>
                </div>
            </div>

            <div class="relative mb-2 mt-5">
                <label class="block text-xs font-semibold text-gray-500 mb-2">ENTER YOUR PASSWORD</label>
                <input onKeyPress='return count(this);' id="password" class="w-full pl-3 pr-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full border-gray-300 rounded-md focus:outline-none text-gray-600 dark:bg-gray-500 dark:border-gray-600 dark:focus:border-gray-600 dark:focus:shadow-xl dark:text-white" placeholder="Password" >
                <button class="block w-7 h-7 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-indigo-500 transition-colors"><i class="mdi" ></i></button>
            </div>
            <div class="flex -mx-1">
                <div class="w-1/5 px-1">
                    <div id="check1" class="h-2 rounded-xl transition-colors bg-gray-200"></div>
                </div>
                <div class="w-1/5 px-1">
                    <div id="check2" class="h-2 rounded-xl transition-colors bg-gray-200"></div>
                </div>
                <div class="w-1/5 px-1">
                    <div id="check3" class="h-2 rounded-xl transition-colors bg-gray-200"></div>
                </div>
                <div class="w-1/5 px-1">
                    <div id="check4" class="h-2 rounded-xl transition-colors bg-gray-200"></div>
                </div>
                <div class="w-1/5 px-1">
                    <div id="check5" class="h-2 rounded-xl transition-colors bg-gray-200"></div>
                </div>
            </div>
            <br/>
            <div class="mb-2">
                <label class="block text-xs font-semibold text-gray-500 mb-2">OR LET US GENERATE ONE FOR YOU</label>
                <input class="w-full px-3 py-2 mb-1 border focus:ring-gray-500 focus:border-gray-900 w-full border-gray-300 rounded-md focus:outline-none text-gray-600 dark:bg-gray-500 dark:border-gray-600 dark:focus:border-gray-600 dark:focus:shadow-xl dark:text-white" placeholder="Length" type="number" min="1" max="30" step="1"/>
                <input class="w-full" type="range"min="1" max="30" step="1">
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'pageContent'} */
}
