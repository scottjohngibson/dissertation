<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
	<title>Get Feedback</title>

<meta name="viewport" content="width=device-width", initial-scale=1>
<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css"/>
<link rel="stylesheet" href="css/style.css"/>

<style>


    #nav {
    display: flex;
    
        
    }

    #nav div {
        position: relative;
        width: 75px;
        text-align: center;
    }

    #shutterbug {
        padding-top: 6px;
    }

    #user {
        
        width: 30px;
        height: 30px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        //transform: translateY(-5px);
    }

    a {
        color: #6EDCC2;
    }

    nav>a>p {
        margin: 0;
        display: none;
    }

    @media only screen and (min-width: 1200px) {

    #nav {

        justify-content: space-between; 
    }
    

    #nav div {
        display: none;
    }

    #shutterbug {
        margin: 20px;
        max-width: 300px;
    }

    p {
        display: block;
        margin-bottom: 20px;
        font-size: 1.5em;
        
    }

    nav>a>p {
        display: block;
    }

    a {
        align-self: center;
        margin-right: 40px;
        
    }

    }
        
</style>
</head>
<body>

<nav id="nav">
		<div>
		
		<?php 
		
		if(isset($_SESSION["username"])){
			echo '<a href="profile.php"><img id="user" src="img/user.png" alt=""></a>';
		}
		else { echo '<a href="login.php"><img id="user" src="img/user.png" alt=""></a>';}
		?> 
		
		
		</div>
		<img id="shutterbug" src="img/shutterbug.png">
		
		<?php 
		
		if(isset($_SESSION["username"])){
			echo '<a class="profile-text" href="profile.php"><p>Profile</p></a>';
		}
		else { echo '<a class="profile-text" href="login.php"><p>Profile</p></a>';}
		?> 
		
		
		
        </nav>

<div class="wrapper">

<h1>4) Get feedback</h1>
<h2 id="feedback"></h2>

	<div id="feedbackFlex">

	<div id="lowDOF">
		<p class="desc">You used a <strong>wide aperture</strong>, giving your photograph a <strong>shallow depth of field</strong>.</p>
		<a href="https://www.nikonusa.com/en/learn-and-explore/a/tips-and-techniques/bokeh-for-beginners.html" target="_blank"><img src="img/bokeh.jpg"></a>
		<p class="headline">Bokeh for Beginners</p>
		<br>
	</div>

	<div id="highDOF">
		<p class="desc">
		You used a <strong>narrow aperture</strong>, giving your photograph a <strong>large depth of field</strong>.</p>
		<a href="https://www.thephoblographer.com/2015/01/21/elizabeth-gaad-combines-landscapes-portraiture/" target="_blank"><img src="img/landscape-portraiture.jpg"></a>
		<p class="headline">Elizabeth Gaad Combines Lanscapes and Portraiture</p>
		<br>
	</div>
	
	
	<div id="lowSpeed"><p class="desc">You used a <strong>slow shutter-speed</strong>, giving your photograph a <strong>long exposure effect</strong>.</p>
		<a href="https://www.picturecorrect.com/tips/capturing-motion-with-slow-shutter-speeds/" target="_blank"><img src="img/slow-shutter.jpg"></a>
		<p class="headline">Capturing Motion with Slow Shutter Speeds</p>
	<br>	
	</div>

	<div id="highSpeed"><p class="desc"> You used a <strong>fast shutter-speed</strong>, giving your photograph a <strong>frozen effect</strong>.</p>
		<a href="https://www.dpmag.com/how-to/shooting/high-speed-portraits/" target="_blank"><img src="img/high-speed.jpg"></a>
		<p class="headline">High-Speed Portraits</p>
		<br>
	</div>
	
	<div id="highISO"><p class="desc">You used a <strong>high ISO value</strong> - this introduced <strong>noise</strong> to your photograph.</p>
	<a href="https://digital-photography-school.com/reasons-why-shoot-high-iso/" target="_blank"><img src="img/high-iso.jpg"></a>
	<p class="headline">Get Better Images at High ISO</p>
	<br>
	</div>

	<div id="highEV"><p class="desc">Your photograph should be <strong>overexposed</strong>.</p>
	<a href="https://bdmpublications.com/understanding-high-key-portraiture/" target="_blank"><img src="img/high-key.jpg"></a>
	<p class="headline">Understanding High-Key Portraiture</p>
	<br>
	</div>


	<div id="perfectEV"><p class="desc">Your photograph should be <strong>perfectly exposed</strong>.</p>
	<a href="https://clickitupanotch.com/photography-exposure-tips/" target="_blank"><img src="img/perfect-exposure.jpg"></a>
	<p class="headline">3 Steps for Perfect Exposure</p>
	<br>
	</div>

	<div id="lowEV"><p class="desc">Your photograph should be <strong>underexposed</strong>.</p>
	<a href="https://www.format.com/magazine/resources/photography/silhouette-photography" target="_blank"><img src="img/silhouette.jpg"></a>
	<p class="headline">Silhouette Photography 101</p>
	<br>
	</div>

</div>	

</div>



<script src="js/get-feedback.js"></script>
</body>
</html>