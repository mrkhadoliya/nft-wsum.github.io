<?php 
include "header.php";?>
<script>
        function timerr(id, etime){
                    var countDownDate = new Date(etime*1000).getTime();
                    var now = new Date().getTime();
                    var distance = countDownDate - now;
                    var days = Math.floor(distance / (1000 *60 *60 * 24));
                    var hours = Math.floor((distance % (1000*60*60*24)) / (1000*60 * 60));
                    var minutes = Math.floor((distance % (1000*60*60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    document.getElementById(id).innerHTML = days+" d "+hours+" h "+minutes+" m "+ seconds+" s";
                    return distance;
                            	
                            }
</script>

<style>
    .container {
        max-width: 1140px !important;
    }
    .banner-content-here {
        background: #4c549c !important;
    }
    .wsum-nft-detail-page {
        padding-top: 45px;
    }
    .form-set-input {
        position: relative;
    }
    .form-set-input span {
        position: absolute;
        top: 9px;
        bottom: 0px;
        right: 5px;
        color: #ccc;
    }
    .details-bid-history .nav-tabs .nav-link.active {
        color: #50579e !important;
        border-bottom: 2px solid #50579e !important;
        background-color: transparent;
    }
    .detail-right-side .dropdown-menu.show {
        left: -90px !important;
    }
    .likes-here-btn-set a {
        border: 1px solid #ccc;
        padding: 8px 1px;
        border-radius: 20px;
        display: block;
    }
    .side-btn-click .dropdown button#dropdownMenuButton {
        border: 1px solid #ccc !important;
    }
    .buy-for-btn {
        margin-bottom: 10px;
    }
    /*section.wsum-nft-buy_description-page {*/
    /*    margin-top: 92px;*/
    /*}*/
    .wsum-nft-buy_description-page .carousel-container {
        padding: 0;
        margin: 1em auto;
        display: inline-block;
        max-width: 100%;
        width: 430px;
        height: 430px;
        position: relative;
        list-style-type: none;
    }
    .wsum-nft-buy_description-page .carousel-container .carousel-content {
        height: 300px;
        overflow: hidden;
        background: rgba(0, 0, 0, 0.9);
        position: absolute;
        top: 0;
        box-shadow: 0 5px 5px -5px #333;
        padding: 0;
        text-align: center;
        line-height: 296px;
    }
    .wsum-nft-buy_description-page .carousel-container .carousel-content img {
        opacity: 0;
        padding: 0;
        /*width: auto;*/
        /*height: auto;*/
        /*max-height: 300px;*/
        /*max-width: 400px;*/
            display: block;
        min-height: 430px;
    min-width: 400px;
        vertical-align: middle;
        -webkit-animation-name: ziim;
        -webkit-animation-duration: 0.6s;
        animation-name: ziim;
        animation-duration: 0.6s;
        
        
        /*object-fit: cover;*/
    /*width: 425px;*/
    /*height: 300px;*/
    }
    @-webkit-keyframes ziim {
        from {
            -webkit-transform: scale(1);
        }
        to {
            -webkit-transform: scale(0);
        }
    }
    @keyframes ziim {
        from {
            transform: scale(1);
        }
        to {
            transform: scale(0);
        }
    }
    .wsum-nft-buy_description-page .carousel-container .carousel-toggle:checked ~ .carousel-content,
    .wsum-nft-buy_description-page .carousel-container .carousel-toggle.active ~ .carousel-content {
        height: 100%;
        width: 100%;
    }
    .wsum-nft-buy_description-page .carousel-container .carousel-toggle:checked ~ .carousel-content img,
    .wsum-nft-buy_description-page .carousel-container .carousel-toggle.active ~ .carousel-content img {
        opacity: 1;
    }
    .wsum-nft-buy_description-page .carousel-fullscreen {
        position: absolute;
        bottom: 0;
        right: 0;
        margin: 0 4px 4px 0;
        width: 27px;
        height: 27px;
        cursor: pointer;
        background: #000
            url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAQAAAAn3TzeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAA/SURBVHjaYvjPQA5kGCHaUEApQylDKZrY4NEG5UG1YZUbetpKCcJBoG04R8DQyAGjJRfDf4b/DAAAAAD//wMAswEnryWu8FcAAAAASUVORK5CYII=")
            no-repeat center center;
    }
    .wsum-nft-buy_description-page .carouselFullScreen:checked,
    .carouselFullScreen.active {
        display: block;
        height: 100%;
    }
    .wsum-nft-buy_description-page .carouselFullScreen:checked + .carousel-container,
    .wsum-nft-buy_description-page .carouselFullScreen.active + .carousel-container {
        margin: 0;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 9999;
    }
    .wsum-nft-buy_description-page .carouselFullScreen:checked + .carousel-container .carousel-toggle:checked ~ .carousel-content > li,
    .wsum-nft-buy_description-page .carouselFullScreen.active + .carousel-container .carousel-toggle:checked ~ .carousel-content > li {
        height: 100%;
        line-height: 99vh;
    }
    .wsum-nft-buy_description-page .carouselFullScreen:checked + .carousel-container .carousel-fullscreen,
    .wsum-nft-buy_description-page .carouselFullScreen.active + .carousel-container .carousel-fullscreen {
        width: 54px;
        height: 54px;
        background: #000
            url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA2CAQAAAAmTKJWAAAACXBIWXMAAAsTAAALEwEAmpwYAAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAD+SURBVHja7Jc9CoQwEIW9gkdJYyFoIeiFvIaH0VLB0sLGI3iE1DbhbRciGDJrltnFHV+Zpx9I3vwkSPiUCExgAvsH2A7tUY/Sukr0Xt9Ohx3wPQtq66qxeH0HHWa8H1nRWFeD1eszdJiOhulPwKi/8RZMY8PsqIOyLoXudLad3rsB29CicqSQWlcKdTprscXBJuTkHOWY4mAjMjIswxgHm1GRYRXmn4eZy1yF5ObO3ClXbq5CcnP3RrkaLnMVkpu7gQ4rLnMVkpu7Qprnk2GsF4T16rOGmrVcPbfqf6l5so4FrAMP6yjHOqQyjN+siwXrysS6DEqnFpjABEbRawACMWGE7CJdswAAAABJRU5ErkJggg==")
            no-repeat center center;
    }
    .wsum-nft-buy_description-page .carouselFullScreen:checked + .carousel-container img,
    .wsum-nft-buy_description-page .carouselFullScreen.active + .carousel-container img {
        width: auto;
        height: 100%;
        max-height: 100vh;
        max-width: 100vw;
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }
    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0);
        }
        to {
            -webkit-transform: scale(1);
        }
    }
    @keyframes zoom {
        from {
            transform: scale(0);
        }
        to {
            transform: scale(1);
        }
    }
    .wsum-nft-buy_description-page input[type="checkbox"].carouselFullScreen,
    .wsum-nft-buy_description-page input[type="checkbox"].carousel-toggle {
        visibility: hidden;
    }
    .share-icons {
        text-align: center;
    }
    .share-icons ul li a {
        height: 50px;
        width: 50px;
        border: 1px solid #ccc;
        display: inline-block;
        padding: 12px;
        text-align: center;
        border-radius: 50%;
    }
    .share-icons li.list-inline-item span {
        color: #667;
        font-size: 13px;
    }
    
</style>

<?php

include "config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$query = "SELECT * FROM NFT_user AS nftUser INNER JOIN NFT_info AS nftInfo ON nftUser.Useraddress = nftInfo.NFT_creator_add WHERE nftInfo.NFT_id = '$id'";
$data = mysqli_query($link, $query);
$result = mysqli_fetch_array($data);

