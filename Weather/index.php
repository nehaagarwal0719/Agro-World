<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Weather
    </title>

    <link rel="stylesheet" type="text/css" href="../Assets/css/style.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    .box {
        /*  margin: 2vh 3vw;*/
        width: 250px;
        height: 250px;
    }

    <?php
    /*$api_url='https://api.darksky.net/forecast/e1faeca74abbf5d10832e4fa804bff35/37';

$forecast=$json_decode(file_get_contents($api_url));
echo "neha";
echo '<pre>';
print_r($forecast);
echo '</pre>';*/

    $coordinates="30.3165,78.0322";
    $json_url="https://api.darksky.net/forecast/e1faeca74abbf5d10832e4fa804bff35/".$coordinates;
    $json=file_get_contents($json_url);
    /*$json=str_replace('},

]',"}

]",$json);*/

    $data1=json_decode($json);
    /*echo "<pre>";
print_r($data1);
echo "</pre>";*/

    //current conditions
    $temperature_current=$data1->currently->temperature;
    $temperature_current_c=round(($temperature_current - 32)*.5556);
    $summary_current=$data1->currently->summary;
    $windspeed_current=round($data1->currently->windSpeed);
    $humidity_current=$data1->currently->humidity*100;
    //set timezone
    date_default_timezone_set($data1->timezone);
    ?>


    body {
        background-image: url("../Assets/images/16.png");
    }

    .well {
        margin-left: 3vw;
        width: 30vw;
        height: auto;
        text-align: center;
        font-weight: 1000;
        border: bold 2px;
        text-decoration: none;
        border-radius: 20px;
        margin-bottom: 5vh;

    }

    .well:hover {
        margin-left: 3vw;
        width: 30vw;
        height: auto;
        text-align: center;
        box-shadow: 1px 4px 0px 2px ;

        font-weight: 1000;
        border: bold 5px;
        text-decoration: none;
        border-radius: 10px;
    }


      .select_platform_space {
	border:2px solid white;
	margin-top:5em;
	padding: 2em 4em;
          margin-bottom: 5em;
   	text-align:center;
          align-self: center;
	color:white;
          width:60vw;
          margin-left: 18em;
          margin-right: 18em;
	border-radius: 20px;
    font-weight:1000;

}

</style>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                 <li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="SignUp/index.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="../SignIn/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="../SignOut/index.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
                <li><a href=" ../ContactUs/index.php "><span class="glyphicon glyphicon-earphone"></span>Contact Us</a></li>
                <li><?php include "../gt.php";?></li>
            </ul>
        </div>
    </nav>

    <div class="select_platform_space">
        Temperature :
        <?php echo $temperature_current_c;?>&deg;C<br> Humidity :
        <?php echo $humidity_current;?>%<br>
        <?php echo $summary_current;?><br> Wind Speed :
        <?php echo $windspeed_current;?><abbr title="miles per hour">MPH</abbr>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
		          $i=0;
		          foreach($data1->daily->data as $day):
		?>


                    <div class="well">
                        <?php
                                        $t=$day->temperatureHigh;
                                        $temp=($t-32)*.556;
                                        ?>
                            <b> <?php echo date("l",$day->time);?></b><br>
                            <b>Temperature : <?php echo round($temp);?>&deg;C<br></b>
                            <b> Humidity : <?php echo round($day->humidity*100);?>%<br></b>
                    </div>


                    <?php
	  $i++;
	  if($i==24) break;
	   endforeach;
	  ?>
            </div>
            <div class="col-md-6">
                <?php
		          $i=0;
		          foreach($data1->hourly->data as $hour):
		?>


                    <div class="well">
                        <?php
                                        $t=$hour->temperature;
                                        $temp=($t-32)*.556;
                                        ?>
                            <b> Time : <?php echo date("g:i a",$hour->time);?></b><br>
                            <b>Temperature : <?php echo round($temp);?>&deg;C<br></b>
                            <b> Humidity : <?php echo round($hour->humidity*100);?>%<br></b>
                    </div>

                    <?php
	  $i++;
	  if($i==24) break;
	   endforeach;
	  ?>
            </div>
        </div>
    </div>
</body>

</html>
