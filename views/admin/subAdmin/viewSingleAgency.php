<style>
* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

.main_header_h5 {
    height: 50px;
    background-color: #f0569c;
}

.main_header_h5 h5 {
    color: white;
    font-weight: bold;
    text-align: center;
    padding-top: 10px;
}

.monthly-statement {
    height: 50px;

    border-bottom: 1px solid #fca2ca;
}

.monthly-statement h5 {
    padding-top: 15px;
    font-size: 15px;
}

.date_sd_bg_set {
    background-color: #f0569c;
    margin-left: 10px;
    font-size: 10px;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
}

.talent_gems {
    height: auto;
    border: 1px solid #fca2ca;
}

.talent_gems_1 {
    height: 60px;
    padding: 8px 10px;
    border: 1px solid #fca2ca;
}

.talent_gems_2 {
    height: 60px;
    padding: 8px 10px;
    border: 1px solid #fca2ca;
}

.talent_gems_3 {
    height: 60px;
    padding: 8px 10px;
    border: 1px solid #fca2ca;
}

.talent_gems_1 p {
    color: rgb(63, 63, 63);
    font-size: 15px;
}

.talent_gems_1 p::after {
    content: '';
    height: 2px;
    width: 15px;
    margin-left: 2px;

    background-color: #f0569c;
    display: block;
}

.talent_gems_2 p {
    color: rgb(63, 63, 63);
    font-size: 15px;
}

.talent_gems_2 p::after {
    content: '';
    height: 2px;
    width: 15px;
    margin-left: 2px;

    background-color: #f0569c;
    display: block;
}

.talent_gems_3 p {
    color: rgb(63, 63, 63);
    font-size: 15px;
}

.talent_gems_3 p::after {
    content: '';
    height: 2px;
    width: 15px;
    margin-left: 2px;

    background-color: #f0569c;
    display: block;
}

.talent_gems_3 h5 {
    color: rgb(63, 63, 63);
    font-size: 15px;
    font-weight: 500;

}

.talent_gems_3 h5::after {
    content: '418';
    height: 2px;
    width: 15px;
    margin-top: 5px;
    margin-left: 2px;
    display: block;
}

.agency_repor {
    padding: 10px;

}



.agency_report_right_btn {

    margin-top: 10px;
    border-radius: 4px;
    color: #f0569c;
    border: 1.5px solid #f0569c;
    background-color: transparent;
    transition: 0.2s;
}

.agency_report_right_btn:hover {
    box-shadow: 1px 1px 7px #f0569c;
}

.agency_report_right_btn {
    border: 2px solid #f0569c;
    padding: 5px 20px;
    color: white;
    cursor: pointer;
    position: relative;
    overflow: hidden;

    font-family: sans-serif;
    transition: all .5s;
}

.agency_report_right_btn:before {
    width: 100%;
    height: 100%;
    content: '';
    margin: auto;
    position: absolute;
    top: 0%;
    left: 0%;
    background: #f0569c;
    transition: all .5s;
    z-index: -1;

}

.agency_report_right_btn:after {
    width: 100%;
    height: 100%;
    content: '';
    margin: auto;
    position: absolute;
    top: 0%;
    left: 0%;
    background: #f0569c;
    transition: all .5s;
    z-index: -1;

}

.agency_report_right_btn:hover {
    color: #212121;
}

.agency_report_right_btn:hover:before {
    transform: rotateX(90deg);

}

.agency_report_right_btn:hover:after {
    transform: rotateY(90deg);

}

.current-img-space {
    height: 20px;
    background-color: #ececec;

}




p {
    padding-bottom: 10px;
    margin-top: 12px;

    margin-bottom: 1rem;
}

.btn.hover-filled-slide-right::before {
    top: 0;
    bottom: 0;
    right: 0;
    height: 100%;
    width: 100%;
}

.btn.hover-filled-slide-right:hover::before {
    width: 0%;
}


.current-month-left {
    height: 60px;
    padding: 8px 10px;
    border: 1px solid #fca2ca;
}

.current-month-right {
    height: 60px;
    padding: 8px 10px;
    border: 1px solid #fca2ca;
}

.current-month-left p {
    color: rgb(63, 63, 63);
    font-size: 15px;
}

