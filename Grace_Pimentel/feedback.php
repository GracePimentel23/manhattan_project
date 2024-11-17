<!DOCTYPE html>
<!--  
Pimentel,Grace
Spring 2024
ISTE 240
feedback.php
-->
<html lang="en">
    <head>
        <title>Manhattan's Feedback</title> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel = "stylesheet" type="text/css" href="manhattan.css">
         <link rel = "stylesheet" type="text/css" href="ex03.css">
        </head>
        <body>
        <form action="manhattan.php" method="POST" onsubmit="return validateForm();">
        
        
         
            <div class="topnav">
            <a href="landmarks.php">Landmarks</a>
            <a href="transportation.php">Transportation</a>
            <a href="food.php">Food</a>
            <div class="logo">        
          	  <a  href="index.php">
            	<img id ="logoImage" src="logostill.png" alt="Home">
           	 </a>
            </div>
            <a href="activities.php">Activities </a>
            <a href="other.php">Other</a>
            <a class="active-nav" href="feedback.php">Feedback</a>
            <a href="blog.php"> Blog</a>
        </div>
        
        
        <hr>
        <br>
        <!-- Title -->
        <div id="title3">
        <p>Please tell us about your visit</p>
        </div>
        
		<hr>
        
        <!-- NAME INPUT -->
        <div class="centerall" id="name">
        	<p>Enter your name</p>
        	<input type="text" name="visitor" id="visitor">
        	<span class="astric"> * </span>
        </div>
        
   		<br>
        <!-- GROUP INPUT -->
        <div  class="centerall" id="group">
        	<p>How many people were in your group?</p>
        	<input type="number" min="1" max="10" name="groupNum" id="visitorGroup">
        </div>
        
     	<br>
        <!-- DATE INPUT -->
        <div class="centerall" id="date">
        	<p>When did you visit?</p>
        	<input type="date" id="visitDate" name="vdate">
        	<span class="astric"> * </span>
        	
        	<br>
        </div>
        
        <br>
        <!-- FAV PLACE INPUT -->
        <fieldset class="centerall">
        	<legend>Favorite Place/Activity - Must Select One</legend>
        		<input type="radio" name="fplace" id="br" value="Time Square">
        		<label for="br">Time Square</label>
        <br>
        	<input type="radio" name="fplace" id="ga" value="Color Factory">
        		<label for="ga">Color Factory</label>
        <br>
        	<input type="radio" name="fplace" id="pa" value="Statue of Liberty">
        		<label for="pa">Statue of Liberty</label>
        <br>
        	<input type="radio" name="fplace" id="is" value="Naruto Ramen">
        		<label for="is">Naruto Ramen</label>
        <br>
        	<input type="radio" name="fplace" id="bm" value="AMC Theater">
        		<label for="bm">AMC Theater</label>
        <br>
        	<input type="radio" name="fplace" id="bc" value="Transportation">
        		<label for="bc">Transportation</label>
        <br>
        	<input type="radio" name="fplace" id="other" value="Other">
        		<label for="other">Other</label>
        <br>
        </fieldset>
        
        <!-- RATING INPUT -->
        <div class="centerall" >
        	<p>Please rate your interest in Manhattan (0 - 10)</p>
        	<input type="range" name="rating" min="0" max="10" step="1" list="set">
        	<datalist id="set">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			</datalist>
        </div>
    
    <br>
    
	<fieldset>
  			<legend>Choose you would do/did there!</legend>
  		<div>
    		<input type="checkbox" id="Eat" name="choose" value="Eat" />
    		<label for="Eat">Eating</label>
  		</div>
  		<div>
    		<input type="checkbox" id="activity" name="choose" value="Activity" />
    		<label for="activity">Activity</label>
  		</div>
  		<div>
    		<input type="checkbox" id="sight" name="choose" value="Sight-Seeing" />
    		<label for="sight">Sight-Seeing</label>
  		</div>
	</fieldset>
    
    	<!-- SUBMIT BUTTON -->
        <div id="endbutton">
        	<input type="submit">
        </div>
        </form>
        
    <?php include 'footer.php'; ?>
<!-- JAVASCRIPT -->
    <script>
    	function validateForm()
    	{
			"use strict";
			var isvalid=true;


  			 if(document.getElementById("visitor").value == '')
  			 	{
					document.getElementById("visitor").style.borderColor="red";
					document.getElementById("visitor").style.backgroundColor = 'pink';
					isvalid=false;
    			}
  		 else
   				{
       				document.getElementById("visitor").style = null;
    			}
    			
    		var visitDate = document.getElementById("visitDate").value;
   
   			var visitDate = document.getElementById("visitDate").value;
       
			 if (visitDate === '') 
			 	{
            document.getElementById("visitDate").style.borderColor = "red";
            document.getElementById("visitDate").style.backgroundColor = 'pink';
            isvalid = false;
        		} 
        else 
        		{
            var today = new Date().toISOString().split('T')[0];
            
            if (visitDate >= today) 
            	{
                document.getElementById("visitDate").style.borderColor = "red";
                document.getElementById("visitDate").style.backgroundColor = 'pink';
                isvalid = false;
            	}
        else 	
        		{
        		
                document.getElementById("visitDate").style = null;
            }
        }


  		console.log("Is form ok? "+ isvalid);
    
  		return (isvalid); 
		}//end of javascript function validateForm
    </script>
    </body>