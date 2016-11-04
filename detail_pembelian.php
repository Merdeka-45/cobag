<?php
include("header.php");
require_once ("koneksi.php");

        $id_detail = $_GET['id'];
        function toRupiah($num){
          return "Rp ".number_format($num,0,'','.');
        }

          $queryInvoDetail = $conn->query("SELECT a.quantity, b.* FROM pembelian_detail AS a INNER JOIN barang AS b ON a.id_barang = b.id WHERE a.id_pembelian='$id_detail' ");

          if($queryInvoDetail)
          {
            echo "<a class='btn btn-primary' href='configuration.php'
            style='margin:3%;'>Kembali</a>";    
            echo "<table class='table'>

            <thead>

              <tr>
                <th><center>No</center></th>
                <th><center>Barang</center></th>
                <th><center>Gambar</center></th>
                <th><center>Jumlah</center></th>
                <th><center>Harga</center></th>
                <th><center>Total</center></th>
              </tr>

            </thead><tbody>";
            $no = 1;
            while($fetchInvoDetail = $queryInvoDetail->fetch_object())
            {
              echo "<tr>
                <td>".$no."</td>
                <td>".$fetchInvoDetail->nama_barang."</td>
                <td><img style='width:150px;' src='images/Gallery/".$fetchInvoDetail->gambar."' alt='images'/></td>
                <td>".$fetchInvoDetail->quantity."</td>
                <td>".toRupiah($fetchInvoDetail->harga)."</td>
                <td>".toRupiah($fetchInvoDetail->harga * $fetchInvoDetail->quantity)."</td>
              </tr>";
              $no++;
            }
            echo "</tbody></table>";
          }
?>
<?php include("footer.php"); ?>
