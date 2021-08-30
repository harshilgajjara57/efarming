<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("location:login/login.php");
  exit();
}
require 'dbconnect.php';
$pwd=$_SESSION['password'];
$q="SELECT * FROM user_registration WHERE User_password='".$pwd."' AND User_name='".$_SESSION['username']."'";
$query = mysqli_query($conn,$q);
$row = mysqli_fetch_assoc($query);
$email=$row['Email'];
$contact = $row['Contact'];
$fname=$row['First_name'];
$lname=$row['Last_name'];
?>

<!DOCTYPE html>
<html >
<head>
<title>E-farming Home Page</title>
<link rel="stylesheet" href="../vendor/bootstrap.min.css">

<link rel="shortcut icon" href="images/logo/logo.png">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="vendor/rp/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay" style="background-image:url('images/backgroundimage/f1.jpg');"> 
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <div class="fl_left"> 
        <ul class="nospace">
          <li><i class="fas fa-phone"></i> +91<?php echo "$contact"; ?></li>
          <li><i class="fas fa-user"></i>Welcome-<?php echo $fname."  ".$lname; ?></li>
        </ul>
      </div>
      <div class="fl_right"> 
        <ul class="nospace">
          
          <li><i class="fas fa-envelope"></i>&nbsp;<?php echo "$email"; ?></li></a></li>
          <li><a href="login/LogOut.php" title="Login">Sign out</i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1>ઇ-ફાર્મિંગ</h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
           <li><a class="drop" href="#">ઇ-લર્નિંગ</a>
            <ul>
              <li><a class="drop" href="#">ખેડૂત ટિપ્સ</a>
                <ul>
                  <li><a href="staticpages/method1.php">પ્રમોદ ગૌતમ</a></li>
                  <li><a href="staticpages/method2.php">સચિન કાલે</a></li>
                  <li><a href="staticpages/method3.php">હરીશ ધાંડેવ</a></li>
                </ul>
              </li>
              <li></li>
            </ul>
          </li>

          <li>
          <a  href="shopping/product.php">શોપિંગ</a>
          </li>
                   <li><a href="https://www.google.co.in/search?rlz=1C1CHBF_enIN807IN807&q=farmer+market+near+me&npsic=0&rflfq=1&rlha=0&rllag=23032405,72600794,6596&tbm=lcl&ved=2ahUKEwjHsJywv-fdAhWKPI8KHfIlDhwQtgN6BAgBEAU&tbs=lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:10&rldoc=1#rlfi=hd:;si:;mv:!3m12!1m3!1d101026.92941161143!2d72.59003495!3d22.961028950000003!2m3!1f0!2f0!3f0!3m2!1i244!2i330!4f13.1;tbs:lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:10">બજાર</a></li>
          
          
           <li><a href="seller/productinsert.php">ક્રોપ વેચો</a></li>
      </nav>
    </header>
  </div>
  <div id="pageintro" class="hoc clear"> 
    <article class="center">
      <h3 class="heading underline">ખેતરનુ સંચાલન</h3>
      <p>નીચે મુજબ વિશ્લેષણના હેતુથી વ્યાખ્યાયિત ચાર ક્ષેત્રોના સંદર્ભમાં ફાર્મ મેનેજમેન્ટ વિશ્લેષણ અને સલાહકારી પ્રવૃત્તિઓને વર્ગીકૃત કરી શકાય છે:....</p>
      <footer><a class="btn" href="staticpages/model details.php">વધારે જોવો</a></footer>
    </article>
  </div>
