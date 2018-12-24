<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> </title>

<link rel="stylesheet" href="fontawesome-4.2.0.min.css" type="text/css"/>

<script src="jquery-1.11.3.min.js"></script>

</head>




<body style="overflow-x : hidden;">




  <div style="background : url(weihnachten13.gif); background-size : cover; background-repeat : no-repeat; margin-top : -5%;">



<div style="width : 100%; min-height : 50px; text-align : center; font-family: cursive; color : #fff;">

  <h1 class="header"> MERRY CHRISTMAS </h1>

  <img src="chrxmsal.gif" style="width : 50%;"/>

</div>


<div style="width : 100%; min-height : 80px; margin-top : 10%; text-align : center;">

<img src="24f07fc.gif" style="width : 50%;"/>

<h1 class="header2"> Send a Christmas wish </h1>

</div>


<div style="width : 100%; min-height : 40px; margin-top : 2%;">

<form>
  <input type="text" name="myname" class="form-control" placeholder="Enter your name...." required="required">
  <input type="hidden" id="textarea" value=""/>
  <button class="btn fa fa-paper-plane"  id="watsapp"> </button>
</form>

</div>



</div>


<?php
$message[0] = "Christmas is a time of reflection on the undiluted love of God to humanity. May the love of Christ fill your heart and home this year and the years to come.. MERRY CHRISTMAS";
$message[1] = "May the birth of the Saviour bring love and joy to your family. Happy Christmas and prosperous New Year.";
$message[2] = "May the Christmas season fill your home with joy, your heart with love and your life with peace. Wishing you a very Merry Christmas and a prosperous 2019 to come.";
$message[3] = "I wish you the very best this Christmas season and always. Happy Christmas and prosperous New year!";
$message[4] = "May the love and joy of Christmas fill your home this season and forever... HAPPY CHRISTMAS!!!";

$num = rand(0,4);

$music[0]= "christmaas.mp3";
$music[1] = "merrychristmas.mp3";

$mnum = rand(0,1);
?>



<div style="width : 100%; min-height : 80px; margin-top : 0%; background-color : #fff; text-align : center;">

<h1 class="header3"> Powered  By : </h1>

<img src="carradocovernew3.jpg"  style="width : 100%;"/>

  <h3 class="header4"><a target="_blank" href="https://www.carrado.com.ng" style="color : #000;">www.carrado.com.ng</a> , <span class="fa fa-phone"></span> +2348163276826</h3>
</div>





<script>
$(document).ready(function()
{
  $("#watsapp").click(function(e)
{
  var name = $("input[name = 'myname']").val();
  var message = "";
  if(name != "")
  {
       var greeting = "Merry Christmas from "+"*"+name+"*"+" \r\n\r\n <?php echo $message[$num]; ?>\r\n\r\n Create your personal christmas message here \n https://bit.ly/2T0bYcI";
       var whatsappMessage = window.encodeURIComponent(greeting);

  window.location.href="https://api.whatsapp.com/send?text="+whatsappMessage;
e.preventDefault();
}
});

var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    if(!isChrome){
      $('#iframeAudio').remove()
    }
  else{
     $('#player').remove() //just to make sure that it will not have 2x audio in the background
  }
});
</script>


</body>

<iframe src="<?php echo $music[$mnum]; ?>" style="display : none;" allow="autoplay" id="iframeAudio"></iframe>
<audio id="player" autoplay loop>
    <source src="<?php echo $music[$mnum]; ?>" type="audio/mp3">
</audio>


<style>
body {
	margin:0;
	padding:0;
	width:100%;
	color:#202020;
	font:normal 12px/1.8em Arial, Helvetica, sans-serif;
}

@media screen and (min-width : 768px)
{
  .header
  {
  font-size : 70px; margin-top : 5%; font-family : cursive; font-weight : bold; text-align : center;
}
.header2
{
  text-align : center; font-size : 50px; color : #202020; font-weight : bold;
}
.header3
{
  text-align : center; font-size : 30px; color : #202020; font-weight : bold;
}
.header4
{
  font-size : 25px;
}
}

@media screen and (max-width : 767px)
{
  .header
  {
  font-size : 25px; margin-top : 5%; font-family : cursive; font-weight : bold; text-align : center;
}
.header2
{
  text-align : center; font-size : 20px; color : #202020; font-weight : bold;
}
.header3
{
  text-align : center; font-size : 14px; color : #202020; font-weight : bold;
}
.header4
{
  font-size : 12px;
}
}


h1 {
	margin:0;
	padding:22px 0;
	/* [disabled]width:350px; */
	color:#fff;
	font:normal 36px/1.2em Arial, Helvetica, sans-serif;
	letter-spacing:-2px;
}

@media screen and (min-width : 768px)
 {
   .btn {
     padding: 6px 12px;
     margin-bottom: 0;
     font-size: 30px;
     font-weight: normal;
     line-height: 1.42857143;
     text-align: center;
     white-space: nowrap;
     vertical-align: middle;
     -ms-touch-action: manipulation;
         touch-action: manipulation;
     cursor: pointer;
     -webkit-user-select: none;
        -moz-user-select: none;
         -ms-user-select: none;
             user-select: none;
     background-image: none;
     border: 1px solid transparent;
     border-radius: 4px;
     width : 20%;
     height : 63px;
     color : #fff;
     z-index : 9999;
     background: #090;
   }

   .form-control {
     width: 71%;
     height: 50px;
     padding: 6px 12px;
     font-size: 30px;
     line-height: 1.42857143;
     color: #fff;
     float : left;
     margin-left : 2%;
     background-color: rgba(0,0,0,.7);
     background-image: none;
     border: 1px solid #ccc;
     border-radius: 8px;
     -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
             box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
     -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
          -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
             transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
   }
}

@media screen and (max-width : 767px)
{
  .form-control {
    width: 71%;
    height: 20px;
    padding: 6px 12px;
    font-size: 15px;
    line-height: 1.42857143;
    color: #fff;
    float : left;
    background-color: rgba(0,0,0,.7);
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 8px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
         -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  }
  .btn {
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
        touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    width : 20%;
    height : 35px;
    color : #fff;
    position: absolute;
    z-index : 9999;
    background: #090;
  }

}

.form-control:focus
 {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
          box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
}
a{
  text-decoration: none;
  outline: none;
}
</style>


</html>
