{extends file='PAGE.tpl'}

{block name='css'}
{/block}

{block name='js'}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
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

    </script>

{/block}

{block name='pageContent'}
    <div class="min-h-screen bg-gray-200 dark:bg-gray-800 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto -mt-28">
        <div class="relative px-4 py-10 bg-white dark:bg-gray-700 mx-8 md:mx-0 shadow-xl rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
                <div class="flex items-center space-x-5">
                    <div class="h-14 w-14 bg-blue-400 rounded-full flex flex-shrink-0 justify-center items-center text-blue-200 text-2xl font-mono dark:bg-gray-500 dark:text-gray-200">
                        {$config->read('siteName')|substr:0:1}
                    </div>
                    <div class="block pl-2 font-semibold text-xl self-start text-gray-700 dark:text-gray-300">
                        <h2 class="leading-relaxed">{$config->read('siteName')}</h2>
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
{/block}