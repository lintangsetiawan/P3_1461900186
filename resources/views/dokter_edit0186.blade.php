<form action="{{ url('dokter0186/'. $dokter->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    ID: <input type="text" name="id" value= "{{ $dokter->id }}">
    NAMA: <input type="text" name="nama" value= "{{ $dokter->nama }}">
    JABATAN: <input type="text" name="jabatan" value= "{{ $dokter->jabatan }}">
    <button type="submit">simpan</button>

</form>