<x-layout>
    <div class="container mx-auto mt-8 max-w-xl">
        <h1 class="text-2xl font-bold mb-6">Add New Patient</h1>

        @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('patients.create') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block font-semibold mb-1">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div>
                <label class="block font-semibold mb-1">Phone</label>
                <input type="tel" name="phone" value="{{ old('phone') }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div>
                <label class="block font-semibold mb-1">Birthdate</label>
                <input type="date" name="birthdate" value="{{ old('birthdate') }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div>
                <label class="block font-semibold mb-1">Gender</label>
                <select name="gender" class="w-full p-2 border border-gray-300 rounded" required>
                    <option value="">Select gender</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Save Patient
            </button>
        </form>
    </div>
</x-layout>