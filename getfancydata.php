<?php
$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);

if($data['id'] == 1){
	$omotesandoFancy = array(
		array(
			"file_link1"=> 'images/project-d-1-1.jpg',
			"d_title"=> '外牆透氣工法-空拍遠實景',
			"d_content"=> 'Vented Airspace-Aerial shot of distant view'
		),
		array(
			"file_link1"=> 'images/project-d-1-2.jpg',
			"d_title"=> '外牆透氣工法-俯視空拍',
			"d_content"=> 'Vented Airspace-Aerial shot from above'
		),
		array(
			"file_link1"=> 'images/project-d-1-3.jpg',
			"d_title"=> '外牆透氣工法-特寫',
			"d_content"=> 'Vented Airspace-close up'
		)
	);
}else{
	$omotesandoFancy = array(
		array(
			"file_link1"=> 'images/project-d-1-1.jpg',
			"d_title"=> '外牆透氣工法-空拍遠實景',
			"d_content"=> 'Vented Airspace-Aerial shot of distant view'
		),
		array(
			"file_link1"=> 'images/project-d-1-2.jpg',
			"d_title"=> '外牆透氣工法-俯視空拍',
			"d_content"=> 'Vented Airspace-Aerial shot from above'
		),
		array(
			"file_link1"=> 'images/project-d-1-3.jpg',
			"d_title"=> '外牆透氣工法-特寫',
			"d_content"=> 'Vented Airspace-close up'
		),
		array(
			"file_link1"=> 'images/project-d-1-1.jpg',
			"d_title"=> '外牆透氣工法-特寫',
			"d_content"=> 'Vented Airspace-close up'
		)
	);
}



echo json_encode([
	'sliders' => $omotesandoFancy,
]);