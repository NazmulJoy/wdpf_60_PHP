<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $countries = ["United Kingdom"=>"London",
        "Sri lanka"=>"Colombo",
        "Japan"=>"Tokyo",
        "Bangladesh"=>"Dhaka",
        "China"=>"Beijing",
        ];
        echo "<pre>";
        print_r($countries);
        ksort($countries);
        foreach($countries as $country=>$capital){
            echo "$country:$capital <br>";
        }
    
    
    ?>
</body>
</html>