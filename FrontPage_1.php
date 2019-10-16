<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>FrontPage_InterSocial</title>

<link href="/WebDevelopment/social-workflow/ExternalStyling_CSS.css" rel="stylesheet" type="text/css" />

<style>
<!--best to eventually have images on the Website-->
	.small {
		background-image:url('/WebDevelopment/social-workflow/Images/Oceans_Google.jpg'); background-size:100% 100%;
		background-repeat:no-repeat;
		border:3px solid red;
		padding:5px;
	}
	div.hover {
		border:3px solid red;
	}
</style>

</head>

<body>

<header>
<div style= "display:inline-block; position:relative; top:0; left:0; padding:10px 300px 10px 10px; border:2px solid red;  background-color:#09F; color:#FC6; border-radius:10px 0px 10px 0px; 
height:200px; width:600px;"> 
	<div style= "display:inline-block; margin:30px auto 30px 10px; position:absolute; ">
	<img src="http://localhost/WebDevelopment/social-workflow/Images/SocialTradeLogo.jpg" alt="FrontPage_Logo" border="3" height="120" max-height="120"  />	
    </div>
    <div style= "display:inline-block; position:absolute; top:20px; left:300px;">
    	<div style="width:500px; margin: 20 10% auto 0;">
    	<h3 style="text-align:left;"> WELCOME TO THE REVOLUTIONARY SITE FOR TRADING ANY SERVICE YOU HAVE TO OFFER OR SEEK TO FIND IN YOUR COMMUNITY...</h3>
    	</div>
        <hr />
		<div style= "display:inline-block; margin-left:30px;">
			<div style= "display:block;" >
			<form method="post" action="Post_SignOnMember.php" style="display:inline-block;margin-left:100px"">
            </div>
        	<div style="display:block;">
			<input type="text" 		
    		name="emailAddress" id="ID_BG_Prof_2" onKeyPress='change_BG();'
            /> 
            </div>
        	<div style="display:inline-block;">
   			<input type="password" name="passwordEnter"/>
			</div>		
        	<div style="display:inline-block;">
    		<input type="submit" 
            name="submitSignon" id="Bttn_Sub_Email" onclick='change_BG();'/>
			</div>		
		</form> 	
		</div>																
	</div>
</div>	
<hr />				
</header>

<br />
<div style="text-align:justify; padding:20px; width:700px; border:2px solid red; background-color:#09F; "  class="small" >
<strong> PURPOSE – Short Description of Business Concept</strong>
<br /> 
<p>This site will enable people to grow their interests and capabilities through interactions with others on varying levels of self-described service quality, that incentivizes people to develop, feel more emotionally free, and socially connected by giving.</p>

<p>The dream is to see a society become more fulfilled with the capacity to create non-linear connections and interactions, to mix the variety of ideas and growing abilities, so that new knowledge, ways of doing things and cultures emerge and evolve, to build a world of infinite levels of cooperation, through naturally emergent creativity and towards the endeavor of greater peace/harmony.</p>
</div>
 
<form method="post"	action="/WebDevelopment/social-workflow/Post_NewMember.php" style="display:inline-block;margin-left:200px;">
	<div style="display:block">
    	<input type="text" name="firstname"/> 	</div>
    <div style="display:block">
        <input type="text" name="surname"/> 
    <div style="display:block">
       	<input type="text" name="yourEmail"/> 	</div>
    <div style="display:block">
    	<input type="password" name="enterPassword"/> 
    </div>
    <div style="display:block">
    	<input type="text" name="comments"/> 
    </div>
    <div style="display:block">
        <input type="submit" name="submitNewMember"/> 
    </div>
</form>

<hr />

<!-- Perhaps show video of introduction to the site... maybe update on regular basis... but could kinda start as a Mission Statement Video, but have to think about this. -->
<video controls="controls">
	<source src="videos.mp4" type="video/mp4" />
    <source src="videos.ogg" type="video/ogg" />
    <source src="videos.webm" type="video/webm"/>
    Your browser does not support this video type.
</video>

<script>
	function $(id) {
		return document.getElementById(id);	/*document.getElementById('ID_BG_Prof').style.backgroundColor = "red";*/
	}
	function change_BG() {
		/*$('ID_BG_Prof_2').style.backgroundColor = "red";*/
		$('Bttn_Sub_Email').innerHTML = "Submitted!";
	}
</script>

</body>
</html>