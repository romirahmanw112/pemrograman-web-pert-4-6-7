<?= $this->include('template/admin_header'); ?>
<h2><?= $title; ?></h2>
<form action="" method="post" enctype="multipart/form-data">
    <p>
        <input type="text" name="judul" value="<?= isset($data['judul']) ? esc($data['judul']) : ''; ?>">
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"><?= isset($data['isi']) ? esc($data['isi']) : ''; ?></textarea>
    </p>
    <p>
        <input type="file" name="gambar">
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>
<?= $this->include('template/admin_footer'); ?>