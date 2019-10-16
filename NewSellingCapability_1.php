<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SellCapability_InterSocial</title>
</head>

<body>

<br />
<a href='/WebDevelopment/SocialWorkflow/HomePage_1.php' style="display:block;">
Home_Page
</a>
<br />

<!-- Create New Selling Capability
	Option for whether select from:
    	categories
        or search lookup
    Option to create new selection (don't make part of categories, but just come up in search if selected frequently enough, and then go into categories once reach critical mass).
-->
<input type="radio" name="Radio_Sell" id="sc_1" value="Select From Categories"  />
<input type="radio" name="Radio_Sell" id="sc_2" value="Search Lookup" />
<input type="radio" name="Radio_Sell" id="sc_3" value="Create New Capability/Trade Type" />

<hr />
<!--Also tag whether sell is part of a group membership - group membership can given be set up from beforehand and rechosen, or a new one can be created on the spot.--> 
<select name="Sellabilities">
	<option value="NA" disabled="disabled" selected="selected">Select Trading Capabilities</option>
    <option value="tutoring">Tutoring</option>
    <option value="personaltrain">Personal Training</option>
</select>

<!-- Insert Search Lookup here	
Perhaps allow spellcheck function for user to change if they think they've spelt it wrong.  Or would this not be as advantageous as allowing a similar category or type that's already been created from popping up, rather than an English spell-check, which doesn't use the extra intelligence of helping them locate the category/type?
e.g. <p spellcheck="true">splel chekc tihs sentance</p>
-->

</body>
</html>