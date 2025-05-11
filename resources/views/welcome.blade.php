<x-layout>
    <div class="w-full max-w-sm bg-[#1e1e1e] p-8 rounded-lg shadow-lg flex flex-col gap-6 text-center">
        <h1 class="text-2xl font-semibold text-white">Welcome to Kyan</h1>

        <div class="flex flex-col gap-4">
            <a
                name="Authenticate"
                href="{{ route('login') }}"
                class="bg-[#646cff] hover:bg-[#535bf2] text-white font-semibold py-2 px-4 rounded transition">
                Login
            </a>

            <a
                name="Authenticate"
                href="{{ route('register') }}"
                class="bg-[#646cff] hover:bg-[#535bf2] text-white font-semibold py-2 px-4 rounded transition">
                Register
            </a>
        </div>
    </div>
</x-layout>