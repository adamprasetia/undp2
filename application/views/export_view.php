<table border="1" cellpadding="4" cellspacing="0">
<thead>
<tr>
    <th rowspan=3>No</th>
    <th rowspan=3>Apakah Bapak/Ibu adalah pemilik usaha?</th>
    <th rowspan=3>Jika ya, apakah Bapak/Ibu bersedia menjadi responden survei ini?</th>
    <th rowspan=1 colspan=22>A. Profil Usaha</th>
</tr>
<tr>
    <th rowspan=1 colspan=2>A1. Pemilik Usaha</th>
    <th rowspan=2 colspan=1>A2. Jenis Kelamin</th>
    <th rowspan=2 colspan=1>A3. Usia pemilik usaha</th>
    <th rowspan=2 colspan=1>A4. Apakah pemilik usaha merupakan penyandang disabilitas?</th>
    <th rowspan=2 colspan=1>A5. Disabilitas apa yang dimiliki oleh pemilik usaha?</th>
    <th rowspan=1 colspan=2>A6. Lokasi Usaha:</th>
    <th rowspan=2 colspan=1>A7. Jenis Produk Usaha yang dilaksanakan?</th>
    <th rowspan=2 colspan=1>A8. Berapakah penjualan atau omzet usaha Bapak/Ibu selama satu tahun ke belakang (Juni 2020 - Juni 2021)?</th>
    <th rowspan=1 colspan=2>A9. Berapakah jumlah pekerja Bapak/Ibu yang bekerja tetap/penuh waktu (termasuk pemilik/anda sendiri) selama satu tahun ke belakang (Juni 2020 - Juni 2021)?</th>
    <th rowspan=1 colspan=2>A10. Berapakah jumlah pekerja Bapak/Ibu yang bekerja lepas/paruh waktu selama satu tahun ke belakang (Juni 2020 - Juni 2021)?</th>
    <th rowspan=1 colspan=4>A11. Berapakah jumlah pekerja Bapak/Ibu yang dirumahkan selama enam bulan ke belakang (Juni 2020 - Juni 2021)?</th>
    <th rowspan=2 colspan=1>A12. Apabila Bapak/Ibu harus merumahkan pekerja akibat pandemi, urutkan karakteristik pekerja berikut yang akan menjadi prioritas untuk anda rumahkan</th>
    <th rowspan=2 colspan=1>A13. Apakah Bapak/Ibu tergabung dalam asosiasi/forum/komunitas usaha tertentu?</th>
    <th rowspan=2 colspan=1>A14. Sebutkan asosiasi/forum/komunitas usaha tempat anda bergabung?</th>
    <th rowspan=2 colspan=1>A15. Apabila saat ini Bapak/Ibu tidak tergabung dalam asosiasi/ forum/ komunitas usaha, apakah anda tertarik untuk membentuk/bergabung?</th>
</tr>
<tr>
    <th rowspan=1>Nama</th>
    <th rowspan=1>No. Telepon</th>
    <th rowspan=1>Provinsi</th>
    <th rowspan=1>Kabupaten/Kota</th>
    <th rowspan=1>Wanita</th>
    <th rowspan=1>Pria</th>
    <th rowspan=1>Wanita</th>
    <th rowspan=1>Pria</th>
    <th rowspan=1>Wanita</th>
    <th rowspan=1>Wanita dengan disabilitas</th>
    <th rowspan=1>Pria</th>
    <th rowspan=1>Pria dengan disabilitas</th>
</tr>
</thead>
<tbody>
    <?php $i=1;foreach ($result as $row) { ?>
    <tr>  
        <?php $answer = @json_decode($row->answer, true); ?>
        <td><?php echo $i++ ?></td>
        <td><?php echo @$answer[0] ?></td>
        <td><?php echo @$answer[1] ?></td>
        <td><?php echo @$answer[2][0] ?></td>
        <td>'<?php echo @$answer[2][1] ?></td>
        <td><?php echo @$answer[3] ?></td>
        <td><?php echo @$answer[4] ?></td>
        <td><?php echo @$answer[5] ?></td>
        <td><?php echo implode(',',@$answer[6]) ?></td>
        <td><?php echo @$answer[7] ?></td>
        <td><?php echo @$answer[8] ?></td>
        <td><?php echo implode(',',@$answer[9]) ?></td>
        <td><?php echo @$answer[10] ?></td>
        <td><?php echo @$answer[11][0] ?></td>
        <td><?php echo @$answer[11][1] ?></td>
        <td><?php echo @$answer[12][0] ?></td>
        <td><?php echo @$answer[12][1] ?></td>
        <td><?php echo @$answer[13][0] ?></td>
        <td><?php echo @$answer[13][1] ?></td>
        <td><?php echo @$answer[13][2] ?></td>
        <td><?php echo @$answer[13][3] ?></td>
        <td><?php echo implode(',',@$answer[14]) ?></td>
        <td><?php echo @$answer[15] ?></td>
        <td><?php echo @$answer[16] ?></td>
        <td><?php echo @$answer[17] ?></td>
    </tr>
    <?php } ?>
</tbody>
</table>