@vite(['resources/css/app.css', 'resources/js/app.js'])
@include('layouts.navigation')

<div>
    <h2 class="text-center font-bold text-gray-700 text-3xl py-10">Go Make a POST</h2>
</div>

<div class="container md: max-w-5xl mx-auto mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-1 md:gap-6">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="#" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-12 gap-6">

                            <div class="col-span-12 sm:col-span-8">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" name="title" id="title" autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-12 sm:col-span-4">
                                <label for="min_to_read" class="block text-sm font-medium text-gray-700">Minute to
                                    read</label>
                                <input type="number" name="min_to_read" id="min_to_read" autocomplete="given-name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-12">
                                <label for="excerpt" class="block text-sm font-medium text-gray-700">
                                    Summary
                                </label>
                                <div class="mt-1">
                                    <textarea id="excerpt" name="excerpt" rows="4"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                        placeholder="once on a very deserted.."></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">
                                    Brief description for your post.
                                </p>
                            </div>

                            <div class="col-span-12">
                                <label for="body" class="block text-sm font-medium text-gray-700">
                                    Body
                                </label>
                                <div class="mt-1">
                                    <textarea id="body" name="body" rows="10"
                                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                        placeholder="once on a very deserted.."></textarea>
                                </div>
                            </div>

                            <div class="col-span-3 bg-grey-lighter py-6">
                                <label
                                    class="py-2 px-4 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer text-gray-700">
                                    <span class="text-base leading-normal">
                                        Select a file
                                    </span>
                                    <input type="file" name="image_path" class="hidden">
                                </label>
                            </div>


                        </div>
                    </div>
                    <div class="px-4 pb-3 bg-gray-50 sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-4 px-8 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Submit Post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
