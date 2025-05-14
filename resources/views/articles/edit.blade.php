<x-app-layout>
    <head>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #f9fafb;
                color: #374151;
                margin: 0;
                padding: 0;
            }

            .form-container {
                max-width: 800px;
                margin: 50px auto;
                padding: 2rem;
                background-color: white;
                border-radius: 0.5rem;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .form-header h2 {
                font-size: 1.5rem;
                font-weight: bold;
                margin-bottom: 1.5rem;
                text-align: center;
            }

            label {
                display: block;
                font-weight: 600;
                margin-bottom: 0.5rem;
                font-size: 0.875rem;
                color: #4b5563;
            }

            input[type="text"],
            textarea {
                width: 100%;
                padding: 0.75rem;
                border: 1px solid #d1d5db;
                border-radius: 0.375rem;
                font-size: 0.875rem;
                margin-top: 0.25rem;
            }

            textarea {
                resize: vertical;
            }

            button {
                background-color: #10b981;
                color: white;
                padding: 0.75rem 1.5rem;
                font-size: 0.875rem;
                font-weight: bold;
                border: none;
                border-radius: 0.375rem;
                cursor: pointer;
                margin-top: 1rem;
                transition: background-color 0.3s ease;
            }

            button:hover {
                background-color: #047857;
            }

            button:focus {
                outline: none;
                box-shadow: 0 0 0 2px #10b981;
            }

            .mt-6 {
                margin-top: 1.5rem;
                display: flex;
                justify-content: center;
            }

            .back-button {
                background-color: #e5e7eb;
                color: #1f2937;
                padding: 0.75rem 1.5rem;
                font-size: 0.875rem;
                font-weight: bold;
                border: none;
                border-radius: 0.375rem;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .back-button:hover {
                background-color: #d1d5db;
            }

            .back-button:focus {
                outline: none;
                box-shadow: 0 0 0 2px #6366f1;
            }

            .error-message {
                color: #f87171;
                font-size: 0.875rem;
                margin-top: 0.25rem;
            }
        </style>
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Artikel</h2>
    </x-slot>

    <div class="form-container">
        <form action="{{ route('articles.update', $article) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Judul</label>
                <input type="text" name="title" id="title" class="w-full border rounded px-3 py-2"
                    value="{{ old('title', $article->title) }}" required>
                @error('title')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-bold mb-2">Konten</label>
                <textarea name="content" id="content" rows="5" class="w-full border rounded px-3 py-2"
                    required>{{ old('content', $article->content) }}</textarea>
                @error('content')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">
                Perbarui
            </button>

            <div class="mt-6">
                <a href="{{ route('articles.index') }}" class="back-button">Kembali</a>
            </div>
        </form>
    </div>
</x-app-layout>
