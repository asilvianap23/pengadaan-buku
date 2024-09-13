<?php
$jumlahdataperhalaman = 3;
$jumlahdata = count(query("SELECT * FROM mahasiswa"));
$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman); //ceil buletin ke atas, floor buletin ke bawah, round buletin kepecahan terdekat
$halamanaktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1; // jika halaman aktif di sisi dengan get halaman, tapi jika tidak aktif/false (:) di sisi 1;
$awaldata = ( $jumlahdataperhalaman * $halamanaktif ) - $jumlahdataperhalaman;
?>
<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>
    <form action="" method="post"> 
        <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>

    <!-- navigation -->
     <?php if ( $halamanaktif > 1 ) : ?>
         <a href="?halaman=<?= $halamanaktif-1?>">&laquo;</a>
     <?php endif; ?>

    <?php for ( $i = 1; $i <= $jumlahhalaman; $i++) : ?>
        <?php if( $i == $halamanaktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
     <?php endfor;?>

     <?php if ( $halamanaktif < $jumlahhalaman ) : ?>
         <a href="?halaman=<?= $halamanaktif+1?>">&raquo;</a>
     <?php endif; ?>

    <br><br>
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

          @foreach ( $pengadaan as $row ) 
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