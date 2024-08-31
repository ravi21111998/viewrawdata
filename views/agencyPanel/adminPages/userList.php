<?php 
if (!empty($userDatas)) {
    foreach ($userDatas as $lists) { ?>
  <div class="container-fluid accodian mt-4">
    <div class="row">
      <div class="accordion" id="accordionExample">

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h5 class="item_1">
                  <span><?php echo $lists['username'] ?> <i class="fa-solid fa-star" style="color: rgba(243, 170, 11, 0.582);">
                    </i>
                    <?php echo $lists['name'] ?>
                    <i class="fa-regular fa-star"></i> </span>
                  <span class="date_sd_bg_india"><?php echo $lists['country'] ?></span><span class="date_sd_bg_india">Heart 0</span>
                </h5>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body accordian1">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <p class="all_center">
                      <span><img src="<?php echo $lists['image'] ?> " alt="" class="rs_img"></span>
                      <span class="actual_left">Actual Earning</span>
                      <br>
                      <span class="left_0">0</span>

                    </p>

                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 mt-3">
                    <h5 class="actual_center">Live Duration</h5>

                    <span class="left_1">
                      <p style="text-align: center; margin-top: -18px;">0h 0m</p>
                    </span>


                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 mt-3">
                    <h5 class="actual_right">Valid Days</h5>
                    <span class="left_1">
                      <p style="text-align: right; margin-top: -18px;">0h 0m</p>
                    </span>
                  </div>
                </div>

                <center> <span class="modal_set_tab_accod">


                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      More Details
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">


                          <div class="container set_navtab_bottom_border mt-2">

                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                              <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                              </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">


                                <div class="container">
                                  <div class="van-tabs__content van-tabs__content--animated">
                                    <div class="van-tabs__track" style="left: 0%; transition-duration: 0.3s;">
                                      <div class="van-tab__pane mt-4">
                                        <div class="van-cell">
                                          <div class="van-cell__title"><span style="float: left;">Agency
                                              Info</span></div>
                                          <div class="van-cell__value" style="text-align: right; ">
                                            <span>12795</span>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="van-cell">
                                          <div class="van-cell__title"><span style="float: left;">Country</span>
                                          </div>
                                          <div class="van-cell__value" style="text-align: right; ">
                                            <span>Bangladesh</span>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="van-cell">
                                          <div class="van-cell__title"><span style="float: left;">Talent Join
                                              Date</span></div>
                                          <div class="van-cell__value" style="text-align: right; ">
                                            <span>2020/05/08</span>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="van-cell mt-3">
                                          <div class="van-cell__title"><span style="float: left;">Last Login
                                              Date</span></div>
                                          <div class="van-cell__value" style="text-align: right; ">
                                            <span>2022/06/07</span>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="van-cell">
                                          <div class="van-cell__title"><span style="float: left;">Join Agency
                                              Date</span></div>
                                          <div class="van-cell__value" style="text-align: right; ">
                                            <span>2020/05/08</span>
                                          </div>
                                        </div>
                                        <hr>
                                        <div class="van-cell">
                                          <div class="van-cell__title"><span style="float: left;">Active</span>
                                          </div>
                                          <div class="van-cell__value" style="text-align: right; ">
                                            <span style="margin-top: 30px ;">2020/05/13</span>
                                          </div>
                                        </div>
                                        <hr>
                                        <!---->
                                        <!---->
                                      </div>
                                      <div class="van-tab__pane">
                                        <!---->
                                      </div>
                                      <div class="van-tab__pane">
                                        <!---->
                                      </div>
                                    </div>
                                  </div>
                                </div>


                              </div>
                              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                <div class="container">
                                  <table>
                                    <thead>
                                      <th>Month</th>
                                      <th>Gem Sharing</th>
                                      <th>Basic Salary($)</th>
                                      <th>Bonus($)</th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2022/06</td>
                                        <td>0</td>
                                        <td>-</td>
                                        <td>-</td>
                                      </tr>
                                      <tr>
                                        <td>2022/05</td>
                                        <td>0</td>
                                        <td>-</td>
                                        <td>-</td>
                                      </tr>
                                      <tr>
                                        <td>2022/04</td>
                                        <td>0</td>
                                        <td>-</td>
                                        <td>-</td>
                                      </tr>
                                      <tr>
                                        <td>2022/03</td>
                                        <td>0</td>
                                        <td>-</td>
                                        <td>-</td>
                                      </tr>
                                      <tr>
                                        <td>2022/02</td>
                                        <td>0</td>
                                        <td>-</td>
                                        <td>-</td>
                                      </tr>
                                      <tr>
                                        <td>2022/01</td>
                                        <td>0</td>
                                        <td>-</td>
                                        <td>-</td>
                                      </tr>
                                      <tr>
                                        <td>2021/12</td>
                                        <td>0</td>
                                        <td>-</td>
                                        <td>-</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>


                              </div>
                              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="container">
                                  <table>
                                    <thead>
                                      <th>Month</th>
                                      <th>Actual Earning(💎)</th>
                                      <th>Live Duration</th>
                                      <th>Valid Days</th>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2022/06</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                                      <tr>
                                        <td>2022/05</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                                      <tr>
                                        <td>2022/04</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                                      <tr>
                                        <td>2022/03</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                                      <tr>
                                        <td>2022/02</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                                      <tr>
                                        <td>2022/01</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                                      <tr>
                                        <td>2021/12</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>



                            <br>
                          </div>


                        </div>
                      </div>
                    </div>

                  </span></center>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <?php 
  }
    }
     else { ?>
    <div><h1>No data found</h1></div>
    <?php } ?>