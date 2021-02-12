<?php
/* Smarty version 3.1.38, created on 2021-02-10 15:16:11
  from 'C:\Users\Ben\Documents\Projects\sharex-uploader\sharex-uploader\src\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6023eaab29de41_00770447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f475c54f60c5bffcca45e153d9291766f86c1c8c' => 
    array (
      0 => 'C:\\Users\\Ben\\Documents\\Projects\\sharex-uploader\\sharex-uploader\\src\\templates\\login.tpl',
      1 => 1612966565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6023eaab29de41_00770447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5323578886023eaab294090_85517236', 'css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18719755696023eaab294a18_01670449', 'js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4068573856023eaab2953d2_53740316', 'pageContent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'PAGE.tpl');
}
/* {block 'css'} */
class Block_5323578886023eaab294090_85517236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_5323578886023eaab294090_85517236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'css'} */
/* {block 'js'} */
class Block_18719755696023eaab294a18_01670449 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_18719755696023eaab294a18_01670449',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        function SubmitFormData() {
            let name = $("#name").val();
            let password = $("#password").val();

            $.post("/src/requests/login.php", { name: name, password: password },
                function(data) {
                    let element;
                    if (data === "1"){
                        location.reload();
                    }
                    else {
                        console.log(data);
                        document.getElementById('errorText').innerText = "Your username or password are incorrect!"
                    }
                });
        }

    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'js'} */
/* {block 'pageContent'} */
class Block_4068573856023eaab2953d2_53740316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageContent' => 
  array (
    0 => 'Block_4068573856023eaab2953d2_53740316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="min-h-screen bg-gray-200 dark:bg-gray-800 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto -mt-28">
        <div class="relative px-4 py-10 bg-white dark:bg-gray-700 mx-8 md:mx-0 shadow-xl rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
                <div class="flex items-center space-x-5">
                    <div class="h-14 w-14 bg-blue-400 rounded-full flex flex-shrink-0 justify-center items-center text-blue-200 text-2xl font-mono dark:bg-gray-500 dark:text-gray-200">
                        <?php echo substr($_smarty_tpl->tpl_vars['config']->value->read('siteName'),0,1);?>

                    </div>
                    <div class="block pl-2 font-semibold text-xl self-start text-gray-700 dark:text-gray-300">
                        <h2 class="leading-relaxed"><?php echo $_smarty_tpl->tpl_vars['config']->value->read('siteName');?>
</h2>
                        <p class="text-sm text-gray-500 font-normal leading-relaxed dark:text-gray-200">
                            Please login to your account to continue.
                        </p>
                    </div>
                </div>
                <div class="">
                    <div class="pt-8 pb-4 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7 dark:text-gray-200">
                        <div class="flex flex-col">
                            <label for="name" class="leading-loose">Username</label>
                            <input id="name" name="username" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 dark:bg-gray-500 dark:border-gray-600 dark:focus:border-gray-600 dark:focus:shadow-xl dark:text-white">
                        </div>
                        <div class="flex flex-col">
                            <label for="password" class="leading-loose">Password</label>
                            <input id="password" name="password" type="password" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 dark:bg-gray-500 dark:border-gray-600 dark:focus:border-gray-600 dark:focus:shadow-xl dark:text-white">
                        </div>
                    </div>
                    <a id="errorText" class="text-red-400">

                    </a>
                    <div class="pt-2 flex items-center space-x-4">
                        <button onclick="SubmitFormData()" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'pageContent'} */
}
