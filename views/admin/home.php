
<div class="main-panel">
<div class="content-wrapper">
                    <!-- Quick Action Toolbar Starts-->
                    <div class="row quick-action-toolbar mt-4">
                        <div class="col-md-12 grid-margin">
                            <div class="card">
                                <div class="card-header d-block d-md-flex">
                                    <h5 class="mb-0">Quick Actions</h5>
                                    <p class="ml-auto mb-0">How are your active users trending overtime?<i class="icon-bulb"></i></p>
                                </div>
                                <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                                        <button type="button" class="btn px-0"> <i class="icon-user mr-2"></i> Add Client</button>
                                    </div>
                                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                                        <button type="button" class="btn px-0"><i class="icon-docs mr-2"></i> Create Quote</button>
                                    </div>
                                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                                        <button type="button" class="btn px-0"><i class="icon-folder mr-2"></i> Enter Payment</button>
                                    </div>
                                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                                        <button type="button" class="btn px-0"><i class="icon-book-open mr-2"></i>Create Invoice</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quick Action Toolbar Ends-->
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-sm-flex align-items-baseline report-summary-header">
                                                <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row report-inner-cards-wrapper">
                                        <div class=" col-md -6 col-xl report-inner-card">
                                            <div class="inner-card-text">
                                                <span class="report-title">All User</span>
                                                <h4><?php echo $this->db->get_where('users', array('is_admin' => '0'))->num_rows(); ?></h4>
                                            </div>
                                            <div class="inner-card-icon bg-success">
                                                <i class="icon-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl report-inner-card">
                                            <div class="inner-card-text">
                                                <span class="report-title">PURCHASE</span>
                                                <h4>95,458</h4>
                                                <span class="report-count"> 3 Reports</span>
                                            </div>
                                            <div class="inner-card-icon bg-danger">
                                                <i class="icon-briefcase"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl report-inner-card">
                                            <div class="inner-card-text">
                                                <span class="report-title">QUANTITY</span>
                                                <h4>2650</h4>
                                                <span class="report-count"> 5 Reports</span>
                                            </div>
                                            <div class="inner-card-icon bg-warning">
                                                <i class="icon-globe-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl report-inner-card">
                                            <div class="inner-card-text">
                                                <span class="report-title">RETURN</span>
                                                <h4>25,542</h4>
                                                <span class="report-count"> 9 Reports</span>
                                            </div>
                                            <div class="inner-card-icon bg-primary">
                                                <i class="icon-diamond"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex align-items-center mb-4">
                                        <h4 class="card-title mb-sm-0">Products Inventory</h4>
                                        <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>
                                    </div>
                                    <div class="table-responsive border rounded p-1">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="font-weight-bold">Store ID</th>
                                                    <th class="font-weight-bold">Amount</th>
                                                    <th class="font-weight-bold">Gateway</th>
                                                    <th class="font-weight-bold">Created at</th>
                                                    <th class="font-weight-bold">Paid at</th>
                                                    <th class="font-weight-bold">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img class="img-sm rounded-circle" src="images/faces/face1.jpg" alt="profile image"> Katie Holmes
                                                    </td>
                                                    <td>$3621</td>
                                                    <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                                                    <td>04 Jun 2019</td>
                                                    <td>18 Jul 2019</td>
                                                    <td>
                                                        <div class="badge badge-success p-2">Paid</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="img-sm rounded-circle" src="images/faces/face2.jpg" alt="profile image"> Minnie Copeland
                                                    </td>
                                                    <td>$6245</td>
                                                    <td><img src="images/dashboard/paypal.png" alt="alipay" class="gateway-icon mr-2"> Paypal</td>
                                                    <td>25 Sep 2019</td>
                                                    <td>07 Oct 2019</td>
                                                    <td>
                                                        <div class="badge badge-danger p-2">Pending</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="img-sm rounded-circle" src="images/faces/face3.jpg" alt="profile image"> Rodney Sims
                                                    </td>
                                                    <td>$9265</td>
                                                    <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                                                    <td>12 dec 2019</td>
                                                    <td>26 Aug 2019</td>
                                                    <td>
                                                        <div class="badge badge-warning p-2">Failed</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="img-sm rounded-circle" src="images/faces/face4.jpg" alt="profile image"> Carolyn Barker
                                                    </td>
                                                    <td>$2263</td>
                                                    <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                                                    <td>30 Sep 2019</td>
                                                    <td>20 Oct 2019</td>
                                                    <td>
                                                        <div class="badge badge-success p-2">Paid</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
                <!-- content-wrapper ends -->