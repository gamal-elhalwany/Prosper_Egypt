<x-app-layout>
    @push('style')
        <link rel="stylesheet" href="{{ asset('assets/css/dashboard/main.css') }}">
    @endpush
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gradient-to-r from-blue-500 to-indigo-600">
                    <h2 class="text-gray" style="font-weight: bold;">Add Partner Logo</h2>
                </div>

                <div class="store-form p-4 bg-white rounded shadow-sm mb-5">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert"
                            style="width:80%; background: none; border: none;">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form
                        action="{{ isset($partner) ? route('banner.logo.update', $partner->id) : route('banner.logo.store') }}"
                        method="POST" enctype="multipart/form-data" class="p-6">
                        @csrf
                        @if (isset($partner))
                            @method('PUT')
                        @endif

                        <div class="space-y-6">
                            <div class="form-group">
                                <div class="space-y-4">
                                    <div class="row">
                                        <div class="col">
                                            <label for="partner"
                                                class="block text-sm font-medium text-gray-700">Partner
                                                Name:</label>
                                            <input type="text"
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                name="name" placeholder="Partner name">
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="partner" class="block text-sm font-medium text-gray-700">Upload
                                                Partner
                                                Logo:</label>
                                            <div class="mt-1 flex items-center">
                                                <input type="file" name="logo"
                                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                                                @error('logo')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <p class="mt-2 text-sm text-gray-500">Please upload a high-quality logo in
                                                PNG
                                                or
                                                JPG format.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="btn btn-outline-primary d-inline-flex align-items-center px-4 py-2 rounded-md fw-semibold">
                                    Add Partner
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="delete-form p-4 bg-white rounded shadow-sm mt-5">
                    <strong class="mb-5">Delete Partner Logo.</strong>
                    <div class="container">
                        <div class="row">
                            @foreach ($partners as $partner)
                                <div class="col-md-2 m-2">
                                    <form action="{{ route('partner.delete', $partner->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="partners-logos">
                                            <img src="{{ asset('storage/' . $partner->logo) }}" alt="" />
                                            <button type="submit" class="delete-partner">x</button>
                                        </div>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="store-lines-of-business-form p-4 bg-white rounded shadow-sm mt-5">
                    <div class="p-6 bg-gradient-to-r from-blue-500 to-indigo-600">
                        <h2 class="text-gray" style="font-weight: bold;">Add Line of Business (group).</h2>
                    </div>

                    <form action="{{ route('store.business') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-6">
                            <div class="form-group">
                                <div class="space-y-4">
                                    <div class="row">
                                        <div class="col">
                                            <label for="title"
                                                class="block text-sm font-medium text-gray-700">Business
                                                Title:</label>
                                            <input type="text"
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                                name="title" placeholder="Business title">
                                            @error('title')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="group_logo"
                                                class="block text-sm font-medium text-gray-700">Upload
                                                Business Logo:
                                            </label>
                                            <div class="mt-1 flex items-center">
                                                <input type="file" name="group_logo"
                                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                                                @error('group_logo')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <p class="mt-2 text-sm text-gray-500">
                                                Please upload a high-quality logo in PNG or JPG format.
                                            </p>
                                        </div>
                                    </div> <!-- End of Row -->
                                    <div class="row">
                                        <div class="col">
                                            <label>Add Business Description:</label>
                                            <div class="mt-1 flex items-center">
                                                <textarea name="description" placeholder="add business description"
                                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 h-50"></textarea>
                                                @error('description')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <label class="mt-3">Add Business Url:</label>
                                            <input type="text" name="url" placeholder="https://example.com"
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                            @error('url')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="btn btn-outline-primary d-inline-flex align-items-center px-4 py-2 rounded-md fw-semibold">
                                    Add Line of Business
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="delete-lines-of-business-form p-4 bg-white rounded shadow-sm mt-5">
                    <div class="p-6 bg-gradient-to-r from-blue-500 to-indigo-600">
                        <h2 class="text-gray" style="font-weight: bold;">Delete Line of Business (group).</h2>

                        @foreach ($groups as $group)
                            <form action="{{route('delete.business', $group->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <strong class="mr-5">{{$group->title}}</strong>
                                <button type="submit" class="delete-group">X</button>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
