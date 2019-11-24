<div class='container-fluid'>
  
  <div class="row text-center mt-4" >

    <?php foreach ($wisata as $wst) : ?>

      <div class="card ml-3 mb-2" style="width: 16rem">
        <div class="card" style="width: 16rem;">
          <img src="<?php echo base_url().'/uploads/'.$wst->gambar_wisata ?>" class="card-img-top" class="card-image">
          <div class="card-body text-danger">
            <h5 class="card-title mb-2"><?php echo $wst->nama_wisata ?></h5>
            <!-- <small><?php echo $wst->tempat_wisata ?></small><br> -->
            <span class="badge badge-warning mb-3">Rp. <?php echo number_format($wst->harga,0,',','.')  ?></span><br>
            <?php echo anchor('wisata/booking/'.$wst->id_wisata,'<div class="btn btn-sm btn-primary"> Booking </div>')?>
            <?php echo anchor('wisata/detail/'.$wst->id_wisata,'<div class="btn btn-sm btn-info"> Detail </div>')?>            
          </div>
        </div>
      </div>

    <?php endforeach; ?>

  </div>

</div>