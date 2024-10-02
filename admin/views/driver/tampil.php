<div class="row">
    <div class="pull-left">
        <h4>Daftar Driver</h4>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=driver&page=add">
            <button class="btn btn-primary">Tambah</button>
        </a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>
                    #
                </td>
                <td>Nama</td><td>ID</td><td>NIK</td><td>Alamat</td><td>No Telp.</td><td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php if($driver != NULL){
                $no=1;
                foreach($driver as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['nama_driver']?></td><td><?=$row['id_driver'];?></td><td><?=$row['nik']?></td>
                        <td><?=$row['alamat_driver']?></td><td><?=$row['notelp_driver']?></td>          
                        <td>
                            <a href="index.php?mod=driver&page=edit&id=<?=md5($row['id_driver'])?>"><i class="fa fa-pencil"></i> </a>
                            <a href="index.php?mod=driver&page=delete&id=<?=md5($row['id_driver'])?>"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
               <?php $no++; }
            }?>
        </tbody>
    </table>
</div>