<h2>Edit Buku</h2>
<form method="post" action="/buku/update/<?= $buku['id']; ?>">
Judul: <input type="text" name="judul" value="<?= $buku['judul']; ?>"><br>
Penulis: <input type="text" name="penulis" value="<?= $buku['penulis']; ?>"><br>
Tahun Terbit: <input type="text" name="tahun_terbit" value="<?= $buku['tahun_terbit']; ?>"><br>
<button type="submit">Update</button>
</form>
