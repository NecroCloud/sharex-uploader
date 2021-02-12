<?php
require $_SERVER["DOCUMENT_ROOT"] . '/vendor/autoload.php';
$config = include $_SERVER["DOCUMENT_ROOT"] . '/config.php';
$encryptor = new Encryptor();

if (isset($_POST['password'])){
    echo hash('sha256',$encryptor->crypt($_POST['password']));
    die();
}
?>
<head>
    <title>Password encryptor &bull; File Uploader</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
    <style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
    <link rel="stylesheet" href="/src/assets/css/style.css">

    <style>
        .visibility_none {
            visibility: hidden
        }
    </style>
</head>

<div class="min-w-screen min-h-screen bg-gray-800 flex items-center justify-center px-5 py-5">
    <div class="w-full mx-auto" x-data="app()" style="max-width: 500px" x-init="generatePassword()">

        <div class="rounded-lg bg-white dark:bg-gray-700  shadow p-5 text-gray-800">
            <div class="flex items-center space-x-5">
                <div class="h-14 w-14 bg-blue-400 rounded-full flex flex-shrink-0 justify-center items-center text-blue-200 text-2xl font-mono dark:bg-gray-500 dark:text-gray-200">
                    <?php echo substr($config['siteName'], 0, 1) ?>
                </div>
                <div class="block pl-2 font-semibold text-xl self-start text-gray-700 dark:text-gray-300">
                    <h2 class="leading-relaxed">
                        <?php echo $config['siteName'] ?>
                    </h2>
                    <p class="text-sm text-gray-500 font-normal leading-relaxed dark:text-gray-200">
                        Please copy the encrypted string and insert it into the <b>config.php</b>
                    </p>
                </div>
            </div>
            <div class="relative mb-2 mt-5">
                <label for="password" class="block text-xs font-semibold text-gray-500 mb-2">ENTER YOUR PASSWORD</label>
                <input :type="showPasswordField?'password':'text'" id="password" x-model="password"
                       class="w-full pl-3 pr-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full border-gray-300 rounded-md focus:outline-none text-gray-600 dark:bg-gray-500 dark:border-gray-600 dark:focus:border-gray-600 dark:focus:shadow-xl dark:text-white"
                       placeholder="Password" @input="checkStrength()">
                <button class="block w-7 h-7 mt-6 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-indigo-500 dark:hover:text-gray-200 transition-colors"
                        @click.prevent="showPasswordField=!showPasswordField"><i class="mdi"
                                                                                 :class="`mdi-${showPasswordField?'eye-outline':'eye-off-outline'}`"></i>
                </button>
            </div>
            <div class="flex -mx-1">
                <template x-for="(v,i) in 5">
                    <div class="w-1/5 px-1">
                        <div class="h-2 rounded-xl transition-colors"
                             :class="i<passwordScore?(passwordScore<=2?'bg-red-400':(passwordScore<=4?'bg-yellow-400':'bg-green-500')):'bg-gray-200'"></div>
                    </div>
                </template>
            </div>
            <hr class="my-5 border border-gray-200">
            <div class="mb-2">
                <label class="block text-xs font-semibold text-gray-500 mb-2">PASSWORD LENGTH</label>
                <input class="w-full px-3 py-2 mb-1 border focus:ring-gray-500 focus:border-gray-900 w-full border-gray-300 rounded-md focus:outline-none text-gray-600 dark:bg-gray-500 dark:border-gray-600 dark:focus:border-gray-600 dark:focus:shadow-xl dark:text-white"
                       placeholder="Length" type="number" min="1" max="30" step="1" x-model="charsLength"
                       @input="generatePassword()"/>
                <input class="w-full" type="range" x-model="charsLength" min="1" max="30" step="1"
                       @input="generatePassword()">
            </div>
            <div class="flex -mx-2 mb-2">
                <div class="w-1/2 px-2">
                    <label for="charsLower">
                        <input type="checkbox" class="align-middle" id="charsLower" @input="generatePassword()" checked>
                        <span class="text-xs font-semibold text-gray-500">LOWERCASE</span>
                    </label>
                </div>
                <div class="w-1/2 px-2">
                    <label for="charsUpper">
                        <input type="checkbox" class="align-middle" id="charsUpper" @input="generatePassword()" checked>
                        <span class="text-xs font-semibold text-gray-500">UPPERCASE</span>
                    </label>
                </div>
            </div>
            <div class="flex -mx-2">
                <div class="w-1/2 px-2">
                    <label for="charsNumeric">
                        <input type="checkbox" class="align-middle" id="charsNumeric" @input="generatePassword()"
                               checked>
                        <span class="text-xs font-semibold text-gray-500">NUMBERS</span>
                    </label>
                </div>
                <div class="w-1/2 px-2">
                    <label for="charsSymbols">
                        <input type="checkbox" class="align-middle" id="charsSymbols" @input="generatePassword()"
                               checked>
                        <span class="text-xs font-semibold text-gray-500">SYMBOLS</span>
                    </label>
                </div>
            </div>


            <button onclick="encrypt()" class="bg-blue-500 p-2 text-white rounded shadow w-full mt-6 border-0 hover:bg-blue-400">
                Encrypt
            </button>

        </div>

        <div id="encryptedSection" class="rounded-lg bg-white dark:bg-gray-700 shadow p-5 text-gray-800 mt-4 visibility_none">
            <label for="encrypted" class="block text-xs font-semibold text-gray-500 mb-2">Copy this into the Config as the password</label>
            <input id="encrypted" class="w-full px-3 py-2 mb-1 border focus:ring-gray-500 focus:border-gray-900 w-full border-gray-300 rounded-md focus:outline-none text-gray-600 dark:bg-gray-500 dark:border-gray-600 dark:focus:border-gray-600 dark:focus:shadow-xl dark:text-white" type="text"/>
        </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    function encrypt(){
        let password = document.getElementById('password').value

        $.post("/src/templates/password.php", { password: password },
            function(data) {
                document.getElementById('encryptedSection').classList.remove('visibility_none')
                document.getElementById('encrypted').value = data;
            });
    }

    function app() {
        return {
            showPasswordField: true,
            passwordScore: 0,
            password: '',
            chars: {
                lower: 'abcdefghijklmnopqrstuvwxyz',
                upper: 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
                numeric: '0123456789',
                symbols: '!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~'
            },
            charsLength: 12,
            checkStrength: function () {
                if (!this.password) return this.passwordScore = 0;
                this.passwordScore = zxcvbn(this.password).score + 1;
            },
            generatePassword: function () {
                console.log(document.getElementById('charsSymbols').checked);
                this.password = this.shuffleArray(
                    ((document.getElementById('charsLower').checked ? this.chars.lower : '') + (document.getElementById('charsUpper').checked ? this.chars.upper : '') + (document.getElementById('charsNumeric').checked ? this.chars.numeric : '') + (document.getElementById('charsSymbols').checked ? this.chars.symbols : '')).split('')
                ).join('').substring(0, this.charsLength);
                this.checkStrength();
            },
            shuffleArray(array) {
                for (let i = array.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1));
                    [array[i], array[j]] = [array[j], array[i]];
                }
                return array;
            }
        }
    }
</script>