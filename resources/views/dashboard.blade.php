<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-[#143B6E]">
            Reclicx CRM Dashboard
        </h2>
    </x-slot>

    <div class="py-8 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto px-4">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-white p-6 rounded-xl shadow border-l-4 border-red-600">
                    <h3 class="text-gray-500">Leads Management</h3>
                    <p class="text-lg font-bold text-[#143B6E]">
                        Manage All Leads
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow border-l-4 border-blue-700">
                    <h3 class="text-gray-500">Users</h3>
                    <p class="text-lg font-bold text-[#143B6E]">
                        Team & Agents
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow border-l-4 border-green-500">
                    <h3 class="text-gray-500">Reports</h3>
                    <p class="text-lg font-bold text-[#143B6E]">
                        CRM Analytics
                    </p>
                </div>

            </div>

            <div class="mt-8 bg-white rounded-xl shadow p-6">
                <h3 class="text-2xl font-bold text-[#143B6E] mb-3">
                    Welcome to Reclicx CRM 🚀
                </h3>

                <p class="text-gray-600">
                    Manage Leads, Team Leaders, Agents, Dispatch, Verification
                    and Reports from a single dashboard.
                </p>
            </div>

        </div>
    </div>
</x-app-layout>