<?php
$fav_movies=[
["title"=>"dune","release year"=>2024,"genre"=>"sci-fi"],
["title"=>"greyman","release year"=>2021,"genre"=>"action"],
["title"=>"MenInBlack", "release year"=>1996,"genre"=>"action"],
];
foreach($fav_movies as $movie){
echo"title:".$movie["title"].",release year:".$movie["release year"].",genre:".$movie["genre"]."<br>";}

?>
