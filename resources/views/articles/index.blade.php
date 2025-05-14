<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Artikel
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('articles.create') }}" class="bg-blue-600 text-black px-4 py-2 rounded-md mb-4 inline-block">+ Tambah Artikel</a>

            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow sm:rounded-lg p-6">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="text-left font-bold border-b">
                            <th class="pb-2">Judul</th>
                            <th class="pb-2">Konten</th>
                            <th class="pb-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                            <tr class="border-b">
                                <td class="py-2">{{ $article->title }}</td>
                                <td class="py-2">{{ Str::limit($article->content, 100) }}</td>
                                <td class="py-2 space-x-2">
                                    <a href="{{ route('articles.show', $article) }}" class="text-blue-600 hover:underline">Lihat</a>
                                    <a href="{{ route('articles.edit', $article) }}" class="text-indigo-600 hover:underline">Edit</a>
                                    <form action="{{ route('articles.destroy', $article) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="4" class="text-center py-4 text-gray-500">Tidak ada artikel.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
