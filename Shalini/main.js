/*jslint plusplus: true evil: true */
/*global console, alert, prompt*/

var mymsg = document.getElementById("mymsg");

var myicon = document.getElementById("icon");

var mycontent = document.getElementById("content");

var mybutton = document.getElementById("mybutton");

var mytext = document.getElementById("text");

var mybody = document.getElementById("body");

var myaudio =document.getElementById("alert");






myicon.onclick = function() {
    
    mymsg.style.display = "none";
    
    mycontent.style.opacity = "1.00";
    
    mybutton.disabled = "";
    mycontent.className = "content";
    mybody.style.overflow = "";
    
};


mybutton.onclick = function() {
    
    mycontent.className = "content2";
    mymsg.style.display = "block";
    this.disabled = "disabled";
    mybody.style.overflow = "hidden";
    mycontent.style.opacity = "0.2";
    myaudio.play();
};
