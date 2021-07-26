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
    <th>A14</th>
    <th>A15</th>
    <th>A16</th>
    <th>A17</th>
    <th>A18</th>
    <th>A19_f</th>
    <th>A19_m</th>
    <th>A20_f</th>
    <th>A20_m</th>
    <th>A21_f</th>
    <th>A21_m</th>
    <th>A22_a</th>
    <th>A22_b</th>
    <th>A22_c</th>
    <th>A22_d</th>
    <th>A22_e</th>
    <th>A23</th>
    <th>B1</th>
    <th>B2_a</th>
    <th>B2_b</th>
    <th>B2_c</th>
    <th>B2_d</th>
    <th>B2_no</th>
    <th>B3</th>
    <?php for ($j='a'; $j <= 'l'; $j++) { ?>            
        <th>B4_<?php echo $j?></th>
    <?php } ?>            
    <th>B4_oth</th>
    <?php for ($j='a'; $j <= 'e'; $j++) { ?>            
        <th>B5_<?php echo $j?></th>
    <?php } ?>            
    <th>B5_no</th>
    <th>C1_f</th>
    <th>C1_f_dis</th>
    <th>C1_m</th>
    <th>C1_m_dis</th>
    <?php for ($j='a'; $j <= 'p'; $j++) { ?>            
        <th>C2_<?php echo $j?></th>
    <?php } ?>            
    <th>C2_no</th>
    <?php for ($j='a'; $j <= 'p'; $j++) { ?>            
        <th>C3_<?php echo $j?></th>
    <?php } ?>            
    <th>C3_no</th>
    <?php for ($j='a'; $j <= 'd'; $j++) { ?>            
        <th>C4_<?php echo $j?></th>
    <?php } ?>            
    <?php for ($j='a'; $j <= 'f'; $j++) { ?>            
        <th>C5_a_<?php echo $j?></th>
    <?php } ?>    
    <th>C5_a_no</th>        
    <?php for ($j='a'; $j <= 'f'; $j++) { ?>            
        <th>C5_b_<?php echo $j?></th>
    <?php } ?>    
    <th>C5_b_no</th>        
    <?php for ($j='a'; $j <= 'i'; $j++) { ?>            
        <th>C5_c_<?php echo $j?></th>
    <?php } ?>    
    <th>C5_c_no</th>        
    <th>C6</th>        
    <th>C7</th>        
    <?php for ($j='a'; $j <= 'g'; $j++) { ?>            
        <th>C8_<?php echo $j?></th>
    <?php } ?>    
    <th>C8_no</th>        
    <?php for ($j='a'; $j <= 'd'; $j++) { ?>            
        <th>C9_<?php echo $j?></th>
    <?php } ?>    
    <th>C9_no</th> 
    <?php for ($j='a'; $j <= 'd'; $j++) { ?>            
        <th>D1_<?php echo $j?></th>
    <?php } ?>    
    <?php for ($j=2; $j <= 7; $j++) { ?>            
        <th>D<?php echo $j?></th>
    <?php } ?>    
    <th>E1</th>
    <th>E2</th>
    <?php for ($j='a'; $j <= 'g'; $j++) { ?>            
        <th>E3_<?php echo $j?></th>
    <?php } ?>    
    <th>E3_no</th> 
    <?php for ($j='a'; $j <= 'g'; $j++) { ?>            
        <th>E4_<?php echo $j?></th>
    <?php } ?>    
    <th>E5</th> 
    <?php for ($j='a'; $j <= 'g'; $j++) { ?>            
        <th>E6_<?php echo $j?></th>
    <?php } ?>    
    <th>E6_no</th> 
    <?php for ($j='a'; $j <= 'j'; $j++) { ?>            
        <th>F1_<?php echo $j?></th>
    <?php } ?>    
    <th>F1_no</th> 
    <?php for ($j='a'; $j <= 'd'; $j++) { ?>            
        <th>F2_<?php echo $j?></th>
    <?php } ?>    
    <th>F3</th> 
    <th>F4</th> 
    <?php for ($j='a'; $j <= 'g'; $j++) { ?>            
        <th>G1_<?php echo $j?></th>
    <?php } ?>    
    <th>G1_no</th> 
    <?php for ($j='a'; $j <= 'c'; $j++) { ?>            
        <th>G2_<?php echo $j?></th>
    <?php } ?> 
    <th>G3</th>    
    <th>G4</th>    
    <th>Source</th>    
        
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
        <td><?php echo @$answer[13][1] ?></td>
        <?php for ($j=1; $j <= 5; $j++) { ?>            
            <td><?php echo !empty(@$answer[14][$j][0])?1:0 ?></td>
        <?php } ?>
        <?php for ($j=1; $j <= 13; $j++) { ?>            
            <td><?php echo !empty(@$answer[15][$j][0])?1:0 ?></td>
        <?php } ?>
        <td><?php echo @$answer[15][15] ?></td>
        <td><?php echo @$answer[16] ?></td>
        <td><?php echo @$answer[17] ?></td>
        <td><?php echo @$answer[18] ?></td>
        <td><?php echo @$answer[19] ?></td>
        <td><?php echo @$answer[20] ?></td>
        <td><?php echo @$answer[21][0] ?></td>
        <td><?php echo @$answer[21][1] ?></td>
        <td><?php echo @$answer[22][0] ?></td>
        <td><?php echo @$answer[22][1] ?></td>
        <td><?php echo @$answer[23][0] ?></td>
        <td><?php echo @$answer[23][1] ?></td>
        <td><?php echo substr(@$answer[24][1][0],0,1) ?></td>
        <td><?php echo substr(@$answer[24][2][0],0,1) ?></td>
        <td><?php echo substr(@$answer[24][3][0],0,1) ?></td>
        <td><?php echo substr(@$answer[24][4][0],0,1) ?></td>
        <td><?php echo substr(@$answer[24][5][0],0,1) ?></td>
        <td><?php echo @$answer[25] ?></td>
        <td><?php echo @$answer[26] ?></td>
        <?php for ($j=1; $j <= 5; $j++) { ?>            
            <td><?php echo !empty(@$answer[27][$j][0])?1:0 ?></td>
        <?php } ?>
        <td><?php echo @$answer[28] ?></td>
        <?php for ($j=1; $j <= 12; $j++) { ?>            
            <td><?php echo !empty(@$answer[29][$j][0])?1:0 ?></td>
        <?php } ?>
        <td><?php echo @$answer[29][14] ?></td>
        <?php for ($j=1; $j <= 6; $j++) { ?>            
            <td><?php echo !empty(@$answer[30][$j][0])?1:0 ?></td>
        <?php } ?>
        <td><?php echo @$answer[31][0] ?></td>
        <td><?php echo @$answer[31][1] ?></td>
        <td><?php echo @$answer[31][2] ?></td>
        <td><?php echo @$answer[31][3] ?></td>
        <?php for ($j=1; $j <= 17; $j++) { ?>            
            <td><?php echo !empty(@$answer[32][$j][0])?1:0 ?></td>
        <?php } ?>
        <?php for ($j=1; $j <= 17; $j++) { ?>            
            <td><?php echo !empty(@$answer[33][$j][0])?1:0 ?></td>
        <?php } ?>
        <?php for ($j=0; $j <= 3; $j++) { ?>            
            <td><?php echo @$answer[34][$j] ?></td>
        <?php } ?>
        <?php for ($j=1; $j <= 7; $j++) { ?>            
            <td><?php echo !empty(@$answer[35][0][$j][0])?1:0 ?></td>
        <?php } ?>
        <?php for ($j=1; $j <= 7; $j++) { ?>            
            <td><?php echo !empty(@$answer[35][1][$j][0])?1:0 ?></td>
        <?php } ?>
        <?php for ($j=1; $j <= 10; $j++) { ?>            
            <td><?php echo !empty(@$answer[35][2][$j][0])?1:0 ?></td>
        <?php } ?>
        <td><?php echo @$answer[36] ?></td>
        <td><?php echo @$answer[37] ?></td>
        <?php for ($j=1; $j <= 8; $j++) { ?>            
            <td><?php echo !empty(@$answer[38][$j][0])?1:0 ?></td>
        <?php } ?>
        <?php for ($j=1; $j <= 5; $j++) { ?>            
            <td><?php echo !empty(@$answer[39][$j][0])?1:0 ?></td>
        <?php } ?>
        <?php for ($j=0; $j <= 3; $j++) { ?>            
            <td><?php echo @$answer[40][$j] ?></td>
        <?php } ?>
        <?php for ($j=41; $j <= 48; $j++) { ?>            
            <td><?php echo @$answer[$j] ?></td>
        <?php } ?>
        <?php for ($j=1; $j <= 8; $j++) { ?>            
            <td><?php echo !empty(@$answer[49][$j][0])?1:0 ?></td>
        <?php } ?>
        <?php for ($j=1; $j <= 7; $j++) { ?>            
            <td><?php echo !empty(@$answer[50][$j][0])?1:0 ?></td>
        <?php } ?>
        <td><?php echo @$answer[51] ?></td>
        <?php for ($j=1; $j <= 8; $j++) { ?>            
            <td><?php echo !empty(@$answer[52][$j][0])?1:0 ?></td>
        <?php } ?>
        <?php for ($j=1; $j <= 11; $j++) { ?>            
            <td><?php echo !empty(@$answer[53][$j][0])?1:0 ?></td>
        <?php } ?>
        <?php for ($j=0; $j <= 3; $j++) { ?>            
            <td><?php echo @$answer[54][$j] ?></td>
        <?php } ?>
        <td><?php echo @$answer[55] ?></td>
        <td><?php echo @$answer[56] ?></td>
        <?php for ($j=1; $j <= 8; $j++) { ?>            
            <td><?php echo !empty(@$answer[57][$j][0])?1:0 ?></td>
        <?php } ?>
        <?php for ($j=0; $j <= 2; $j++) { ?>            
            <td><?php echo @$answer[58][$j] ?></td>
        <?php } ?>
        <td><?php echo @$answer[59] ?></td>
        <td><?php echo @$answer[60] ?></td>
        <td><?php echo @$row->source ?></td>
    </tr>
<?php } ?>
</tbody>
</table>