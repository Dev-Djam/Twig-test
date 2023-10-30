<?php

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];
echo $twig->render('products.html.twig', ['bass' => $products]);