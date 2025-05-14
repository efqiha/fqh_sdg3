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
            margin-bottom: 10px;
        }

        p {
            line-height: 1.6;
        }

        a {
            color: #2563eb;
            text-decoration: underline;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $article->title }}</h2>
    </x-slot>

    <div class="p-6 max-w-4xl mx-auto text-gray-900">
        <div class="bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold mb-4">{{ $article->title }}</h1>
            <p class="text-gray-700 whitespace-pre-line">{{ $article->content }}</p>
        </div>

        <div class="mt-6">
                    <a href="{{ route('articles.index') }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Kembali</a>
        </div>
    </div>
</x-app-layout>

