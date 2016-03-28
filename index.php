<?php include('header.php'); ?>
<!--HOME SCREEN-->
<section id="home">
<div class="wrapper">
  <div class="container1"></div>
  
  <div class="container3"></div>
  <a class="showcase"></a>
  <div class="intro" data-link="#about">
    <h1>yaw asare</h1>
    <hr>
    <h1>front end web developer</h1>
    <img alt="" src="image/scroll-down.gif"><br>
    <img alt="" src="image/scroll-down.gif" style="margin-top:-50px">
  </div>
</div>
</section>

<!--ABOUT-->
<section id="about">
<div class="optimum wrap">
     <h1 class="page-heading title row">About Me</h1>
       <div class="profile cf">
          <div class="blurb shared row">
            <p>i&apos;m&nbsp;&nbsp;&nbsp;<span id="about-yaw">yaw asare</span></p>
            <p style="text-align:center">and<span id="webdesign">&nbsp;web design</span></p>
            <p style="text-align:right;padding-top:0">is&nbsp;<span id="what">&nbsp;what&nbsp;</span>&nbsp;i do&nbsp;!</p>
          </div>
          <div class="me-wp shared nomobi">
             <div id="me">
               <div id="circ">
                 <span>i&apos;m available<br>for work!<br>&bull;<br></span>
                 <ul>
                   <!--<li>@funky4lyf</li>-->
                   <li>+1(347) 470-3610</li>
                   <li>yasare16@gmail.com</li>
                 </ul>
               </div>
             </div>
         </div>
        </div>
       <hr class="divider">
      <div class='skills cf row'>
         <blockquote class="row shared" id="description">I'm an enthusiastic front-end/back-end web developer, currently in Atlanta, with a constant desire to challenge my creativity in Web Design, Web Development, User Experience(UX) and User Interface(UI) Design.<br>With the experience I've acquired, I've come to love minimalist, clean, detailed design and incorporate it vehemently in my work!<br><br> I'm currently available for freelance, contract or full time work.
       <hr class="divider margin-top">
       <div class=" nomobi margin-top">
        <p style="text-align:center">...and on my way to becoming a guru in:</p>
        <ul id="guruat">
        <li>Ruby on Rails</li>
        <li>Python</li>
        <li>Java</li></ul>
       </div>
        <a class="resume button margin-top nomobi" target="_blank" href="Yaw_Resume.pdf">View my r&#233;sum&#233;</a>
       </blockquote> 
        <div id="langs" class="shared row cf">  
          <p>I'm pretty awesome at...</p>
          <div id="linear-graph" class="row">
            <p id="css">css</p>
            <p id="htm">html</p>
            <p class="hidden" id="jq">jquery</p>
            <p id="j">javascript</p>
            <p id="php">php</p>
            <p id="ph">sql</p>
          </div>
          <svg id="radial-graph" height="500">
	   <circle cx="50%" cy="50%" r="200" fill="none" stroke="#123" stroke-width="25" stroke-dasharray="700,600" stroke-dashoffset="965"></circle>
           <circle cx="50%" cy="50%" r="170" fill="none" stroke="#99c" stroke-width="25" stroke-dasharray="600,400" stroke-dashoffset="-280"></circle>
           <circle cx="50%" cy="50%" r="140" fill="none" stroke="#61b33b" stroke-width="25" stroke-dasharray="600,380" stroke-dashoffset="280"></circle>
    	   <circle cx="50%" cy="50%" r="110" fill="none" stroke="#37a9fa" stroke-width="25" stroke-dasharray="400,100" stroke-dashoffset="50"></circle>
	   <circle cx="50%" cy="50%" r="80" stroke="#ffaf59" stroke-width="25" stroke-dasharray="443,200" stroke-dashoffset="0" fill="none"></circle>
  	   <circle cx="50%" cy="50%" r="65" fill="#6a6a6a"></circle>
           <text x="45%" y="51%" fill="#fff">skills</text>
          </svg>
      </div>
      
     </div>
   </div>
</section>

