<h1><?php echo $judul?></h1>
<table border="1" width="100%">
<thead>
   <tr>
       <th>No</th><th>ID</th><th>Nama</th>
       <th>Abbr</th><th>Alamat</th>
       <th>Telpon</th>
       <th>Aksi</th>
   </tr>
</thead>
<tbody>
	<?php 
	    $nomor =1;
 		foreach($deps as $row){
 			echo '<tr><td>'.$nomor.'</td>';
 			echo '<td>'.$row->id.'</td>';
 			echo '<td>'.$row->nama.'</td>';
 			echo '<td>'.$row->abbr.'</td>';
 			echo '<td>'.$row->alamat.'</td>';
 			echo '<td>'.$row->telpon.'</td>';
 			echo '<td><a href="'.base_url('departemen/edit/'.$row->id).'">Edit</a> |
 				<a href="'.base_url('departemen/delete/'.$row->id).'">Hapus</a>
 			</td>';
 			echo '</tr>';
 			$nomor++;
 		}
 	?> 
</tbody>
</table>
<a href="<?php echo base_url().'departemen/form'?>">
Tambah
</a>