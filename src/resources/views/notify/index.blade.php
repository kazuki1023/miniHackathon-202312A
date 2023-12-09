<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Profile') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <form method="POST" action="{{ route('notify.send') }}">
      @csrf
      <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">
          管理者追加通知を送る
      </button>
    </form>
  </div>
</x-app-layout>
