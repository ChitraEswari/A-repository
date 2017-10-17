<?php
include 'header.php';
$token_name = getToken();
if (!empty($token_name)) {
    $strpart1 = $url_string . "/jsonAbout?token_name=";
    $strpart3 = "&callback=strjsonpcallback";
    $strengthurl = $strpart1 . $token_name . $strpart3;

    $awardpart1 = $url_string . "/jsonAwards?token_name=";
    $awardpart3 = "&callback=awardsjsonpcallback";
    $awardurl = $awardpart1 . $token_name . $awardpart3;

    $mgntpart1 = $url_string . "/managementTeamJson?token_name=";
    $mgntpart3 = "&callback=mgntjsonpcallback";
    $mgntteamurl = $mgntpart1 . $token_name . $mgntpart3;

    $teampart1 = $url_string . "/teamJson?token_name=";
    $teampart3 = "&callback=teamjsonpcallback";
    $teamurl = $teampart1 . $token_name . $teampart3;

    $displayCont = $url_string . "/getAboutContent?token_name=";
    $displayCont1 = "&callback=aboutContentjsonpcallback";
    $displayUrl = $displayCont . $token_name . $displayCont1;
}
?>
<style>
    .awardsImg{
        height: 250px;
        width: 100%;
    }

    .buttonread{
        background:none!important;
        border:none; 
        padding:0!important;

        /*optional*/
        font-family:arial,sans-serif; /*input has OS specific font-family*/
        color:#069;

        cursor:pointer;
    }
    #awards .carousel-item{

        margin-top: 10px;
        position: relative;
        -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        box-shadow: 4 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }

    #awards .card-reveal{  
        display: none;  
        padding: 20px;
        position: absolute;
        background-color: #FFF;
        width: 100%;
        overflow-y: auto;
        /*top: 0;*/
        left:0;
        bottom:0;
        height: 100%;
        z-index: 999;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);

    }

    #awards .close{
        float: right;
    }


    #management .carousel-item{

        margin-top: 10px;
        position: relative;
        -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        box-shadow: 4 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }

    #management .card-reveal{  
        display: none;  
        padding: 20px;
        position: absolute;
        background-color: #FFF;
        width: 100%;
        overflow-y: auto;
        /*top: 0;*/
        left:0;
        bottom:0;
        height: 100%;
        z-index: 999;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);

    }

    #management .close{
        float: right;
    }
    #teamall .carousel-item{

        margin-top: 10px;
        position: relative;
        -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        box-shadow: 4 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }

    #teamall .card-reveal{  
        display: none;  
        padding: 20px;
        position: absolute;
        background-color: #FFF;
        width: 100%;
        overflow-y: auto;
        /*top: 0;*/
        left:0;
        bottom:0;
        height: 100%;
        z-index: 999;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);

    }

    #teamall .close{
        float: right;
    }    



</style>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css"> -->

<section class="fullwidth">
    <h3 class="headline-box">About Us</h3>  
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <blockquote><span id="desc">Lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typ/e specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.rn</span></blockquote>
            </div>
        </div>
    </div>
</section>
<section class="fullwidth border-bottom margin-top-65" data-background-color="#ffffff" id="strengthSec">    
    <h3 class="headline-box">Our Strength</h3>
    <div class="container">
        <div class="row">
            <div id="dynDet"></div>
            <div class="col-md-4 defstr">
                <div class="icon-box-1 alternative">
                    <h3>Vission</h3>
                    <p>See who specializes in your area, has the most reviews and the right experience to meet your needs.</p>
                </div>
            </div>
            <div class="col-md-4 defstr">
                <div class="icon-box-1 alternative">
                    <h3>Mission</h3>
                    <p>More than 10,000 customers buy or sell a home with us each year. We help people and homes find each together.</p>
                </div>
            </div>
            <div class="col-md-4 defstr">
                <div class="icon-box-1 alternative">
                    <h3>Vision</h3>
                    <p>Our specialists can help you get started on that home project. Find paint colors, that perfect tile and more. </p>
                </div>
            </div>

        </div>
    </div>

</section>

