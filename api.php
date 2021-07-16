<?php
	class Article{}
	$obj1 = new Article;
	$obj1->id = 1; 
	$obj1->title = "Article Title 1"; 
	$obj1->description = "Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.";
	$obj2 = new Article;
	$obj2->id = 2; 
	$obj2->title = "Article Title 2"; 
	$obj2->description = "Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.";
	$obj3 = new Article;
	$obj3->id = 3; 
	$obj3->title = "Article Title 3"; 
	$obj3->description = "Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.";
	$arr = [$obj1, $obj2, $obj3];
	echo json_encode($arr);
	// echo file_get_contents('https://jsonplaceholder.typicode.com/users')
?>