<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"><hr>

<?php
date_default_timezone_set('Asia/jakarta');
$ta=date('Y-m-d');

?>

<?php
    if(isset($_POST['s_srt'])){
    date_default_timezone_set('Asia/jakarta');
      $tglm=$_POST['tglm'];
      $id=$_POST['id'];
      $no=$_POST['no'];
      $tglk=$_POST['tglk'];
      $jn=$_POST['jn'];
      $pg=$_POST['pg'];
      $n_im=$_FILES['im']['name'];
      $u_im=$_FILES['im']['size'];
      $t_im=$_FILES['im']['type'];
      $tmp_im=$_FILES['im']['tmp_name'];
      $pr=$_POST['pr'];
      $kd=date('ymd');
      $query_kd=$con->query("Select max(right(no_agndmsk,1)) from tb_suratmsk where no_agndmsk LIKE '$kd%'");
       $k=(array) $query_kd->fetch_row();
      $jml=$query_kd->num_rows;
      if($jml>0){
        $jml=$k[0]+1;
      }else{ 
         $jml=1; 
      }
      $kode=$kd.$jml;
      $patch = "image_srt-msk/".$n_im;
      if(move_uploaded_file($tmp_im, $patch)){
      $s=$con->query("Insert into tb_suratmsk values('$kode','$id','$jn','$tglk','$tglm','$no','$pg','$pr','$n_im')");
      if(!$s){
        echo "<div class='alert bg-danger' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em> Gagal Melakukan Proses Simpan Arsip Surat Masuk</div>";
      }else{
      echo "<script>alert('Berhasil Melakukan Simpan Arsip Surat Masuk');</script>";
    }

  }else{
    echo "<div class='alert bg-danger' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em> Gagal Melakukan Upload Gambar Surat Masuk</div>";
  }
    }
    ?> 
                                             <section class="panel"> 
                                          <div class="modal-content">
                                        <div class="modal-header">
                                            <h1><center>ARSIP DATA SURAT MASUK</center></h1>
                                        </div>
                                        <form method="POST"  class="form-horizontal" role="form" enctype="multipart/form-data">
                                        <div class="modal-body">
                                          <div class="col-md-6">
                                        	<label>Tanggal Masuk </label>
                                            <input type="Date" value="<?php echo $ta; ?>" readonly class="form-control" required name="tglm">
                                          </div>
                                           <div class="col-md-6">
                                          <label> ID User </label>
                                            <input type="text" class="form-control" required   readonly value="<?php echo $_SESSION['kd']; ?>" name="id"></div><br><br><br><br>

                                            <div class="col-md-6">
                                         <label> NO. Surat Masuk </label>
                                            <input type="text" class="form-control" required autofocus placeholder="NO. Surat Masuk" name="no">
                                          </div>

                                          <div class="col-md-6">
                                         <label> Tanggal Kirim </label>
                                           <input type="date" class="form-control"  placeholder="Tanggal Kirim" name="tglk"></div><br><br><br><br>


                                           <div class="col-md-6">
                                         <label> Jenis Surat </label>
                                          <select class="form-control" name="jn">
                                            
                                                <?php
                                              $tmpl_pol=$con->query("Select * from tb_jenis");
                                               while($row=$tmpl_pol->fetch_Object()){
                                                echo "<option value='$row->id_jenis'>$row->jns_srt</option>";
                                               }
                                              ?>
                                            </select></div>
                                            
                                          <div class="col-md-6">
                                         <label> Pengirm Surat </label>
                                           <input type="text" class="form-control" placeholder="Pengirm Surat" name="pg"></div><br><br><br><br>
                                      
                                             <div class="col-md-6">
                                              <label> Perihal Surat</label>
                                            <textarea class="form-control" rows="2" placeholder="Perihal Surat" name="pr"></textarea><br>
                                          </div>

                                            <div class="col-md-6">
                                               <label>  Cetak Surat</label>
                                              <input type="file" name="im" class="form-control" accept="image/*">
                                              </div><br><br><br><br><br>

                                             
                                            
                                        <div class="modal-footer">
                                       
                                         <center><button type="reset" name="b"  class="btn btn-danger">Batal</button><button type="submit" name="s_srt"  class="btn btn-primary">Simpan</button></center>
                                        </div>
                                     </form>
                                    </div>
                                      </section>
                                 </div> </div> 
