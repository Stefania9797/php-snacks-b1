<?php 
//Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
$paragraph="Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Quae asperiores eius saepe fugit iste obcaecati? Necessitatibus pariatur hic repellat nulla facere dolor voluptates, ullam officia ipsa.
Officiis fugit quaerat maxime quod adipisci.
similique incidunt eius numquam recusandae omnis, qui impedit quisquam a sapiente. 
Deleniti est quaerat odio repellendus sit. 
quae quidem laudantium molestias aliquam hic perferendis at ut dolorem provident rerum reiciendis.
earum et delectus ullam doloremque nisi officia tenetur!";
//Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
echo "<pre>";
 var_dump((explode(".",$paragraph)));
 echo "</pre>";
?>