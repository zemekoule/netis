<?php

/**
 * Netis, Little CMS
 * Copyright (c) 2015, Zdeněk Papučík
 */
namespace Install\Service;
use Drago\Caching\Caches;

/**
 * Saving installation steps into cache.
 */
class Steps extends Caches
{
	const
		START  = 'Start',
		STEP_1 = 'Step 1',
		STEP_2 = 'Step 2',
		STEP_3 = 'Step 3',
		STEP_4 = 'Step 4';
}
