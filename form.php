<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>MusicStream - Create your Jam</title>
	<link rel="icon" href="headphones.png" type="image/png">
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root{
    --myfont: 'Mulish', sans-serif;
    --my-btn-font:'Trebuchet MS', sans-serif;
}
body{
    background-image: linear-gradient(#cc99ff,#99ccff);
    background-size: 100%;
    background-repeat: no-repeat;
    font-family: 'Trebuchet MS', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
	height: 100vh;
    width: 100vw;
}

.container{
    background-color: #fff;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034), 0 6.7px 5.3px rgba(0, 0, 0, 0.048);
    overflow: hidden;
    width: calc(100vw- 65vw);
    max-width: 100%;
	width:600px;
}
.page-header{
    background: linear-gradient(#b366ff, #66b3ff);
    padding: 40px 0;
}
.page-header h1{
    color: white;
    font-family: 'Trebuchet MS', sans-serif;
    font-size: 30px;
    text-decoration: uppercase;
    text-align: center;
}
.form-group{
	margin: 20px 40px ;
}
.form .btn {
	background: linear-gradient(#b366ff, #66b3ff);
    border-radius: 6px;
    border: none;
    outline: none;
    color:#fff;
    display: block;
    font-family: 'Trebuchet MS', sans-serif;
    font-size: 20px;
    padding: 15px 0;
    margin: 30px 30px;
    width: 90%;
    font-weight: bold;
    text-transform: uppercase;
    transition: all 1s ease;
}
.custom-select {
  position: relative;
  font-family: 'Trebuchet MS', sans-serif;
  margin: 20px 50px;
  font-size:17px;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: #e6e6ff;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: purple transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: black;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: #d9d9d9;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: #e6e6ff;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
</head>
<body>
<div class="container">
<form method="post" class= "form" action="jam.php" >

<div class="page-header"><h1>Create your Jam!</h1></div>
<div class="custom-select" style="width:500px;">
<p>Select Artist</p><br>
<select id="artist" name="artist">
<option value="0">Select</option>
<option value="1">Arijit Singh</option>
<option value="2">Sunidhi Chauhan</option>
<option value="3">KK</option>
<option value="4">Atif Aslam</option></select>
</div>
<div class="custom-select" style="width:500px;">
<p>Select Genre</p><br>
<select id="genre" name="genre">
<option value="0">Select</option>
<option value="1">Hip-Hop</option>
<option value="2">Heavy Metal</option>
<option value="3">Blues</option>
<option value="4">Folk songs</option></select>
</div>
<div class="custom-select" style="width:500px;">
<p>Select Language</p><br>
<select id="genre" name="genre">
<option value="0">Select</option>
<option value="1">English</option>
<option value="2">Hindi</option>
<option value="3">Bengali</option>
<option value="4">Punjabi</option></select>
</div>
<button type="submit" name="submit" class="btn">Hit me up</button>
</div>
</form>
<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
</body>
</html>