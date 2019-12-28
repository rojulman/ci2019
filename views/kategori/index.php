<h1><?php echo $judul?></h1>

<table border="1" width="100%">
<thead>
   <tr>
       <th>No</th><th>ID</th><th>Nama</th>
   </tr>
</thead>
<tbody>
	<?php 
	    $nomor =1;
 		foreach($kategoris as $row){
 			echo '<tr><td>'.$nomor.'</td>';
 			echo '<td>'.$row->id.'</td>';
 			echo '<td>'.$row->nama.'</td>';
 			echo '</tr>';
 			$nomor++;
 		}
 	?> 
</tbody>
</table>