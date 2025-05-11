<x-layout>
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Search Patients</h1>

        <input
            type="text"
            id="search"
            placeholder="Search by name..."
            class="w-full p-2 border border-gray-300 rounded mb-4" />

        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 p-2 text-left">#</th>
                    <th class="border border-gray-300 p-2 text-left">Name</th>
                    <th class="border border-gray-300 p-2 text-left">Email</th>
                    <th class="border border-gray-300 p-2 text-left">Created At</th>
                </tr>
            </thead>
            <tbody id="patientsTable">
                @foreach ($patients as $patient)
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 p-2">{{ $loop->iteration }}</td>
                    <td class="border border-gray-300 p-2">{{ $patient->name }}</td>
                    <td class="border border-gray-300 p-2">{{ $patient->email }}</td>
                    <td class="border border-gray-300 p-2">{{ $patient->created_at->format('Y-m-d') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        document.getElementById('search').addEventListener('input', function() {
            const query = this.value.toLowerCase();
            const rows = document.querySelectorAll('#patientsTable tr');
            rows.forEach(row => {
                const name = row.children[1].textContent.toLowerCase();
                row.style.display = name.includes(query) ? '' : 'none';
            });
        });
    </script>
</x-layout>