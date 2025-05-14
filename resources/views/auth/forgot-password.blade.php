<x-guest-layout>

<style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Nunito', sans-serif;
            background-color: #f9fafb;
            color: #374151;
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        form {
            background-color: white;
            max-width: 400px;
            width: 100%;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            margin-top: 0.25rem;
            font-size: 0.875rem;
        }

        input[type="checkbox"] {
            accent-color: #4f46e5;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .text-gray-600 {
            color: #4b5563;
        }

        .text-gray-600:hover {
            color: #1f2937;
        }

        .flex {
            display: flex;
            align-items: center;
        }

        .justify-between {
            justify-content: space-between;
        }

        .justify-end {
            justify-content: flex-end;
        }

        .mt-1 { margin-top: 0.25rem; }
        .mt-2 { margin-top: 0.5rem; }
        .mt-4 { margin-top: 1rem; }
        .ml-2 { margin-left: 0.5rem; }
        .ml-3 { margin-left: 0.75rem; }

        .underline {
            text-decoration: underline;
        }

        .rounded {
            border-radius: 0.375rem;
        }

        .focus\:outline-none:focus {
            outline: none;
        }

        .focus\:ring-2:focus {
            box-shadow: 0 0 0 2px #c7d2fe;
        }

        .focus\:ring-offset-2:focus {
            outline-offset: 2px;
        }

        .focus\:ring-indigo-500:focus {
            box-shadow: 0 0 0 2px #6366f1;
        }

        .button-primary {
            background-color: #4f46e5;
            color: white;
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            font-weight: 600;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
        }

        .button-primary:hover {
            background-color: #4338ca;
        }

        .button-primary:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.5);
        }
    </style>
    
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
