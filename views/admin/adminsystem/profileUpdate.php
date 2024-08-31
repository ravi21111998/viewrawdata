<style>
  .profile-cover-avatar input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: -1;
    opacity: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(19,33,68,.25);
    border-radius: 50%;
    transition: .2s;
}
</style>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="container-fluid rounded bg-white mt-5 mb-5">
      <div class="row">
        <div class="col-md-3 border-right">
          <form action="<?php base_url('UserController/profileImg')?>" method="post" enctype="multipart/form-data">
          <!-- <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img class="rounded-circle mt-5" width="150px" src="pro.jpg" alt="image">
            <span class="font-weight-bold"><a href="#"> <i class="fa-solid fa-user-pen"></i></a></span> 
            <input type="file" name="image" id="">
          </div> -->
          <div class="row form-group">
                            <label for="name" class="col-sm-3 col-form-label input-label">Profile</label>
                            <div class="col-sm-9">
                                <div class="d-flex align-items-center">
                                    <label class="avatar avatar-xxl profile-cover-avatar m-0" for="edit_img">
                                        <img id="avatarImg" class="avatar-img" src="" alt="Profile Image">
                                        <input type="file" name="image" id="edit_img">
                                        <span class="avatar-edit">
                                        <i class="fa-solid fa-user-pen color-blue"></i>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
          <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
        </div>
        
        <div class="col-md-5 border-right">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="text-right">Profile</h4>
            </div>
            <form action="profileUp" method="post">
              <?php
              foreach ($user as $data) :
                ?>
                <div class="col-md-12">
                  <label class="labels">Name</label>
                  <input type="hidden" class="form-control" name="id" placeholder="First name" value="<?php echo $data['id'] ?>">
                  <input type="text" class="form-control" name="name" placeholder="First name" value="<?php echo $data['name'] ?>">
                </div>
                <div class="col-md-12">
                  <label class="labels">Mobile Number</label>
                  <input type="text" class="form-control" name="phone" placeholder="Enter phone number" value="<?php echo $data['phone'] ?>">
                </div>
                <div class="col-md-12">
                  <label class="labels">E-mail</label>
                  <input type="text" class="form-control" name="email" placeholder="Enter E-mail id" value="<?php echo $data['email'] ?>">
                </div>

              <div class="mt-5 text-center d-flex justify-content-between">
                <button class="btn btn-primary profile-button" name="submit" type="submit">Submit</button>


                <button class="btn btn-primary profile-button" type="button">Cancel</button>
              </div>
              <?php
                endforeach;
                ?>
            </form>
          </div>
        </div>
      </div>
    </div>