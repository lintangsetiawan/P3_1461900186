<form action="{{ route('dokter0186.store') }}" method="post">
    @csrf
    ID: <input type="text" name="id">
    NAMA: <input type="text" name="nama">
    JABATAN: <input type="text" nama="jabatan">
    <button type="submit">simpan</button>
    
</form>