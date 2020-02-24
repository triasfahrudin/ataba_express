<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Cetak Resi</title>
      <!-- Normalize or reset CSS with your favorite library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
      <!-- Load paper.css for happy printing -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.2.3/paper.css">
      <!-- Set page size here: A5, A4 or A3 -->
      <!-- Set also "landscape" if you need -->
      <style>@page { size: A5 landscape }</style>
   </head>
   <!-- Set "A5", "A4" or "A3" for class name -->
   <!-- Set also "landscape" if you need -->
   <body class="A5 landscape" onload="window.print()">
      <!-- Each sheet element should have the class "sheet" -->
      <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
      <section class="sheet padding-10mm" style="padding-top: 20px;">
        <table cellspacing="0" border="0">
        	<colgroup width="85"></colgroup>
        	<colgroup width="113"></colgroup>
        	<colgroup width="18"></colgroup>
        	<colgroup width="148"></colgroup>
        	<colgroup width="16"></colgroup>
        	<colgroup width="103"></colgroup>
        	<colgroup width="126"></colgroup>
        	<tr>
        		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=5 height="88" align="center" valign=middle> <img src="<?php echo site_url('assets/web/images/logo_print.png')?>" /></td>
        		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="center" valign=middle><b><font size=3>TANDA BUKTI PENGIRIMAN PAKET</font></b></td>
        		</tr>
        	<tr>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" align="left"><br></td>
        	</tr>
        	<tr>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" colspan=4 align="left" valign=middle><?php echo strtoupper($cabang['nama'])?></td>
        		</tr>
        	<tr>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" colspan=4 align="left" valign=middle><?php echo strtoupper($cabang['alamat'])?></td>
        		</tr>
        	<tr>
        		<td style="border-bottom: 1px solid #000000" align="left"><br></td>
        		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="left" valign=middle><?php echo strtoupper($cabang['telp'])?></td>
        		</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td align="left"><br></td>
        		<td style="border-bottom: 1px solid #000000" rowspan=20 align="center" valign=middle><br></td>
        		<td align="left"><br></td>
        		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=3 align="center" valign=middle><img src="<?php echo generate_barcode('resi',$paket['tracking_code'])?>" /></td>
        		</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		<td style="border-bottom: 1px solid #000000" rowspan=17 align="center" valign=middle><br></td>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" align="left"><br></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" colspan=2 height="17" align="center" valign=middle><b>PENGIRIM</b></td>
        		<td align="center" valign=middle><b>ALAMAT PENGIRIM</b></td>
        		<td align="left">Isi Paket</td>
        		<td style="border-right: 1px solid #000000" align="left"><?php echo $paket['isi_paket']?></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" colspan=2 height="17" align="center" valign=middle><?php echo $paket['pengirim']?></td>
        		<td rowspan=3 align="center" valign=middle><?php echo $paket['alamat_pengirim']?></td>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" align="left"><br></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" colspan=2 height="17" align="center" valign=middle><?php echo $paket['telp_pengirim']?></td>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" align="left"><br></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left">Berat</td>
        		<td style="border-right: 1px solid #000000" align="left"><?php echo $paket['berat']?></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" align="left"><br></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" colspan=2 height="17" align="center" valign=middle><b>PENERIMA</b></td>
        		<td align="center" valign=middle><b>ALAMAT PENERIMA</b></td>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" align="left"><br></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" colspan=2 height="17" align="center" valign=middle><?php echo $paket['penerima']?></td>
        		<td rowspan=3 align="center" valign=middle><?php echo $paket['alamat_penerima']?></td>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" align="left"><br></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" colspan=2 height="17" align="center" valign=middle><?php echo $paket['telp_penerima']?></td>
        		<td align="left">Biaya Kirim</td>
        		<td style="border-right: 1px solid #000000" align="left" valign=middle><?php echo format_rupiah($paket['biaya_kirim'])?></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left">Biaya Packing</td>
        		<td style="border-right: 1px solid #000000" align="left" valign=middle><?php echo format_rupiah($paket['biaya_packing'])?></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><b>TOTAL</b></td>
        		<td style="border-right: 1px solid #000000" align="left" valign=middle><b><?php echo format_rupiah($paket['biaya_total'])?></b></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" align="left"><br></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="center">Petugas</td>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" align="center">Pengirim</td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" align="left"><br></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" align="left"><br></td>
        	</tr>
        	<tr>
        		<td style="border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td align="left"><br></td>
        		<td align="left">(…..............................)</td>
        		<td align="left"><br></td>
        		<td style="border-right: 1px solid #000000" align="left">(…........................)</td>
        	</tr>
        	<tr>
        		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="17" align="left"><br></td>
        		<td style="border-bottom: 1px solid #000000" align="left"><br></td>
        		<td style="border-bottom: 1px solid #000000" align="left"><br></td>
        		<td style="border-bottom: 1px solid #000000" align="left"><br></td>
        		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left"><br></td>
        	</tr>
        	<tr>
        		<td colspan=7 rowspan=2 height="34" align="center" valign=middle>Dengan menandatangani tanda bukti ini, pengirim telah membaca, memahami dan sepakat untuk terikat dengan Standart Pengiriman Ataba Express</td>
        		</tr>
        </table>

         <!-- Write HTML just like a web page -->

         <!-- ************************************************************************** -->
   </body>
   </section>
   </body>
</html>
