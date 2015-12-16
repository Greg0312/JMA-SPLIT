<?php
/*
ini_set('session.cache_limiter', 'private');
header("Cache-Control: no-cache, must-revalidate,post-check=0,pre-check=0");
include('../config/constants.php');
$_SESSION['ipstate'] = getip_proipapi();
recordreferer(); 
$funnel_link = BASE_PATH_USA."pages/security-notice.php";
$_SESSION['countrycode'] = 'USA';
$doctoronline=rand(8,8);
*/
$blinkspeed=1000;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Split Test Contest JMA</title>

<!-- Bootstrap -->
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<link href="css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
	.blink_txt{ color:#FFFF0F; font-size:13px; font-weight:600; float: right; width:180px}
	.blink_txt .glyphicon{ color:#0edf2b; display:inline-block;}
	#tits h1{ margin:0; padding:0; font-size:50px; font-weight:700; text-shadow:1px 1px 2px #000000; line-height:35px; margin-bottom:10px;}
	#tits h2{ margin:0; padding:0; font-size:25px; font-weight:400; text-shadow:1px 1px 2px #000000}
	#tits h3{ margin:0; padding:0; font-size:17px; font-weight:600; text-shadow:1px 1px 2px #000000; margin-top:20px;}
	#tits h3 span{font-size:20px; font-weight:600; text-shadow:1px 1px 2px #000000; margin-top:20px;}
	#tits1 {border: 2px solid #a1a1a1; padding: 10px; background: #dddddd;border-radius: 25px;}
	#tits li{color: #CCCB0E; font-weight:bold; background-color:#BDA0CB;}
	
	select {
	font-size:18px; font-weight:bold; text-shadow:#A6A6A6 1px 1px 3px; background-color:#F8E004;
	}
	#matter{max-width:780px; max-height:300px; width:100%; height:150px; margin-right:10px; margin-left:0px;}
	.cntnrbg{background-color:#452f6b; max-width:810px; width:100%; border-radius:15px; padding:25px;}
	.h2color{color:#FFFF0F; padding-top:20px;}
	
</style>
</head>
<body>
<header>
<div class="container">
<div class="row" id="tits">
<p>
<div class="col-xs-12 col-sm-6 col-lg-8" >

<h2>JAMES MORGAN.Attorney Nevada</h2>


</div>

<div class="col-xs-6 col-lg-4 hidden-xs">
<a href="https://member.jamesmorgan.attorney/index.php"><h2 align="right">Login</h2></a>
</div>
</p>
  </div>
  <hr>
</div>
</header>

<div class="container">
  <div class="row">
    <div class="col-lg-12" >
      <div class="jumbotron"  id="tits" >
        <h2 class="text-center">Ask a Lawyer Online any Question</h2>
        <p>&nbsp;</p>
        
        <div class="container" style="background-color:#17a4b2; max-width:810px; width:100%; border-radius:15px; padding:25px">
         
        <form action="<?=$funnel_link?>" method="post" name="name="frmCompleteOrder"" >

<div class="form-group">
      <p></p>
      <div class="clearfix"></div>
    
    <select class="form-control">
        <option>Select Category</option>
        <option value="1">Family Law</option>
        <option value="2">Criminal Law</option>
        <option value="3">Business Law</option>
        <option value="4">Consumer Law</option>
        <option value="5">Real Estate Law</option>
        <option value="6">Immigration Law</option>
        <option value="7">Bankruptcy Law</option>
        <option value="8">Traffic Law</option>
        <option value="9">Other</option>
    </select> 
   
    </div>
    
 
 <h2 class="h2color">Please explain your legal question below</h2><br>
<textarea name="matter" id="matter" required placeholder="Hi, can I answer your legal question? Please type your question here..." ></textarea><br><br>
<div class="blink_txt"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> <span id="blnktextonline" style="display: none;color:#FFFF0F;">8 Lawyers online</span></div>
<button class="btn btn-warning"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Ask Lawyer Online</button>
<p>&nbsp;</p>

</div>
</div>
    </div>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 no_pad">
        <p class="disclaimer">My response is offered only as a public service to you and does not constitute solicitation or provision of legal advice. My response should not be used as a substitute for
obtaining legal advice from an <?//=$_SESSION["site_word"]?> licensed or authorized to practice in your jurisdiction. You should always consult a suitably qualified <?//=$_SESSION["site_word"]?> regarding any
specific legal problem or matter. My response is not intended to create an <?//=$_SESSION["site_word"]?>-client relationship and nothing posted constitutes legal advice. Please see our Terms
and Conditions for additional information.</p>
        </div>
</div>
<div class="container">
  <div class="row">
   
    <hr>
    <div class="col-xs-6">
      <div class="panel panel-default panel-success"> 
     
        <div class="panel-heading">
          <h3>Recently Asked Questions:</h3>
        </div>
       
        <table class="table">
          
          <tbody>
            <tr>
              <th scope="row">What is the statute of limitation for a dad to come into the picture?</th>
            </tr>
            <tr>
              <th scope="row">Can I sue a news station for running an investigative story?</th>
            </tr>
            <tr>
              <th scope="row">Do I have legal rights to pick up my step daughter from her mother?</th>
            </tr>
            <tr>
              <th scope="row"><p class="text-center"><button class="btn-success btn"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Ask Lawyer</button></p></th>
            </tr>
          </tbody>
        </table>
      </div>
     
</div>
    
    <div class="col-xs-6">
      <div class="panel panel-default panel-info"> 
        
        <div class="panel-heading">
          <h3>Legal Questions recently answered</h3>
        </div>
      
        <table class="table">
        
          <tbody>
            <tr>
              <th scope="row">Do I have legal rights to pick up my step daughter from her mother?</th>
            </tr>
            <tr>
              <th scope="row">How can I legally get my 25 year old son out of the house in WA State?</th>
            </tr>
            <tr>
              <th scope="row">What is the statute of limitation for a dad to come into the picture?</th>
            </tr>
            <tr>
              <th scope="row"><p class="text-center"><button href="" class="btn-warning btn"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Ask Lawyer</button></p>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    </form>
   
  </div>
</div>
<hr>
<div class="container">
 
</div>
  <hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
      
<?php //include(BASE_PATH.'partials/footer.php'); ?>
      
        <p></p>
      </div>
    </div>
  </div>
</footer>
<script>
/*
var myString = "Hi, can I answer your legal question? Please type your question here...";
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
*/
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
/*
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

setTimeout("frameLooper()",3000);
setTimeout("frameLooper_blank()",2500);
*/
setTimeout("blinktextdiv('blnktextonline')",500);
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="js/bootstrap-3.3.4.js" type="text/javascript"></script>
</body>
</html>
