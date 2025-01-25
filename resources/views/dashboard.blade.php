<title>{{ config('app.titleDashboard', 'Laravel') }} - {{ $settings->webname }}</title>
<x-app-layout>


    <div class="py-12">

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @include('alert.alert-info')
                    <br />

                    <div class="max-w-sm mx-auto">
                        <div class="overflow-hidden text-center bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">

                            <div class="px-6 py-4">
                                <div class="mb-2 text-xl font-bold">Peminjaman</div>
                                <p class="text-base dark:text-gray-100">
                                    Silahkan Pilih Buku Yang Ingin Dipinjam
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
