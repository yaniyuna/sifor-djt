<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=driver&page=save" method="POST" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Nama Driver</label>
            <input type="text" name="nama_driver" class="form-control">
        </div>
        <div class="form-group">
            <label for="">No ID</label>
            <input type="text" name="id_driver" class="form-control">
        </div>
        <div class="form-group">
            <label for="">NIK</label>
            <input type="text" name="nik" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat_driver" class="form-control">
        </div>
        <div class="form-group">
            <label for="">No Telp.</label>
            <input type="text" name="notelp_driver" class="form-control">
        </div>
    </div>
    <!--<div class="form-group">
    <label for="">Photo</label>
    <img src="../media/<?=$_POST['photo']?>" width="100">
    <input type="file" name="fileToUpload" class="form-control">
    <span class="text-danger"><?=(isset($err['fileToUpload']))?$err['fileToUpload']:'';?></span>
    </div>-->
    <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
    </div>
    </div>
</form>