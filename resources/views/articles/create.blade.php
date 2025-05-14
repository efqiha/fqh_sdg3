<x-app-layout>
     <style>
        .container {
            max-width: 700px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        h2 {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: 500;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            margin-top: 4px;
        }

        button {
            margin-top: 20px;
            padding: 10px 18px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1d4ed8;
        }

        a {
            display: inline-block;
            margin-top: 16px;
            color: #2563eb;
            text-decoration: underline;
        }
    </style>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Artikel</h2>
    </x-slot>

    <div class="max-w-4xl mx-auto p-4 sm:p-6 lg:p-8">
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Judul</label>
                <input type="text" name="title" id="title" class="w-full border rounded px-3 py-2"
                    value="{{ old('title') }}" required>
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-bold mb-2">Konten</label>
                <textarea name="content" id="content" rows="5" class="w-full border rounded px-3 py-2"
                    required>{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                Simpan
            </button>
            <div class="mt-6">
                    <a href="{{ route('articles.index') }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Kembali</a>
                </div>
        </form>
    </div>
</x-app-layout>
