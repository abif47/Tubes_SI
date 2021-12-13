<?php 
session_start();
include "../../lib/config_web.php";
include "../../lib/koneksi.php";
include "../templates/header.php"; ?>

        <!-- page content -->
        <div class="right_col" role="main">
                 <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Pasien</span>
          
              <div class="count">20</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i> From last Month</span>
           
            
             
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Obat</span>
              <div class="count">100</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i> From last Month</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Resep</span>
              <div class="count green">20</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i> From last Month</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Supplier</span>
              <div class="count">20</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i></i> From last Month</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Pembelian</span>
              <div class="count">20</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i> From last Month</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Penjualan</span>
              <div class="count">20</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i> From last Month</span>
            </div>
          </div>
        <!-- /page content -->
<?php include "../templates/footer.php"; ?>