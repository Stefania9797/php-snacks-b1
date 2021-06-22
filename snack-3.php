<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Learn HTML',
            'author' => 'Michele Papagni',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum reprehenderit cupiditate sunt, qui rerum unde corrupti nam consequuntur a tenetur molestias odit at, voluptatem velit totam. Modi facere esse repellat.'
        ],
        [
            'title' => 'Learn CSS',
            'author' => 'Michele Papagni',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum reprehenderit cupiditate sunt, qui rerum unde corrupti nam consequuntur a tenetur molestias odit at, voluptatem velit totam. Modi facere esse repellat.'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Learn PHP',
            'author' => 'Michele Papagni',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum reprehenderit cupiditate sunt, qui rerum unde corrupti nam consequuntur a tenetur molestias odit at, voluptatem velit totam. Modi facere esse repellat.'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Learn JS',
            'author' => 'Michele Papagni',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum reprehenderit cupiditate sunt, qui rerum unde corrupti nam consequuntur a tenetur molestias odit at, voluptatem velit totam. Modi facere esse repellat.'
        ],
        [
            'title' => 'Learn Vue',
            'author' => 'Michele Papagni',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum reprehenderit cupiditate sunt, qui rerum unde corrupti nam consequuntur a tenetur molestias odit at, voluptatem velit totam. Modi facere esse repellat.'
        ],
        [
            'title' => 'Learn php',
            'author' => 'Michele Papagni',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum reprehenderit cupiditate sunt, qui rerum unde corrupti nam consequuntur a tenetur molestias odit at, voluptatem velit totam. Modi facere esse repellat.'
        ]
    ],
];
foreach ($posts as $data => $info) { ?>
    <p><strong><?= $data ?></strong></p>
    <?php
    for ($i=0; $i < count($info) ; $i++) { ?>
    <div style="margin-bottom:30px">
      <h2><?= $info[$i]["title"] ?></h2>
      <h4><?= $info[$i]["author"] ?></h4>
      <p><?= $info[$i]["text"] ?></p>
    </div>
    <?php  } ?>
<?php  } ?>