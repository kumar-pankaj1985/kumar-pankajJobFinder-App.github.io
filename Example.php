<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <div ng-app="main" ng-controller="DemoCtrl" >
  <daypilot-scheduler id="scheduler" daypilot-config="schedulerConfig" daypilot-events="events" ></daypilot-scheduler>
</div>

<script type="text/javascript">
  var app = angular.module('main', ['daypilot']).controller('DemoCtrl', function($scope, $timeout, $http) {
    $scope.schedulerConfig = {
      scale: "Day",
      days: new DayPilot.Date().daysInMonth(),
      startDate: new DayPilot.Date().firstDayOfMonth(),
      timeHeaders: [
          { groupBy: "Month" },
          { groupBy: "Day", format: "d" }
      ]
    };
  });
</script>


</head>

<body>


    <!-- Start your project here-->

   <!--  <div style="height: 100vh">
       <div class="flex-center">
           <h1 class="animated fadeIn">Material Design for Bootstrap</h1>
       </div>
   </div> -->

    <!-- /Start your project here-->


    <!-- SCRIPTS -->

    <!-- JQuery -->

    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script src="js/angular.min.js"></script>
<script src="js/daypilot/daypilot-all.min.js"></script>

      <!-- start your project here -->
      	


</body>
</html>