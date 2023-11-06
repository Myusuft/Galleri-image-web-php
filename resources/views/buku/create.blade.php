<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Form Tambah Buku') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h4>Tambah Buku</h4>
            <form action="{{route('buku.store')}}" method="POST">
                @csrf
                <div>
                    <label>Judul</label>
                    <input type="text" name="judul" id="judul">
                </div>
                <div>
                    <label>Penulis</label>
                    <input type="text" name="penulis" id="penulis">
                </div>
                <div>
                    <label>Harga</label>
                    <input type="text" name="harga" id="harga">
                </div>
                <div>
                    <label>Tgl. Terbit</label>
                    <input type="date" name="tgl_terbit" id="tgl_terbit" class="date form-control" placeholder="yyyy/mm/dd">
                </div>
                <div><button type="submit">Simpan</button></div>
                <!-- <a href="/buku"> Batal</a> -->
            </form>
        </div>
    </div>
</x-app-layout>