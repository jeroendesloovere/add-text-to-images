<?php

// create object
$image = new AddTextToImage('example-image');

// add text
$image->addText('this text', 100, 500);

// parse image
$image->parse();
