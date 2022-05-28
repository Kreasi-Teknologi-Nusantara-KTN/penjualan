<?php 
include 'header.php';
include 'sidebar.php';
?>

<?php
$a = mysql_query("select * from barang_laku");
?>

<!-- <div class="col-md-10">
	<h3>Selamat datang</h3>	
    <h3>Aplikasi Penjualan Sederhana</h3>
    <h3>WWW.MALASNGODING.COM</h3>
</div> -->
<!-- kalender -->
<!-- <div class="pull-right">
	<div id="kalender"></div>
</div> -->

<!-- Main Content -->
<div class="main-content">
        <section class="section">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">Statistik
              
                  </div>
                  <div class="card-stats-items mb-3">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">24</div>
                      <div class="card-stats-item-label">Pending</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">12</div>
                      <div class="card-stats-item-label">Shipping</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">23</div>
                      <div class="card-stats-item-label">Completed</div>
                    </div>
                  </div>
                </div>
      
               
              </div>
            </div>
        
          </div>
       
        
        </section>
      </div>







<?php 
include 'footer.php';

?>