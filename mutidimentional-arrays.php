<?php 

$blogs = [

	['title' => 'Mario Party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30 ],
	['title'=> 'Mario kart cheats'  , 'author'=> 'goku'   , 'content' => 'lorem', 'likes'=> 50 ],
	['title'=>  'lances death'  , 'author'=> 'tommy'   , 'content' => 'lorem', 'likes'=>  100 ]
];

print_r($blogs[2]['author']);


$blogs[] = ['title'=>  'key and Lock'  , 'author'=> 'muzan'   , 'content' => 'lorem', 'likes'=>  150 ];



$popped = array_pop($blogs);


print_r($popped);


print_r($blogs);
 ?>