<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adi Srikanth</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="jquery.qtip.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>
<script type="text/javascript" src="jquery.qtip.js"></script>

<script type="text/javascript">
$(document).ready(function(){

//for tooltip

   
   $('#gmailimg').qtip({
   
   style: {
      classes: 'ui-tooltip-light'
   }

   
   
   });
   
   $('#yahooimg').qtip({
   
   style: {
      classes: 'ui-tooltip-light'
   }

   
   
   });
   
   
   //end tooltip





	
	 var options = { 
        //target:        '#output2',   // target element(s) to be updated with server response 
        beforeSubmit:  showRequest,  // pre-submit callback 
        success:       showResponse,  // post-submit callback 
 
        // other available options: 
        url:       'contact1.php',         // override for form's 'action' attribute 
        type:      'post',        // 'get' or 'post', override for form's 'method' attribute 
        //dataType:  null        // 'xml', 'script', or 'json' (expected server response type) 
        clearForm: true        // clear all form fields after successful submit 
        //resetForm: true        // reset the form after successful submit 
 
        // $.ajax options can be used here too, for example: 
        //timeout:   3000 
    }; 
 
    // bind to the form's submit event 
    $('#myForm').submit(function() {
 alert("Check123");
        // inside event callbacks 'this' is the DOM element so we first 
        // wrap it in a jQuery object and then invoke ajaxSubmit 
        $(this).ajaxSubmit(options); 

        // !!! Important !!! 
        // always return false to prevent standard browser submit and page navigation 
        return false; 
    });
    
});





// pre-submit callback 
function showRequest(formData, jqForm, options) { 
    // formData is an array; here we use $.param to convert it to a string to display it 
    // but the form plugin does this for you automatically when it submits the data 
    var queryString = $.param(formData); 
 
    // jqForm is a jQuery object encapsulating the form element.  To access the 
    // DOM element for the form do this: 
    // var formElement = jqForm[0]; 
 
    //alert('About to submit: \n\n' + queryString); 
 
    // here we could return false to prevent the form from being submitted; 
    // returning anything other than false will allow the form submit to continue 
    return true; 
} 
 
// post-submit callback 
function showResponse(responseText, statusText, xhr, $form)  { 
    // for normal html responses, the first argument to the success callback 
    // is the XMLHttpRequest object's responseText property 
 
    // if the ajaxSubmit method was passed an Options Object with the dataType 
    // property set to 'xml' then the first argument to the success callback 
    // is the XMLHttpRequest object's responseXML property 
 
    // if the ajaxSubmit method was passed an Options Object with the dataType 
    // property set to 'json' then the first argument to the success callback 
    // is the json data object returned by the server 
 
     alert('status: ' + statusText + '\n\nresponseText: \n' + responseText + 
        '\n\nThanks for your Valuable Time.'); 
} 









</script>
<!--[if IE 5]>
<style type="text/css"> 
/* place css box model fixes for IE 5* in this conditional comment */
#sidebar1 { width: 400px; }
</style>
<![endif]--><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
#sidebar1 { padding-top: 30px; }
#mainContent { zoom: 1; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]--></head>

<body>
<!-- begin #container -->
<div id="container">
	<!-- begin #header -->
    <div id="header">
    	<div class="topHeader">
            <div class="logoContainer">
                <div class="logo">
                    Adi <span>Srikanth</span>
                </div>
				
                
            </div>
            <div class="icons">
                <ul>
                    <li><a href="https://www.facebook.com/adisrikanth" target="_blank"><img src="images/Facebook-32.png" alt="My Facebook" /></a></li>
                    <li><a href="https://twitter.com/#!/adisrikanth" target="_blank"><img src="images/Twitter-32.png" alt="" /></a></li>
                    
                </ul>
            </div>
        </div>
        <div class="clearfloat"></div>
        <div id="navcontainer">
            <ul id="navlist">
                <li><a href="index.html">Home</a></li>
                <li><a href="aboutme.html">About Me</a></li>
                <li><a href="construct.html">Blog</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li id="active"><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="headerPic">
        	
        </div>
    </div>
    <!-- end #header -->
    <!-- begin #sidebar1 -->
    <div id="sidebar1">
    	<div class="titleContent">Contact Page</div>
    	<div class="bodyContent">
            <h1>MY SOCIAL PAGES</h1>
            <div class="icons1">
             <ul>
                    <li><a href="https://www.facebook.com/adisrikanth" target="_blank"><img src="images/Facebook-32.png" alt="My Facebook" /></a></li>
                    <li><a href="https://twitter.com/#!/adisrikanth" target="_blank"><img src="images/Twitter-32.png" alt="" /></a></li>
                    <li><a title="adisriikanth@gmail.com" id="gmailimg" href="mailto:adisriikanth@gmail.com"><img src="images/gmail-32.png" alt="gjgjhgjhgjh" /></a></li>
                    <li><a title="aadisrikanth@yahoo.com" id="yahooimg" href="mailto:aadisrikanth@yahoo.com"><img src="images/Yahoo-32.png" alt="" /></a></li>
                </ul>
                </div>
            <p>
			
            </p>
        </div>
    </div>
    <!-- end #sidebar1 -->
    <!-- begin #mainContent -->
    <div id="mainContent">
    	<div class="titleContent">Feedback & Contact here</div>
        <form id="myForm" action="" method="post"> 
        <table>
        <tr>
        <td>Name: 
        </td>
                <td><input type="text" name="name" />
        </td>
        </tr>
        
        
        <tr>
        <td>EMail-ID: 
        </td>
                <td><input type="text" name="email" />
        </td>
        </tr>
        
        
          <tr>
        <td>Comment: 
        </td>
                <td><textarea name="comment"></textarea> 
        </td>
        </tr>
        
          <tr>
        <td colspan="2" align="center">
        <input type="submit" value="Submit Comment" /> 
        </td>
        </tr>
        
        
        </table>
     <br>
     <br>
    
    
</form>
    </div>
    <!-- end #mainContent -->
    <br class="clearfloat" />
</div>
<!-- end #container -->
<!-- begin #footer -->
<div id="footer">
    
    <div class="copyright">
    	<p>Copyright &copy; 2010 <a href="http://www.free-jquery-templates.com" title="Free Jquery Templates">Organic Design.</a> Design by Adi Srikanth <a href="http://www.freedomain.co.nr">CO.NR</a></p>
    </div>
</div>
<!-- end #footer -->
</body>
</html>