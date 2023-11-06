<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Form Edit Buku') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-12">
            <div class="overflow-hidden bg-white rounded-lg border border-gray-200 shadow-md m-5 py-4 sm:px-6 lg:px-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- new form -->
            <form action="{{route('buku.update',$buku->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">

                    <div class="col-span-full mt-6">
                        <label for="judul" class="block text-sm font-medium leading-6 text-gray-900">Judul buku</label>
                        <div class="mt-2">
                            <input type="text" name="judul" id="judul" value="{{$buku->judul}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="col-span-full mt-6">
                        <label for="penulis" class="block text-sm font-medium leading-6 text-gray-900">Penulis</label>
                        <div class="mt-2">
                            <input type="text" name="penulis" id="penulis" value="{{$buku->penulis}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="col-span-full mt-6">
                        <label for="harga" class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
                        <div class="mt-2">
                            <input type="text" name="harga" id="harga" value="{{$buku->harga}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="col-span-full mt-6">
                        <label for="tgl_terbit" class="block text-sm font-medium leading-6 text-gray-900">Tanggal terbit</label>
                        <div class="mt-2">
                            <input type="date" name="tgl_terbit" id="tgl_terbit" value="{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('Y-m-d') }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="col-span-full mt-6">
                        <label for="thumbnail" class="block text-sm font-medium leading-6 text-gray-900">Thumbnail</label>
                        <div class="mt-2">
                            <input type="file" name="thumbnail" id="thumbnail" >
                        </div>
                    </div>
                    <div class="col-span-full mt-6">
                        <label for="gallery" class="block text-sm font-medium leading-6 text-gray-900">Gallery</label>
                        <div class="mt-2" id="fileinput_wrapper">

                        </div>
                        <a href="javascript:void(0);" id="tambah" onclick="addFileInput()">Tambah</a>
                        <script type="text/javascript">
                            function addFileInput () {
                                var div = document.getElementById('fileinput_wrapper');
                                div.innerHTML += '<input type="file" name="gallery[]" id="gallery" class="block w-full mb-5" style="margin-bottom:5px;">';
                            };
                        </script>
                    </div>
                    <div class="gallery_items">
                        @foreach($buku->galleries()->get() as $gallery)
                            <div class="gallery_item">
                                <img
                                class="rounded-full object-cover object-center"
                                src="{{ asset($gallery->path) }}"
                                alt=""
                                width="400"
                                />
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                    <button type="submit" class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </form>
            </div>
            <!-- eof newform -->

        </div>
    </div>
</x-app-layout>