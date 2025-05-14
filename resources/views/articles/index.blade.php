<x-app-layout>
     <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9fafb;
        }

        .container {
            max-width: 1120px;
            margin: 24px auto;
            padding: 0 1rem;
        }

        .btn-primary {
            background-color: #2563eb;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
        }

        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
            padding: 0.75rem;
            border-radius: 6px;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        thead th {
            text-align: left;
            font-weight: 600;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid #e5e7eb;
            color: #374151;
        }

        tbody td {
            padding: 0.75rem 0;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
            vertical-align: top;
        }

        .action-links a {
            margin-right: 0.75rem;
            color: #2563eb;
            text-decoration: none;
            font-weight: 500;
        }

        .action-links a:hover {
            text-decoration: underline;
        }

        .text-red {
            color: #dc2626;
        }

        .text-indigo {
            color: #4f46e5;
        }

        .text-center {
            text-align: center;
        }

        .text-muted {
            color: #9ca3af;
        }

        button {
            background: none;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
        }
    </style>
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
