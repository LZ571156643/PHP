<?php
/**
 * Created by PhpStorm.
 * User: DEREK NG
 * Date: 2018/11/12
 * Time: 22:33
 */
function elegance() {
    $r=5;//r代表半径大小
    $i=1;//i代表其中一个点的大小
    $c=$r;//c代表另一个点的大小
    $num=0;//num表示点的数量的多少
    for($i=1;$i<$c;$i++){
        $a=sqrt($c*$c-$i*$i);
        if($i>=$a)
            break;
        if($a*$a+$i*$i==$c*$c){
            $num=$num+1;
        }
    }
    $num=$num*4+4;
    echo"$num";
}
elegance();
	?>
