<?php

use Timber\Timber;

$context = Timber::context();

Timber::render('templates/single-interview.twig', $context);
