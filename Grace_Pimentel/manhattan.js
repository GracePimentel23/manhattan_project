 /*  
Pimentel,Grace
Spring 2024
ISTE 240
manhattan.js
*/
 
//Create an array of images 
var imageArray = ["map.png", "newyears1.jpeg", "statue2.png"];

//Save total size of array to variable arraySize
var arraySize = imageArray.length;

var x = 1; //Used to count up to arraySize

//Function runit play slideshow when called 
function runit() {
    //Set image to next picture in image array
    document.getElementById('slideshow').src = imageArray[x];

    //Increase count by 1
    x++;

    //If count has reached the last index of imageArray than set count back to starting index.
    if (x === arraySize) {
        x = 0;
    }
}

//Set wait time between slides in milliseconds 
var myTimer = setInterval(runit, 2000);

//clearInterval(myTimmer);

function stopSlideShow() {
    "use strict";
    clearInterval(myTimer);
}//end of function to stop the slide show


//mouseover
function change(id,img) {
    //var element = document.getElementById(id);
    document.getElementById(id).src=img;
    }

