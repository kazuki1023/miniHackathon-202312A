<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- web.php -> methodを探す-> Root::resource ->  --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>サークル新規作成</h1>

                    <form method="POST" action="{{route('club.store')}}">
                        @csrf
                        <div>
                            <label for="form-content">管理者名</label>
                            <input type="text" name="name" id="form-content" required>
                        </div>

                        <div>
                            <label for="form-club">サークル名</label>
                            <input type="text" name="club" id="form-club" required>
                        </div>

                        <div>
                            <label for="form-email">メールアドレス</label>
                            <input type="text" name="email" id="form-email">
                        </div>
                        
                        <div>
                            <label for="form-pass">パスワード</label>
                            <input type="password" name="password" id="form-pass">
                        </div>

                        <button type="submit">登録</button>
                        <a href="{{ route('dashboard')}}">{{ __('一覧へ戻る') }}</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