</div>
  <main class="hoc container clear"> 
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2">સરકારી યોજના</h6>
    </div>
    <ul class="nospace group overview btmspace-80">
      <li class="one_quarter">
        <article><a href="#"><i class="fas fa-eraser"></i></a>
          <h6 class="heading"><a href="http://shc.aau.in/guj/home/soil">માટી આરોગ્ય કાર્ડ યોજના</a></h6>
          <p>2015 માં શરૂ કરાયેલ, આ યોજના રાજ્યના તમામ ખેડૂતોને સોઇલ હેલ્થ કાર્ડ્સ ઇશ્યૂ કરવા રાજ્ય સરકારોને સહાય કરવા માટે રજૂ કરવામાં આવી છે.&hellip;</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="fas fa-cut"></i></a>
          <h6 class="heading"><a href="http://vikaspedia.in/agriculture/policies-and-schemes/crops-related/krishi-unnati-yojana/paramparagat-krishi-vikas-yojana">પરમપરાગત કૃષિ વિકાસ યોજના  (PKVY)</a></h6>
          <p>દેશભરમાં ઓર્ગેનિક ખેતીને પ્રોત્સાહન આપવાના દૃષ્ટિકોણથી પરમપરાગત કૃષિ વિકાસ યોજના (PKVY) અમલમાં મુકાયો છે..&hellip;</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="fas fa-hand-holding-heart"></i></a>
          <h6 class="heading"><a href="http://vikaspedia.in/agriculture/policies-and-schemes/crops-related/pradhan-mantri-krishi-sinchai-yojana">મુખ્ય મંત્રી કૃષિ સિંચાઈ યોજના(PMKSY)</a></h6>
          <p>મુખ્ય મંત્રી કૃષિ સિંચાઈ યોજના (PMKSY) ના 'હર ખેત કો પાણી' ના સિદ્ધાંત સાથે પહેલી જુલાઈ, 2015 ના રોજ શરૂ કરાઈ છે.&hellip;</p>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="fas fa-rocket"></i></a>
          <h6 class="heading"><a href="http://vikaspedia.in/agriculture/agri-credit/interest-subvention-scheme-for-farmers">વ્યાજ સબવેંશન યોજના(ISS)</a></h6>
          <p>
કેવી રીતે હું એક મફત ફ્રિંજલ અલ્ટ્રાસાઇઝિંગ મફત છે, જેથી તમે એક મફત મંચ પર ચર્ચા કરી શકો છો&hellip;</p>
        </article>
      </li>
    </ul>
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper row2">
  <article class="hoc container clear"> 
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2">
ખેડૂત ટિપ્સ</h6>
    </div>
    <ul class="nospace group figures btmspace-80">
      <li class="one_third first">
        <figure><img src="images/backgroundimage/tips1.jpg" alt="">
          <figcaption><em>01</em> <a href="staticpages/TIPS1.php">લસણ વધવા માટે જમીન કેવી રીતે તૈયાર કરવી</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/backgroundimage/tips2.jpg" alt="">
          <figcaption><em>02</em> <a href ="staticpages/TIPS2.php">બીઝ કેવી રીતે રાખવી: મધમાખી ઉછેરવાની શરૂઆત કરનારની માર્ગદર્શિકા</a></figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/backgroundimage/tips3.jpg" alt="">
          <figcaption><em>03</em> <a href="staticpages/TIPS3.php">તમારા નાના ફાર્મ પ્રોડક્ટ્સનું વેચાણ કેવી રીતે કરવું તે જાણો</a></figcaption>
        </figure>
      </li>
    </ul>
  </article>
</div>
<div class="bgded overlay startlt light" style="background-image:url('images/backgroundimage/background3.jpg');">
  <section id="segment" class="hoc clear"> 
    <div class="two_third">
      <h6 class="heading underline font-x2">ખેડૂત મિત્રો</h6>
      <p class="btmspace-50">કૃષિ અને જળચરઉછેરમાં ઉગાડવામાં આવેલા ઉત્પાદનના ફાર્મ ગેટ મૂલ્ય એ વેચાણના ખર્ચ (પરિવહન ખર્ચ, માર્કેટીંગ ખર્ચ) ની તુલનામાં ઉત્પાદનનું બજાર મૂલ્ય છે.</p>
        <p>આપણે નોંધવું જોઈએ કે માર્કેટ વેલ્યુ એ તેમના ઉત્પાદન માટેના ભાવ જેટલું જ નથી, (જો હરાજીનો ઉપયોગ કરવામાં આવે છે), તો વેલ્યુ દીઠ જે વેલ્યુ મળે છે તે બજારની કિંમતથી નીચે હોઈ શકે છે. કેટલાક કિસ્સાઓમાં, તેઓ જે વેલ્યુ દીઠ વજન મેળવે છે તે બ્રેકવેન ભાવથી નીચે પણ હોઈ શકે છે ...&hellip;</p>
        <p>હરાજી દ્વારા વેચાણ કરતી વખતે, ખેડૂતો તેમના ઉત્પાદન માટે જે ભાવ મેળવે છે તે સામાન્ય રીતે ગ્રાહકને સીધી રીતે વેચે છે તે કિંમત કરતાં ઓછી હોય છે (કારણ કે તેઓ આ કિંમત જાતે સેટ કરી શકે છે) &hellip;</p>
        <footer><a href="#">Read More &raquo;</a></footer>
      </article>
    </div>
  </section>
