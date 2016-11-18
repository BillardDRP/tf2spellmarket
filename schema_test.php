$appid = "440";
$apikey = "kills your slef deigo enan";
$schema = "http://api.steampowered.com/IEconItems_$appid/GetSchema/v0001/?key=$apikey";
$json = jsondecode(filegetcontents($schema), true);
echo $json["result"]["qualities"][0];
