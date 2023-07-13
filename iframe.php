<?php

// Get iframe.
$output = file_get_contents('https://flackglobalmetals.hrmdirect.com/employment/job-openings.php?search=true&;nohd=&dept=-1&city=-1&state=-1');

// Inject styles sheet.
$output = str_replace('</head>','<link rel="stylesheet" href="styles.css"></head>', $output);

// echo.
echo $output;