<!--WORK-->
<section id="work">
    <div class="work-container">
       <div class="hero">
          <div class="optimum">
             <div class="row" style="text-shadow:0 1px #333">
                <h1 class="page-heading title row">Work</h1>
                <p>Through identity branding, web design, web development and internet consulting, below are a few projects/websites that showcase my work.</p>
             </div>
          </div> 
       </div>

       <div class="work-display" ng-app="yawDesigns" ng-controller="data">
           <ul class="items-row cf">
               <li class="col" ng-repeat="x in work1">
                <a href="{{x.link}}">
                   <img class="first" src="{{x.img}}" alt="{{x.alt}}">
                </a>
               </li>
           </ul>

           <ul class="items-row cf">
               <li class="col" ng-repeat="x in work2">
                <a href="{{x.link}}">
                   <img class="first" src="{{x.img}}" alt="{{x.alt}}">
                </a>
               </li>
           </ul>
           
           
       </div>
    </div>
</section>

<!--CONTACT-->
<section id="contact" style="padding-top:60px">
  <div class="optimum">
       <ul class="icons row">
          <li><a id="twitter" href="http://www.twitter.com/funky4lyf" target="_blank" title="Follow me!">twitter</a></li>
          <!--<li><a id="facebook" href="http://www.facebook.com/funky4lyf" target="_blank" title="Facebook me!">facebook</a></li>-->
          <li><a id="skype" href="callto:djblaiz" target="_blank" title="Hit me up!">skype</a></li>
          <li><a id="gmail" href="mailto:yasare16@gmail.com" target="_blank" title="Email me!">gmail</a></li>
          <li><a id="soundcloud" href="http://www.soundcloud.com/yasare16" target="_blank" title="Listen to my beats!">soundcloud</a></li>
       </ul>
  </div>

  <div class="contact">
      <div class="div1 half-wrap">
         <h1 class="page-heading">get in touch!</h1>
      </div>
      <div class="div2 half-wrap">
         <h1 class="page-heading">send me a message!</h1>
      </div>  
  </div>
  <div class="message-me">
      <div class="optimum wrap">
          <span class="info" id="email">yasare16@gmail.com</span>
          <span class="info" id="phone">(+1) 374.470.3610</span> 
      </div>
      
      <div class="contact-form text-shadow">
         <form id="myForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
           <h1>Tell me about your web design project/idea, give me some feedback about this website&hellip;or just say <u>Hello!</u>&#9786;</h1><br><br>
           <ul>
               <li>
                   <label>Name<span>&lowast;</span></label>
                   <span><input type="text" name="f_name"></span><br>
               </li>
               <li>  
                   <label>Company</label>
                   <span><input type="text" name="company"></span><br>
               </li>
               <li>
                   <label>Email<span>&lowast;</span></label>
                   <span ><input type="text" name="email"></span><br>
               </li>
               <li>
                   <label>Contact number</label>
                   <span><input type="text" name="number"></span><br>
               </li>
               <li>
                   <label>Subject of message<span>&lowast;</span></label>
                   <span><input type="text" name="subject"></span><br>
               </li>
               <li>
                   <label>Message<span>&lowast;</span></label>
                   <span><textarea rows="8" placeholder="&hellip;&#9997;" name="message"></textarea></span><br>
               </li>
               <li><input class="button" type="submit" name="submit" value="submit!"></li>    
           </ul>
           <?php

         if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $fn = $_POST['f_name'];
            $c = $_POST['company'];
            $e = $_POST['email'];
            $n = $_POST['number'];
            $s = $_POST['subject'];
            $m = $_POST['message'];
            $message = "<strong>Name:</strong> $fn<br>
                        <strong>Company:</strong> $c<br><strong>Sent from:</strong> $e<br>
                        <strong>Phone number:</strong> $n<br>
                        <strong>Message:</strong> $m<br><br>

                        <strong>Sender IP:</strong> $ip"; 


          	$to = 'yasare16@gmail.com';
          	$headers  = 'MIME-Version: 1.0' . "\r\n";
		  	    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


          	$r = mail($to, $s, $message, $headers) ? "<p class='success'>&#10004; Your message has been sent!</p>" : "<p class='failure'>&#10006; Sorry, there was an error sending the message. Try again later.</p>";
          	echo $r;
          	header('Location:http://www.yawdesigns.com/index.php#contact');
         }// end

       ?>
         </form>
      </div>
  </div>
</section>
<?php include('footer.php'); ?>
