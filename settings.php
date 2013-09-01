<?php

$settings->add(new admin_setting_heading( 'headerconfig',
            get_string('headerconfig', 'block_slideshow'),
            get_string('descconfig', 'block_slideshow')
        ));
$settings->add(new admin_setting_configselect( 'slideshow/Max_Slides',
            get_string('labelmaxslides', 'block_slideshow'),
            get_string('descmaxslides', 'block_slideshow'),
            '5',
            array(1=>'1',2=>'2',3=>'3',4=>'4',5=>'5',6=>'6',7=>'7',8=>'8',9=>'9',10=>'10',11=>'11',12=>'12',13=>'13',14=>'14',15=>'15')
		));
$settings->add(new admin_setting_configselect( 'slideshow/Max_Size',
            get_string('labelmaxsize', 'block_slideshow'),
            get_string('descmaxsize', 'block_slideshow'),
            '1048576',
            array(32768=>'32 KB', 65536=>'64 KB', 131072=>'128 KB', 262144=>'256 KB', 524288=>'512 KB', 1048576=>'1 MB', 2097152=>'2 MB', 4194304=>'4 MB', 8388608=>'8 MB', 16777216=>'16 MB', 33554432=>'32 MB')
		));
