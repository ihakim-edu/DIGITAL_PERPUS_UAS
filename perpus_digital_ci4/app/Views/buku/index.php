<h2>Daftar Buku Digital</h2>
<form method="get">
    <input type="text" name="keyword" placeholder="Cari buku...">
    <button type="submit">Cari</button>
</form>
<a href="/buku/create">Tambah Buku</a> | <a href="/logout">Logout</a>
<table border="1">
<tr><th>Judul</th><th>Penulis</th><th>Tahun</th><th>Aksi</th></tr>
<?php foreach($buku as $b): ?>
<tr>
<td><?= $b['judul']; ?></td>
<td><?= $b['penulis']; ?></td>
<td><?= $b['tahun_terbit']; ?></td>
<td>
<a href="/buku/edit/<?= $b['id']; ?>">Edit</a> | 
<a href="/buku/delete/<?= $b['id']; ?>" onclick="return confirm('Hapus?')">Hapus</a>
</td>
</tr>
<?php endforeach; ?>
</table>
<?= $pager->links(); ?>
