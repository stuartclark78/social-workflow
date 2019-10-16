<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" 
	name="Description" content="This site is a Member's Profile Page to trade skills and start interest groups" />
<!--<script src="MetaTags_1.php"
</script>
<!-- Could use meta tags to refresh page, not sure if want to do this in case member loses half-entered data.-->
<!--GOOGLE META TAGS TO SEE WHAT ARE BEST ONES TO USE -->
<title>MyTrade_Profile</title>
<!--Link to css stylesheet (only one supported in most browsers now e.g. here now-->
<!--<link rel="stylesheet" type="text/css" href="style.css" />
<!-- Javascript file - create js folder within current folder	-->
<!--	CSS STYLING	-->
<link href="/WebDevelopment/SocialWorkflow/ExternalStyling_CSS.css" rel="stylesheet" type="text/css" />

<!--<style> CSS Styles		</style>-->
<style>
	textarea:focus { border:3px solid black;}
</style>
</head>

<body>
<section>
<!-- Logo and Header -->
<header>
<!--	TITLE OF PAGE	-->
<div style= "display:inline-block; position:relative; margin-left:15px; top:0; left:0; padding:10px 20px 10px 10px; border:2px solid red;  background-color:#09F; color:#FC6; border-radius:0px; 
height:140px; width:600px;"> 
		<div style= "display:inline-block; margin:10px auto 10px 10px; position:absolute; ">
        
<img src="/WebDevelopment/SocialWorkflow/SocialTradeLogo.jpg" alt="FrontPage_Logo" border="2" height="100"/>
		</div>
    <!-- Go to Profile Page	-->
    	<div style="display:inline-block; position:absolute; top:50px; left:200px; padding: 10px; width:200px; margin:auto;">
	<a href='/WebDevelopment/SocialWorkflow/HomePage_1.php' style="display:block;">
Go To Home Page
	</a> 
        </div>
	</div>
<hr />
</section>
</header>

<section> <!-- Parent Div until HR -->
<!-- Video Intro and Selected Endorsements -->
<div style="position:relative; display:block; width:50%;">
	<a id="Top"></a>
	<div style="position:relative; display:block; width:450px; margin-top:2px; margin-left:15px; margin-right:auto">
		<h4 style='position:absolute; margin-top:0px; display:block'>My Intro:</h4>
	<!--	Upload video introducing yourself	-->
    	<div style='display:block; position:relative; top:30px; width:50%;'>
			<video style="display:block; position:absolute;" id="intro"
    controls="controls" width=200px>
				<source src="/WebDevelopment/SocialWorkflow/testing_video_genesis.m4v" type="video/mp4" >
    			<source src="/WebDevelopment/SocialWorkflow/testing_video_genesis.ogg" type="video/ogg" >
    			<source src="/WebDevelopment/SocialWorkflow/testing_video_genesis.webm" type="video/webm" >
				<source src="/WebDevelopment/SocialWorkflow/testing_video_genesis.mp4" type="video/mp4" >
    	Your browser does not support this video type
			</video>
    <!-- Control Video Size and Functions	-->
    	<div style="display:inline-block; position:absolute; left:210px; width:150px;">
			<button style="display:block; " onclick="playOrPause()">Play or Pause</button>
			<button style="display:block; " onclick="bigScreen()">Big screen baby!</button>
			<button style="display:block; " onclick="normalScreen()">Just regular size for me</button>
		</div>
	</div>
</div>

<!-- Written Intro of General Experience -->
<div style='display:inline-block; width:50%; left:500px; position:relative; margin-top:2px; margin-left:15px;'>
	<h4 style='display:block; position:absolute; margin-top:0px;'>Background:</h4>
		<div style="display:block; position:absolute; top:30px; padding:2px; background-color:#FFC; border:2px dashed #FF3366; width:400px;">
    		<div style="display-background:#FFF; border:1px solid red; top:5px; left:520px; width:90%;">
				<div style='margin:4px;'>
    <!-- This needs to come from database -->
				<script>
		var Name = "I'm an experienced gardener with 6 years professional experience in horticulture, and looking for the occasional weekend work."; // Dossier about me from database
		document.write("About_Me: " + Name);
				</script>
    			</div>
			</div>
        	<div style="margin-top:5px; width:300px;">
    <!--	EDIT PROFILE PAGE - Later separate this from this Profile View Page	>

Text area for entering written profile of self - on right-hand side
-->
				<script>
					$("textarea").focus(function() {
					$("textarea").css("display", "none");
					});
				</script>
				<textarea name="My Background" id="ID_BG_Prof" placeholder="Type Here" rows="3" cols="45" contenteditable="true" spellcheck="true" onKeyPress='change_BG();' > 
				</textarea>
				<input type='text'
					placeholder='click on me'/>
<!--Write an informal background profile to introduce yourself to other people-->
			</div>
    	</div>
	</div>
</div>
</section>
</br>
<section>
<!-- Small Section to allow link to Video Endorsements - create script with scroll-able list of up to 10 links, including category type -->
<div style="display:block; position:absolute; margin-top:100px; height:400px; width:400px;">
	<!-- BEGIN WITH TESTING ACCESS TO VIDEO -->
    <div style="display:inline-block; position:absolute; margin-top:0px; left:0px;">
	<table border="0" cellspacing="0" cellpadding="0"width=25%>
		<tr cellpadding=0px>
    		<td cellpadding=0px><strong>Endorsement 1:</strong></td>
        	<!-- This should display selected endorsements -->
        	<td>
        	<video style="display:inline-block; left:50px;" height="50px" width="150px" id="intro" controls="controls"   >
				<source src="/WebDevelopment/SocialWorkflow/Testing_Video_Genesis.m4v" type="video/mp4" >
    			<source src="/WebDevelopment/SocialWorkflow/testing_video_genesis.ogg" type="video/ogg" >
    			<source src="/WebDevelopment/SocialWorkflow/testing_video_genesis.webm" type="video/webm" >
				<source src="/WebDevelopment/SocialWorkflow/testing_video_genesis.mp4" type="video/mp4" >
    Your browser does not support this video type
			</video>
    		<!-- Control Video Size and Functions	-->
    		<div style="display:inline-block; position:absolute; top:20px; left:120px; height:10px; width:100px;">
				<button style="display:block; " onclick="playOrPause()">Play or Pause</button>
			</div>
    		</td>
    	</tr>
    	<tr cellpadding=20px>
        	<td><strong>Endorsement 2:</strong></td>
    	</tr>
    	<tr cellpadding=20px>
        	<td><strong>Endorsement 3:</strong></td>
    	</tr>
	</table>
    </div>
	<!-- Place a link to list of sortable endorsements, so there needs to be a list of endorsements -->
	<form method="post" action="/WebDevelopment/SocialWorkflow/Video_Upload_2.php" enctype='multipart/form-data' style="display:inline-block;">     
    	<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
    <!-- Browse video files for uploading -->
    	<input type='file' name="uploadFileVid" value="Choose Video to Upload"/>
    <!-- Submit Selected Video File -->
		<input type='submit' name="SubmitVideo" value="Upload Video file!" />
	</form>
</div>  
</section>
<hr />
<br />

<!--	Insert one of your blogs here - not limited and to be selected from your blogs and placed in a scroll-bar	-->
<!--	AND HAVE FEED OF GROUPS INVOLVED IN	-->
<section>
<div style="display:block; top:50px; left:50px; background-color: #0CF; padding: 10px; width:400px; margin:10px 5px 10px 0px;">
	<p>See My Blogs...</p>
    
<!--	LINK TO BLOG PAGE	-->
	<a href='/WebDevelopment/SocialWorkflow/BlogPage_1.php' style="display:block;" onMouseDown='javascript: alert("This will take you to the blog page.");' >
Link to other blogs
	</a>
</div>
<br />

</section>
<!--	Insert Picture	
	Could also use an anchor element to style as a link
-->
<form method="post" action="MyProfilePic.html">
	<input type="button" value="Browse Profile Picture" >
    <input type="submit" name="Submit Profile Picture" >
</form>

<!--	Show Social Points	-->



<!--	Allow ability for user to insert an iframe to their own site related to that member, or to perhaps a business of their choice	-->
<form method="post" action="MyPersonalLink.html">
<!--	Note: IFrame not too popular, but cool to work with	-->
	<input type="button"  name="SubmitPersonalLink"  width="100px" />
    <iframe src="http://udemy.com/" frameborde="1" height="200" width=90% scrolling="auto"></iframe>
</form>

<!--	Streaming of Recenty Activity Down Middle of Page	-->
<article>
<!--	Link of private blogs	-->
<!--	Allow user to select how long the want the list of blogs to be on this page - they will also be able flag which articles they definitely want to show - from this Profile Page (other connected viewers will only see what the blog links that the Member wishes them to see.  -->
</article>

<!-- Good to write script at bottom of page so that this doesn't slow down DOM	-->
	<!--this sources the script from somewhere else-->
<!--<script src="js/myJavaScript.js"></script> -->
	<!--this writes the script on the current page	-->
<!-- SCRIPT FOR PLAYING PERSONAL PROFILE VIDEO -->
<script type="text/javascript">
	var Intro = document.getElementById('intro');
	function playOrPause()	{
		if (intro.paused)
			intro.play()
		else
			intro.pause();
	}
	
	function normalScreen()	{
		intro.width=300;
	}
	
	function bigScreen()	{
		intro.width=500;
	}
</script>

<!-- SCRIPT FOR RUNNING FUNCTION TO CHANGE TEXT-AREA
	AFTER BEEN WRITTEN INTO, BEFORE UPDATING -->
<script>
	function $(id) {
		return document.getElementById(id);	/*document.getElementById('ID_BG_Prof').style.backgroundColor = "red";*/
	}
	function change_BG() {
		$('ID_BG_Prof').style.backgroundColor = "red";
	}
</script>

<!-- SCRIPT FOR SHOWING A FEED OF RECENT GROUP, BUY AND SELL ACTIVITIES - START WITH GROUPS FIRST... 
<script>
var GroupFeed = new Array("Grp 1","Grp 2","Grp 3");
for(index in GroupFeed) {
	document.write(GroupFeed[index] + " <hr />");
	if(index==1) {
		break;
	}
}-->
</body>
</html>