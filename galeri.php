<style>
  /* CSS untuk galeri foto */

#gallery {
    background-color: #f9f9f9; /* Warna latar belakang galeri */
    padding: 20px; /* Padding untuk ruang di sekitar isi */
}

.content {
    max-width: 800px; /* Lebar maksimum konten */
    margin: 0 auto; /* Atur margin untuk memusatkan konten */
}

h2 {
    text-align: center; /* Pusatkan teks judul */
    color: #333; /* Warna teks judul */
}

.gallery-images {
    display: flex; /* Gunakan display flex untuk mengatur gambar secara horizontal */
    justify-content: center; /* Pusatkan gambar horizontal */
    align-items: center; /* Pusatkan gambar vertikal */
}

.gallery-images img {
    width: 20%; /* Lebar gambar */
    margin: 0 10px; /* Beri margin antara gambar */
}

.gallery-images img:first-child {
    margin-left: 0; /* Hapus margin kiri pada gambar pertama */
}

.gallery-images img:last-child {
    margin-right: 0; /* Hapus margin kanan pada gambar terakhir */
}

</style>
<section id="gallery">
    <div class="content">
      <h2>Galeri Foto</h2>
      <div class="gallery-images" >
        <img src="./gambar/beruang.jpg" alt="image" width="10%" align="center" hspace="10" >
        <img src="./gambar/dirut.png" alt="image" width="10%" align="center" hspace="10" >
        <img src="./gambar/kucing.jpeg" alt="image" width="10%" align="center" hspace="10" >
      </div>
    </div>
  </section>