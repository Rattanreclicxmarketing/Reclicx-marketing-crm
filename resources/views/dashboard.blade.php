<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-3xl font-bold text-[#143B6E]">
                    🚀 Reclicx CRM
                </h2>
                <p class="text-gray-500 text-sm">
                    Lead Management & Sales Automation
                </p>
            </div>

            <div class="bg-gradient-to-r from-[#143B6E] to-red-600 text-white px-5 py-2 rounded-xl shadow-lg">
                Welcome, {{ Auth::user()->name }}
            </div>
        </div>
    </x-slot>

    <div class="min-h-screen bg-slate-100 py-8">
        <div class="max-w-7xl mx-auto px-4">

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-red-600">
                    <h4 class="text-gray-500">Total Leads</h4>
                    <h2 class="text-4xl font-bold text-[#143B6E] mt-2">245</h2>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-blue-700">
                    <h4 class="text-gray-500">Verified</h4>
                    <h2 class="text-4xl font-bold text-green-600 mt-2">178</h2>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-yellow-500">
                    <h4 class="text-gray-500">Dispatch</h4>
                    <h2 class="text-4xl font-bold text-yellow-600 mt-2">92</h2>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-green-500">
                    <h4 class="text-gray-500">Revenue</h4>
                    <h2 class="text-4xl font-bold text-green-700 mt-2">₹1.8L</h2>
                </div>

            </div>

            <!-- Welcome Banner -->
            <div class="mt-8 bg-gradient-to-r from-[#143B6E] via-[#1a4f96] to-red-600 rounded-3xl shadow-xl p-10 text-white">

                <h1 class="text-4xl font-bold mb-4">
                    Welcome to Reclicx Marketing CRM
                </h1>

                <p class="text-lg opacity-90">
                    Manage Leads, Agents, Team Leaders, Verification,
                    Dispatch & Revenue Tracking from one place.
                </p>

                <div class="mt-6">
                    <a href="/leads"
                       class="bg-white text-[#143B6E] font-bold px-6 py-3 rounded-xl shadow">
                        View Leads
                    </a>
                </div>

            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">

                <a href="/leads"
                   class="bg-white rounded-2xl shadow-lg p-6 hover:scale-105 transition">

                    <h3 class="text-xl font-bold text-[#143B6E]">
                        📋 Leads
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Manage all incoming leads
                    </p>
                </a>

                <a href="/users"
                   class="bg-white rounded-2xl shadow-lg p-6 hover:scale-105 transition">

                    <h3 class="text-xl font-bold text-[#143B6E]">
                        👨‍💼 Team
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Manage agents & team leaders
                    </p>
                </a>

                <a href="/dispatch"
                   class="bg-white rounded-2xl shadow-lg p-6 hover:scale-105 transition">

                    <h3 class="text-xl font-bold text-[#143B6E]">
                        🚚 Dispatch
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Track order dispatch status
                    </p>
                </a>

            </div>

        </div>
    </div>

</x-app-layout>