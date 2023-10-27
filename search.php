<?php
include_once('resources/init.php');
include_once('resources/config.inc.php');
require_once 'class/Image.php';
$app = new Image;
$posts = get_posts(null,$_GET['id']);



?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
   <?php
     foreach(get_title() as $row){
     ?>
	<title><?php echo $row['title']; ?></title>
   <?php } ?>
   <?php  $stmt = $app->query("SELECT id,logo FROM logo");
            $stmt->execute();
            while ($row = $stmt->fetch()) {?>
	<link rel="shortcut icon" href="css/img/<?php echo $row['logo']; ?>" >
   <?php } ?>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.4.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <!-- <title>شـوێـنـی صـمـد</title> -->
</head>

<body>
<form name="moe" autocomplete="off" action="search.php" method="POST">

  <div class="superNav border-bottom py-2 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
          <!-- <select class="me-3 border-0 bg-light">
            <option value="en-us">Kurdish</option>
            <option value="en-us">EN-US</option>
            <option value="en-us">Arabic</option>
          </select> -->
          <span
            class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><strong>WastaSamad@gmail.com</strong></span>
          <span class="me-3"><i class="fa-solid fa-phone me-1 text-warning"></i> <strong>+964 751 884
              2044</strong></span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block d-sm-block d-xs-none text-end">
          <span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i>
          <?php
     foreach(get_title() as $row){
     ?>
		     
            
            <a class="text-muted" href="#"><?php echo $row['title']; ?></a></span><?php } 
?>
        </div>
      </div>
      <div class=" d-lg-block d-sm-block">
        <div class="input-group">
          <span class="border-warning input-group-text bg-warning text-white"><i
              class="fa-solid fa-magnifying-glass"></i></span>
          <input type="text" id="term" name="search" onblur="if(this.value == '') { this.value = 'بەدوای کاڵایەک دا بگەڕێ'; }" onfocus="if (this.value == 'بەدوای کاڵایەک دا بگەڕێ') { this.value = ''; }" class="form-control border-warning" style="color:#000000;     direction: rtl;"
          placeholder="بەدوای کاڵایەک دا بگەڕێ">
          <input type="submit" name="searching" value="گەڕان" class="btn btn-warning text-white">
        </div>
      </div>
    </div>
  </div>
  </form>


  <style>
                  
.autocomplete {
  /*the container must be positioned relative:*/
  position: relative;
  display: inline-block;
}
input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}
input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}
input[type=submit] {
  /* background-color: DodgerBlue; */
  color: #fff;
}
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 1021;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4;
}
.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9;
}
.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  /* background-color: DodgerBlue !important; */
  color: #ffffff;
}
                  </style>
  <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
    <a class="navbar-brand magic-link" href="#" style="color: whitesmoke;">
      <i class="fa-solid fa-shop me-2"></i>
      <?php
     foreach(get_title() as $row){
     ?>
		     
          <strong style="color: #000000;"><?php echo $row['title']; ?></strong></a><?php } 