<section class="fullwidth margin-top-65" data-background-color="#f7f7f7" id="awardSec">
    <!-- Box Headline -->
    <h3 class="headline-box">Awards</h3>    
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div id="awards" class="col-md-12">                
                <div id="awardscros" class="owl-carousel owl-theme">
                </div>
                <div class="carousel staticAw">
                    <div class="carousel-item staticAw">
                        <div class="listing-item">
                            <a href="single-property-page-3.html" class="listing-img-container">
                                <div class="listing-badges">
                                    <span>Selway Apartments</span>
                                </div>
                                <div class="listing-img-content">
                                    <span class="listing-price">02-Dec-2017</span>
                                </div>
                                <div class="listing-carousel">
                                    <img class="awardsImg" src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Young_Artist_Award.jpg" alt="">
                                </div>
                            </a>                        
                            <div class="listing-content">
                                <div class="listing-title">
                                    <p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel felis.</p>
                                    <button data-rel="2" class="buttonread show-btn">Read More <i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal" data-rel="2">
                            <span class="close" data-rel="2" data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-close"></i></span>
                            <h4>Here is some more information about this product that is only revealed once clicked on.</h4>
                            <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>
                        </div>
                    </div>

                    <div class="carousel-item staticAw">
                        <div class="listing-item">
                            <a href="single-property-page-3.html" class="listing-img-container">
                                <div class="listing-badges">
                                    <span>Selway Apartments</span>
                                </div>
                                <div class="listing-img-content">
                                    <span class="listing-price">02-Dec-2017</span>
                                </div>
                                <div class="listing-carousel">
                                    <img class="awardsImg" src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Young_Artist_Award.jpg" alt="">
                                </div>
                            </a>                        
                            <div class="listing-content">
                                <div class="listing-title">
                                    <p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel felis.</p>
                                    <button data-rel="3" class="buttonread show-btn">Read More <i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal" data-rel="3">
                            <span class="close" data-rel="3" data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-close"></i></span>
                            <h4>Here is some more information about this product that is only revealed once clicked on.</h4>
                            <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>
                        </div>
                    </div>
                    <div class="carousel-item staticAw">
                        <div class="listing-item">
                            <a href="single-property-page-3.html" class="listing-img-container">
                                <div class="listing-badges">
                                    <span>Selway Apartments</span>
                                </div>
                                <div class="listing-img-content">
                                    <span class="listing-price">02-Dec-2017</span>
                                </div>
                                <div class="listing-carousel">
                                    <img class="awardsImg" src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Young_Artist_Award.jpg" alt="">
                                </div>
                            </a>                        
                            <div class="listing-content">
                                <div class="listing-title">
                                    <p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel felis.</p>
                                    <button data-rel="4" class="buttonread show-btn">Read More <i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card-reveal" data-rel="4">
                            <span class="close" data-rel="4" data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-close"></i></span>
                            <h4>Here is some more information about this product that is only revealed once clicked on.</h4>
                            <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class="fullwidth margin-top-65" data-background-color="#f7f7f7" id="mgmtSec">
    <h3 class="headline-box">Management</h3>
    <div class="container">
        <div class="row">
            <div id="management" class="col-md-12">
                <!--<div class="carousel">-->
                <div id="mgmtcaros" class="owl-carousel owl-theme"></div>
                <div class="carousel staticMgmt">
                    <div class="carousel-item staticMgmt">
                        <div class="listing-item">
                            <div class="agent-avatar" style="height: 200px;">
                                <!--<a href="agent-page.html">-->
                                <img src="http://anxietybegone.com/wp-content/uploads/2013/11/Worried-Indian-Man-@-Computer.jpg" alt="">

                                <!--</a>-->
                            </div>

                            <div class="agent-content">
                                <div class="agent-name">
                                    <h4><a href="agent-page.html">Jennie Wilson</a></h4>
                                    <span>Agent In New York</span>
                                    <span>jennie@example.com</span>
                                </div>

                                <div class="listing-title">
                                    <p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel felis.</p>
                                    <button data-rel="1" class="buttonread show-btn">Read More <i class="fa fa-angle-right"></i></button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="card-reveal" data-rel="1">
                            <span class="mgclose" data-rel="1" data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-close"></i></span>
                            <h4>Here is some more information about this product that is only revealed once clicked on.</h4>
                            <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>
                        </div>
                    </div>
                    <div class="carousel-item staticMgmt">
                        <div class="listing-item">
                            <div class="agent-avatar" style="height: 200px;">
                                <a href="">
                                    <img src="http://2.bp.blogspot.com/-1U1H00GJMtY/T6GLvfkJ6iI/AAAAAAAAFMQ/D37dj8c00KQ/s1600/Jay+Chou_Kaspersky+Lab_02.jpg" alt="">

                                </a>
                            </div>

                            <div class="agent-content">
                                <div class="agent-name">
                                    <h4><a href="">Jennie Wilson</a></h4>
                                    <span>Agent In New York</span>
                                    <span>jennie@example.com</span>
                                </div>

                                <div class="listing-title">
                                    <p>Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim donec vel lectus vel felis.</p>
                                    <button data-rel="2" class="buttonread show-btn">Read More <i class="fa fa-angle-right"></i></button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="card-reveal" data-rel="2">
                            <span class="mgclose" data-rel="2" data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-close"></i></span>
                            <h4>Here is some more information about this product that is only revealed once clicked on.</h4>
                            <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>
                        </div>
                    </div>
                </div>

                <!--</div>-->
            </div>
        </div>
    </div>
