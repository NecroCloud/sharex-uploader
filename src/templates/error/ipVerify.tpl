{extends file='PAGE.tpl'}

{block name='css'}
{/block}

{block name='js'}
{/block}

{block name='pageContent'}
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
                        Current IP: <b>{$userIP}</b>
                    </p>
                </div>
            </div>
        </div>
    </main>
{/block}