.current-month-right p {
    color: rgb(63, 63, 63);
    font-size: 15px;
}

/* .current-month-left p::after {
    content: '0';
    height: 2px;
    width: 30px;
    margin-top: 1px;
    margin-left: 10px;
    display: block;
  }

  .current-month-right p::after {
    content: '0';
    height: 2px;
    width: 30px;
    margin-top: 1px;
    margin-left: 10px;
    display: block;
  } */

.talent_list h5 {
    font-size: 15px;
}

.search_talents_input {
    outline: none;
    width: 95%;
    border: none;
    margin-left: 10px;
    margin-top: 9px !important;
    background: none !important;
}

.andruni_search {
    width: 90%;
    height: 40px;
    overflow: hidden;
    border-radius: 100px;
    border: 2px solid #f0569c;
}

.andruni_search h2 {
    font-size: 15px;
    padding-top: 9px;
}

.date_sd_bg_india {
    background-color: #f0569c;
    margin-left: 10px;
    font-size: 10px;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
}

.accordion {
    outline: none !important;
}

.item_1 {
    font-size: 15px;
}

.accordion-button:focus {
    outline: none !important;

}

.accordion-body {
    border-top: 1px solid #f0569c;
    border-bottom: 1px solid #f0569c;

}

.rs_img {
    height: 50px;
    width: 50px;
    border-radius: 100%;
}

.actual_left {
    font-size: 15px;
    color: #212121;
    margin-left: 10px;
    font-weight: 600;
}

.actual_center {
    font-size: 15px;
    color: #212121;
    text-align: center;

}

.actual_right {
    font-size: 15px;
    color: #212121;
    text-align: right;

}

.center_top {
    margin-top: -40px;
}

.left_0 {
    margin-left: 60px;
}

.left_1 {
    margin-left: 60px;
    margin-top: -200px !important;
}



.btn:focus {
    box-shadow: none;
}

.dropbtn {

    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

/* .dd-content { */
/* display: none; */
/* position: absolute; */
/* background-color: #f1f1f12a; */
/* width: 100%; */
/* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
/* z-index: 1; */
/* } */
.dropdown:hover .dd-content {
    display: block;
}

.callist {
    list-style-type: none;
    line-height: 40px;
    text-align: center;
    height: 185px;
    overflow: auto;
    padding-left: 0px;
}

.year {
    line-height: 30px;
}

.day {
    line-height: 20px;
}

.item {
    padding: 5px;
}

.item:hover {
    background-color: #f1f1f1;


}

.callist::-webkit-scrollbar {
    display: none;
}

@media screen and (min-width: 320px) and (max-width: 520px) {
    .actual_right {
        text-align: center !important;
    }

    .left_1 p {
        text-align: center !important;
        border-bottom: 1px solid #fca2ca;
        padding-bottom: 20px;
    }

    .all_center {
        text-align: center !important;
        border-bottom: 1px solid #fca2ca;
        padding-bottom: 20px;
    }

    .search_talents_input {
        width: 85%;
    }

    .DurationForty p::after {
        /* float: right; */
        margin-left: 211px !important;
        margin-top: 5px !important;
    }

    .sixtyHCT p::after {
        margin-left: 211px !important;
        margin-top: 5px !important;
    }
}

@media screen and (min-width: 520px) and (max-width: 870px) {
    .search_talents_input {
        width: 90%;
    }

}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #f0569c;
    border-radius: 0px;
    background-color: white !important;
    border-bottom: 1px solid #f0569ced;
    transition: 1s;
}

ul .nav-item {
    padding-left: 20px;
}

th {
    border: 1px solid rgb(0, 0, 0);
    padding: 10px;
    color: #f162a3;
}

table td {
    border: 1px solid rgb(0, 0, 0);
}

td {
    padding: 5px;
}

.nav-link {
    color: black !important;
}

.btn-primary {
    color: #fff;
    margin-top: 10px !important;
    background-color: #f0569c;
    border-color: #ff02ef;
    outline: none !important;
}

.btn-primary:hover {
    background-color: transparent;
    border: 1px solid #f0569c;
    color: #f0569c;
}

.btn-check:focus+.btn-primary,
.btn-primary:focus {
    background-color: transparent;
    border: 1px solid #f0569c;
    color: #f0569c;
    box-shadow: none !important;
}

