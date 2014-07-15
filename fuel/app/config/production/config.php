<?php

return array(
	'errors' => [
		'continue_on' => [E_NOTICE, E_WARNING, E_DEPRECATED, E_STRICT],
		'notices' => false,
	],

	'caching' => false, // Explicitly false! We shouldn't use this as it doesn't quite work right

	'log_threshold'    => Fuel::L_ERROR,
);
