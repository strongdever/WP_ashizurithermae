<?php
if( !defined('ABSPATH') ) exit;

//first����
	$prm= get_option(zipaddr_DEFINE);             // �V�X�e���ŗL���̎擾
	if( !$prm ){                                  // first�������i�ŏ���1��݂̂̏����j
		if( file_exists(zipaddr_FILE1) ){         // ����`���
			$array= array();
			$flds= zipaddrjp_fld();               // �p�����[�^�ꗗ
			foreach($flds as $i => $key) {$keys=zipaddr_SYS.$key; $array[$keys]="";} // clear

			$data= @file_get_contents(zipaddr_FILE1);
			$data= trim($data);
			$prms= explode(",", $data);
			foreach($prms as $i => $data){
				     if( empty($data) && $flds[$i]=='site' ) $data= "4";
				else if( empty($data) && $flds[$i]=='keta' ) $data= "7";
//				else if( empty($data) && $flds[$i]=='deli' ) $data= "-";
				$keys= zipaddr_SYS.$flds[$i];     // sys_keta
				$array[$keys]= htmlspecialchars($data,ENT_QUOTES,'UTF-8');
			}                                     // default�ݒ�
			$param= serialize($array);
			update_option(zipaddr_DEFINE,$param); // �V�K�ɒǉ�����
		}
		else
		if( file_exists(zipaddr_FILE2) ){         // �V��`���
			$array= array();
			$data= @file_get_contents(zipaddr_FILE2);
			$res= str_replace("if( !defined('ABSPATH') ) exit;","", $data);
			$res= str_replace("<?php","", $res);
			$res= str_replace("?>",   "", $res);
			$line= explode('";', $res);
			foreach($line as $i => $dat){
				$dat= trim($dat);
				$da= explode("=", $dat);          // $sys_keta= "7
				if( count($da) == 2 && substr($dat,0,1)=="$" ){
					$d1= trim($da[0]);
					$d2= trim($da[1]);
					if( strlen($d1)>=2 ){
						$d0= substr($d1,1);       // sys_keta
						$d2= trim($d2,'"');       // 7
						$array[$d0]= htmlspecialchars($d2,ENT_QUOTES,'UTF-8');
			}	}	}
			$param= serialize($array);
			update_option(zipaddr_DEFINE,$param); // �V�K�ɒǉ�����
		}
	}

function zipaddrjp_fld(){
	return array("site", "keta", "tate", "yoko", "pfon", "sfon", "focs", "syid", "deli",
		"parm", "plce", "drct", "dyna", "gide");
}
function zipaddrjp_str($leng=16){
	$ans= null;
	$str= array_merge( range('a','z'),range('0','9'),range('A','Z') );
	for( $i=0;$i<$leng;$i++ ) {$ans.= $str[rand(0,count($str)-1)];}
	return $ans;
}
function zipaddr_e($da){echo esc_html($da);}
?>