?>
<section class="wsum-nft-buy_description-page">
    <div class="banner-content-here py-md-5 py-3">
        <h2 class="text-center text-white">Bid Description</h2>
        <div class="text-center text-white">
            <a class="text-white" href="index1.php">WSUM-ART</a> > 
            <a class="text-white" href="buy_description.php">BID-DESCRIPTION</a>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-5 m-md-auto col-12">
                <!--<div class="buy-description-image">-->
                <!--    <div style="text-align: center;">-->
                        <!--<h1>Carousel without JavaScript</h1>-->
                <!--        <input id="satu" type="checkbox" class="carouselFullScreen" />-->
                <!--        <ul class="carousel-container">-->
                <!--            <li>-->
                <!--                <input type="checkbox" checked="checked" class="carousel-toggle" />-->
                <!--                <ul class="carousel-content">-->
                                    <!--<li><img src="//lorempixel.com/400/200/nature/" /></li>-->
                <!--                    <li class="">-->
                <!--                        <img class=" w-100" src="" alt="" />-->
                <!--                    </li>-->
                <!--                </ul>-->
                <!--            </li>-->
                <!--            <label for="satu" class="carousel-fullscreen"></label>-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--</div>-->
                
                <div class="Scriptcontent">
                    <!-- Image Zoom HTML -->
                    <img id="myImg" src="<?php echo $result['NFT_image'];?>" alt="Trolltunga, Norway" width="400" height="400" />

                    <!-- The Modal -->
                    <div id="popImges" class="modalzoom">
                        <img class="modal-contentzoom" id="img01" />
                    </div>
                    <!-- End Image Zoom HTML -->
                     <script>
                        // Get the modal
                        var modalzoom = document.getElementById("popImges");
            
                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById("myImg");
                        var modalImg = document.getElementById("img01");
                        var captionText = document.getElementById("caption");
                        img.onclick = function () {
                            modalzoom.style.display = "block";
                            modalImg.src = this.src;
                            modalImg.alt = this.alt;
                            captionText.innerHTML = this.alt;
                        };
            
                        // When the user clicks on <span> (x), close the modal
                        modalzoom.onclick = function () {
                            img01.className += " out";
                            setTimeout(function () {
                                modalzoom.style.display = "none";
                                img01.className = "modal-contentzoom";
                            }, 400);
                        };
                    </script>
                </div>
            </div>
            <div class="col-md-12">
                <div class="upper-description pt-5">
                    <div class="detail-right-side">
                        <div class="head-detail">
                            <div class="d-flex justify-content-between">
                                <div style="width: 80%;">
                                    <h2><?php echo $result['NFT_name'];?></h2>
                                </div>
                                <div style="width: 10%;">
                                    <!--<div class="likes-here-btn-set">-->
                                    <!--     <a href="#"><span>🤍 00 </span></a>-->
                                    <!--</div>-->
                                </div>
                                <div style="width: 10% text-right;">
                                    <div class="side-btn-click">
                                        <div class="dropdown">
                                            <!--<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                                            <!--  ...-->
                                            <!--</button>-->
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">New bid</a>
                                                <!--<a class="dropdown-item" href="#">View on OpenSea</a>-->
                                                <a class="dropdown-item" href="#">View</a>
                                                <a class="dropdown-item" href="#">Share</a>
                                                <a class="dropdown-item" href="#">Report</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="pt-3">
                             Highest bid
                                <span style="color: #50579e;">
                                    <?php echo $result['NFT_highest_bid'];?>
                                    <?php echo $result['NFT_payment'];?>
                                </span>
                             
                            </h5>
                            <p class="py-3">
                                <span>
                                     <?php echo $result['NFT_discription'];?>
                                </span>
                            </p>
                            <div class="creator-collection-set">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Creator</h6>
                                        <div class="d-flex justify-content-between">
                                            <div style="width: 20%;" class="left-img-in-here">
                                                <img src="<?php echo $result['Nft_creator_image'];?>" class="" />
                                            </div>
                                            <div style="width: 80%;" class="right-img-in-here">
                                                <a href="./collection.php?address=<?php echo $result['NFT_creator_add'];?>"> 
                                                <div class="content-line">
                                                   <h5 class="pt-3 px-2"><?php echo $result['NFT_creator'];?></h5>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Collection</h6>
                                        <div class="d-flex justify-content-between">
                                            <div style="width: 20%;" class="left-img-in-here">
                                                <img src="assets/img/fevicon.png" class="" />
                                            </div>
                                            <div style="width: 80%;" class="right-img-in-here">
                                                <div class="content-line">
                                                    <h5 class="pt-3 px-2">WSUM</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sale_will_go_creator">
                                <div class="row">
                                    <!--<div class="col-md-3"></div>-->
                                    <div class="col-md-12">
                                        <div class="onsale-btn my-5"><?php echo $result['NFT_royalties'];?>% of sales will go to creator + <?php echo $result['NFT_treeplant'];?>% Will Go To Tree Plant</div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="timer_container my-5">
                                            <div class="card">
                                                <div class="py-4 text-center">
                                                    <h2 class="text_nft_heading">Auction Will End In</h2>
                                                    <h3><a ><span id="clock<?php echo $result['ID'];?>"></span></a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <script>
                                            let Email="<?php echo $result['Useremail'];?>";
                                            let Nft_id= "<?php echo $_GET['id'];?>";
                                            let address="<?php echo $result['NFT_highest_bidder'];?>";
                                            let x = setInterval(function() { 
                                            let id='clock<?php echo $result['ID'];?>';
                                            let dd= timerr('clock<?php echo $result['ID'];?>','<?php echo $result["NFT_auction_time"];?>');
                                            document.getElementById("claim1").style.display = "none"; //hide
                                                if (dd < 0) {
                                                    clearInterval(x);
                                                    document.getElementById(id).innerHTML="Auction Ends";
                                                    // -------------------email service--------------------------
                                                    
                                                           
                                                       
                                                              var formdata = new FormData();
                                                                    formdata.append("Tid", Nft_id);
                                                                    formdata.append("Email", Email);
                                                                  
                                                                    var requestOptions = {
                                                                      method: 'POST',
                                                                      body: formdata,
                                                                      redirect: 'follow'
                                                                    };
                                                                    
                                                                    fetch("./email.php", requestOptions)
                                                                      .then(response => response.text())
                                                                      .then(result => {
                                                                          console.log(result);
                                                                          
                                                                      })   
                                                                    
                                                      
                                                           
                                                    //--------------------------------------------------------
                                                     let web3 = new Web3(window.ethereum);
                                                    web3.eth.getAccounts().then((account) => {
                                                    console.log(account[0]);
                                                    console.log(address);
                                                    if(account[0]==address){
                                                    //  timerr('clock<?php echo $result['ID'];?>','1628141714');
                                                    document.getElementById("hide").style.display = "none";  //hide
	                                                document.getElementById("claim1").style.display = "block"; //show
	                                                document.getElementById("Accpect").style.display = "block"; //hide
	                                                document.getElementById("checkbox").style.display = "block"; //hide
                                    }
                                    else{
                                        document.getElementById("hide").disabled = true;
                                         document.getElementById("claim1").style.display = "none"; //hide
                                          document.getElementById("Accpect").style.display = "none"; //show
                                          document.getElementById("checkbox").style.display = "none"; //hide
                                    }
                            }).catch(console.log)
                                                    
                                                }
                                            }, 1000);
                                            
                                </script>
                                    <!--<div class="col-md-3"></div>-->
                                </div>
                            </div>
                            <div class="description-tab-here">
                                <div class="details-bid-history py-4">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Owners</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bids</a>
                                        </li>
                                      
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="bid-tab-set mt-4">
                                                <div class="detail-tab-set"> 
                                                    <div class="d-flex justify-content-between">
                                                        <div style="width: 10%;" class="left-img-in-here1">
                                                            <img src="<?php echo $result['Nft_owner_image'];?>" style="border-radius: 50%; height: 65px; width: 65px;" class="" />
                                                        </div>
                                                        <div style="width: 90%;" class="right-img-in-here1">
                                                            <div class="content-line">
                                                                <h6 class="px-2 text_nft_heading"><b><?php echo $result['NFT_owner'];?></b> &nbsp;
                                                                <a href="./collection.php?address=<?php echo $result['NFT_owner_address'];?>">  <span class="text-muted"><?php echo $result['NFT_owner_address'];?></span></a>
                                                                </h6>
                                                                <h6 class="px-2 "> 
                                                                    <span><?php echo $result['NFT_price'];?> <?php echo $result['NFT_payment'];?></span>
                                                                </h6>
                                                                <p class="px-2 m-0">6/10/2021,<span class="text_nft_heading"> 10:20 AM</span></p>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="bid-tab-set mt-4">
                                                <div class="detail-tab-set1">
                                                     <?php
                                                        
                                                        $query = "SELECT * FROM `NFT_bids` WHERE NFT_id=$id ORDER BY ID DESC " ;
                                                        $data = mysqli_query($link,$query);
                                                        while($mydata= mysqli_fetch_assoc($data))
                                                        { ?>
                                                        <div class="detail-tab-set">
                                                            <div class="row">
                                                                <div class="col-auto left-img-in-here1">
                                                                    <div class="mt-2">
                                                                        <img src="<?php echo $mydata['Userimage'];?>" style="border-radius: 50%; height: 65px; width: 65px;" class="" />
                                                                    </div>
                                                                </div>
                                                                <div class="col right-img-in-here1">
                                                                    <div class="content-line">
                                                                    <h6 class="px-2">
                                                                        <h6 class="px-2 text_nft_heading"><b><?php echo $mydata['Username'];?></b> &nbsp;
                                                                            <a href="./collection.php?address=<?php echo $mydata['NFT_bidder_add'];?>"><span class="text-muted"><?php echo $mydata['NFT_bidder_add'];?></span></h6></a>
                                                                        </h6>  
                                                                        <h6 class="px-2"><span><?php echo $mydata['NFT_bid'];?></span><?php echo $result['NFT_payment'];?></h6>
                                                                        
                                                                        <p class="px-2 m-0"><span class="text_nft_heading"><?php echo $mydata['NFT_bidtime'];?></span></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php }?> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="heighest-bid-here-btns pt-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="eddition-here-btns_width">
                                            <div class="row">
                                                <div class="col-auto left-img-in-here1">
                                                    <img src="<?php echo $result['Nft_owner_image'];?>" style="border-radius: 50%; height: 65px; width: 65px;" class="" />
                                                </div>
                                                <div class="col right-img-in-here1">
                                                    <div class="content-line">
                                                        <h6 class="px-2 text_nft_heading"> <b><?php echo $result['NFT_creator'];?></b> &nbsp;
                                                         <a href="./collection.php?address=<?php echo $result['NFT_creator_add'];?>">   <span class="text-muted" style="color: #000;"><?php echo $result['NFT_creator_add'];?></span></a>
                                                        </h6>
                                                        <h6 class="px-2"><span><?php echo $result['NFT_price'];?> <?php echo $result['NFT_payment'];?></span></h6>
                                                        <p class="px-2">
                                                            <span class="text_nft_heading" style="color: #000;"><?php echo $result['NFT_time'];?></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="buy-for-btn">
                                            <div class="terms-and-condition_bid">
                                                <div class="terms-condition-section">
                                        <!--<p class=" py-4"><a class="text-decoration-none text-dark " href="#" data-toggle="modal" data-target="#myModal001">Terms & Conditions</a></p>-->
                                        
                                        
                                          <!-- The Modal -->
                                          <div class="modal fade" id="myModal001">
                                            <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                              
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Terms & Conditions</h4>
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                </div>
                                                
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                  <button type="button" class="btn onsale-btn form-control" style="border-radius:25px;" data-dismiss="modal">Close</button>
                                                </div>
                                                
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                            </div>
                                            <input type="checkbox" id="checkbox" name="vehicle1" value="">
                                            <a href="./WSUMterms.pdf" id="Accpect" target="_blank"><label for="vehicle1"> I Accept Terms & Conditions </label></a>  
                                            <button class="btn onsale-btn w-100" data-toggle="modal" id="hide" disabled data-target="#myModal">Place a bid</button>
                                            <button class="btn onsale-btn w-100" data-toggle="modal" id="claim1" disabled data-target="#myModal1">Claim</button>
                                            <!-- The Modal -->
                                            <div class="modal fade" id="myModal">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header border-0">
                                                            <h4 class="modal-title">Place a bid</h4>
                                                            <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="buy-bid-model-content">
                                                                <p>
                                                                    <?php echo $result['NFT_discription'];?>
                                                                </p>
                                                                <h5>Your bid</h5>
                                                                <div class="checkout-list-form">
                                                                    <form>
                                                                        <div class="form-group">
                                                                            <div class="price-btn-here">
                                                                                <input type="text" class="form-control" id="bid" placeholder="Enter bid" onkeyup="myFunction()" />
                                                                                <div class="dropdown">
                                                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <?php echo $result['NFT_payment'];?>
                                                                                    </button>
                                                                        
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <!--<hr>-->
                                                                <div class="checkout-list">
                                                                    <div class="row">
                                                                        <div class="col"><p>Your bidding balance</p></div>
                                                                        <div class="col-auto" id="yourbid"></div>
                                                                        <!--<input type="text" class="form-control" id="yourbid">-->
                                                                    </div>
                                                                </div>
                                                                <div class="checkout-list">
                                                                    <div class="row">
                                                                        <div class="col"><p>Your balance</p></div>
                                                                        <div class="col-auto" id="yourbalance"> <?php echo $result['NFT_payment'];?></div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkout-list">
                                                                    <div class="row">
                                                                        <div class="col"><p>Service fee</p></div>
                                                                        <div class="col-auto" id="service">0.000  <?php echo $result['NFT_payment'];?></div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkout-list">
                                                                    <div class="row">
                                                                        <div class="col"><p>Total bid amount</p></div>
                                                                        <div class="col-auto" id="totoalbid"> <?php echo $result['NFT_payment'];?></div>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <p class="text-danger" id="inceficinet"> insufficient Balance </p>
                                                                </div>
                                                                <div class="checkout-btns-in">
                                                                    <!--<button class="btn btn-primary w-100 m-2"  onclick="bid()">Place a bid</button>-->
                                                                    <button class="btn btn-primary w-100 m-2" id="submit" onclick="bid()" value="" type="button">Place Bid</button>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="myModal1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header border-0">
                                                            
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="buy-bid-model-content" id="buy-bid-model-content">
                                                                <h4 class="modal-title text-left">Claim</h4>
                                                                <p>
                                                                    <?php echo $result['NFT_discription'];?>
                                                                </p>
                                                                <h5>Your bid</h5>
                                                               
                                                                <div class="checkout-list">
                                                                    <div class="row">
                                                                        <div class="col"><p>Your bid Amount</p></div>
                                                                        <div class="col-auto" id="yourbid"><?php echo $result['NFT_highest_bid'];?></div>
                                                                       
                                                                    </div>
                                                                </div>
                                                                <div class="checkout-list">
                                                                    <div class="row">
                                                                        <div class="col"><p>Your balance</p></div>
                                                                        <div class="col-auto" id="yourbalance1">0 BNB</div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkout-list">
                                                                    <div class="row">
                                                                        <div class="col"><p>Service fee</p></div>
                                                                        <div class="col-auto" id="service1">0.000 BNB</div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkout-list">
                                                                    <div class="row">
                                                                        <div class="col"><p>Total amount To Paid</p></div>
                                                                        <div class="col-auto" id="totoalbid1"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkout-btns-in">
                                                                
                                                                    <button class="btn btn-primary w-100 m-2" id="bid" onclick="demoDisplay()" value="" type="button">Claim</button>
                                                                </div>
                                                            </div>
                                                            <div class="text-center" id="resell" style="display:none;">
                                                           <h4 class="modal-title text-center mb-4">Do you want to resell ?</h4>
                                                           <a class="d-inline text-center" href="#"><button type="button" class="btn btn-secondary px-5" style="color:#fff!important" id="yes" onclick="demoDisplay1()">Yes</button></a>
                                                           <script>
                                                            function demoDisplay() {
                                                                  document.getElementById("resell").style.display = "block";
                                                                  document.getElementById("buy-bid-model-content").style.display = "none";
                                                                }
                                                            </script>
                                                            
                                                           <a class="d-inline text-center" href="#"><button type="button" class="btn btn-secondary px-5" onclick="claim()" style="color:#fff!important"  data-dismiss="modal">No</button></a>
                                                           
                                                        
                                                        
                                                       </div>
                                                       <script>
                                                        function demoDisplay1() {
                                                              document.getElementById("resell").style.display = "none";
                                                              document.getElementById("enteramount").style.display = "block";
                                                            }
                                                        </script>
                                                       <div class="resend-amount" id="enteramount" style="display: none;">
                                                           <h4 class="modal-title text-center mb-4">Please Enter Minimum Bid</h4>
                                                           <form>
                                                              <div class="row">
                                                                <div class="col-md-8">
                                                                  <input type="text" class="form-control" id="value" style="background-color: #f8f9fa;border: none;color:#000;border-radius:25px;" placeholder="Enter resell amount">
                                                                </div>
                                                                <div class="col">
                                                                  <button type="button"  class="btn onsale-btn px-3" style="color:#fff!important" onclick="claim()" data-dismiss="modal">Submit</button>
                                                                </div>
                                                              </div>
                                                            </form>
                                                       </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
 var wallet = {
        contract_address: "0xEaee76099220659e80C2faa55F9d042c4754aF5D",
        contract_abi:[ { "inputs": [], "stateMutability": "payable", "type": "constructor" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "owner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "approved", "type": "address" }, { "indexed": true, "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "Approval", "type": "event" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "owner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "operator", "type": "address" }, { "indexed": false, "internalType": "bool", "name": "approved", "type": "bool" } ], "name": "ApprovalForAll", "type": "event" }, { "anonymous": false, "inputs": [ { "indexed": true, "internalType": "address", "name": "from", "type": "address" }, { "indexed": true, "internalType": "address", "name": "to", "type": "address" }, { "indexed": true, "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "Transfer", "type": "event" }, { "inputs": [], "name": "adminAddress", "outputs": [ { "internalType": "address payable", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "to", "type": "address" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "approve", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "owner", "type": "address" } ], "name": "balanceOf", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" }, { "internalType": "address payable", "name": "_artist", "type": "address" }, { "internalType": "uint256", "name": "_royalties", "type": "uint256" }, { "internalType": "uint256", "name": "_treePlantFees", "type": "uint256" } ], "name": "bidingclaim", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "_from", "type": "uint256" }, { "internalType": "uint256", "name": "_to", "type": "uint256" }, { "internalType": "uint256", "name": "_royalties", "type": "uint256" }, { "internalType": "uint256", "name": "_treePlantFees", "type": "uint256" }, { "internalType": "address payable", "name": "artist", "type": "address" }, { "internalType": "uint256", "name": "state", "type": "uint256" }, { "internalType": "uint256", "name": "amount", "type": "uint256" } ], "name": "buyMultipleThroughBNB", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "state", "type": "uint256" }, { "internalType": "uint256", "name": "_from", "type": "uint256" }, { "internalType": "uint256", "name": "_to", "type": "uint256" }, { "internalType": "uint256", "name": "_royalties", "type": "uint256" }, { "internalType": "uint256", "name": "_treePlantFees", "type": "uint256" }, { "internalType": "uint256", "name": "buyAmount", "type": "uint256" }, { "internalType": "address", "name": "paymentCurrency", "type": "address" }, { "internalType": "address payable", "name": "_artist", "type": "address" } ], "name": "buyMultipleThroughCurrencies", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "string", "name": "_tokenURI", "type": "string" }, { "internalType": "uint256", "name": "value", "type": "uint256" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" }, { "internalType": "address", "name": "_paymentCurrency", "type": "address" }, { "internalType": "uint256", "name": "state", "type": "uint256" } ], "name": "createAuction", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [ { "internalType": "string", "name": "_tokenURI", "type": "string" }, { "internalType": "uint256", "name": "value", "type": "uint256" }, { "internalType": "uint256", "name": "startId", "type": "uint256" }, { "internalType": "uint256", "name": "endId", "type": "uint256" }, { "internalType": "uint256", "name": "state", "type": "uint256" }, { "internalType": "address", "name": "_paymentCurrency", "type": "address" } ], "name": "createFix", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [], "name": "creationFess", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" }, { "internalType": "address payable", "name": "artist", "type": "address" }, { "internalType": "uint256", "name": "_royalties", "type": "uint256" }, { "internalType": "uint256", "name": "_treePlantFees", "type": "uint256" } ], "name": "fixclaim", "outputs": [], "stateMutability": "payable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "getApproved", "outputs": [ { "internalType": "address", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "owner", "type": "address" }, { "internalType": "address", "name": "operator", "type": "address" } ], "name": "isApprovedForAll", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "name", "outputs": [ { "internalType": "string", "name": "", "type": "string" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "ownerOf", "outputs": [ { "internalType": "address", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "from", "type": "address" }, { "internalType": "address", "name": "to", "type": "address" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "safeTransferFrom", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "from", "type": "address" }, { "internalType": "address", "name": "to", "type": "address" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" }, { "internalType": "bytes", "name": "_data", "type": "bytes" } ], "name": "safeTransferFrom", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "sellingFess", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address payable", "name": "_adminAdd", "type": "address" } ], "name": "setAdminAddress", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "operator", "type": "address" }, { "internalType": "bool", "name": "approved", "type": "bool" } ], "name": "setApprovalForAll", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "_creationFess", "type": "uint256" } ], "name": "setCreatonFees", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "_sellingFess", "type": "uint256" } ], "name": "setSellingFees", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "address payable", "name": "_treePlant", "type": "address" } ], "name": "setTreePlantAddress", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [ { "internalType": "bytes4", "name": "interfaceId", "type": "bytes4" } ], "name": "supportsInterface", "outputs": [ { "internalType": "bool", "name": "", "type": "bool" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "symbol", "outputs": [ { "internalType": "string", "name": "", "type": "string" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "tokenURI", "outputs": [ { "internalType": "string", "name": "", "type": "string" } ], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "total", "outputs": [ { "internalType": "uint256", "name": "", "type": "uint256" } ], "stateMutability": "view", "type": "function" }, { "inputs": [ { "internalType": "address", "name": "from", "type": "address" }, { "internalType": "address", "name": "to", "type": "address" }, { "internalType": "uint256", "name": "tokenId", "type": "uint256" } ], "name": "transferFrom", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "treePlant", "outputs": [ { "internalType": "address payable", "name": "", "type": "address" } ], "stateMutability": "view", "type": "function" } ]
    };
</script>


<script>
 var walletWSBC = {
        contract_address: "0xb4eaa7058dB92e26EaadD7F1e968D7F79F43Feb8",
        contract_abi:[{"constant":true,"inputs":[],"name":"mintingFinished","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_value","type":"uint256"}],"name":"approve","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_token","type":"address"}],"name":"reclaimToken","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_from","type":"address"},{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"unpause","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_amount","type":"uint256"}],"name":"mint","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"value","type":"uint256"}],"name":"burn","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"claimOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"paused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_subtractedValue","type":"uint256"}],"name":"decreaseApproval","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"}],"name":"balanceOf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"renounceOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"finishMinting","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"pause","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transfer","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_addedValue","type":"uint256"}],"name":"increaseApproval","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"},{"name":"_spender","type":"address"}],"name":"allowance","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"pendingOwner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"anonymous":false,"inputs":[],"name":"Pause","type":"event"},{"anonymous":false,"inputs":[],"name":"Unpause","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"burner","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Burn","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"amount","type":"uint256"}],"name":"Mint","type":"event"},{"anonymous":false,"inputs":[],"name":"MintFinished","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"previousOwner","type":"address"}],"name":"OwnershipRenounced","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"previousOwner","type":"address"},{"indexed":true,"name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"owner","type":"address"},{"indexed":true,"name":"spender","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Transfer","type":"event"}]
    };
