var $ = function (id)
{
	return document.getElementById(id);
}

var BeatlesArray = [];
var Beatles = [];

// initialize an array containing all the image elements
var imgs = [];

window.onload=function(){
	$("showlist").onclick = showlist;
	$("john").onclick = johnListener;   //addEventListener("click", johnListener, false);
	$("paul").onclick = paulListener;
	$("george").onclick = georgeListener;
	$("ringo").onclick = ringoListener;
}


function showlist(){
	for (var i = 0; i < BeatlesArray.length; i++){
		var BeatlesContainer = " " + (i + 1) + ". " + BeatlesArray[i]; // holds the value of the array... everytime we do a loop, store info
//		console.log(BeatlesContainer);
		Beatles.push(BeatlesContainer);
	}
	
	$("list").firstChild.nodeValue = Beatles; // 1. Paul, 2. George, 3. Ringo, 4. George
}

// remove the border of every image element
function clearBorders() {
    for(var i = 0; i < imgs.length; i++) {
        imgs[i].style.border = "none";
    }
}


function johnListener(){

    imgs.push(this);
	
    clearBorders();
    
	BeatlesArray.push("John");
	this.style.border = '4px solid yellow';
}

function paulListener(){

    imgs.push(this);
    
    clearBorders();
    
	BeatlesArray.push("Paul");
	this.style.border = '4px solid yellow';
}

function georgeListener(){

    imgs.push(this);
    
    clearBorders();
    
	BeatlesArray.push("George");
	this.style.border = '4px solid yellow';
}

function ringoListener(){
    // add element to image array
    imgs.push(this);
    
    // clear the border of every image in our array. We clear the borders on EVERY image (technically, every image that has ever been clicked), and then add a border to the image which triggered the listener
    clearBorders();
    
	BeatlesArray.push("Ringo");
	this.style.border = '4px solid yellow';
}



