<table border="1" cellpadding="4" cellspacing="0">
<thead>
<tr>
    <th>No</th>
    <th>Tanggal</th>
    <th>O1</th>
    <th>O2</th>
    <th>A1</th>
    <th>A2</th>
    <th>A3</th>
    <th>A4</th>
    <th>A5</th>
    <th>A6</th>
    <th>A7_a</th>
    <th>A7_b</th>
    <th>A7_c</th>
    <th>A7_d</th>
    <th>A7_e</th>
    <th>A7_f</th>
    <th>A7_g</th>
    <th>A7_h</th>
    <th>A7_no</th>
    <th>A7_oth</th>
    <th>A8_prov</th>
    <th>A8_kab</th>
    <th>A9</th>
    <th>A10</th>
    <th>A10_oth</th>
    <th>A11</th>
    <th>A11_oth</th>
    <th>A12_a</th>
    <th>A12_b</th>
    <th>A12_c</th>
    <th>A12_d</th>
    <th>A12_no</th>
    <?php for ($j='a'; $j <= 'm'; $j++) { ?>            
        <th>A13_<?php echo $j?></th>
    <?php } ?>            
    <th>A13_oth</th>
</tr>
</thead>
<tbody>
<?php $i=1;foreach ($result as $row) { ?>
    <tr>  
        <?php $answer = @json_decode($row->answer, true); ?>
        <td><?php echo $i++ ?></td>
        <td><?php echo $row->created_at ?></td>
        <td><?php echo @$answer[0] ?></td>
        <td><?php echo @$answer[1] ?></td>
        <td><?php echo @$answer[2] ?></td>
        <td><?php echo @$answer[3] ?></td>
        <td>'<?php echo @$answer[4] ?></td>
        <td><?php echo @$answer[5] ?></td>
        <td><?php echo @$answer[6] ?></td>
        <td><?php echo @$answer[7] ?></td>
        <?php for ($j=1; $j <= 9; $j++) { ?>            
            <td><?php echo !empty(@$answer[8][$j][0])?1:0 ?></td>
        <?php } ?>
        <td><?php echo @$answer[8][11] ?></td>
        <td><?php echo @$answer[9] ?></td>
        <td><?php echo @$answer[10] ?></td>
        <td><?php echo @$answer[11] ?></td>
        <td><?php echo $answer[12][0] ?></td>
        <td><?php echo @$answer[12][1] ?></td>
        <td><?php echo $answer[13][0] ?></td>
        <td><?php echo $answer[13][1] ?></td>
        <?php for ($j=1; $j <= 5; $j++) { ?>            
            <td><?php echo !empty(@$answer[14][$j][0])?1:0 ?></td>
        <?php } ?>
        <?php for ($j=1; $j <= 13; $j++) { ?>            
            <td><?php echo !empty(@$answer[15][$j][0])?1:0 ?></td>
        <?php } ?>
        <td><?php echo @$answer[15][15] ?></td>
    </tr>
<?php } ?>
</tbody>
</table>