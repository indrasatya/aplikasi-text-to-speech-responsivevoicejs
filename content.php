<?php
// fungsi untuk pengecekan halaman konten yang dipilih
// jika halaman konten yang dipilih pemberitahuan, panggil file view pemberitahuan
if ($_GET['page']=='pemberitahuan') {
	include "pages/pemberitahuan/view.php";
}
// ---------------------------------------------------------------------------------
?>