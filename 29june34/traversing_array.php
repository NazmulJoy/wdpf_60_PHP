<?php
    $countries = array("Bangladesh"=>"Dhaka",
                "Sri Lanka"=>"Colombo",
                "Uganda"=> "Kampala",
                "Nepal"=>"Kathmandu" );
                while($country = key($countries)){
                    echo $country."<br>";
                    next($countries);
                }


?>