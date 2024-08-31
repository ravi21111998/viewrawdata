<div class="main-panel">
  <div class="content-wrapper">
    <div class="container-fluid rounded bg-white mt-5 mb-5">
      <div class="row">       
        <div class="col-md-5 border-right">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="text-right">Profile</h4>
            </div>
            <form action="<?= site_url('UserController/test')?>" method="post">
                <div class="col-md-12">
                  <label class="labels">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="First name" value="">
                </div>

                <div class="col-md-12">
                  <label class="labels">image</label>
                  <input type="file" class="form-control" name="image">
                  <?php if($img_error):echo $img_error;endif;?>
                </div>

              <div class="mt-5 text-center d-flex justify-content-between">
                <button class="btn btn-primary profile-button" name="submit" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>