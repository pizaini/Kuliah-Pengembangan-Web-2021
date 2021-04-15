<?php
/**
 * Created by Pizaini <pizaini@uin-suska.ac.id>
 * Date: 15/04/2021
 * Time: 14:13
 */
include 'koneksi.php';

?>
<h1>Ini include koneksi PHP</h1>

<?php
$querySelect = 'select * from mahasiswa';
$result = $conn->query($querySelect);
if(!$result === false): ?>
    <table border="1">
        <thead>
        <tr>
            <th>#</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($result as $no => $mahasiswa): ?>
            <tr>
                <td><?=++$no?></td>
                <td><?=$mahasiswa['nim']?></td>
                <td><?=$mahasiswa['nama']?></td>
                <td><?=$mahasiswa['alamat']?></td>
                <td>
                    <a href="detail.php?id=<?=$mahasiswa['id']?>">Detail</a> |
                    <a href="delete.php?id=<?=$mahasiswa['id']?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif;