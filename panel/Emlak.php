<?php require 'header.php'; 

?>

    <!-- Main content -->
    <section> <class="content">
      <div class="row">
        
          </div>
        </section>  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Site Ayarları</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Başlık</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['baslik'] ?>" placeholder="Site Başlığını girin">
                  </div>
           
                  <div class="form-group">
                    <label for="exampleInputEmail1">Açıklama</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['aciklama'] ?>" placeholder="Site Açıklamasını girin">
                  </div>
             
                  <div class="form-group">
                    <label for="exampleInputEmail1">Anahtar Kelime</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $ayarcek['keyword'] ?>" placeholder="Sitenin anahtar kelimesini girin">
                  </div>




                </div>
      
    
          
       
        
        
     
        
   
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Gönder</button>
                </div>
              </form>
            </div>
          </section>

      
        </div>
       
      </div>
    
  <!-- /.content-wrapper -->
  <?php require'footer.php'; ?>