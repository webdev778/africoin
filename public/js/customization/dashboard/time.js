// Set the date we're counting down to
var countDownDate = new Date("Mar 10, 2018 17:00:00").getTime();
        
// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="round_time"
    document.getElementById("round_time").innerHTML = "<div><number>" + days + "</number><span>Days</span></div>" + "<div><number>" + hours + "</number><span>Hours</span></div>" + "<div><number>" + minutes + "</number><span>Minutes</span></div>" + "<div><number>" + seconds + "</number><span>Seconds</span></div>";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("round_time").innerHTML = "EXPIRED";
    }
}, 1000);