</div>
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <div class="center btmspace-80">
      <h6 class="heading underline font-x2">
              ખેતી પદ્ધતિ</h6>
    </div>
    <ul class="nospace group figures latest btmspace-80">
      <li class="one_third first">
        <figure><img src="images/backgroundimage/method1.jpg">
          <figcaption><a href="staticpages/method1.php">
                    સબસિસ્ટન્સ ફાર્મિંગ</a>
            <time datetime="#"><strong>01</strong></time>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/backgroundimage/method2.jpg" alt="">
          <figcaption><a href="staticpages/method2.php">શિફ્ટિંગ એગ્રિકલ્ચર</a>
            <time datetime="#"><strong>02</strong></time>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/backgroundimage/method3.jpg" alt="">
          <figcaption><a href="staticpages/method3.php">મિશ્રિત અને બહુવિધ કૃષિ</a>
            <time datetime="#"><strong>03</strong></time>
          </figcaption>
        </figure>
      </li>
    </ul>
	<!--
    <ul class="nospace group figures latest btmspace-80">
      <li class="one_third first">
        <figure><img src="images/backgroundimage/method4.jpg" >
          <figcaption><a href="staticpages/method4.php">સઘન ખેતી</a>
            <time datetime="#"><strong>04</strong></time>
          </figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><img src="images/backgroundimage/method5.jpg" >
          <figcaption><a href="staticpages/method5.php">ડ્રાય એગ્રિકલ્ચર</a>
            <time datetime="#"><strong>05</strong></time>
          </figcaption>
        </figure>
    </ul>-->
  </section>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <hr class="btmspace-50">
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="one_quarter first">
        <h6 class="heading">About us:</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fas fa-map-marker-alt"></i>
            <a href="https://www.google.co.in/maps/place/L.J.+Polytechnic,+Ahmedabad/@22.9903558,72.4865109,15z/data=!4m5!3m4!1s0x0:0xec0bcf70a6918be9!8m2!3d22.9903558!4d72.4865109">
            સરખેજ &amp;20, એસ.જી. હાઇવે, અમદાવાદ, 380006</a>
           
          </li>
          <li><i class="fas fa-phone"></i> +(91) 9081737548</li>
          <li><i class="far fa-envelope"></i> e-farming123@gmail.com</li>
        </ul>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="https://www.facebook.com/vivekghori19/?modal=admin_todo_tour"><i class="fab fa-facebook"></i></a></li>
         
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading"> Website Feedback</h6>
        <p class="nospace btmspace-15"></p>
        <form method="POST" action="feedback/Feedback.php">
          <fieldset>
            <legend>ન્યૂઝલેટર:</legend>
            <input class="btmspace-15" type="text" name="username" value="" placeholder="નામ">
            <input class="btmspace-15" type="email" value="" name="email" placeholder="E-મેલ">
            <input class="btmspace-15" type="text" name="discription" placeholder=" પ્રતિસાદ દાખલ કરો"></textarea>
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">WWW.E-farming.com</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="vendor/rp/layout/scripts/jquery.min.js"></script>
<script src="vendor/rp/layout/scripts/jquery.backtotop.js"></script>
<script src="vendor/rp/layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>