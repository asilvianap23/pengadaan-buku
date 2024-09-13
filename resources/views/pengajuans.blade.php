<x-layout>

  <x-slot:title>{{ $title }}</x-slot:title>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>Nomor</th>
      <th>Judul</th>
      <th>Edisi</th>
      <th>Penerbit</th>
      <th>Author</th>
      <th>Year</th>
      <th>Jumlah Eksemplar</th>
      <th>Tanggal Pengajuan</th>
      <th>Aksi</th>
    </tr>
    <tr>
      @foreach ( $pengajuans as $row ) 
      <td>{{ $row['nomor'] }}</td>
      <td>{{ $row['judul'] }}</td>
      <td>{{ $row['edisi'] }}</td>
      <td>{{ $row['author'] }}</td>
      <td>{{ $row['penerbit'] }}</td>
      <td>{{ $row['tahun'] }}</td>
      <td>{{ $row['eksemplar'] }}</td>
      {{-- <td>{{ $pengajuan->created_at->format('j F Y') }}</td> --}}
      <td>
        <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> | 
        <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('yakin?');">hapus</a>
      </td>
      @endforeach
    </tr>
  </table>

</x-layout>