.van-cell {
    height: 30px;
    padding: 10px;
}

.DurationForty p::after {
    content: '<?php if (!empty($fortyH)) {echo $fortyH;} else {echo 0;} ?>';
    height: 2px;
    width: 15px;
    margin-top: 16px;
    margin-left: 395px;
    display: block;

}

.TalentCoin p::after {
    content: '<?php if (!empty($TalentCoin['myCoin'])) {echo $TalentCoin['myCoin'];} else {echo 0;} ?>';
    height: 2px;
    width: 15px;
    margin-top: -5px;
    margin-left: 225px;

    /* display: block; */
}

.liveDuration p::after {
    content: '<?php if (!empty($liveDuration)) {echo $liveDuration;} else {echo 0;} ?>';
    height: 2px;
    width: 15px;
    margin-top: -5px;
    margin-left: 225px;

    /* display: block; */
}

.activeTalents p::after {
    content: '<?php if (!empty($activeTalents)) {echo $activeTalents;} else {echo 0;} ?>';
    height: 2px;
    width: 15px;
    margin-top: -5px;
    margin-left: 225px;

    /* display: block; */
}

.totalTalents p::after {
    content: '<?php if (!empty($totalTalents)) {echo $totalTalents;} else {echo 0;} ?>';
    height: 2px;
    width: 15px;
    margin-top: -5px;
    margin-left: 225px;

    /* display: block; */
}

.totalCrown p::after {
    content: '<?php if (!empty($totalCrown)) {echo $totalCrown;} else {echo 0;} ?>';
    height: 2px;
    width: 15px;
    margin-top: -5px;
    margin-left: 225px;

    /* display: block; */
}

/*.TalentDiamond p::after {*/
.hostsCoinReward p::after {
    /*content: '<?php if (!empty($TalentDiamond)) {echo $TalentDiamond;} else {echo 0;} ?>';*/
    content: '<?php if (!empty($hostsCoinReward)) {echo $hostsCoinReward;} else {echo 0;} ?>';
    height: 2px;
    width: 15px;
    margin-top: -5px;
    margin-left: 157px;

    /* display: block; */
}

.NewTalent p::after {
    content: '<?php if (!empty($NewTalent)) {echo $NewTalent;} else {echo 0;} ?>';
    height: 2px;
    width: 15px;
    margin-top: -5px;
    margin-left: 234px;

    /* display: block; */
}

.fortyHN p::after {
    content: '<?php if (!empty($fortyHN)) {echo $fortyHN;} else {echo 0;} ?>';
    height: 2px;
    width: 15px;
    margin-top: 5px;
    margin-left: 2px;
    display: block;
}

.sixtyHCT p::after {
    content: '<?php if (!empty($sixtyHCT)) {echo $sixtyHCT;} else {echo 0;} ?>';
    height: 2px;
    width: 15px;
    margin-top: 16px;
    margin-left: 395px;
    display: block;
}

.modal-dialog-2 {
    max-width: 100%;
    margin: 1.75rem auto;
}

th {
    padding-left: 30px;
    padding-bottom: 11px;
    border-bottom: 1px solid grey;
}

td {
    padding-left: 39px;
    padding-top: 10px;
}

.col-lg-4.col-md-4.col-sm-4.col-xs-4.NewTalent {
    border-bottom: 1px solid #f0569c;
}

.col-lg-4.col-md-4.col-sm-4.col-xs-4.activeTalents {
    border-bottom: 1px solid #f0569c;
}

.col-lg-4.col-md-4.col-sm-4.col-xs-4.totalTalents {
    border-bottom: 1px solid #f0569c;

}

.span_pdf {
    float: right;
}

.span_pdf button {
    background-color: #f0569c;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
}

button.btnExcel {
    /* float: right; */
    margin: 10px;
    padding: 10px 25px 10px 25px;
    background: #f162a3;
    color: white;
    border: none;
    /* transform: translate(1300px, 0px); */
    border-radius: 6px;
    font-weight: 600;
    text-transform: capitalize;
    font-size: 18px;
}

.col-lg-6.col-md-6.col-sm-6.DurationForty {
    border-bottom: 1px solid #f0569c;
}

