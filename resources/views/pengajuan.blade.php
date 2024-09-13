<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <div>
        <form action="{{ route('pengajuan.store')}}" method="POST">
          @csrf
          <label for="prodi">Prodi</label>
          <select id="prodi" name="prodi">
            <option value="bsa">Bahasa dan Sastra Arab S1</option>
            <option value="ilha">Ilmu Hadis S1</option>
            <option value="pai">Pendidikan Agama Islam S1</option>
            <option value="ps">Perbankan Syariah S1</option>
            <option value="psikologi">Psikologi S1</option>
            <option value="ep">Ekonomi Pembangunan S1</option>
            <option value="manajemen">Manajemen S1</option>
            <option value="akuntansi">Akuntansi S1</option>
            <option value="bjm">Bisnis Jasa Makanan D4</option>
            <option value="sasing">Sastra Inggris S1</option>
            <option value="sasindo">Sastra Indonesia S1</option>
            <option value="ilkom">Ilmu Komunikasi S1</option>
            <option value="hukum">Hukum S1</option>
            <option value="bk">Bimbingan dan Konseling S1</option>
            <option value="pbsi">Pendidikan Bahasa dan Sastra Indonesia S1</option>
            <option value="pbi">Pendidikan Bahasa Inggris S1</option>
            <option value="ppkn">Pendidikan Pancasila dan Kewarganegaraan S1</option>
            <option value="pmat">Pendidikan Matematika S1</option>
            <option value="pbio">Pendidikan Biologi S1</option>
            <option value="pfis">Pendidikan Fisika S1</option>
            <option value="pgsd">Pendidikan Guru Sekolah Dasar S1</option>
            <option value="pgpaud">Pendidikan Guru PAUD S1</option>
            <option value="pvto">Pendidikan Vokasional Teknologi Otomotif S1</option>
            <option value="pvte">Pendidkan Vokasional Teknik Elektro S1</option>
            <option value="mtk">Matematika S1</option>
            <option value="s1">Sistem Informasi S1</option>
            <option value="fis">Fisika S1</option>
            <option value="bio">Biologi S1</option>
            <option value="ti">Teknik Industri S1</option>
            <option value="inf">Informatika S1</option>
            <option value="te">Teknik Elektro S1</option>
            <option value="tkim">Teknik Kimia S1</option>
            <option value="tp">Teknologi Pangan S1</option>
            <option value="far">Farmasi S1</option>
            <option value="km">Kesehatan Masyarakat S1</option>
            <option value="gizi">Gizi S1</option>
            <option value="kedokteran">Kedokteran S1</option>
            <option value="ppg">Pendidikan Profesi Guru</option>
            <option value="ppa">Pendidikan Profesi Apoteker</option>
            <option value="ppd">Pendidikan Profesi Dokter</option>
            <option value="ppp">Pendidikan Profesi Psikologi</option>
            <option value="pai2">Pendidikan Agama Islam S2</option>
            <option value="pfis2">Pendidikan Fisika S2</option>
            <option value="pgv2">Pendidikan Guru Vokasi S2</option>
            <option value="pbi2">Pendidikan Bahasa Inggris S2</option>
            <option value="pmat2">Pendidikan Matematika S2</option>
            <option value="bk2">Bimbingan dan Konseling S2</option>
            <option value="mp2">Manajemen Pendidikan S2</option>
            <option value="psikologi2">Psikologi S2</option>
            <option value="far2">Farmasi S2</option>
            <option value="km2">Kesehatan Masyarakat S2</option>
            <option value="inf2">Informatika S2</option>
            <option value="tkim2">Teknik Kimia S2</option>
            <option value="te2">Teknik Elektro S2</option>
            <option value="hukum2">Hukum S2</option>
            <option value="ilfar3">Ilmu Farmasi S3</option>
            <option value="pen3">Pendidikan S3</option>
            <option value="infor3">Informatika S3</option>
          </select>
          <label for="judul">Judul Buku</label>
          <input type="text" id="judul" name="judul" placeholder="Judul Buku....">
      
          <label for="edisi">Edisi</label>
          <input type="text" id="edisi" name="edisi" placeholder="Edisi Buku..">

          <label for="penerbit">Penerbit</label>
          <input type="text" id="penerbit" name="penerbit" placeholder="Nama Penerbit..">

          <label for="author">Author</label>
          <input type="text" id="author" name="author" placeholder="Nama Author..">

          <label for="tahun">Tahun</label>
          <input type="text" id="tahun" name="tahun" placeholder="Tahun Terbit Buku..">

          <label for="eksemplar">Jumlah Eksemplar</label>
          <input type="number" id="eksemplar" name="eksemplar" min="0" max="100" value="0">
           
          <input type="submit" value="Submit">
        </form>
      </div>
    
  
  </x-layout>