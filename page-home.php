<?php

use Timber\Timber;

$context = Timber::context();

Timber::render('templates/page-home.twig', $context);
