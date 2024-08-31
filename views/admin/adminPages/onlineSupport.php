<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <pre> -->
<?php
// print_r($getUser);
// exit;
?>
<style>
.leftsidenavtabscls {
    width: 30%;
    /* border: 1px solid black; */
    /* height: 100%; */
}

.leftsidenavtabsclsspan {
    font-size: 25px;
    font-weight: 700;
}

.usersidemsges {
    background-color: #fff;
    box-shadow: 0px 0px 10px black;
    border-radius: 12px 3px 12px 12px;
    max-width: 55%;
    min-width: 20%;
    font-size: 24px;
}

.clientsidemsges {
    background-color: #fff;
    box-shadow: 0px 0px 10px black;
    border-radius: 12px 3px 12px 12px;
    max-width: 55%;
    min-width: 20%;
    font-size: 24px;
}

.datemsg{
    position: absolute;
    right: 15px;
    bottom: 2px;
    font-size: 16px;
    font-weight: 700;
}

#parentEle{
    max-height: 450px;
    overflow-y: scroll !important;
}

.chatinputtype {
    margin: 0;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    height: 60px;
    background: #000;
}

.chatinputtype input {
    box-shadow: 0px 0px 10px black;
    border: none;
    padding: 5px;
    border-bottom: 1px solid black;
    outline: none;
    width: 92%;
    height: 50px;
}

.chatinputtype button{
    padding:1rem;
}

.dvdfyvc {
    display: flex;
    align-items: center;
}
 /* added  */
.d-flex
{
	display:flex;
}
.d-none
{
	display:none;
}
.align-items-start{
	align-items:start;
}
.align-items-center{
	align-items:center;
}
.px-0{
	padding-left:0;
	padding-right:0;
}
.flex-column{
	flex-direction:column;
}
.justify-content-end{
	justify-content: end;
}
.justify-content-center{
	justify-content: center;
}
.text-center{
	text-align:center;
}
.mt-3 {
  margin-top: 2rem !important;
}
.mt-2 {
  margin-top: 0.5rem !important;
}
.p-3 {
  padding: 1rem !important;
}
.ms-3 {
  margin-left: 1rem !important;
}
.mb-0 {
  margin-bottom: 2rem !important;
}
.ps-3 {
  padding-left: 1rem !important;
}
.pe-4 {
  padding-right: 1.5rem !important;
}
.pb-3 {
  padding-bottom: 2rem !important;
}
.me-3 {
  margin-right: 1rem !important;
}
.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

 /* animation  */

 @keyframes r {
    100%{
        transform: rotate(360deg);
    }
 }
 .fa-spin{
    animation: r 1s linear infinite;
 }
     .main {
            position: absolute;
            left: 65%;
            top: 40%;
            transform: translate(-50%, -50%);
        }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?= $title;?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?= $title?></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="d-flex align-items-start shadow px-0  " style="height: 600px;">
                    <div class="nav flex-column nav-pills  leftsidenavtabscls p-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical" style="height:100%; border-right:1px solid gray;">
                        <div class="text-center leftsidenavtabsclsspan">Customer Support</div>
                        <hr>
                        <?php $i=1; foreach($getUser as  $get){ ?>

                            <div class="nav-link dvdfyvc mt-2 " id="v-pills-home-tab" data-toggle="pill"
                                data-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true" onclick="getId('<?=$get['id']?>','<?=$get['name']?>')">
                                <img src="<?=(!!$get['image']) ? base_url().$get['image'] : base_url('uploads/no_image_available.png')?>" alt="" width="40px" height="40px">
                                <span class="ms-3"><?=$get['name']?></span>
                            </div>

                        <?php $i++; } ?>

                        <input type="hidden" id="getId">

                    </div>

                    <div class="tab-content " id="v-pills-tabContent" style="width: 70%;">
                        <div class="tab-pane fade  " id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="text-center leftsidenavtabsclsspan p-3" id="naam" style="text-transform:capitalize;">
                                
                            </div>
                            <div class="main" id="mmmm"><i class="fa-solid fa-spinner" id="kuch" style="font-size:5rem;"></i></div>
                            <div class="" id="parentEle"></div>
                            <div class="chatinputtype" style="position : absolute; bottom:0; width: -webkit-fill-available;">
                                <input type="text" name="msg" id="Patient">
                                <button type="button" class="bbbb" onclick ="sendMsg()"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512"><path d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"/></svg></button>
                            </div>
                        </div>
                        <div class="tab-pane active in  " id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div style="height:450px; flex-direction:column;" class="d-flex align-items-center justify-content-center" >
                            <img src="<?=base_url().$logo?>" height="100px" alt="">
                           <h1> Welcome To Chat Support</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    
    user = document.getElementById("Patient");
    function getId(id,naam)
    {
        document.getElementById('getId').value = id;
        document.getElementById('naam').innerHTML = naam +"<hr>";
        get_messages()
        uper();
        $('#parentEle').css('display','none');
        $('#kuch').addClass('fa-spin');
        $('#kuch').removeClass('d-none');
        setTimeout(() => {
            $('#kuch').addClass('d-none');
            $('#kuch').removeClass('fa-spin');
            $('#parentEle').css('display','block');
        }, 3000);
        setInterval('get_messages()',2500);
    }