</section>
<section class="fullwidth margin-top-65" data-background-color="#f7f7f7" id="teamSec">
    <h3 class="headline-box">Our Teams</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="teamall">
                <div id="teamdet" class="owl-carousel owl-theme">
                </div>
                <div class="team-car carousel staticTeam">
                    <div class="carousel-item staticTeam">
                        <div class="listing-items">
                            <div class="testimonial-box">
                                <div class="testimonial">Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.</div>
                                <div class="testimonial-author">
                                    <img src="images/happy-client-01.jpg" alt="">
                                    <h4>Jennie Wilson <span>Rented Apartment</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item staticTeam">
                        <div class="listing-items">
                            <div class="testimonial-box">
                                <div class="testimonial">Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.</div>
                                <div class="testimonial-author">
                                    <img src="images/happy-client-02.jpg" alt="">
                                    <h4>Thomas Smith <span>Bought House</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item staticTeam">
                        <div class="listing-items">
                            <div class="testimonial-box">
                                <div class="testimonial">Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.</div>
                                <div class="testimonial-author">
                                    <img src="images/happy-client-03.jpg" alt="">
                                    <h4>Robert Lindstrom <span>Sold Apartment</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item staticTeam">
                        <div class="listing-items">
                            <div class="testimonial-box">
                                <div class="testimonial">Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.</div>
                                <div class="testimonial-author">
                                    <img src="images/happy-client-03.jpg" alt="">
                                    <h4>Robert Lindstrom <span>Sold Apartment</span></h4>
                                </div>
                            </div>
                        </div>                      
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

