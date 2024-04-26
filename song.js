var track1 = document.getElementById('track1');
var track2 = document.getElementById('track2');
var track3 = document.getElementById('track3');
var track4 = document.getElementById('track4');
var track5 = document.getElementById('track5');
var track6 = document.getElementById('track6');
var track7 = document.getElementById('track7');


var controlBtn1 = document.querySelector('#play-pause1 .play');
var controlBtn2 = document.querySelector('#play-pause2 .play');
var controlBtn3 = document.querySelector('#play-pause3 .play');
var controlBtn4 = document.querySelector('#play-pause4 .play');
var controlBtn5 = document.querySelector('#play-pause5 .play');
var controlBtn6 = document.querySelector('#play-pause6 .play');
var controlBtn7 = document.querySelector('#play-pause7 .play');


// Function for playing and pausing track 1
function playPause1() {
    if (track1.paused) {
        track1.play();
        controlBtn1.innerHTML = "pause";
        controlBtn1.parentElement.parentElement.parentElement.classList.add("pulsate");
    } else { 
        track1.pause();
        controlBtn1.innerHTML = "play_arrow";
        controlBtn1.parentElement.parentElement.parentElement.classList.remove("pulsate");
    }
}

// Function for playing and pausing track 2
function playPause2() {
    if (track2.paused) {
        track2.play();
        controlBtn2.innerHTML = "pause";
        controlBtn2.parentElement.parentElement.parentElement.classList.add("pulsate");
    } else { 
        track2.pause();
        controlBtn2.innerHTML = "play_arrow";
        controlBtn2.parentElement.parentElement.parentElement.classList.remove("pulsate");
    }
}

// Function for playing and pausing track 3
function playPause3() {
    if (track3.paused) {
        track3.play();
        controlBtn3.innerHTML = "pause";
        controlBtn3.parentElement.parentElement.parentElement.classList.add("pulsate");
    } else { 
        track3.pause();
        controlBtn3.innerHTML = "play_arrow";
        controlBtn3.parentElement.parentElement.parentElement.classList.remove("pulsate");
    }
}

// Function for playing and pausing track 4
function playPause4() {
    if (track4.paused) {
        track4.play();
        controlBtn4.innerHTML = "pause";
        controlBtn4.parentElement.parentElement.parentElement.classList.add("pulsate");
    } else { 
        track4.pause();
        controlBtn4.innerHTML = "play_arrow";
        controlBtn4.parentElement.parentElement.parentElement.classList.remove("pulsate");
    }
}

// Function for playing and pausing track 5
function playPause5() {
    if (track5.paused) {
        track5.play();
        controlBtn5.innerHTML = "pause";
        controlBtn5.parentElement.parentElement.parentElement.classList.add("pulsate");
    } else { 
        track5.pause();
        controlBtn5.innerHTML = "play_arrow";
        controlBtn5.parentElement.parentElement.parentElement.classList.remove("pulsate");
    }
}

// Function for playing and pausing track 6
function playPause6() {
    if (track6.paused) {
        track6.play();
        controlBtn6.innerHTML = "pause";
        controlBtn6.parentElement.parentElement.parentElement.classList.add("pulsate");
    } else { 
        track6.pause();
        controlBtn6.innerHTML = "play_arrow";
        controlBtn6.parentElement.parentElement.parentElement.classList.remove("pulsate");
    }
}

// Function for playing and pausing track 7
function playPause7() {
    if (track7.paused) {
        track7.play();
        controlBtn7.innerHTML = "pause";
        controlBtn7.parentElement.parentElement.parentElement.classList.add("pulsate");
    } else { 
        track7.pause();
        controlBtn7.innerHTML = "play_arrow";
        controlBtn7.parentElement.parentElement.parentElement.classList.remove("pulsate");
    }
}

controlBtn1.addEventListener("click", playPause1);
controlBtn2.addEventListener("click", playPause2);
controlBtn3.addEventListener("click", playPause3);
controlBtn4.addEventListener("click", playPause4);
controlBtn5.addEventListener("click", playPause5);
controlBtn6.addEventListener("click", playPause6);
controlBtn7.addEventListener("click", playPause7);

track1.addEventListener("ended", function() {
    controlBtn1.innerHTML  = "play_arrow";
  });
  
  track2.addEventListener("ended", function() {
    controlBtn2.innerHTML  = "play_arrow";
  });
  
  track3.addEventListener("ended", function() {
    controlBtn3.innerHTML  = "play_arrow";
  });
  
  track4.addEventListener("ended", function() {
    controlBtn4.innerHTML  = "play_arrow";
  });
  
  track5.addEventListener("ended", function() {
    controlBtn5.innerHTML  = "play_arrow";
  });
  
  track6.addEventListener("ended", function() {
    controlBtn6.innerHTML  = "play_arrow";
  });
  
  track7.addEventListener("ended", function() {
    controlBtn7.innerHTML  = "play_arrow";
  });
  