</script>
<script>
        function uper(){
            const chatBoxxx = document.getElementById("parentEle");
            let y = chatBoxxx.scrollHeight;
            chatBoxxx.scrollTop = y;
        }
    </script>
<script>
 function sendMsg()
        {
            id = document.getElementById('getId').value;
            const msgerChat = document.getElementById("parentEle");
            if(user)
            {
                var msg = user.value;
                var admin = '<?=$admin['id']?>';
                var userid = id;

                    $.ajax({
                        url : 'https://xrdsimulators.tech/wow_project/index.php/admin/sendMsg', 
                        type : 'post',
                        data : {
                            msg,
                            admin,
                            "user":userid,
                        },
                        dataType : 'json',
                        success : function(result)
                        {
                            const msgHTML = `<div class="d-flex justify-content-end">
                                    <p class="clientsidemsges me-3 mt-3 mb-0 ps-3 pe-4 pb-3"
                                        style="position: relative;">`+ user.value +`
                                        <span class="datemsg">${formatDate(new Date())}</span>
                                    </p>
                                </div>`;
                                const el = document.createElement("div")
                                el.innerHTML = msgHTML
                                msgerChat.append(el)
                                let y = msgerChat.scrollHeight;
		                        msgerChat.scrollTop = y;
                            user.value = "";
                        }
                    });
            }
                
        }

        user.addEventListener("keydown", function (e) {
            if (e.code === "Enter") {  //checks whether the pressed key is "Enter"
                id = document.getElementById('getId').value;
                const msgerChat = document.getElementById("parentEle");
                if(user)
                {
                    var msg = user.value;
                    var admin = '<?=$admin['id']?>';
                    var userid = id;

                    $.ajax({
                        url : 'https://xrdsimulators.tech/wow_project/index.php/admin/sendMsg', 
                        type : 'post',
                        data : {
                            msg,
                            admin,
                            "user":userid,
                        },
                        dataType : 'json',
                        success : function(result)
                        {
                            const msgHTML = `<div class="d-flex justify-content-end">
                                    <p class="clientsidemsges me-3 mt-3 mb-0 ps-3 pe-4 pb-3"
                                        style="position: relative;">`+ user.value +`
                                        <span class="datemsg">${formatDate(new Date())}</span>
                                    </p>
                                </div>`;
                                const el = document.createElement("div")
                                el.innerHTML = msgHTML
                                msgerChat.append(el)
                                let y = msgerChat.scrollHeight;
		                        msgerChat.scrollTop = y;
                            user.value = "";
                        }
                    });
                }
            }
        });

        function formatDate(date) {
            const h = "0" + date.getHours();
            const m = "0" + date.getMinutes();
            const d = "0" + date.getDate();
            const mo = "0" + (date.getMonth() + 1);
            const y = date.getFullYear();

            return y + "-" + `${mo.slice(-2)}` + "-" + `${d.slice(-2)}` + " " + `${h.slice(-2)}:${m.slice(-2)}`;
            
            }

            function get_messages()
                {
                    id = document.getElementById('getId').value;
                    const Chatmsgr = document.getElementById("parentEle");
                    var admin = <?=$admin['id']?>;
                    var userid = id; 

                    $.ajax({
                        url : "<?php echo base_url('admin/showMsg');?>",
                        type : "post",
                        data : { admin, "user" :userid },
                        dataType : "json",
                        success: function(result)
                        {
                            // console.log(result);
                            // return;
                            if(result.chatStatus == 1 || result.chatStatus == '' || result.chatStatus == null)
                            {
                                $("#parentEle").html("");
                                $("#parentEle").html(result.output);
                                let y = Chatmsgr.scrollHeight;
                                Chatmsgr.scrollTop = y;
                            }
                            else if(result.chatStatus == '1')                
                            {
                                $("#parentEle").html('');
                                clearInterval(refreshMsgs);
                                clearInterval(refreshMsgs2);
                                Swal.fire("Chat ended by Patient");
                                setTimeout(function() {
                                    window.location.href =
                                        "<?= base_url("/doctorWeb-setting") ?>";
                                }, 3000);   
                            }

                            else if(result.chatStatus == '2')                
                            {
                                $("#parentEle").html('');
                                clearInterval(refreshMsgs);
                                clearInterval(refreshMsgs2);
                                Swal.fire("Chat ended by Doctor");
                                setTimeout(function() {
                                        window.location.href =
                                            "<?= base_url("/my-chats") ?>";
                                }, 3000);
                            }
                        }
                    });
                }
        
</script>