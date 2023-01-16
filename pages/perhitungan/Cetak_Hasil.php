<?php  
	require_once __DIR__ . '/../../vendor/autoload.php';
	require '../../config/koneksi_db.php';

	function printData($query) {
	    global $koneksi;

	    $dataAlter = mysqli_query($koneksi, $query);
	    $row = [];
	    while ($data = mysqli_fetch_assoc($dataAlter)) {
	      $row [] = $data;
	    }

	    return $row;
	} 

	$printNorm = printData("SELECT * FROM hasil_normalisasi");
	
	$printPref = "SELECT data_alternatif.Nama_Framework, hasil_preferensi.K1, hasil_preferensi.K2, hasil_preferensi.K3, 
  hasil_preferensi.K4, hasil_preferensi.K5, hasil_preferensi.K6, hasil_preferensi.Total FROM data_alternatif 
  RIGHT JOIN hasil_preferensi ON data_alternatif.ID_Alternatif = hasil_preferensi.ID_Pref ORDER BY Total DESC";
	$hasilPref = printData($printPref);

	$mpdf = new \Mpdf\Mpdf();
	$headerTitle = '<div>
											<h1 style="font-size: 22px;"><i>Sistem Keputusan Pemilihan Framework CSS (SAW)</i></h1>
											<hr style="color: black; border: none; margin-top: -6px;">
									</div>';

	$waktu = '<p style="margin-top: -3px;"><i>'. date("D, j F Y") .'</i></p>';

	$header1 = '<div>
    		      <h2 style="font-size: 16px;">Hasil Normalisasi</h2>
    		   </div>';

   	$tabel1 = '<table border="1" cellspacing="0" cellpadding="5" style="width: 100%; text-align: center; font-size: 13px; 
   	margin-top: -5px;">
              <thead>
                <tr class="text-center">
                  <th>Kriteria</th>
                  <th>Alternatif 1</th>
                  <th>Alternatif 2</th>
                  <th>Alternatif 3</th>
                  <th>Alternatif 4</th>
                  <th>Alternatif 5</th>
                  <th>Alternatif 6</th>
                </tr>
              </thead>
              <tbody>';  
                  $no1 = 1;
                  foreach($printNorm as $data1) {
			      $tabel1 .= '<tr>
			                    <td style="font-weight: bold;">K'. $no1 .'</td>
			                    <td>'. $data1['K1'] .'</td>
			                    <td>'. $data1['K2'] .'</td>
			                    <td>'. $data1['K3'] .'</td>
			                    <td>'. $data1['K4'] .'</td>
			                    <td>'. $data1['K5'] .'</td>
			                    <td>'. $data1['K6'] .'</td>
			                 </tr>';
                    	$no1++; 
                  }
			     $tabel1 .= '</tbody>
			            	</table>'; 

	$header2 = '<div>
	              <h2 style="font-size: 16px; margin-top: 26px;">Hasil Preferensi</h2>
	           </div>';

	$tabel2 = '<table border="1" cellspacing="0" cellpadding="5" style="width: 100%; text-align: center; font-size: 13px;
	margin-top: -5px;">
              <thead>
                <tr class="text-center">
                  <th>Urutan</th>
                  <th>Alternatif</th>
                  <th>K1</th>
                  <th>K2</th>
                  <th>K3</th>
                  <th>K4</th>
                  <th>K5</th>
                  <th>K6</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody class="text-center"> '; 
                  $no2 = 1;  
                  foreach ($hasilPref as $data2) {
		          $tabel2 .= '<tr>
			                    <td>'. $no2 .'</td>
			                    <td>'. $data2['Nama_Framework'] .'</td>
			                    <td>'. $data2['K1'] .'</td>
			                    <td>'. $data2['K2'] .'</td>
			                    <td>'. $data2['K3'] .'</td>
			                    <td>'. $data2['K4'] .'</td>
			                    <td>'. $data2['K5'] .'</td>
			                    <td>'. $data2['K6'] .'</td>
			                    <td>'. $data2['Total'] .'</td>
			                  </tr>';
			             		$no2++;
			                  }
            	  $tabel2 .='</tbody>
            			 	</table>';

  function hasilTertinggi($query) {
	    global $koneksi;

	    $dataAlter = mysqli_query($koneksi, $query);
	    $row = [];
	    while ($data = mysqli_fetch_row($dataAlter)) {
	      $row [] = $data;
	    }

	    return $row;
	}

	$nilai = hasilTertinggi("SELECT MAX(Total) AS Total FROM hasil_preferensi");
	$hasil = $nilai[0][0];

	$alter = hasilTertinggi($printPref);
	$hasilAlt = $alter[0][0];

  $kesimpulan = '<p style="margin-top: 23px; line-height: 22px; text-align: justify;"><i>Berdasarkan jumlah alternatif, nilai bobot 
  masing-masing kriteria serta penilaian yang ada, hasil dari pemilihan framework CSS dengan metode SAW ini untuk nilai tertinggi pada 
  hasil preferensi adalah '.$hasil.'. Jadi kesimpulannya framework yang cocok dan dapat dipelajari oleh 
  pemula adalah '.$hasilAlt.'.</i></p>';

  $mpdf->WriteHTML($headerTitle);
  $mpdf->WriteHTML($waktu);
  $mpdf->WriteHTML($header1);
	$mpdf->WriteHTML($tabel1);
  $mpdf->WriteHTML($header2);
	$mpdf->WriteHTML($tabel2);
	$mpdf->WriteHTML($kesimpulan);

	$mpdf->Output('SPK_Hasil_Keputusan.pdf', \Mpdf\Output\Destination::INLINE);

?>