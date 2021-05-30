<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
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
    min-height: 97.6vh;
    width: 96vw;
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

</body>
</html>