</script>
<script>
 var walletETH = {
        contract_address: "0x2170Ed0880ac9A755fd29B2688956BD959F933F8",
        contract_abi:[{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"_decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getOwner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"mint","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"renounceOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}]
    };
</script>
<script>
 var walletWBBW = {
        contract_address: "0x11d86D74a0556623a5FB4266aE759aCC3c3b8231",
        contract_abi:[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"uint256","name":"burnFee","type":"uint256"}],"name":"BURNFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"taxFee","type":"uint256"}],"name":"TAXFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"maxTxAmount","type":"uint256"}],"name":"_setMaxTxAmount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"}],"name":"deliver","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"excludeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"geUnlockTime","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"includeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"isExcluded","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"time","type":"uint256"}],"name":"lock","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"},{"internalType":"bool","name":"deductTransferFee","type":"bool"}],"name":"reflectionFromToken","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"maxTxPercent","type":"uint256"},{"internalType":"uint256","name":"maxTxDecimals","type":"uint256"}],"name":"setMaxTxPercent","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"rAmount","type":"uint256"}],"name":"tokenFromReflection","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalBurn","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalFees","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"unlock","outputs":[],"stateMutability":"nonpayable","type":"function"}]
    };
</script>
<script>
 var walletQBBW = {
        contract_address: "0x3fB2A3d12f363C9d820CA500f169ee706dCc19d9",
        contract_abi:[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"uint256","name":"burnFee","type":"uint256"}],"name":"BURNFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"taxFee","type":"uint256"}],"name":"TAXFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"maxTxAmount","type":"uint256"}],"name":"_setMaxTxAmount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"}],"name":"deliver","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"excludeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"geUnlockTime","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"includeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"isExcluded","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"time","type":"uint256"}],"name":"lock","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"},{"internalType":"bool","name":"deductTransferFee","type":"bool"}],"name":"reflectionFromToken","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"maxTxPercent","type":"uint256"},{"internalType":"uint256","name":"maxTxDecimals","type":"uint256"}],"name":"setMaxTxPercent","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"rAmount","type":"uint256"}],"name":"tokenFromReflection","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalBurn","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalFees","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"unlock","outputs":[],"stateMutability":"nonpayable","type":"function"}]
    };