?>
      

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent"
      style="color: rgb(235, 0, 0) !important; font-size: 20px ;">
      <div class="mr-auto"></div>
      <ul class="navbar-nav my-2 my-lg-0">
       
      <li class="nav-item lineHov">
          <a class="nav-link " href="./admin.php">چوونەژوورەوە <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item lineHov">
          <a class="nav-link" href="feuelpump.php">فیولپەمپ <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item lineHov">
          <a class="nav-link" href="bans.php">بانص <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item lineHov">
          <a class="nav-link" href="plak.php">پلاک <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-display="static"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            فلتەر
          </a>
          <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown" id="hov">
            <a class="dropdown-item " href="filtar.php">فلتەر</a>
            <a class="dropdown-item" href="bans.php">بانص</a>
            <a class="dropdown-item" href="plak.php">پلاک</a>
          </div>
       
        </li>
        <li class="nav-item active lineHov">
          <a class="nav-link" href="index.php">سەرەکی <span class="sr-only">(current)</span></a>
        </li>
      </ul>

    </div>
  </nav>


  <!-- Your main content -->
  <div class="content">
    <!-- Your main content goes here -->
  
 
    <hr> 
    <!--   cards  -->
    <div class="container" style="margin-bottom: 20px;direction: rtl;
    text-align: right">
      <div class="row">
    

    <?php
       
       if(isset($_POST['searching'])||isset($_POST['search']))
       {
         
            $name = $_POST['search'];
            
            if(empty($name)){
               $make = '<h4>You must type a word to search!</h4>';
            }else{
               $make = '<h4>No match found!</h4>';
               $sele = "SELECT * FROM posts WHERE title LIKE '%$name%'" ;
               $result = mysqli_query($conn,$sele);
               
               if($row = mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
               //print_r($employee_details);
           
     

     ?>

    
        
        <div style="padding: 10px;" class="col-lg-3 col-md-6">
          <div class="card custom-card" style="border-radius: 10%;">
           
            <div style="height: 150px;text-align: center;width: 100%;"> <img src="<?php echo './css/img/'.$row['images']; ?>" style="width: 200px;
  height: 150px;width: 100%;;" class="card-img-top" height: 100%;
              width: 100%; alt="Card Image"></div>
            <div class="card-body">
              <h5 class="card-title" align="right" ><?php echo $row['title']; ?> </h5>
              <h7 class="card-title" align="right" ><?php echo $row['price']."$"; ?> </h5>
              <div style="overflow: auto; max-height: 60px;">
              <style>div::-webkit-scrollbar {
  display: none;
}</style>
              <p class="card-text" align="right"  >
                
                <!-- <img src="bmw.png" width="15px" alt=""> -->
                 <?php echo $row['contents']; ?>   </p>
            <!-- <center>  <a href="datails_categorise.html" class="btn btn-primary"  >زیاتر</a></center> -->
            </div>
            </div>
          </div>
        </div>
        <?php   
   }
}else{



}
mysqli_free_result($result);

}
if(empty($name)){
   $make = '<h4>You must type a word to search!</h4>';
}else{
   $make = '<h4>No match found!</h4>';
   $sele = "SELECT * FROM posts WHERE contents LIKE '%$name%' and title NOT LIKE '%$name%'" ;
   $result = mysqli_query($conn,$sele);
   
   if($row = mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
   //print_r($employee_details);



?>




    
        
        <div style="padding: 10px;" class="col-lg-3 col-md-6">
          <div class="card custom-card" style="border-radius: 10%;">
           
            <div style="height: 150px;text-align: center;width: 100%;"> <img src="<?php echo './css/img/'.$row['images']; ?>" style="width: 200px;
  height: 150px;width: 100%;;" class="card-img-top" height: 100%;
              width: 100%; alt="Card Image"></div>
            <div class="card-body">
              <h5 class="card-title" align="right" ><?php echo $row['title']; ?> </h5>
              <h7 class="card-title" align="right" ><?php echo $row['price']."$"; ?> </h5>
              <div style="overflow: auto; max-height: 60px;">
              <style>div::-webkit-scrollbar {
  display: none;
}</style>
              <p class="card-text" align="right"  >
                
                <!-- <img src="bmw.png" width="15px" alt=""> -->
                 <?php echo $row['contents']; ?>   </p>
            <!-- <center>  <a href="datails_categorise.html" class="btn btn-primary"  >زیاتر</a></center> -->
            </div>
            </div>
          </div>
        </div>
   








<?php   
}
}else{



}
mysqli_free_result($result);

}
}   
     ?>
     </div>
        </div>
  
        <!-- <div class="col-lg-3 col-md-6">
          <div class="card custom-card">
            <div style="height: 150px; width: fit-content;"> <img src="plu.jpg" class="card-img-top" object-fit: cover; alt="Card Image"></div>
         
            <div class="card-body">
              <h5 class="card-title" align="right" >پلاک تۆیۆتا</h5>
              <p class="card-text"align="right" > <img src="https://assets.stickpng.com/images/61291551319275000479abf2.png" width="25px" alt=""> &nbsp; پلاک هایلۆکس</p>
           <center>  <a href="datails_categorise.html" class="btn btn-primary">زیاتر</a></center> 
            </div>
          </div>
        </div> -->
  
        <!-- <div class="col-lg-3 col-md-6">
          <div class="card custom-card">
            <div style="height: 150px;"> <img src="ba.jpg" class="card-img-top" object-fit: cover; alt="Card Image"></div>
          
            <div class="card-body">
              <h5 class="card-title"align="right" >بانص</h5>
              <p class="card-text"align="right" > <img src="crownn.png" width="15px" alt=""> بانص کڕاون </p>
              <center><a href="datails_categorise.html" class="btn btn-primary">زیاتر</a></center>
            </div>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="card custom-card">
            <div style="height: 150px;"> <img src="drain.jpg" class="card-img-top" object-fit: cover; alt="Card Image"></div>
          
            <div class="card-body">
              <h5 class="card-title"align="right" >دراین شەفت </h5>
              <p class="card-text"align="right" >  <img src="" alt=""> <img src="OPEL.png" width="30px" alt=""> شەفت ئۆپڵ</p>
            <center>  <a href="datails_categorise.html" class="btn btn-primary">زیاتر</a></center>
            </div>
          </div>
        </div> -->
      <!-- </div>
    </div> -->
  
    <!-- <div class="container" style="margin-bottom: 20px;" >
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card custom-card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">Card Title 1</h5>
              <p class="card-text">This is a simple card example using Bootstrap.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="card custom-card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">Card Title 2</h5>
              <p class="card-text">This is another card example using Bootstrap.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="card custom-card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">Card Title 3</h5>
              <p class="card-text">This is another card example using Bootstrap.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="card custom-card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">Card Title 4</h5>
              <p class="card-text">This is another card example using Bootstrap.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- <div class="container" style="margin-bottom: 20px;">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card custom-card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">Card Title 1</h5>
              <p class="card-text">This is a simple card example using Bootstrap.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="card custom-card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">Card Title 2</h5>
              <p class="card-text">This is another card example using Bootstrap.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="card custom-card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">Card Title 3</h5>
              <p class="card-text">This is another card example using Bootstrap.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="card custom-card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">Card Title 4</h5>
              <p class="card-text">This is another card example using Bootstrap.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

    <script>
    
   
   document.onkeydown=function(evt){
    
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
       
        if(keyCode == 13)
        {  if(document.getElementById("term").value.length == 0){
            //your function call here
            document.test1.submit();}
            else{
            document.moe.submit();
            }
        }
    }