.col-lg-6.col-md-6.col-sm-6.fortyHN {
    border-bottom: 1px solid #f0569c;
}

.col-lg-6.col-md-6.col-sm-6.sixtyHCT.p-2 {
    border-bottom: 1px solid #f0569c;
}
</style>
<div class="content-wrapper">
    <div class="container-fluid main_header_h5">
        <h5>Agency Code : <?=$agencyUser['agencyCode']?></h5>
    </div>
    <div class="container-fluid" style="padding-left: 3%;padding-right: 3%;">
        <div class="row monthly-statement">
            <!-- <h5><i class="fa-solid fa-calendar-days"></i> <span>Monthly Statement</span> <span
                    class="date_sd_bg_set"><?php echo $todayDateTime ?></span> <span class="span_pdf"><a
                        href="<?php echo site_url(); ?>/AgencyPanel/actionMT"><button>Monthly
                            Statement</button></a></span></h5> -->

        </div>
        <div class="row talent_gems">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 TalentCoin text-center">
                <p>Host Coin </p>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 hostsCoinReward text-center">
                <p>Host Reward</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 liveDuration text-center">
                <p>Live Duration</p>
            </div>
        </div>
        <!-- second -->
        <div class="row talent_gems">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 NewTalent text-center">
                <p>New Hosts</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 activeTalents text-center">
                <p>Active Hosts</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 totalTalents text-center">
                <p>Total Hosts</p>
            </div>

        </div>

        <!-- next-button -->
        <div class="row agency_report mt-3">
            <div class="col-lg-12">
                <center>
                    <button class="agency_report_right_btn">
                        <a href="<?php echo site_url(); ?>/AgencyPanel/actionAgencySingle/<?=$this->uri->segment(3)?>">Agency Panel Excel</a>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-11" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-2">
                            <div class="modal-content">
                                <div class="modal-header d-flex">
                                    
                                    
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table>
                                        <tr>
                                            <th>Month</th>
                                            <th>New Talent</th>
                                            <th>Active Talent</th>
                                            <th>Total Talent</th>
                                            <th>Live Duration</th>
                                            <th>Recruiter Reward($)</th>
                                            <th>Gem Reward(💎)</th>
                                            <th>Excellent Talent Reward($)</th>
                                            <th>Bonus($)</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo $todayDateTime ?></td>
                                            <td><?php echo $oneMonthNT ?></td>
                                            <td><?php echo $oneMonthAT ?></td>
                                            <td><?php echo $oneMonthTL ?></td>
                                            <td><?php echo $oneMonthTD['0']['total'];
                      // print_r($oneMonthTD);

                       ?></td>
                                            <td>2022/06</td>
                                            <td><?php echo $oneMonthGR['0']['total'] ?></td>
                                            <td>2022/06</td>
                                            <td>2022/06</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <button class="agency_report_right_btn">Revenue Export</button> -->
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#export">
                        Revenue Export
                    </button> -->

                    <!-- Modal -->
                    <div class="modal fade" id="export" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div id="show">

                                    </div>
                                    <div class="text-center">
                                        <div class="dropdown w-100">
                                            <button class="dropbtn w-100"><span class="p-3" id="year">Year</span><span
                                                    class="p-3" id="day">Day</span><span class="p-3"
                                                    id="month">Month</span></button>
                                            <div class="dd-content">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <ul class="callist year">
                                                            <li class="item" onclick="wyear(this)" id="y2000">2000</li>
                                                            <li class="item" onclick="wyear(this)" id="y2001">2001</li>
                                                            <li class="item" onclick="wyear(this)" id="y2002">2002</li>
                                                            <li class="item" onclick="wyear(this)" id="y2003">2003</li>
                                                            <li class="item" onclick="wyear(this)" id="y2004">2004</li>
                                                            <li class="item" onclick="wyear(this)" id="y2005">2005</li>
                                                            <li class="item" onclick="wyear(this)" id="y2006">2006</li>
                                                            <li class="item" onclick="wyear(this)" id="y2007">2007</li>
                                                            <li class="item" onclick="wyear(this)" id="y2008">2008</li>
                                                            <li class="item" onclick="wyear(this)" id="y2009">2009</li>
                                                            <li class="item" onclick="wyear(this)" id="y2010">2010</li>
                                                            <li class="item" onclick="wyear(this)" id="y2011">2011</li>
                                                            <li class="item" onclick="wyear(this)" id="y2012">2012</li>
                                                            <li class="item" onclick="wyear(this)" id="y2013">2013</li>
                                                            <li class="item" onclick="wyear(this)" id="y2014">2014</li>
                                                            <li class="item" onclick="wyear(this)" id="y2015">2015</li>
                                                            <li class="item" onclick="wyear(this)" id="y2016">2016</li>
                                                            <li class="item" onclick="wyear(this)" id="y2017">2017</li>
                                                            <li class="item" onclick="wyear(this)" id="y2018">2018</li>
                                                            <li class="item" onclick="wyear(this)" id="y2019">2019</li>
                                                            <li class="item" onclick="wyear(this)" id="y2020">2020</li>
                                                            <li class="item" onclick="wyear(this)" id="y2021">2021</li>
                                                            <li class="item" onclick="wyear(this)" id="y2022">2022</li>
                                                            <li class="item" onclick="wyear(this)" id="y2023">2023</li>
                                                            <li class="item" onclick="wyear(this)" id="y2024">2024</li>
                                                            <li class="item" onclick="wyear(this)" id="y2025">2025</li>
                                                        </ul>

                                                    </div>
                                                    <div class="col-4">
                                                        <ul class="callist day">
                                                            <li class="item" onclick="wday(this)" id="d1">1</li>
                                                            <li class="item" onclick="wday(this)" id="d2">2</li>
                                                            <li class="item" onclick="wday(this)" id="d3">3</li>
                                                            <li class="item" onclick="wday(this)" id="d4">4</li>
                                                            <li class="item" onclick="wday(this)" id="d5">5</li>
                                                            <li class="item" onclick="wday(this)" id="d6">6</li>
                                                            <li class="item" onclick="wday(this)" id="d7">7</li>
                                                            <li class="item" onclick="wday(this)" id="d8">8</li>
                                                            <li class="item" onclick="wday(this)" id="d9">9</li>
                                                            <li class="item" onclick="wday(this)" id="d10">10</li>
                                                            <li class="item" onclick="wday(this)" id="d12">11</li>
                                                            <li class="item" onclick="wday(this)" id="d12">12</li>
                                                            <li class="item" onclick="wday(this)" id="d13">13</li>
                                                            <li class="item" onclick="wday(this)" id="d14">14</li>
                                                            <li class="item" onclick="wday(this)" id="d15">15</li>
                                                            <li class="item" onclick="wday(this)" id="d16">16</li>
                                                            <li class="item" onclick="wday(this)" id="d17">17</li>
                                                            <li class="item" onclick="wday(this)" id="d18">18</li>
                                                            <li class="item" onclick="wday(this)" id="d19">19</li>
                                                            <li class="item" onclick="wday(this)" id="d20">20</li>
                                                            <li class="item" onclick="wday(this)" id="d21">21</li>
                                                            <li class="item" onclick="wday(this)" id="d22">22</li>
                                                            <li class="item" onclick="wday(this)" id="d23">23</li>
                                                            <li class="item" onclick="wday(this)" id="d24">24</li>
                                                            <li class="item" onclick="wday(this)" id="d25">25</li>
                                                            <li class="item" onclick="wday(this)" id="d26">26</li>
                                                            <li class="item" onclick="wday(this)" id="d27">27</li>
                                                            <li class="item" onclick="wday(this)" id="d28">28</li>
                                                            <li class="item" onclick="wday(this)" id="d29">29</li>
                                                            <li class="item" onclick="wday(this)" id="d30">30</li>
                                                            <li class="item" onclick="wday(this)" id="d31">31</li>
                                                        </ul>

                                                    </div>
                                                    <div class="col-4">
                                                        <ul class="callist month">
                                                            <li class="item" onclick="wmonth(this)" id="m1">January</li>
                                                            <li class="item" onclick="wmonth(this)" id="m2">February
                                                            </li>
                                                            <li class="item" onclick="wmonth(this)" id="m3">March</li>
                                                            <li class="item" onclick="wmonth(this)" id="m4">April</li>
                                                            <li class="item" onclick="wmonth(this)" id="m5">May</li>
                                                            <li class="item" onclick="wmonth(this)" id="m6">June</li>
                                                            <li class="item" onclick="wmonth(this)" id="m7">July</li>
                                                            <li class="item" onclick="wmonth(this)" id="m8">August</li>
                                                            <li class="item" onclick="wmonth(this)" id="m9">September
                                                            </li>
                                                            <li class="item" onclick="wmonth(this)" id="m10">October
                                                            </li>
                                                            <li class="item" onclick="wmonth(this)" id="m11">November
                                                            </li>
                                                            <li class="item" onclick="wmonth(this)" id="m12">December
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </center>
            </div>
        </div>

        <!-- neww -->
        <div class="row mt-4">
            <div class="col-lg-12 current-img-space">

            </div>
        </div>
    </div>


    <!-- second-re-ready-start -->

    <div class="container-fluid" style="padding-left: 3%;padding-right: 3%;">
        <!--<div class="row monthly-statement">-->
        <!--    <h5><i class="fa-solid fa-calendar-check"></i> <span>Current Month Metrics</span> </h5>-->
        <!--</div>-->
        <!--<div class="row current-month">-->
        <!--    <div class="col-lg-6 col-md-6 col-sm-6 DurationForty text-center">-->
        <!--        <p>>40H Hosts</p>-->
        <!--    </div>-->
        <!--    <div class="col-lg-6 col-md-6 col-sm-6 sixtyHCT p-2 text-center">-->
        <!--        <p>>60H Crown Hosts</p>-->
        <!--    </div>-->

        <!--</div>-->
        <!-- second -->
        <!-- <div class="row current-month ">
            <div class="col-lg-6 col-md-6 col-sm-6 sixtyHCT p-2">
                <p>>60H Crown Talents</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 current-month-right p-2">
                <p>>100$ Talents</p>
            </div>
        </div>
 -->

        <!-- neww -->
        <div class="row mt-2">
            <div class="col-lg-12 current-img-space">

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 talent_list p-3">
                <h5><i class="fa-solid fa-user-group"></i> Talent List</h5>
            </div>
        </div>

        <!-- search-bar -->
        <div class="row">
            <div class="col-lg-12 search_talents p-2">
                <div class="row">
                    <center>
                        <div class="col-lg-12 col-md-12 col-sm-12 andruni_search">
                            <!-- <h2> -->
                            <div class="my-auto">
                                <i class="fa-solid fa-magnifying-glass"></i><input type="text" id="searchlist"
                                    class="search_talents_input" placeholder="Search Talents by TalentId">
                            </div>
                            <!-- </h2> -->
                        </div>
                    </center>
                </div>
            </div>
        </div>



    </div>
    <div class="container-fluid accodian mt-4" style="padding-left: 3%;padding-right: 3%;">
        <div class="showdata"></div>
        <div class="m-3"><a href="<?php echo site_url(); ?>/AgencyPanel/actionTLL/<?=$this->uri->segment(3)?>"><button class="btn btn-primary">Talent
                    List Excel</button></a></div>
        <div class="row">
            <div class="accordion" id="accordionExample">
                <?php
          // echo "<pre>";
          // print_r($testdata);
          ?>
                <?php
            $i = 1;
            foreach ($talantList as $lists) {
            ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne<?php echo $i; ?>">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne<?php echo $i; ?>" aria-expanded="false"
                            aria-controls="collapseOne<?php echo $i; ?>">
                            <h5 class="item_1">
                                <span><?php echo $lists['usersName'] ?> <i class="fa-solid fa-star"
                                        style="color: rgba(243, 170, 11, 0.582);">
                                    </i>
                                    <?php echo $lists['userN'] ?>
                                    <i class="fa-regular fa-star"></i> </span>
                                <span class="date_sd_bg_india"><?php echo $lists['userContry'] ?></span><span
                                    class="date_sd_bg_india">Heart 0</span>
                            </h5>
                        </button>
                    </h2>
                    <div id="collapseOne<?php echo $i; ?>" class="accordion-collapse collapse show"
                        aria-labelledby="headingOne<?php echo $i; ?>"
                        data-bs-parent="#accordionExample<?php echo $i; ?>">
                        <div class="accordion-body accordian1">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <p class="all_center">
                                        <span><img src="<?php echo $lists['userImage'] ?> " alt=""
                                                class="rs_img"></span>
                                        <span class="actual_left">Actual Earning</span>
                                        <br>
                                        <span class="left_0">0</span>

                                    </p>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 mt-3">
                                    <h5 class="actual_center">Live Duration</h5>

                                    <span class="left_1">
                                        <p style="text-align: center; margin-top: -18px;">
                                            <?php echo $lists['total_login'] ?></p>
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
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal<?php echo $i; ?>">
                                        More Details
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?php echo $i; ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">


                                                <div class="container set_navtab_bottom_border mt-2">

                                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" id="pills-home-tab"
                                                                data-bs-toggle="pill"
                                                                data-bs-target="#pills-home<?php echo $i; ?>"
                                                                type="button" role="tab" aria-controls="pills-home"
                                                                aria-selected="true">Home</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link profile-button"
                                                                data-id="<?php echo $lists['usersId']?>"
                                                                id="pills-profile-tab" data-bs-toggle="pill"
                                                                data-bs-target="#pills-profile<?php echo $i; ?>"
                                                                type="button" role="tab" aria-controls="pills-profile"
                                                                aria-selected="false">Profile</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link Contact-button"
                                                                data-id="<?php echo $lists['usersId']?>"
                                                                id="pills-contact-tab" data-bs-toggle="pill"
                                                                data-bs-target="#pills-contact<?php echo $i; ?>"
                                                                type="button" role="tab" aria-controls="pills-contact"
                                                                aria-selected="false">Contact</button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="pills-tabContent">
                                                        <div class="tab-pane fade show active"
                                                            id="pills-hom<?php echo $i; ?>e" role="tabpanel"
                                                            aria-labelledby="pills-home-tab">


                                                            <div class="container">
                                                                <div
                                                                    class="van-tabs__content van-tabs__content--animated">
                                                                    <div class="van-tabs__track"
                                                                        style="left: 0%; transition-duration: 0.3s;">
                                                                        <div class="van-tab__pane mt-4">
                                                                            <div class="van-cell">
                                                                                <div class="van-cell__title"><span
                                                                                        style="float: left;">Agency
                                                                                        Info</span></div>
                                                                                <div class="van-cell__value"
                                                                                    style="text-align: right; ">
                                                                                    <span><?php echo $lists['agencyCode'] ?></span>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="van-cell">
                                                                                <div class="van-cell__title"><span
                                                                                        style="float: left;">Country</span>
                                                                                </div>
                                                                                <div class="van-cell__value"
                                                                                    style="text-align: right; ">
                                                                                    <span><?php echo $lists['userContry'] ?></span>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="van-cell">
                                                                                <div class="van-cell__title"><span
                                                                                        style="float: left;">Talent Join
                                                                                        Date</span></div>
                                                                                <div class="van-cell__value"
                                                                                    style="text-align: right; ">
                                                                                    <span><?php echo $lists['userCreared'] ?></span>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="van-cell mt-3">
                                                                                <div class="van-cell__title"><span
                                                                                        style="float: left;">Last Login
                                                                                        Date</span></div>
                                                                                <div class="van-cell__value"
                                                                                    style="text-align: right; ">
                                                                                    <span><?php echo $lists['login_time'] ?></span>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="van-cell">
                                                                                <div class="van-cell__title"><span
                                                                                        style="float: left;">Join Agency
                                                                                        Date</span></div>
                                                                                <div class="van-cell__value"
                                                                                    style="text-align: right; ">
                                                                                    <span><?php echo $lists['agencyjoin']?></span>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                            <div class="van-cell">
                                                                                <div class="van-cell__title"><span
                                                                                        style="float: left;">Active</span>
                                                                                </div>
                                                                                <div class="van-cell__value"
                                                                                    style="text-align: right; ">
                                                                                    <span
                                                                                        style="margin-top: 30px ;"><?php if($lists['agencyStatus'] == 1){echo "Online";} else{echo "Offline";}?></span>
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
                                                        <div class="tab-pane fade" id="pills-profile<?php echo $i; ?>"
                                                            role="tabpanel" aria-labelledby="pills-profile-tab">

                                                            <div class="container">
                                                                <table>
                                                                    <thead>
                                                                        <th>Month</th>
                                                                        <th>Gem Sharing</th>
                                                                        <th>Basic Salary($)</th>
                                                                        <th>Bonus($)</th>
                                                                    </thead>
                                                                    <tbody class="panipine">
                                                                        <tr>
                                                                            <!-- <td class="date">2022</td>
                                        <td class="gem"></td>
                                        <td>-</td>
                                        <td>-</td> -->
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
                                                        <div class="tab-pane fade" id="pills-contact<?php echo $i; ?>"
                                                            role="tabpanel" aria-labelledby="pills-contact-tab">
                                                            <div class="container">
                                                                <table>
                                                                    <thead>
                                                                        <th>Month</th>
                                                                        <th>Actual Earning(💎)</th>
                                                                        <th>Live Duration</th>
                                                                        <th>Valid Days</th>
                                                                    </thead>
                                                                    <tbody class="panipine1">
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
                <?php
          $i++;
        }
        ?>
            </div>
        </div>
        <div class="text-center">Pages:- &nbsp;<?php echo $links; ?></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css" rel="Stylesheet"
        type="text/css" />
    <script type="text/javascript">
    // $('#refresh').on('click', function(){
    //   location.reload(true);
    // });
    $('.profile-button').on('click', function() {
            var userId = $(this).data('id');
            // alert(userId);
            $.ajax({
                method: "post",
                url: "<?php echo site_url() ?>/AgencyPanel/profileDetails",
                data: {
                    userId: userId
                },
                success: function(result) {
                    // alert(result);
                    // console.log(result);
                    // $('.gem').html(result);
                    // $('.date').html(result);
                    // history.go(0);
                    // location.reload(true);
                    $('.panipine').html(result);

                }
            })
        }),

        $('.Contact-button').on('click', function() {
            var userId = $(this).data('id');
            // alert(userId);
            $.ajax({
                method: "post",
                url: "<?php echo site_url() ?>/AgencyPanel/contactDetails",
                data: {
                    userId: userId
                },
                success: function(result) {
                    // alert(result);
                    $('.panipine1').html(result);

                }
            })
        }),

        $('#searchlist').keyup(function() {
            var searchdata = $('#searchlist').val();
            // alert(searchdata);
            $.ajax({
                method: "post",
                url: "<?php echo site_url() ?>/AgencyPanel/serarchUserList",
                data: {
                    searchdata: searchdata
                },
                success: function(data) {
                    $('.showdata').html(data);
                    //  alert(data);

                }
            });
        });

    $("#searchDate").click(function() {
        var searchDate = $("#startdate").val();
        $.ajax({
            method: "post",
            url: "<?php echo site_url() ?>/AgencyPanel/searhAgencyPortalWithDate",
            data: {
                searchDate: searchDate
            },
            //dataType: "json",                //data format
            success: function(result) {
                $("#track").replaceWith(result);
            }
        });
    });

    $(function() {
        $("#startdate").datepicker({
            dateFormat: "yy/mm/dd",
            numberOfMonths: 1,
            maxDate: 0,
            onSelect: function(selected) {
                var dt = new Date(selected);
                dt.setDate(dt.getDate() + 1);
                $("#enddate").datepicker("option", "minDate", dt);
            }
        });
        $("#enddate").datepicker({
            dateFormat: "yy/mm/dd",
            numberOfMonths: 1,
            maxDate: 0,
            onSelect: function(selected) {
                var dt = new Date(selected);
                dt.setDate(dt.getDate() - 1);
                $("#startdate").datepicker("option", "maxDate", dt);
            }
        });
    });
    </script>
    <script>
    function wyear(em) {
        var a = document.getElementById(em.id);
        var year = parseInt(a.innerHTML);

        document.getElementById("year").innerHTML = year;

    }

    function wday(em) {
        var a = document.getElementById(em.id);
        var year = parseInt(a.innerHTML);

        document.getElementById("day").innerHTML = year;

    }

    function wmonth(em) {
        var a = document.getElementById(em.id);
        var year = a.innerHTML;

        document.getElementById("month").innerHTML = year;

    }
    </script>