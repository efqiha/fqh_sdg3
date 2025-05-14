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

            .content-container {
                max-width: 800px;
                margin: 50px auto;
                padding: 2rem;
                background-color: white;
                border-radius: 0.5rem;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .content-header h1 {
                font-size: 2rem;
                font-weight: bold;
                margin-bottom: 1rem;
                color: #374151;
            }

            .content-body p {
                font-size: 1rem;
                line-height: 1.75;
                color: #4b5563;
                white-space: pre-line;
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
                margin-top: 1.5rem;
                display: block;
                width: 100%;
            }

            .back-button:hover {
                background-color: #d1d5db;
            }

            .back-button:focus {
                outline: none;
                box-shadow: 0 0 0 2px #6366f1;
            }
        </style>
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $article->title }}</h2>
    </x-slot>

    <div class="content-container">
        <div class="content-header">
            <h1>{{ $article->title }}</h1>
        </div>

        <div class="content-body">
            <p>{{ $article->content }}</p>
        </div>

        <div class="mt-6">
            <a href="{{ route('articles.index') }}" class="back-button">Kembali</a>
        </div>
    </div>
</x-app-layout>
