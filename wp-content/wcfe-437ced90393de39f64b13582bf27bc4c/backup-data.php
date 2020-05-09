<?php

# No direct access
$secureSrcClassName  = 'WCFE\Modules\Editor\Model\EmergencyRestore';
( class_exists( $secureSrcClassName ) && ( get_class( $this ) == $secureSrcClassName ) ) or die( 'Access Denied' );

$data = array();

$data[ 'secureKey' ] 	= 'b883c65fd6c1ea1a3470c04e62bbe1f5';
$data[ 'backupFileHash' ] 	= 'f4108b0ac55b41d93ebb5d5896337147';

$data[ 'absPath' ] 	= '/opt/bitnami/apps/wordpress/htdocs';
$data[ 'contentDir' ] 	= '/opt/bitnami/apps/wordpress/htdocs/wp-content/wcfe-437ced90393de39f64b13582bf27bc4c';

$data[ 'timeCreated' ] 	= 1585281987;

$data[ 'privateKey' ] = 'Qw0k4O,T3thTsa_ftn<L:f}^ig|iBnB?h=QsnDCgjm|%l}Oio>F;/SsUCu<^8{z.3(=s%Cw!Z_9Td*ZPyiL0+a%{)k2aGnMXCZ&;[5?ugHw-Lhv*`YFyMw,{#B%z6(Rf],F9cLz747f9rmB$GN-cuh]dbx|IPb9&xw7&YYbcLlB4.l&`/>`ZS8.<iw47ci?DL9Izm*/KRrxGxzdh~Vw0Hk0v[d^|!>DGV Z![M5U+=DJPMg0vTgFf`b92J,i`E^A`jr]W^k7pFXfOJ/(K1v %AO=?Iax>!q.ZMl!Psz<?_XVnQaTU[(D!1JYNbo9Jw)Yo~wCM=W$X8#YokVNUub9W=6bnQ=7.wD1rAk0-!`&M=})Ee+= `P(gx&o/skA]:3h7pa>zR0VjfSh:2j%_QCT<Q?A&P2Cg]RrU|(D-0Ziy2e}Y=Po2L$ip/! di0k^7~GxvJ-x{dbaw!1:iIJoA7Z8^k) ]OGPwJ~ZF%|jSa=<_ZD=MgRVxx)8S{Ys0/`*UCL';

return $data;