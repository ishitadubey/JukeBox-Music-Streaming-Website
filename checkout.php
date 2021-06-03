<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.angularjs.org/1.4.0-rc.1/angular.js"></script>
    <script src="app.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


body{
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  } 
}
</style>
</head>
<body ng-app="validationApp" ng-controller="mainController">


<div class="row"  style="padding:100px 300px;">
  <div class="col-50">
    <div class="container" >
      <form name="co"  class="form" ng-submit="submitForm(co.$valid)" novalidate action="payscript.php" method="post" style="padding: 25px;">
      
        <div class="row" >
          <div class="col-25">
            <h3 style="text-align: center;margin:20px 10px;font-family: lato;">Checkout Form</h3>
          
            <div class="form-group" ng-class="{ 'has-error' : 
             co.name.$invalid && !co.name.$pristine }">
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" class="form-control" ng-model="name" 
                   ng-minlength="3" ng-maxlength="14" required placeholder="John M. Doe">
                   <p ng-show="co.name.$dirty && co.name.$error.required" 
               class="help-block">Name is required</p>
            <p ng-show="lco.name.$error.minlength" class="help-block">
               Name is too short.
            </p>
            <p ng-show="co.name.$error.maxlength" class="help-block">
              Name is too long.
            </p>
        </div>
        <div class="form-group" ng-class="{ 'has-error' : 
             co.userName.$invalid && !co.userName.$pristine }">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" class="form-control" ng-model="email">
            <p 
          ng-show="co.email.$invalid && !co.email.$pristine" 
            class="help-block">
              Enter a valid email.
            </p>
        </div>
            <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
            <input type="hidden" value="<?php echo 150;?>" name="amount">
            <div class="form-group" ng-class="{ 'has-error' : 
             co.mobile.$invalid && !co.mobile.$pristine }">
            <label for="phone"><i class="fa fa-mobile"></i> Mobile</label>
            <input type="number" id="phone" name="mobile" placeholder="Mobile Number" class="form-control" ng-model="phone" ng-minlength="10" 
             ng-maxlength="10">
             <p ng-show="co.phone.$error.number && co.phone.$error.required" 
               class="help-block">Address is required</p>
            <p ng-show="((co.phone.$error.minlength || co.phone.$error.maxlength)&& co.ohone.$dirty)" class="help-block">
               Phone should be of 10 digits
            </p>
            <div class="form-group" ng-class="{ 'has-error' : 
             co.address.$invalid && !co.adress.$pristine }">  
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" class="form-control" ng-model="address" 
                   ng-minlength="10" ng-maxlength="40" required>
                   <p ng-show="co.address.$dirty && co.address.$error.required" 
               class="help-block">Address is required/p>
            <p ng-show="co.adress.$error.minlength" class="help-block">
               Address is too short.
            </p>
            <p ng-show="co.address.$error.maxlength" class="help-block">
              Address is too long.
            </p>         


          
        </div>
       
        <button type="submit"  value="Pay Now" class="btn" ng-disabled="co.$invalid">
          Pay Now
        </button>
      </form>
    </div>
  </div>
 
</div>
<script>
    // create angular app
var validationApp = angular.module('validationApp', []);

// create angular controller
validationApp.controller('mainController', function($scope) {

    // function to submit the form after all validation has occurred            
    $scope.submitForm = function(isValid) {

        // check to make sure the form is completely valid
        if (isValid) { 
            alert('Login Form is valid');
        }
    };
});
    </script>
</body>
</html>
