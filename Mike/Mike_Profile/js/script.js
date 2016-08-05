var index = 0;
			
var slideimages = new Array();// create new array to preload images
slideimages[0] = new Image(); // create new instance of image object
slideimages[0].src = "res/placeholder1.jpg"; // set image src property to image path, preloading image in the process
slideimages[1] = new Image();
slideimages[1].src = "res/placeholder2.jpg";
slideimages[2] = new Image();
slideimages[2].src = "res/placeholder3.jpg";
slideimages[3] = new Image();
slideimages[3].src = "res/placeholder4.jpg";
					
slides();		
			
function slides() {
	if(index < 3)
		index++;
	else
		index = 0;
					
	document.getElementById('slide').src = slideimages[index].src;
	setTimeout(slides, 2000);
}