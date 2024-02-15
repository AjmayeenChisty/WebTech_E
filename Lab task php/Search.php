<?PHP
$std = ["id"=>1,"name"=>"Ajmayeen","email"=>"Ajmayeen@gamil.com"];
$elementToSearch = "Ajmayeen@gamil.com";

$found = false;

foreach ($std as $S){
    if($s == $elementToSearch){
        $found=true;
        break;
    }
}

if ($found){
    echo "true";

}else{
    echo "false";
}

?>