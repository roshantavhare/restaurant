


<!DOCTYPE html>
<html>
<title>FoodHauleRs</title>
<meta chaRset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<script type="text/javascript">
  function msg2(){
  confirm("Are you sure? you Want to RESET the form?")
}

</script>

<style>
.inputbox{
  height: 25px;
      float: right;
    position: relative;
    right: 30%;
    width: 500px;
}
.button1{
 
  
	float: right;
      position: relative;
      right:42%;
	  cursor:pointer;
  background-color:#ba1515;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius : 25px
}
a:hover(.button1)
{
background-color:yellow;}
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif;font-size:25px; color: grey;font-weight:900;}
.menu {display: block}

h1{background-image:url("blurpizza.jpg");
 background-repeat: repeat-y;
}
h1{text-decoration: underline;
    text-decoration-color: red;
	color:white;
	}
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgba(0,0,0,0.3);
	position:fixed;
	top:0;
	width:100%;
	
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: left;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #ba1515;
	.active {
    background-color: #4CAF50;
}
ul.active1 {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li.active1 a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active1 {
    background-color: #4CAF50;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}



</style>
<style>
body {
    background-color:black;
}
</style>
<style>
.mySlides {display:none;}
</style>
<body>
<div class="x-content x-section" >
  <img class="mySlides" src="delguy.jpg" style="width:100%">
  <img class="mySlides" src="pizza3.jpg" style="width:100%">
  <img class="mySlides" src="pasta.jpg" style="width:100%">
  <img class="mySlides" src="soup.jpg" style="width:100%">
  <img class="mySlides" src="salad.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</head>
<body>

<ul>
  <li><a class="active" href="#">HOME</a></li>
  <li><a href="#menu">MENU</a></li>
  <li><a href="#about">ABOUT</a></li>
  <li><a href="#googleMap">CONTACT</a></li>
  <li><a href="login.php">LOGIN</a></li>
  <li><a href="login.php">SIGNUP</a></li>
  <li><a href="logout.php">LOGOUT</a></li>
</ul>

	
</style>
<body>  
<!-- Header with image -->
<header class="bgimg x-display-container x-grayscale-min" id="home">
  <div class="x-display-bottomleft x-padding">
   
  </div>
 

 
</header>

<!-- Menu Container -->
<div class="x-container x-black x-padding-64 x-xxlarge" id="menu">
  <div class="x-content">
  
    <h1 class="x-center x-jumbo" style="margin-bottom:64px" align="center">THE MENU</h1>
	
    
     <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza'); " id="myLink">
        <div class="x-col s4 tablink x-padding-large x-hover-red" align="center" style="color:white;text-decoration: underline;
    text-decoration-color:black"">Pizza</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
        <div class="x-col s4 tablink x-padding-large x-hover-red"align="center" style="color:white;text-decoration: underline;
    text-decoration-color:black"">Salads</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
        <div class="x-col s4 tablink x-padding-large x-hover-red"align="center" style="color:white;text-decoration: underline;
    text-decoration-color:black"">Starter</div>
      </a>
	  
	
    </div>

    <div id="Pizza" class="x-container menu x-padding-32 x-white">
      <h1><b>Margherita</b> <span class="x-right x-tag x-dark-grey x-round">350Rs</span></h1>
      <p class="x-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
      <hr>
   
      <h1><b>Formaggio</b> <span class="x-right x-tag x-dark-grey x-round">450Rs</span></h1>
      <p class="x-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
      <hr>
      
      <h1><b>Chicken</b> <span class="x-right x-tag x-dark-grey x-round">600Rs</span></h1>
      <p class="x-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p>
      <hr>

      <h1><b>Pineapple'o'clock</b> <span class="x-right x-tag x-dark-grey x-round">400Rs</span></h1>
      <p class="x-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p>
      <hr>

      <h1><b>Meat Town</b> <span class="x-tag x-red x-round">Hot!</span><span class="x-right x-tag x-dark-grey x-round">900Rs</span></h1>
      <p class="x-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p>
      <hr>

      <h1><b>Parma</b> <span class="x-tag x-grey x-round">New</span><span class="x-right x-tag x-dark-grey x-round">800Rs</span></h1>
      <p class="x-text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p>
    </div>

    <div id="Pasta" class="x-container menu x-padding-32 x-white">
      <h1><b>Lasagna</b> <span class="x-tag x-grey x-round">Popular</span> <span class="x-right x-tag x-dark-grey x-round">550Rs</span></h1>
      <p class="x-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
      <hr>
   
      <h1><b>Ravioli</b> <span class="x-right x-tag x-dark-grey x-round">350Rs</span></h1>
      <p class="x-text-grey">Ravioli filled with cheese</p>
      <hr>
      
      <h1><b>Spaghetti Classica</b> <span class="x-right x-tag x-dark-grey x-round">300Rs</span></h1>
      <p class="x-text-grey">Fresh tomatoes, onions, ground beef</p>
      <hr>

      <h1><b>Seafood pasta</b> <span class="x-right x-tag x-dark-grey x-round">1000Rs</span></h1>
      <p class="x-text-grey">Salmon, shrimp, lobster, garlic</p>
    </div>


    <div id="Starter" class="x-container menu x-padding-32 x-white">
      <h1><b>Today's Soup</b> <span class="x-tag x-grey x-round">Seasonal</span><span class="x-right x-tag x-dark-grey x-round">150Rs</span></h1>
      <p class="x-text-grey">Ask the waiter</p>
      <hr>
   
      <h1><b>Bruschetta</b> <span class="x-right x-tag x-dark-grey x-round">200Rs</span></h1>
      <p class="x-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
      <hr>
      
      <h1><b>Garlic bread</b> <span class="x-right x-tag x-dark-grey x-round">250Rs</span></h1>
      <p class="x-text-grey">Grilled ciabatta, garlic butter, onions</p>
      <hr>
      
      <h1><b>Tomozzarella</b> <span class="x-right x-tag x-dark-grey x-round">300Rs</span></h1>
      <p class="x-text-grey">Tomatoes and mozzarella</p>
    </div><br>

  </div>
</div>

<!-- About Container -->
<div class="x-container x-padding-64 x-red x-grayscale x-xlarge" id="about">
  <div class="x-content">
    <h1 class="x-center x-jumbo" style="margin-bottom:64px" align="center">About</h1>
    <p>We cook some delicious food at pocket friendly prices and provide fast and spontaneous delivery which will provide a feeling of content in your mind. We endeavour on providing hygienic and delicious food by using the best of the ingredients. Our startup was founded in 2010 and we have Michellen star chefs at our disposal. </p>
    <p><strong>The Chef?</strong> Mr.Gordon Ramsey Himself!</p>
    <p>We are proud of our delivery partneRs.</p>
    <img src="delivery.jpg" style="width:100%" class="x-margin-top x-margin-bottom" alt="Our Team">
    <h1 align="center"><b>Opening Hours</b></h1>
    
    <div class="x-row">
      <div class="x-col s6">
        <p>Mon & Tue CLOSED</p>
        <p>Wednesday 10.00 - 24.00</p>
        <p>ThuRsday 10:00 - 24:00</p>
      </div>
      <div class="x-col s6">
        <p>Friday 10:00 - 12:00</p>
        <p>Saturday 10:00 - 23:00</p>
        <p>Sunday Closed</p>
      </div>
    </div>
    
  </div>
</div>

<!-- Contact (with google maps) -->


<div class="x-container x-padding-64 x-blue-grey x-grayscale-min x-xlarge">
  <div class="x-content">
    <h1 class="x-center x-jumbo" style="margin-bottom:64px" align="center">Contact</h1>
	<div id="googleMap" class="x-grayscale-max" style="width:100%;height:400px;"></div>
    <p>contact us at <br>email: help.foodhauleRs@gmail.com</p>
    <p><span class="x-tag">FYI! </span> For bulk ordeRs please let us know in advance by calling us at +91 0551-0551 and filling in the details below.</p>
    <p class="x-xxlarge"> Ask for today's special or just send us a message:</p>
    

    <div style="margin-left: 35%">
    <!--<form action="/action_page.php" target="_blank">
      <p><input class="x-input x-padding-16 x-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="x-input x-padding-16 x-border" type="number" placeholder="Quantity" required name="People" style="width: 500px"></p>
      <p><input class="x-input x-padding-16 x-border" type="datetime-local" placeholder="Date and time" required name="date" value="delivery date and time "></p>
      <p><input class="x-input x-padding-16 x-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="button1" type="submit">SEND MESSAGE</button></p>
    </form>-->

    <form class="form-control" id="non_member" style="">
        <div><label >Name:</label>
          <input  class="inputbox" type="text"  placeholder="Enter your full name" required ></div><br>
        <div><label>ADDRESS:</label>
          <input class="inputbox" type="text"   placeholder="Enter your college name" required></div><br>
                 
        <div><label>DATE:</label>
          <input class="inputbox" type="date"></div><br>
        <div><label>TIME:</label>
          <input class="inputbox" type="time"></div><br>
        <div><label>FOOD DETAILS:</label>
          <input class="inputbox" type="text"   placeholder="Enter your food details"></div><br>

        <div><label>Contact no:</label>
             <input class="inputbox" type="text"  placeholder="Enter contact number" required></div><br>
      
         <div>
         <label>Locality:</b></label>
        <select name="locality" class="inputbox" >
            <option>Mumbai</option>
            <option>Navi Mumbai</option>
            <option>Thane</option>
            <option>Raigad</option>
             <option>Pune</option>
             <option>Other</option>
          </select>
          </div>


          <div class="btn">
          <button class="button1" type="submit" onclick="msg()" >SEND ORDER</button>
          
          <button class="button1" type="reset" onclick="msg2()">RESET</button>
        
        </div>  
      </form>
    </div>






  </div>
</div>

<!-- Footer -->
<footer class="x-center x-black x-padding-48 x-xxlarge">

  <p style="color:white;text-decoration: underline;
    text-decoration-color:black" align="center"><br><br>Powered,Designed and Mantained by <a href="http://eng.rizvi.edu.in/" title="Roshan Tavhare of RIZVI COLLEGE OF ENIGNEERING" target="_blank" >ROSHAN TAVHARE, Rizvi College of Engineering</a></p>
</footer>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(19.0667647, 72.82616340000004);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: true, draggable: true,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" x-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.fiRstElementChild.className += " x-red";
}
document.getElementById("myLink").click();
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVxXKimFanLdbghcbTglVwQgldEoUQP_0&callback=myMap">

</script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">

</body>
</html>