</script>
<script type="text/javascript">
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});
} 
var countries = <?php  $query = "SELECT title FROM posts";
    $result = mysqli_query($conn, $query);
 
    if (mysqli_num_rows($result) > 0) {
     while ($user = mysqli_fetch_array($result)) {
      $res[] = $user['title'];
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);?>;
autocomplete(document.getElementById("term"), countries);
autocomplete(document.getElementById("term1"), countries);
</script>

  <footer class="magic-footer" style="background-color: #333; color: #fff;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12" id="map" style=" background-color: #333;">
          <h3>نانیشان</h3>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3220.058614478863!2d45.10927960000001!3d36.189456299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4001433ccbe3336d%3A0x6b1486ab106a9cfd!2z2LTZiNuO2YbbjCDYtdmF2K8!5e0!3m2!1sen!2sus!4v1697848046548!5m2!1sen!2sus"
            width="80%" height="80%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h4>زانیاریی په‌یوه‌ندییكردن</h4>
          <p><i class="fa-solid fa-envelope me-1 text-warning"></i> WastaSamad@gmail.com</p>
          <p><i class="fa-solid fa-phone me-1 text-warning"></i> +964 751 884 2044</p>
          <p><i class="fa-solid fa-map-marker me-1 text-warning"></i> 123 Snaha, Qaladiza</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h4>فۆڵۆومان بکەن</h4>
          <div class="social-media">
            <div style="justify-items: start; margin-right: 30px; "><ul style="text-align: start; " ><a style="color: white;" href="https://www.facebook.com/100069983721783"><li>facebook</li></a>   <a style="color: white;" href="https://twitter.com/"><li>twitter</li></a> <a style="color: white;" href="https://www.instagram.com/hex_0r/"><li>instagram</li></a> <a style="color: white;" href="https://api.whatsapp.com/send/?phone=%2B9647501398505&text&type=phone_number&app_absent=0"><li>whatsapp</li></a></ul></div>
            <div  style="justify-content: left; display: block;"><ul ><i class="fa-brands fa-facebook fa-beat-fade"></i><br> <i class="fa-brands fa-twitter fa-beat-fade"></i> <br><i class="fa-brands fa-instagram fa-beat-fade"></i><br><i class="fa-brands fa-whatsapp fa-beat-fade"></i></ul></div>

           <!--             
            <ul class="social-list magic-list">
                <li>
                    <a href="" class="social-link magic-link" target="_blank">
                        <span>فەیسبووک</span>
                        <img src="facebookk.png" alt="Facebook" data-hover="facebookk.png">
                    </a>
                </li>
                <li>
                    <a href="" class="social-link magic-link" target="_blank">
                        <span>تویتەر</span>
                        <img src="twitter.png" alt="Twitter" data-hover="twitter.png">
                    </a>
                </li>
                <li>
                    <a href="" class="social-link magic-link" target="_blank">
                        <span>ئینستاگرام</span>
                        <img src="instagram.png" alt="Instagram" data-hover="instagram.png">
                    </a>
                </li>
                <li>
                    <a href="" class="social-link magic-link" target="_blank">
                        <span>واتساپ</span>
                        <img src="wh.png" alt="LinkedIn" data-hover="linkedin.png">
                    </a>
                </li>
            </ul> -->
        </div>
        
        
        </div>

      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h4>دەربارەی گەشەپێدەران</h4>
        <p style="text-align: center;
    direction: rtl;">.ئێمە تیمێکی گەشەپێدەرانی QPCI ین لە پەیمانگای قەڵادزێ بۆ زانستەکانی کۆمپیوتەر</p>
      </div>
    </div>
    <div class="footer-copyright ">
      &copy; 2023 QPCI-TEAM. All rights reserved.
    </div>
  </footer>




</body>

</html>