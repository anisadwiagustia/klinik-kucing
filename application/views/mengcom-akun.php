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
        <form action="<?= base_url('Mengcom/model'); ?>" method="post">
            <table>
                <tr>
                    <th><label for="nama">Nama</label></th>
                    <td><input type="text" id="nama" name="nama" required class="frm"><br><br></td>
                </tr>
                <tr>
                    <th><label for="panggilan">Nama Pengguna</label></th>
                    <td><input type="text" id="panggilan" name="panggilan" class="frm"><br><br></td>
                </tr>
                <tr>
                    <th><label for="email">Email</label></th>
                    <td><input type="email" id="email" name="email" required class="frm"><br><br></td>
                </tr>
                <tr>
                    <th><label for="alamat">Alamat</label></th>
                    <td><textarea id="alamat" name="alamat" rows="4" class="frm"></textarea><br><br></td>
                </tr>
                <tr>
                    <th><label for="no_hp">Nomor HP</label></th>
                    <td><input type="tel" id="no_hp" name="no_hp" class="frm"><br><br></td>
                </tr>
                <tr>
                    <th><label for="bio">Bio</label></th>
                    <td><textarea id="Bio" name="bio" rows="5" class="frm"></textarea><br><br></td>
                </tr>
            </table>
            <input type="submit" value="Update" class="edt">
        </form>
    </div>
</div>

</html>