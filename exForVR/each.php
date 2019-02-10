<?php
//id, name, setCount, filename, content(,,,)
// $file = $_GET["id"].$_GET["name"].$_GET["filename"];
// $file = $_GET["filename"];
chmod($file, 0755);
$file = $_GET["id"]."_".$_GET["setCount"]."_"."eachStep.csv";

// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します


// $current .= $_GET["stringc"].",";
// $current .= $_GET["stringv"].",\n";

$tmp = $_GET["content"];
$array = explode("_", $tmp);
for ($i = 0; $i < count($array); $i++){
	if($i == count($array) - 1){
		$current .= $_GET["id"]."_".$_GET["setCount"].",";
		$current .= $_GET["cd"].",";
		$current .= $array[$i].",\n";
	}else{
		$current .= $_GET["id"]."_".$_GET["setCount"].",";
		$current .= $_GET["cd"].",";
		$current .= $array[$i].",\n";
	}
}

// 結果をファイルに書き出します
file_put_contents($file, $current);
chmod($file, 0755);
?>