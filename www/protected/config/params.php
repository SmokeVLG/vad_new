<?php

// this contains the application parameters that can be maintained via GUI
return array(
	// this is displayed in the header section
	'title'=>'Мониторинг дорожных работ',
	// this is used in error pages
	'adminEmail'=>'webmaster@example.com', 
        // время суток для отчета мониторинга
        'monTime' => '17:00',
        //'deployment'=>TRUE,
        'deployment'=>FALSE,
        'monTimeStart' => '8:00',
        'monTimeFinish' => '17:00',
        'myDateRepFormat'=>'2008-08-14 00:00:00',
);
