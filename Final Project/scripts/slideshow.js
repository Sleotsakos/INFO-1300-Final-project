// Adapted from Lab9 example

"use strict";
window.onload = function() {
	//array of images
	var images = ["slideshow1.11.jpg", "slideshow1.1.jpg", "slideshow1.2.jpg",
	"slideshow1.3.jpg", "slideshow1.4.jpg", "slideshow1.6.jpg",
	"slideshow1.7.jpg", "slideshow1.8.jpg", "slideshow1.9.jpg", "slideshow1.10.jpg"];

	//current image index
	var currentImage = 0;

	$("#left1").click(function() {
		if (currentImage > 0) {
			currentImage -= 1;
			$("#current_img1").attr("src","images/" + images[currentImage]);
			// move to previous image
		} else if (currentImage === 0) {
			currentImage = images.length - 1;
			$("#current_img1").attr("src","images/" + images[currentImage]);
			//wrap around if last image
		}
	});

	$("#right1").click(function() {
		if (currentImage < images.length - 1) {
			currentImage += 1;
			$("#current_img1").attr("src","images/" + images[currentImage]);
			// move to next image
		} else if (currentImage === images.length - 1) {
			currentImage = 0;
			$("#current_img1").attr("src","images/" + images[currentImage]);
			// wrap around if first image
		}
	});
};