<div id="newsApd">
<?php include 'news.php'; ?>
</div>
<?php include 'enquiry.php'; ?>
<?php include 'footer.php'; ?>
<script>
    $(function () {
        $(".team-car").owlCarousel({
            autoPlay: false,
            navigation: true,
            slideSpeed: 600,
            items: 3,
            itemsDesktop: [1239, 3],
            itemsTablet: [991, 2],
            itemsMobile: [767, 1]
        });
        $(' .awd-btn').on('click', function () {
            $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
        });

        $('.card-reveal .close').on('click', function () {
            $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
        });

        $('.show-btn').on('click', function () {
            $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
        });

        $('.card-reveal .close').on('click', function () {
            $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
        });


        $('.mgnbtn').on('click', function () {
            $('div.mgcard-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
        });
        $('.mgcard-reveal .mgclose').on('click', function () {
            $('div.mgcard-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
        });

    });
    $(document).ready(function () {



        $.ajax({
            url: '<?php echo $awardurl; ?>',
            jsonp: "awardsjsonpcallback",
            dataType: "jsonp",
            crossDomain: true,
            data: {},
            success: function (data) {
            }
        });

        $.ajax({
            url: '<?php echo $mgntteamurl; ?>',
            jsonp: "mgntjsonpcallback",
            dataType: "jsonp",
            crossDomain: true,
            data: {},
            success: function (data) {
            }
        });
        $.ajax({
            url: '<?php echo $teamurl; ?>',
            jsonp: "teamjsonpcallback",
            dataType: "jsonp",
            crossDomain: true,
            data: {},
            success: function (data) {
            }
        });
        $.ajax({
            url: '<?php echo $strengthurl; ?>',
            jsonp: "strjsonpcallback",
            dataType: "jsonp",
            crossDomain: true,
            data: {},
            success: function (data) {
            }
        });
        $.ajax({
            url: '<?php echo $displayUrl; ?>',
            jsonp: "aboutContentjsonpcallback",
            dataType: "jsonp",
            crossDomain: true,
            data: {},
            success: function (data) {
            }
        });
    });
    function isNotEmpty(val) {
        if (val != '' && val != null) {
            return val;
        } else {
            return '';
        }
    }
    function strjsonpcallback(data) {
        var dynm;
        var html = '';
        var news;
        var newsdesc = '';
        $.each(data, function (key, element) {
            var compAbout = element.companyabout;
            news = element.news;
            if (compAbout != '') {
                $('#desc').text(compAbout);
            }
            dynm = element.dynamfields;
            if (dynm != '') {
                $.each(dynm, function (keyy, elementt) {
                    html += '<div class="col-md-4">\n\
                              <div class="icon-box-1 alternative">\n\
                                    <h3>' + isNotEmpty(keyy) + '</h3>\n\
                                    <p>' + elementt + '</p>\n\
                              </div>\n\
                          </div>';
                });
                if (html != '') {
                    $('#dynDet').html(html);
                    $('.defstr').hide();
                }
            }
            if (news != '') {
                $.each(news, function (keys, elements) {
                    newsdesc += elements.news;

                });
                $("#newsContent").html(newsdesc);
            }
        });
    }
    function awardsjsonpcallback(data) {
        var html = '';
        var count = 3000;
        if (data != '') {
            $.each(data, function (key, element) {
                var str = element.description;
                var string = '';
                if (str.length > 60) {
                    string = str.substring(0, 60);
                } else {
                    string = str;
                }
                html += '<div class="carousel-item">\n\
                         <div class="listing-item">\n\
                          <a href="#" class="listing-img-container">\n\
                             <div class="listing-badges">\n\
                             <span>' + element.title + '</span>\n\
                             </div>\n\
                             <div class="listing-img-content">\n\
                               <span class="listing-price">' + element.year + '</span>\n\
                             </div>\n\
                             <div class="listing-carousel">\n\
                                <img class="awardsImg" src="' + element.awardimage + '" alt="">\n\
                             </div>\n\
                          </a>\n\
                          <div class="listing-content">\n\
                            <div class="listing-title">\n\
                             <p> ' + string + '</p>\n\
                             <button data-rel="' + count + '" class="buttonread awd-btn">Read More <i class="fa fa-angle-right"></i></button>\n\
                            </div>\n\
                          </div>\n\
                         </div>\n\
                         <div class="card-reveal" data-rel="' + count + '">\n\
                          <span style="float: right;" class="awd-close" data-rel="' + count + '" data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-close"></i></span>\n\
                         <p>Nam nisl lacus, dignissim ac tristique ut, scelerisque eu massa. Vestibulum ligula nunc, rutrum in malesuada vitae. </p>\n\
                       </div>\n\
                       </div>';
                count = count + 1;
            });
            $('#awardscros').html(html);
            $('.staticAw').hide();
            $('#awardscros').owlCarousel({
                autoPlay: false,
                navigation: true,
                slideSpeed: 600,
                items: 3,
                itemsDesktop: [1239, 3],
                itemsTablet: [991, 2],
                itemsMobile: [767, 1]
            });
            $('.awd-btn').on('click', function () {
                $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
            });

            $('.card-reveal .awd-close').on('click', function () {
                $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
            });
        }



    }
    function mgntjsonpcallback(data) {
        var html = '';
        var count = 1000;
        if (data != '') {
            $.each(data, function (key, element) {
                var str = element.description;
                var stringval = '';
                if (str.length > 60) {
                    stringval = str.substring(0, 60);
                } else {
                    stringval = str;
                }
                html += '<div class="carousel-item">\n\
                                    <div class="listing-item">\n\
                                        <div class="agent-avatar" style="height: 200px;">\n\
                                            <img src="' + element.mgmtimg + '" alt="">\n\
                                        </div>\n\
                                        <div class="agent-content">\n\
                                            <div class="agent-name">\n\
                                                <h4><a href="management.php">' + element.name + '</a></h4>\n\
                                                <span>' + element.designation + '</span>\n\
                                                <span>' + element.mail + '</span>\n\
                                            </div>\n\
                                            <div class="listing-title">\n\
                                              <p>' + stringval + '</p>\n\
                                               <button data-rel="' + count + '" class="buttonread mgnt-btn">Read More <i class="fa fa-angle-right"></i></button>\n\
                                           </div>\n\
                                        </div>\n\
                                    </div>\n\
                                    <div class="card-reveal" data-rel="' + count + '">\n\
                                    <span style="float: right;" class="mgclose" data-rel="' + count + '" data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-close"></i></span>\n\
                                        <p>' + element.description + '</p>\n\
                                    </div>\n\
                                </div>';
                count = count + 1;
            });
            $('#mgmtcaros').html(html);
            $('.staticMgmt').hide();
            $('#mgmtcaros').owlCarousel({
                autoPlay: false,
                navigation: true,
                slideSpeed: 600,
                items: 3,
                itemsDesktop: [1239, 3],
                itemsTablet: [991, 2],
                itemsMobile: [767, 1]
            });
            $('.mgnt-btn').on('click', function () {
                $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
            });

            $('.card-reveal .mgclose').on('click', function () {
                $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
            });
        }

    }
    function teamjsonpcallback(data) {

        var html = '';
        var count = 2000;
        if (data != '') {
            $.each(data, function (key, element) {

                var str = element.description;
                var stringval = '';
                if (str.length > 70) {
                    stringval = str.substring(0, 70);
                } else {
                    stringval = str;
                }
                html += '<div class="carousel-item">\n\
                                    <div class="listing-item">\n\
                                        <div class="agent-avatar" style="height: 200px;">\n\
                                            <img src="' + element.teamimg + '" alt="">\n\
                                        </div>\n\
                                        <div class="agent-content">\n\
                                            <div class="agent-name">\n\
                                                <h4><a href="team.php">' + element.name + '</a></h4>\n\
                                                <span>' + element.mail + '</span>\n\
                                            </div>\n\
                                            <div class="listing-title">\n\
                                              <p>' + stringval + '</p>\n\
                                               <button data-rel="' + count + '" class="buttonread show-btn">Read More <i class="fa fa-angle-right"></i></button>\n\
                                           </div>\n\
                                        </div>\n\
                                    </div>\n\
                                    <div class="card-reveal" data-rel="' + count + '">\n\
                                    <span style="float: right;" class="teamclose" data-rel="' + count + '" data-dismiss="modal" aria-label="Close" aria-hidden="true"><i class="fa fa-close"></i></span>\n\
                                        <p>' + element.description + '</p>\n\
                                    </div>\n\
                                </div>';
                count = count + 1;

            });
            $('#teamdet').html(html);
            $(".team-car").hide();
            $('.staticTeam').hide();
            $('#teamdet').owlCarousel({
                autoPlay: false,
                navigation: true,
                slideSpeed: 600,
                items: 3,
                itemsDesktop: [1239, 3],
                itemsTablet: [991, 2],
                itemsMobile: [767, 1]
            });
            $('.show-btn').on('click', function () {
                $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
            });

            $('.card-reveal .teamclose').on('click', function () {
                $('div.card-reveal[data-rel=' + $(this).data('rel') + ']').slideToggle('slow');
            });
        }


    }
    function aboutContentjsonpcallback(data) {
        if (data != '') {
            $.each(data, function (key, element) {
                var strength = element.ourStrength;
                var award = element.award;
                var mangement = element.mangement;
                var ourTeam = element.ourTeam;
                var news = element.news;
                if(strength == 1){
                    $('#strengthSec').css('display', 'block');
                }else{
                    $('#strengthSec').css('display', 'none'); 
                }
                
                if(award == 1){
                    $('#awardSec').css('display', 'block');
                }else{
                    $('#awardSec').css('display', 'none'); 
                }
                
                if(mangement == 1){
                    $('#mgmtSec').css('display', 'block');
                }else{
                    $('#mgmtSec').css('display', 'none'); 
                }
                
                if(ourTeam == 1){
                    $('#teamSec').css('display', 'block');
                }else{
                    $('#teamSec').css('display', 'none'); 
                }
                
                 if(news == 1){
                    $('#newsApd').css('display', 'block');
                }else{
                    $('#newsApd').css('display', 'none'); 
                }
               
                
               
            });
        }
    }

</script>