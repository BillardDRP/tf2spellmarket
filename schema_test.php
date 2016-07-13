$appid = "440";
$apikey = "ecks dee";
$schema = "http://api.steampowered.com/IEconItems_$appid/GetSchema/v0001/?key=$apikey";
$json = jsondecode(filegetcontents($schema), true);
echo $json["result"]["qualities"][0];
