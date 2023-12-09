<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('AddClub') }}

        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    <form class="bg-white rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('addclub') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                名前
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" type="text" name="name" placeholder="name">
                        </div>
                        @if ($errors->has('name'))
                            <p class="text-red-500 text-xs italic">{{ $errors->first('name') }}</p>
                        @endif
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="clubname">
                                サークル名
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="clubname" type="text" name="clubname" placeholder="clubname">
                        </div>
                        @if ($errors->has('clubname'))
                            <p class="text-red-500 text-xs italic">{{ $errors->first('clubname') }}</p>
                        @endif
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                メールアドレス
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" type="text" name="email" placeholder="email">
                        </div>
                        @if ($errors->has('email'))
                            <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
                        @endif
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                パスワード
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" type="password" name="password" placeholder="password">
                        </div>
                        @if ($errors->has('password'))
                            <p class="text-red-500 text-xs italic">{{ $errors->first('password') }}</p>
                        @endif
                        <div class="flex items-center justify-center">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit" name="submit">
                                登録
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
