<style>
  /* CSS untuk tampilan formulir pesan */

#messages {
    background-color: #f9f9f9; /* Warna latar belakang area pesan */
    padding: 20px; /* Padding untuk ruang di sekitar isi */
}

.content {
    max-width: 600px; /* Lebar maksimum konten */
    margin: 0 auto; /* Atur margin untuk memusatkan konten */
}

h2 {
    color: #333; /* Warna teks judul */
}

p {
    color: #666; /* Warna teks paragraf */
}

label {
    display: block; /* Tampilkan label sebagai blok */
    margin-bottom: 5px; /* Beri margin bawah pada label */
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%; /* Lebar penuh untuk input teks dan textarea */
    padding: 8px; /* Padding untuk ruang di dalam input */
    margin-bottom: 10px; /* Beri margin bawah pada input */
    border: 1px solid #ccc; /* Garis border dengan warna abu-abu */
    border-radius: 4px; /* Bentuk border menjadi agak melengkung */
    box-sizing: border-box; /* Box-sizing untuk mempertahankan ukuran total */
}

textarea {
    height: 150px; /* Tinggi textarea */
}

button[type="submit"] {
    background-color: #007bff; /* Warna latar belakang tombol */
    color: #fff; /* Warna teks tombol */
    padding: 10px 20px; /* Padding tombol */
    border: none; /* Hapus border */
    border-radius: 4px; /* Bentuk border menjadi agak melengkung */
    cursor: pointer; /* Tampilan kursor saat diarahkan ke tombol */
}

button[type="submit"]:hover {
    background-color: #0056b3; /* Warna latar belakang saat tombol dihover */
}

</style>
<section id="messages">
    <div class="content">
      <h2>Pesan</h2>
      <p>Anda dapat mengirimkan pesan kepada kami melalui formulir di bawah ini.</p>
      <form action="#">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="message">Pesan:</label>
        <textarea id="message" name="message"></textarea>
        <button type="submit">Kirim</button>
      </form>
    </div>
  </section>