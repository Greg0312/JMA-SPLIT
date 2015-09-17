<?php 
ini_set('session.cache_limiter', 'private');
header("Cache-Control: no-cache, must-revalidate,post-check=0,pre-check=0");
include('../config/constants.php');
$_SESSION['ipstate'] = getip_proipapi();
recordreferer(); 
$funnel_link = BASE_PATH_USA."pages-realestate/age-verification.php";
$_SESSION['countrycode'] = 'USA';
$doctoronline=rand(8,8);
$pgname="realestate_index";
$_SESSION['page']="realestate_index";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?=$site_title?> <?=$_SESSION['ipstate']?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<META name = "format-detection" content = "telephone=no">

<!-- Load CSS common to all pages with this include common-css.php -->
<link rel="stylesheet" href="<?php echo $base_path; ?>/common/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">

<!-- Custom CSS -->
<link href="<?php echo $base_path; ?>/common/css/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_path; ?>/common/css/animate.css" rel="stylesheet" type="text/css" />

<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>

.site_wrapper{ max-width:840px!important; width:100%;}
.blink_txt{ color:#000; font-size:13px; font-weight:600;}
.blink_txt .faa{ color:#0edf2b; font-size:14px; width:10px; height:10px; border-radius:10px; background:#0edf2b; display:inline-block;}
textarea.matter_text{ color:#000; font-size:15px; font-weight:600; min-height:120px; border-bottom:20px solid #f0f1f1!important;}
  .main_bg{ padding:20px 0 50px!important;}

</style>
<?php
	if($_GET['blinkspeed']!='' && is_numeric($_GET['blinkspeed']))
	{
	 $blinkspeed=trim($_GET['blinkspeed']);
	}
	else
	{
	$blinkspeed=1000;
	}
	?>
<script>

var myString = "Hi, can I answer your real estate question? Please type it here...";
var myArray = myString.split("");
var loopTimer;
function frameLooper() 
{
 if(document.getElementById('stopautotyping').value=='no')
 {
	if(myArray.length > 0) {
		document.getElementById("matter").value += myArray.shift();
	} else {
		clearTimeout(loopTimer); 
                return false;
	}
	loopTimer = setTimeout('frameLooper()',70);
 }
}
function frameLooper_blank()
{
document.getElementById("matter").value="";
}
function blinktextdiv(dividtoblink)
{
  if(document.getElementById(dividtoblink).style.display=='none')
  {
   document.getElementById(dividtoblink).style.display="";
  }
  else
  {
   document.getElementById(dividtoblink).style.display="none";
  }
  setTimeout("blinktextdiv('"+dividtoblink+"')",<?php echo $blinkspeed?>);
}

function addremoveclass(ctab)
	{
	  for(var ti=0;ti<=9;ti++)
	  {
	   //document.getElementById("hrmenu"+ti).className = "";
	   if ( $('#hrmenu'+ti).hasClass('active') )
	   {
	   $('#hrmenu'+ti).removeClass('active');
	   }
	  }
	  $('#hrmenu'+ctab).addClass('active');
	}

function stoptyping()
{
document.getElementById('stopautotyping').value='yes';
 if(document.getElementById('firstclick').value=='no')
 {
 document.getElementById('matter').value="";
  document.getElementById('firstclick').value="yes";
 }
}

</script>
<?php include(BASE_PATH.'custom/php/googleanalyticcode.php'); ?>

</head>
<body>
<!-- ============= header ================= -->
<?php include(BASE_PATH.'partials/header.php'); ?>

<!-- ============= main ================= -->
<div class="main_bg">
  <div class="container">
    <div class="site_wrapper">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="top_heading">
              <h2><span>
            <?php
                if(!isset($siteLinkText)){
            ?>
              Ask a Lawyer any Real Estate Question
            <?php
                }else{
                    echo $siteLinkText;
                }
            ?>
                  </span></h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <p class="tab_text">Recently Asked Questions:</p>
          <ul class="tab_text_list">
            <li>We are seniors on a pension and have had our house on the market?</li>
            <li>I live in Alabama and fell behind on my mortgage a few months ago due to losing?</li>
            <li>Hello I am on workman's comp and can not afford my house payments. I have a?</li>
            <li>I am 70 years old and I have to park across the street, which is a very dangerous?</li>
          </ul>
        </div>
        
        <!-- <a name="get-answer"></a>-->
        <div class="col-lg-12 col-md-12 col-sm-12">
          <form name="frmCompleteOrder" action="<?php echo $funnel_link; ?>" id="" onSubmit="return checkerror()" method="post"  target="_top" >
            <input type="hidden" name="stopautotyping" id="stopautotyping" value="no">
            <input type="hidden" name="firstclick" id="firstclick" value="no">
            <div class="row">
              <div class="text_area_outer_1407">
                <div class="row tab_box">
              	<div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="nav nav-pills">
                      <li><a style="line-height:16px;" class="active" href="javascript:addremoveclass(0)" id="hrmenu0" >All Real<br>Estate Law</a></li>
                      <li><a style="line-height:16px;" href="javascript:addremoveclass(1)" id="hrmenu1" >Landlord and<br>Tenant Law</a></li>
                      <li><a style="line-height:16px;" href="javascript:addremoveclass(2)" id="hrmenu2">Foreclosure</a></li>
                      <li><a style="line-height:16px;" href="javascript:addremoveclass(3)" id="hrmenu3" >Homeowners'<br>Association</a></li>
                      <li><a style="line-height:16px;" href="javascript:addremoveclass(4)" id="hrmenu4" >Trespassing</a></li>
                      <li><a style="line-height:16px;" href="javascript:addremoveclass(9)" id="hrmenu9" >Property Law</a></li>
                      <li><a style="line-height:16px;" href="javascript:addremoveclass(5)" id="hrmenu5" >General<br>Law</a></li>
                    </ul>
                    </div>
				</div>
                <div class="text_area">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <p class="left-align">Please explain your <span>Real Estate Question</span> below</p>
                      <textarea name="matter" id="matter" class="matter_text" onFocus="stoptyping()">Hi, can I answer your real estate question? Please type your question here...</textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <div class="blink_txt doc-online"><i class="fa fa-circle"></i> &nbsp; &nbsp;<span id="blnktextonline" style="display: none;">9 Real Estate Lawyers Online Now</span></div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-5 col-md-offset-5 col-sm-offset-5">
                      <input type="submit" name="submit" id="submit-detail-button" value="Ask Real Estate Lawyer"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <!-- ========================================================================== Medical Questions =============== -->
  <div class="container">
    <div class="site_wrapper">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="top_heading">
            <h2 style="color:#3C6989;">Real estate questions recently answered</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row">
            <div class="doc_ans">
              <div class="col-lg-9 col-md-9 col-sm-9"> 
                <h3>Real Estate Questions</h3>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 text-center"> 
                <h3>Date Submitted</h3>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                 <div class="inner_box">
                    <div class="border">
                      <div class="col-lg-10 col-md-10 col-sm-10">
                        <h4>I am 70 years old and I have to park across the street, which is a very dangerous?</h4>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                        <h4><span><?php echo date("m/d/Y"); ?></span></h4>
                      </div>
                    </div>
                    <div class="border">
                      <div class="col-lg-10 col-md-10 col-sm-10">
                        <h4>My girlfriend's aunts house is in foreclosure. this is what the situation is. the?</h4>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                        <h4><span><?php echo date("m/d/Y"); ?></span></h4>
                      </div>
                    </div>
                    <div class="border">
                      <div class="col-lg-10 col-md-10 col-sm-10">
                        <h4>I recently purchased a foreclosure. The inspection did not note any major issues?</h4>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                        <h4><span><?php echo date("m/d/Y"); ?></span></h4>
                      </div>
                    </div>
                    <div class="border">
                      <div class="col-lg-10 col-md-10 col-sm-10">
                        <h4>I am considering walking away from a VA home loan on a house in Texas that was?</h4>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                        <h4><span><?php echo date("m/d/Y"); ?></span></h4>
                      </div>
                    </div>
                    <div class="border">
                      <div class="col-lg-10 col-md-10 col-sm-10">
                        <h4>My house is under water by about $120,000. I do not have a second and have just?</h4>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                        <h4><span><?php echo date("m/d/Y"); ?></span></h4>
                      </div>
                    </div>
                    <div class="border">
                      <div class="col-lg-10 col-md-10 col-sm-10">
                        <h4>I have a lawyer in a foreclosure case. I haven't paid on my house in 5 years?
</h4>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                        <h4><span><?php echo date("m/d/Y"); ?></span></h4>
                      </div>
                    </div>
                    <div class="border">
                      <div class="col-lg-10 col-md-10 col-sm-10">
                        <h4>I have a property in Upper Marlboro MD... It has been under foreclosure for 3 years?</h4>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                        <h4><span><?php echo date("m/d/Y"); ?></span></h4>
                      </div>
                    </div>
                    <div class="border">
                      <div class="col-lg-10 col-md-10 col-sm-10">
                        <h4>I am the owner of the deed to the house. My husband passed at the end of 2012?</h4>
                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                        <h4><span><?php echo date("m/d/Y"); ?></span></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!--<div class="col-lg-12 col-md-12 col-sm-12">
          <p><a class="skip_2303" href="#get-answer">Next 10</a></p>
        </div>--> 
      </div>
    </div>
  </div>
</div>

<!-- ============= Footer =============== -->
<?php include(BASE_PATH.'partials/footer.php'); ?>


<!-- ============= js =============== --> 
<script src="<?php echo $base_path; ?>/common/scripts/js/jquery.js"></script> 
<script src="<?php echo $base_path; ?>/common/scripts/js/bootstrap.min.js"></script>
<?php include(BASE_PATH.'common/scripts/php/zopimchat.php'); ?>
<script>
function checkerror()
{
    if(document.getElementById('matter').value=="")
    {
        alert('Please Enter The Question');
        document.getElementById('matter').focus();
        return false;
    }
    else
    {
        return true;

    }    
} 


setTimeout("frameLooper()",3000);
	setTimeout("frameLooper_blank()",2500);
	setTimeout("blinktextdiv('blnktextonline')",500);
</script>

<script>    
    $zopim(function() {            
        $zopim.livechat.window.setTitle('Attorney James Morgan');$zopim.livechat.concierge.setAvatar('http://www.jamesmorgan.attorney/common/images/james.png');
    });
    function showzopimchatbox(){
        $zopim(function() {            
            $zopim.livechat.window.toggle();
       });
    }    
</script>
<?php include(BASE_PATH . 'partials/lawyer-trusted.php'); ?>
</body>
</html>
