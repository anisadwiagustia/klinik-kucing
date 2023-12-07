<html>
<br> <br> <br> <br>
<div class="jdl">
    <h1>Profil Aku</h1>
</div>
<div class="main-prof">
    <div class="prof-img">
        <img src="<?php echo base_url(); ?>assets/img/profgrey.png">
    </div>
    <div class="prof">
        <form action="<?= base_url('Mengcom/akun'); ?>" method="post">
        <br><br><br><br>
            <table>
                <tr>
                    <th><label for="nama">Nama:</label></th>
                    <td><?php echo $nama; ?><br></td>
                </tr>
                <tr>
                    <th><label for="panggilan">Nama Panggilan:</label></th>
                    <td><?php echo $panggilan; ?><br></td>
                </tr>
                <tr>
                    <th><label for="email">Email:</label></th>
                    <td><strong><?php echo $email; ?></strong><br></td>
                </tr>
                <tr>
                    <th><label for="alamat">Alamat:</label></th>
                    <td><?php echo $alamat; ?><br></td>
                </tr>
                <tr>
                    <th><label for="no_hp">Nomor HP:</label></th>
                    <td><?php echo $no_hp; ?><br></td>
                </tr>
                <tr>
                    <th><label for="bio">Bio:</label></th>
                    <td><?php echo $bio; ?><br></td>
                </tr>
            </table>
            <input type="submit" value="Edit" class="edt">
        </form>
        
    </div>
</div>

</html>