</script>
<script>
 var walletBTCB = {
        contract_address: "0x7130d2A12B9BCbFAe4f2634d864A1Ee1Ce3Ead9c",
        contract_abi:[{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"_decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getOwner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"mint","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"renounceOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}]
    };
</script>
<script>
 var walletEJCO = {
        contract_address: "0xeC530b99522067CF72b3D200eDE4d25B0ab84eB7",
        contract_abi:[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"uint256","name":"burnFee","type":"uint256"}],"name":"BURNFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"charityFee","type":"uint256"}],"name":"CHARITYFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"taxFee","type":"uint256"}],"name":"TAXFEE","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"pure","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"}],"name":"deliver","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"excludeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"includeAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"isCharity","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"isExcluded","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"pure","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"},{"internalType":"bool","name":"deductTransferFee","type":"bool"}],"name":"reflectionFromToken","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"setAsCharityAccount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"pure","type":"function"},{"inputs":[{"internalType":"uint256","name":"rAmount","type":"uint256"}],"name":"tokenFromReflection","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalBurn","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalCharity","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalFees","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}]
    };
</script>
<script>
 var walletBSCUSD = {
        contract_address: "0x55d398326f99059fF775485246999027B3197955",
        contract_abi:[{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[],"name":"_decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"_symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"burn","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getOwner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"mint","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"renounceOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}]
    };
</script>
<script>
 var walletWSUM = {
        contract_address: "0x316096cA981acfAAe345F0e3c46E4c161D90746e",
        contract_abi:[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Burn","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Mint","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferPrepared","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"sender","type":"address"},{"indexed":true,"internalType":"address","name":"redeemToEthAccount","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Redeem","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[],"name":"_NEW_OWNER_","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"_OWNER_","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"balance","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"burn","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"claimOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"initOwner","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"mint","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"value","type":"uint256"},{"internalType":"address","name":"redeemToEthAccount","type":"address"}],"name":"redeem","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}]    
        };
</script>

        <script>
                          
    document.getElementById('checkbox').addEventListener('change',(e)=>{
        e.target.checked? $('#hide').attr("disabled", false):$('#hide').attr("disabled", true);  
        e.target.checked? $('#claim1').attr("disabled", false):$('#claim1').attr("disabled", true);  
    })
                         let price = "<?php echo $result['NFT_highest_bid'];?>";

                        let payment="<?php echo $result['NFT_payment'];?>";
                      
                          let wweb3 = new Web3(window.ethereum);
                            if (payment=="BNB")
                            {
                                let NFT_treeplant="<?php echo $result['NFT_treeplant'];?>";
 
                                     NFT_treeplant = (price*NFT_treeplant)/100;
                                     console.log(NFT_treeplant); 
                            wweb3.eth
                                .getAccounts()
                                .then((account) => {
                                   
                                    wweb3.eth
                                        .getBalance(account[0])
                                        .then((balance) => {
                                            balance = balance / 10 ** 18;
                                            balance = balance.toFixed(2);
                                            document.getElementById("yourbalance1").innerHTML = balance + " BNB";
                                             window.wweb3 = new Web3(window.ethereum);
                                  let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                            myContract1.methods
                                                .sellingFess()
                                                .call()
                                                .then((fees) => {
                                                    
                                                    fees = (value * fees) / 100;
                                                    document.getElementById("service1").innerHTML = fees + " BNB";
                                                    let total = price;
                                                    window.totalOutcome = total;
                                                    if(total>balance)
                                                        {
                                                         document.getElementById("submit").disabled=true;
                                                         document.getElementById("inceficinet").style.display="block";
                                                        //  document.getElementById("buy").style.display="block";
                                                     }
                                                     else{
                                                          document.getElementById("inceficinet").style.display="none";
                                                          document.getElementById("submit").disabled=false;
                                                        //   document.getElementById("buy").style.display="none";
                                                   }                                                    
                                                    document.getElementById("totoalbid1").innerHTML = total + " BNB";
                                                })
                                                .catch(console.log);
                                        })
                                        .catch(console.log);
                                })
                            }
                            else{
                                
                                 switch (payment) {
                                                    case 'WBBW':
                                                            let newContractWBBW = new wweb3.eth.Contract(walletWBBW.contract_abi,walletWBBW.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                           
                                                                                            newContractWBBW.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                              
                                                                                              balance=balance/10**18;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance1").innerHTML = Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (price * fees) / 100;
                                                                                                            document.getElementById("service1").innerHTML = Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                            let total =x;
                                                                                                            window.totalWBBW = total;
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                                // document.getElementById("buy").style.display="block";
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                                // document.getElementById("buy").style.display="none";
                                                                                                            }
                                                                                                            document.getElementById("totoalbid1").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                        break;
                                                      case 'EJCO':
                                                       let newContractEJCO = new wweb3.eth.Contract(walletEJCO.contract_abi,walletEJCO.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                            
                                                                                            newContractEJCO.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                              
                                                                                              balance=balance/10**18;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance1").innerHTML =  Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (price * fees) / 100;
                                                                                                            document.getElementById("service1").innerHTML = Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                            let total = x;
                                                                                                            window.totalEJCO = total + "<?php echo $result['NFT_payment'];?>";
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                                // document.getElementById("buy").style.display="block";
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                                // document.getElementById("buy").style.display="none";
                                                                                                            }
                                                                                                            document.getElementById("totoalbid1").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                        break;
                                                      case 'QWWB':
                                                          let newContractQWWB = new wweb3.eth.Contract(walletQBBW.contract_abi,walletQBBW.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                            
                                                                                            newContractQWWB.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                              
                                                                                              balance=balance/10**8;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance1").innerHTML = Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (price * fees) / 100;
                                                                                                            document.getElementById("service1").innerHTML = Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 })  + " <?php echo $result['NFT_payment'];?>";
                                                                                                            let total = x;
                                                                                                            window.totalQWWB = total;
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                                // document.getElementById("buy").style.display="block";
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                                // document.getElementById("buy").style.display="none";
                                                                                                            }
                                                                                                            document.getElementById("totoalbid1").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                        
                                                        break;
                                                      case 'BUSD':
                                                             let newContractBUSD = new wweb3.eth.Contract(walletBSCUSD.contract_abi,walletBSCUSD.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                           
                                                                                            newContractBUSD.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                              
                                                                                              balance=balance/10**18;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance1").innerHTML = Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (price * fees) / 100;
                                                                                                            document.getElementById("service1").innerHTML = Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                            let total = x;
                                                                                                            window.totalBUSD = total;
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                                // document.getElementById("buy").style.display="block";
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                                // document.getElementById("buy").style.display="none";
                                                                                                            }
                                                                                                            document.getElementById("totoalbid1").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                        break;
                                                      case 'WBTC':
                                                         let newContractWBTC = new wweb3.eth.Contract(walletBTCB.contract_abi,walletBTCB.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                           
                                                                                            newContractWBTC.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                          
                                                                                              balance=balance/10**18;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance1").innerHTML = Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (price * fees) / 100;
                                                                                                            document.getElementById("service1").innerHTML = Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 })  + " <?php echo $result['NFT_payment'];?>";
                                                                                                            let total = x;
                                                                                                            window.totalWBTC = total;
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                                // document.getElementById("buy").style.display="block";
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                                // document.getElementById("buy").style.display="none";
                                                                                                            }
                                                                                                            document.getElementById("totoalbid1").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                        break;
                                                      case 'BETH':
                                                         console.log("BETH");
                                                        let newContractBETH = new wweb3.eth.Contract(walletETH.contract_abi,walletETH.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                           
                                                                                            newContractBETH.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                           
                                                                                              balance=balance/10**18;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance1").innerHTML = Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (price * fees) / 100;
                                                                                                            document.getElementById("service1").innerHTML =  Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                            let total =x;
                                                                                                            window.totalBETH = total;
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                                // document.getElementById("buy").style.display="block";
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                                // document.getElementById("buy").style.display="none";
                                                                                                            }
                                                                                                            document.getElementById("totoalbid1").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                        break;
                                                      case 'Cake':
                                                         console.log("CAKE");
                                                         break;
                                                      case 'WSBC':
                                                        console.log("WSBC ");
                                                       let newContractWSBC = new wweb3.eth.Contract(walletWSBC.contract_abi,walletWSBC.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                            
                                                                                            newContractWSBC.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                             
                                                                                              balance=balance/10**8;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance1").innerHTML = Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (price * fees) / 100;
                                                                                                            document.getElementById("service1").innerHTML = Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " WSBC";
                                                                                                            let total = x;
                                                                                                            window.totalWSBC = total;
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                                // document.getElementById("buy").style.display="block";
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                                // document.getElementById("buy").style.display="none";
                                                                                                            }
                                                                                                            document.getElementById("totoalbid1").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " WSBC";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                                break;
                                                                
                                                    case 'WSUM':
                                                        console.log("WSUM ");
                                                       let newContractWSUM = new wweb3.eth.Contract(walletWSUM.contract_abi,walletWSUM.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                            
                                                                                            newContractWSUM.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                             
                                                                                              balance=balance/10**18;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance1").innerHTML = Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (price * fees) / 100;
                                                                                                            document.getElementById("service1").innerHTML = Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " WSUM";
                                                                                                            let total = x;
                                                                                                            window.totalWSBC = total;
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                                // document.getElementById("buy").style.display="block";
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                                // document.getElementById("buy").style.display="none";
                                                                                                            }
                                                                                                            document.getElementById("totoalbid1").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " WSUM";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                                break;
                                                     default:   
                                                                            console.log('no',payment);
                            }
                                                  
                                  
                   
                            }
                           

                        async function myFunction() {
                            
                            let x = document.getElementById("bid").value;
                            document.getElementById("yourbid").innerHTML = x + "<?php echo $result['NFT_payment'];?>";
                            let payment="<?php echo $result['NFT_payment'];?>";
                            let web3 = new Web3(window.ethereum);
                            
                            if (payment=="BNB")
                            {
                                
                             web3.eth
                                .getAccounts()
                                .then((account) => {
                                    console.log(account[0]);
                                    web3.eth
                                        .getBalance(account[0])
                                        .then((balance) => {
                                            balance = balance / 10 ** 18;
                                            balance = balance.toFixed(2);
                                            document.getElementById("yourbalance").innerHTML = balance + " BNB";
                                            
                                           let myContract = new web3.eth.Contract(wallet.contract_abi, wallet.contract_address);
                                            myContract.methods
                                                .sellingFess()
                                                .call()
                                                .then((fees) => {
                                                    console.log(fees);
                                                    fees = (x * fees) / 100;
                                                    document.getElementById("service").innerHTML = fees+ " <?php echo $result['NFT_payment'];?>";
                                                    let total1 =x;
                                                    
                                                    if(total1>balance)
                                                    {
                                                        document.getElementById("submit").disabled=true;
                                                        document.getElementById("inceficinet").style.display="block";
                                                    }
                                                    else{
                                                        document.getElementById("inceficinet").style.display="none";
                                                        document.getElementById("submit").disabled=false;
                                                    }
                                                    document.getElementById("totoalbid").innerHTML = total1 + " <?php echo $result['NFT_payment'];?>";
                                                    
                                                })
                                                .catch(console.log);
                                        })
                                        .catch(console.log);
                                })
                                .catch(console.log);
                            }
                            else{
                                
                                  let currency="<?php echo $result['NFT_payment'];?>";
                                  
                                switch (payment) {
                                
                                case 'WBBW':
                                                            let newContractWBBW = new wweb3.eth.Contract(walletWBBW.contract_abi,walletWBBW.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                           
                                                                                            newContractWBBW.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                              
                                                                                              balance=balance/10**18;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance").innerHTML = Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (x * fees) / 100;
                                                                                                            document.getElementById("service").innerHTML =  Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                            let total =x;
                                                                                                            window.totalWBBW = total;
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                               
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                                
                                                                                                            }
                                                                                                            document.getElementById("totoalbid").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                        break;
                                                      case 'EJCO':
                                                       let newContractEJCO = new wweb3.eth.Contract(walletEJCO.contract_abi,walletEJCO.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                            
                                                                                            newContractEJCO.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                              
                                                                                              balance=balance/10**18;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance").innerHTML = Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (x * fees) / 100;
                                                                                                            document.getElementById("service").innerHTML = Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                            let total =x;
                                                                                                            window.totalEJCO = total + "<?php echo $result['NFT_payment'];?>";
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                                
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                              
                                                                                                            }
                                                                                                            document.getElementById("totoalbid").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                        break;
                                                      case 'QWWB':
                                                          let newContractQWWB = new wweb3.eth.Contract(walletQBBW.contract_abi,walletQBBW.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                            
                                                                                            newContractQWWB.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                              
                                                                                              balance=balance/10**8;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance").innerHTML =  Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (x * fees) / 100;
                                                                                                            document.getElementById("service").innerHTML = Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 })  + " <?php echo $result['NFT_payment'];?>";
                                                                                                            var total =x;
                                                                                                            window.totalQWWB = total;
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                               
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                             
                                                                                                            }
                                                                                                            document.getElementById("totoalbid").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                        
                                                        break;
                                                      case 'BUSD':
                                                             let newContractBUSD = new wweb3.eth.Contract(walletBSCUSD.contract_abi,walletBSCUSD.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                           
                                                                                            newContractBUSD.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                              
                                                                                              balance=balance/10**18;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance").innerHTML = Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (x * fees) / 100;
                                                                                                            document.getElementById("service").innerHTML = Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                            let total = x;
                                                                                                            window.totalBUSD = total;
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                               
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                                
                                                                                                            }
                                                                                                            document.getElementById("totoalbid").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                        break;
                                                      case 'WBTC':
                                                         let newContractWBTC = new wweb3.eth.Contract(walletBTCB.contract_abi,walletBTCB.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                           
                                                                                            newContractWBTC.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                          
                                                                                              balance=balance/10**18;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance").innerHTML =  Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (x * fees) / 100;
                                                                                                            document.getElementById("service").innerHTML =  Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                            let total = x;
                                                                                                            window.totalWBTC = total;
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                                
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                                
                                                                                                            }
                                                                                                            document.getElementById("totoalbid").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                        break;
                                                      case 'BETH':
                                                         console.log("BETH");
                                                        let newContractBETH = new wweb3.eth.Contract(walletETH.contract_abi,walletETH.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                           
                                                                                            newContractBETH.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                           
                                                                                              balance=balance/10**18;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance").innerHTML =  Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (x * fees) / 100;
                                                                                                            document.getElementById("service").innerHTML = Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                                            let total = x;
                                                                                                            window.totalBETH = total;
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                               
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                                
                                                                                                            }
                                                                                                            document.getElementById("totoalbid").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 })  + " <?php echo $result['NFT_payment'];?>";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                        break;
                                                      case 'Cake':
                                                         console.log("CAKE");
                                                         break;
                                                      case 'WSBC':
                                                        console.log("WSBC ");
                                                       let newContract = new wweb3.eth.Contract(walletWSUM.contract_abi,walletWSUM.contract_address);
                                                            wweb3.eth.getAccounts().then((account) => {
                                                                                            
                                                                                            newContract.methods.balanceOf(account[0]).call().then((balance)=>{
                                                                                             
                                                                                              balance=balance/10**8;
                                                                                              balance=balance.toFixed(2);
                                                                                              document.getElementById("yourbalance").innerHTML = Number(balance).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " <?php echo $result['NFT_payment'];?>";
                                                                                              let myContract1 = new wweb3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                                                                                                    myContract1.methods.sellingFess().call().then((fees) => {
                                                                                                            fees = (x * fees) / 100;
                                                                                                            document.getElementById("service").innerHTML = Number(fees).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " WSBC";
                                                                                                            let total = x;
                                                                                                            window.totalWSBC = total;
                                                                                                            if(Number(total)>Number(balance))
                                                                                                            {
                                                                                                                document.getElementById("submit").disabled=true;
                                                                                                                document.getElementById("inceficinet").style.display="block";
                                                                                                                
                                                                                                            }
                                                                                                            else{
                                                                                                                document.getElementById("inceficinet").style.display="none";
                                                                                                                document.getElementById("submit").disabled=false;
                                                                                                                
                                                                                                            }
                                                                                                            document.getElementById("totoalbid").innerHTML = Number(total).toLocaleString('en-US', { style: 'decimal', maximumFractionDigits : 5, minimumFractionDigits : 5 }) + " WSBC";
                                                                                                        })
                                                                                                        .catch(console.log);
                                                                                          }).catch(console.log)
                                                                                        })
                                                                break;
                                                     default:   
                                                                            console.log('no',payment);
                            }
                            
                            }
                            
                            
                        }
                    </script>
                    <script>

                        async  function bid(){

                        let id= <?php echo $result['NFT_id'];?>;
                        let price='<?php echo $result['NFT_price'];?>';
                        let higherbid='<?php echo $result['NFT_highest_bid'];?>';
                        let username="<?php echo $result['Username'];?>";
                        let NFT_name="<?php echo $result['NFT_name'];?>";
                        let NFT_image="<?php echo $result['NFT_image'];?>";
                        let NFT_type="<?php echo $result['NFT_payment'];?>";
                        let x = document.getElementById("bid").value;
                        
                        if(Number(price)<=Number(x)){
                                 
                                     let web3=new Web3(window.ethereum)
                                     web3.eth.getAccounts().then(account=>{
                                         
                                         var formdata = new FormData();
                                        formdata.append("tokenid",id );
                                        formdata.append("bid", x);
                                        formdata.append("bidder_Address",  account[0]);
                                        formdata.append("Nft_name", NFT_name);
                                        formdata.append("NFT_image", NFT_image);
                                        formdata.append("higherbid", higherbid);
                                        formdata.append("NFT_type",  NFT_type);
                                        
                                        var requestOptions = {
                                          method: 'POST',
                                          body: formdata,
                                          redirect: 'follow'
                                        };
                                        
                                        fetch("./savebid.php", requestOptions)
                                          .then(response => response.text())
                                          .then(result => {
                                              
                                               if (result=="not Okay"){
                                                   
                                                   Swal.fire({
                                                                      icon: 'error',
                                                                      title: 'Oops...',
                                                                      text: 'Can Not Sumbit Bid, first complete your profile',
                                                                     
                                                                    }).then((ok)=>{
                                                                        location.href="./my_item.php";
                                                                    }).catch(console.log);
                                                   
                                               }
                                               else{
                                                   
                                                 if(result=="success")
                                                {
                                                    if(x>higherbid){
                                                  
                                                     var formdata = new FormData();
                                                        formdata.append("id", id);
                                                        formdata.append("bid",x);
                                                        formdata.append("address", account[0]);
                                                        
                                                        var requestOptions = {
                                                          method: 'POST',
                                                          body: formdata,
                                                          redirect: 'follow'
                                                        };
                                                        
                                                        fetch("./updatebid.php", requestOptions)
                                                          .then(response => response.text())
                                                          .then(result => console.log(result))
                                                          .catch(error => console.log('error', error));
                                                      }
                                                      
                                                      Swal.fire({
                                                          icon: 'success',
                                                          title: 'Great...',
                                                          text: 'Bid Successfully Submitted',
                                                         
                                                            }).then((ok) => {
                                                                              location.href="./bid_description.php?id="+ id ;
                                                                            })
                                                            .catch(console.log);
                                                }
                                                else{
                                                    Swal.fire({
                                                                      icon: 'error',
                                                                      title: 'Oops...',
                                                                      text: 'Bid Already Submitted',
                                                                     
                                                                    }).then((ok)=>{
                                                                    }).catch(console.log);
                                                }  
                                               }
                                                
                                                     
                                                
                                                
                                               }).catch(error => console.log('error', error));
                                     }).catch(error => console.log('error', error));       
                                  }else{
                                      
                                    Swal.fire({
                                          icon: 'error',
                                          title: 'Oops...',
                                          text: 'Bid Must Be Grater Than Minimum Bid Value!',
                                         
                                        })
                             }
                      


                                }
                                

 async function claim(){
        
         let creator="<?php echo $result['NFT_creator_add'];?>";
         let NFTprice="<?php echo $result['NFT_price'];?>";
         let id="<?php echo $result['NFT_id'];?>";
         let payment="<?php echo $result['NFT_payment'];?>";
         let username="<?php echo $result['Username'];?>";
         let NFT_image="<?php echo $result['NFT_image'];?>";
         let NFT_name="<?php echo $result['NFT_name'];?>";
         let ownerAddress="<?php echo $result['NFT_owner_address'];?>";
         let NFT_royalties="<?php echo $result['NFT_royalties'];?>";
         let NFT_treeplant="<?php echo $result['NFT_treeplant'];?>";
         let NFT_creator_add="<?php echo $result['NFT_creator_add'];?>";
         let NFTpricenew="<?php echo $result['NFT_highest_bid'];?>";
        
         let resellprice;
         let resellAmount=document.getElementById("value").value;
         let resell= 'on';
         if (resellAmount=="")
         {
             resellprice=NFTprice;
             resell='off';
         }
         else{
             resellprice=resellAmount;
             
         }
         
                
            if(window.ethereum)
             {
                 window.web3 = new Web3(window.ethereum);
                    const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
                    const account = accounts[0];
                    var myContract = new web3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                    console.log(wallet.contract_address);
                    if (payment=="BNB"){
                        
                  let total1= window.totalOutcome;
                     total1 = (total1*(1000000000000000000));
                 let resellvalue=BigInt(resellprice*1000000000000000000)
                   console.log(myContract);
                    NFTpricenew=BigInt(NFTpricenew*1000000000000000000)
                    myContract.methods.buyMultipleThroughBNB(id,id,NFT_royalties,NFT_treeplant,NFT_creator_add,1,NFTpricenew).send({from:account,value:total1})
                    .on('transactionHash', function(hash)
                        {
                          
                            document.getElementById("myModal").classList.remove("show");
                            document.getElementById("myModal").style = "nono";
                            // document.querySelector(".modal-backdrop").remove();
                            // console.log(document.querySelector(".modal-backdrop").remove());
                            document.getElementById("loadingdiv").classList.remove("d-none");
                            document.getElementById("loadingdiv").className = "d-block";
                        })   
                    .then( receipt1 =>
                    {
                        let NFT_paymenCurrency="<?php echo $result['NFT_paymenCurrency'];?>";
                         
                         var formdata = new FormData();
                            formdata.append("id", id);
                            formdata.append("owner", accounts[0] );
                            
                            formdata.append("price", resellprice);
                            formdata.append("resell", resell);
                            
                            var requestOptions = {
                              method: 'POST',
                              body: formdata,
                              redirect: 'follow'
                            };
                            
                            fetch("./updateowner.php", requestOptions)
                              .then(response => response.text())
                              .then(result => console.log(result))
                              .catch(error => console.log('error', error));
            //------------------------------------------------------------------   
                         var formdata = new FormData();
                            formdata.append("value", total1);
                            formdata.append("owner", accounts[0]);
                            
                            formdata.append("NFT_image", NFT_image);
                            formdata.append("NFT_name", NFT_name);
                            formdata.append("currencies", payment);
                            formdata.append("currencies_address", NFT_paymenCurrency);
                            
                            
                            var requestOptions = {
                              method: 'POST',
                              body: formdata,
                              redirect: 'follow'
                            };
                            
                            fetch("./bid_list.php", requestOptions)
                              .then(response => response.text())
                              .then((result)=>{}) 
                              .catch(error => console.log('error', error));
                //---------------------------------------------------------------------------
                        var formdata = new FormData();
                            formdata.append("value", total1);
                            formdata.append("owner", ownerAddress);
                            
                            formdata.append("NFT_image", NFT_image);
                            formdata.append("NFT_name", NFT_name);
                             formdata.append("currencies", payment);
                            formdata.append("currencies_address", NFT_paymenCurrency);
                           var requestOptions = {
                              method: 'POST',
                              body: formdata,
                              redirect: 'follow'
                            };
                            
                            fetch("./sell_list.php", requestOptions)
                              .then(response => response.text())
                              .then((result)=>{
                                  
                                  Swal.fire({
                                              icon: 'success',
                                              title: 'Great...',
                                              text: 'Congratulations !ðŸŽ‰',
                                             
                                                }).then((ok) => {
                                                                 location.href = "./buy_description.php?id="+ id;
                                                                })
                                
                              }) 
                              .catch(error => console.log('error', error));
                            
                    }).catch(console.log("error1"))
                 }
                 
                 else{
                       let totalWSUM=BigInt(10000000000000000000000000000000000);
                         switch (payment) {
                          
                                                      case 'WBBW':
                                                        let newContractWBBW = new wweb3.eth.Contract(walletWBBW.contract_abi,walletWBBW.contract_address);
                                                        
                                                         
                                                                               newContractWBBW.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                                                            .on('transactionHash', function(hash)
                                                                                { console.log(hash);
                                                                                    
                                                                                }).then(()=>{  buyNFT(window.totalWBBW)}).catch(console.log)
                                                        break;
                                                      case 'EJCO':
                                                       let newContractEJCO = new wweb3.eth.Contract(walletEJCO.contract_abi,walletEJCO.contract_address);
                                                          
                                                                               newContractEJCO.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                                                            .on('transactionHash', function(hash)
                                                                                {
                                                                                    console.log(hash)
                                                                                    
                                                                                }).then(()=>{  buyNFT(window.totalEJCO) }).catch(console.log)
                                                        break;
                                                      case 'QWWB':
                                                          let newContractQBBW = new wweb3.eth.Contract(walletQBBW.contract_abi,walletQBBW.contract_address);
                                                          
                                                                               newContractQBBW.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                                                            .on('transactionHash', function(hash)
                                                                                {
                                                                                    console.log(hash)
                                                                                  }).then(()=>{ buyNFT(window.totalQWWB)}).catch(console.log)
                                                        
                                                        break;
                                                      case 'BUSD':
                                                             let newContractBSCUSD = new wweb3.eth.Contract(walletBSCUSD.contract_abi,walletBSCUSD.contract_address);
                                                          
                                                                               newContractBSCUSD.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                                                            .on('transactionHash', function(hash)
                                                                                {  console.log(hash)
                                                                                    
                                                                                }).then(()=>{  buyNFT(window.totalBUSD) }).catch(console.log)
                                                        break;
                                                        case 'WBTC':
                                                       
                                                          let newContractWBTC = new wweb3.eth.Contract(walletBTCB.contract_abi,walletBTCB.contract_address);
                                                         
                                                                               newContractWBTC.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                                                            .on('transactionHash', function(hash)
                                                                                {
                                                                                    console.log(hash)
                                                                                }).then(()=>{ buyNFT(window.totalWBTC)}).catch(console.log)
                                                        break;
                                                      case 'BETH':
                                                        
                                                         let newContractETH = new wweb3.eth.Contract(walletETH.contract_abi,walletETH.contract_address);
                                                         
                                                                               newContractETH.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                                                            .on('transactionHash', function(hash)
                                                                                {
                                                                                    console.log(hash)
                                                                                 }).then(()=>{ buyNFT(window.totalBETH) }).catch(console.log)
                                                        break;
                                                      case 'Cake':
                                                         console.log("CAKE");
                                                         break;
                                                      case 'WSBC':
                                                      
                                                        let newContractWSBC = new wweb3.eth.Contract(walletWSUM.contract_abi,walletWSUM.contract_address);
                                                         
                                                                               newContractWSBC.methods.approve(wallet.contract_address,totalWSUM).send({from:account})
                                                                            .on('transactionHash', function(hash)
                                                                                {}).then(()=>{ buyNFT(window.totalWSBC) }).catch(console.log)
                                                                                
                                                     default:   
                                                                            console.log('no',payment);
                            }
                     }
                      
             }
    }
    
    async function buyNFT(total1)
        {     let NFTprice="<?php echo $result['NFT_highest_bid'];?>";
              let minimunBid="<?php echo $result['NFT_price'];?>";
              let id="<?php echo $result['NFT_id'];?>";
              let NFT_image="<?php echo $result['NFT_image'];?>";
              let username="<?php echo $result['Username'];?>";
              let NFT_name="<?php echo $result['NFT_name'];?>";
              let ownerAddress="<?php echo $result['NFT_owner_address'];?>";
              let owner_name="<?php echo $result['NFT_owner'];?>";
              let userimage="<?php echo $result['Userimage'];?>";
              let NFT_royalties="<?php echo $result['NFT_royalties'];?>";
              let NFT_treeplant="<?php echo $result['NFT_treeplant'];?>";
              let NFT_creator_add="<?php echo $result['NFT_creator_add'];?>";
              let NFTpricenew="<?php echo $result['NFT_highest_bid'];?>";
              let NFT_paymenCurrency="<?php echo $result['NFT_paymenCurrency'];?>";
              let payment="<?php echo $result['NFT_payment'];?>";
              
              window.web3 = new Web3(window.ethereum);
                    const accounts = await ethereum.request({ method: 'eth_requestAccounts'});
                    const account = accounts[0];
                    let myContract = new web3.eth.Contract(wallet.contract_abi,wallet.contract_address);
                    let resellprice;
                    let resellAmount=document.getElementById("value").value;
                     let resell= 'on';
                     if (resellAmount=="")
                     {
                         resellprice=minimunBid;
                         resell='off';
                         
                     }
                     else{
                         resellprice=resellAmount;
                         
                     }
                     if (payment=='QBBW'||payment=='WSBC')
                     {
                          NFTpricenew=BigInt(NFTpricenew*100000000);
                     }
                     else{
                         NFTpricenew=BigInt(NFTpricenew*1000000000000000000);
                     }
                    myContract.methods.buyMultipleThroughCurrencies(1,id,id,NFT_royalties,NFT_treeplant,NFTpricenew,NFT_paymenCurrency,NFT_creator_add).send({from:account})
                    .on('transactionHash', function(hash)
                        {
                            
                            
                        })   
                    .then( receipt1 =>
                    {
                        
                         
                         
                         var formdata = new FormData();
                            formdata.append("id", id);
                            formdata.append("owner", accounts[0] );
                            formdata.append("Ownername", username );
                            formdata.append("price", resellprice);
                            formdata.append("resell", resell);
                            
                            var requestOptions = {
                              method: 'POST',
                              body: formdata,
                              redirect: 'follow'
                            };
                            
                            fetch("./updateowner.php", requestOptions)
                              .then(response => response.text())
                              .then(result => console.log(result))
                              .catch(error => console.log('error', error));
            //------------------------------------------------------------------   
                         var formdata = new FormData();
                            formdata.append("value", total1);
                            formdata.append("owner", accounts[0]);
                       
                            formdata.append("NFT_image", NFT_image);
                            formdata.append("NFT_name", NFT_name);
                            
                            formdata.append("currencies", payment);
                            formdata.append("currencies_address", NFT_paymenCurrency);
                            
                            var requestOptions = {
                              method: 'POST',
                              body: formdata,
                              redirect: 'follow'
                            };
                            
                            fetch("./bid_list.php", requestOptions)
                              .then(response => response.text())
                              .then((result)=>{}) 
                              .catch(error => console.log('error', error));
                              
            //------------------------------------------------------------------
            
                            var formdata = new FormData();
                            formdata.append("value", total1);
                            
                            formdata.append("NFT_image", NFT_image);
                            formdata.append("NFT_name", NFT_name);
                            formdata.append("userimage", userimage); 
                            formdata.append("currencies", payment);
                            formdata.append("currencies_address", NFT_paymenCurrency);
                            var requestOptions = {
                              method: 'POST',
                              body: formdata,
                              redirect: 'follow'
                            };
                            
                            fetch("./sell_list.php", requestOptions)
                              .then(response => response.text())
                              .then((result)=>{
                            
                                  Swal.fire({
                                              icon: 'success',
                                              title: 'Great...',
                                              text: 'Congratulations !ðŸŽ‰',
                                             
                                                }).then((ok) => {
                                                         
                                                         location.href = "./buy_description.php?id="+ id;
                                                 
                                                 })
                                
                              }) 
                              .catch(error => console.log('error', error));
                              
                            }).catch(console.log("error2"))
        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
include "footer.php";
?>
