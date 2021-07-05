<?= $this->include('template/admin_header'); ?>
<h2><?= $title; ?></h2>
<form action="" method="post">
    <p>
        <input type="text" name="judul" cols="60">
    </p>
    <p>
        <textarea name="isi" cols="80" rows="10"></textarea>
    </p>
    <p><input type="submit" value="Kirim" class="btn glyphicon glyphicon-send" style='background-color: blue;color: white'></p>
</form>
<?= $this->include('template/footer'); ?>