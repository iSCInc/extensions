// VC.php

$wgAutoloadClasses['VCHooks'] = __DIR__ . '/VCHooks.php';
$wgHooks['GetBetaFeaturePreferences'][] = 'VCHooks::getPreferences';
