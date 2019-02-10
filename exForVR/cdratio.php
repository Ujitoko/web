<?php
//id, name, setCount, filename, content(,,,)
// $file = $_GET["id"].$_GET["name"].$_GET["filename"];
// $file = $_GET["filename"];
chmod($file, 0755);
$file = $_GET["id"]."_".$_GET["setCount"]."_".$_GET["filename"];

// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
// $current .= $_GET["startTime"].",";
// $current .= $_GET["endTime"].",";
// $current .= $_GET["cd"].",";
// $current .= $_GET["stringc"].",";
// $current .= $_GET["stringv"].",";
// $current .= ",\n";
$tmp = $_GET["content"];

// $current = $tmp;
$array = explode("_", $tmp);
// $content = $array[0];
for ($i = 0; $i < count($array); $i++){
	if($i == count($array) - 1){
		$current .= $array[$i].",";
	}else{
		$current .= $array[$i].",\n";
	}
}




// 結果をファイルに書き出します
file_put_contents($file, $current);
chmod($file, 0755);
?>