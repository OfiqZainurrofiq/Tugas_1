<?php

function tampil(){
$data=1;
	if($data==1){
		echo "Data Benar";
	}else{
	tampil();
	}
}
tampil();
?>