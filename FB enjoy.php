<? php
function  curl ( $ url ) {
    $ curl  =  curl_init ( $ url );
    curl_setopt ( $ curl , CURLOPT_RETURNTRANSFER , 1 );
    curl_setopt ( $ curl , CURLOPT_USERAGENT , " Mozilla / 5.0 (Macintosh; U; Intel Mac OS X 10_6_5; en-US) AppleWebKit / 534.13 (KHTML, seperti Gecko) Chrome / 9.0.597.15 Safari / 534.13 " );
    curl_setopt ( $ curl , CURLOPT_FOLLOWLOCATION , true );
    $ content  =  curl_exec ( $ curl );
    curl_close ( $ curl );
    mengembalikan  $ konten ;
}
sistem ( " jelas " );
echo  "                                                                                                    
 _____ _____ _____ _____ ____ _____ _____ ____ _____ _ _ _ __
| __ | __ |
| __ | __ - 
| __ | | _|  
,--/.__/--'
                       _.-/   _   \-._                    .'|
                     .'::(_,-' `-._)::`.                  |:|
                    (:::::::::::::::::::)                .':|
                     \_:::;;;::::;;;:::/    /            |::|
             \        ,---'..\::/..`-.'    /             |::|
              \       \_;:....|'...:_ )   /             .'=||
               \.       )---. )_.--< (   /'             ||=||
                \\     //|:: /--\:::\\\ //             _||= |
                 \\   ||::\:|----|:/:||/--.______,--==' \ - /
          -._     \`.  \\:|:|-- -|:\:/-.,,\\  .----'//'_.`-'
      \.     `-.   \ \ _|:|:|-- -|::||::\,,||-'////---' |/'
       \\       `._)\ / |\/:|-/|--\:/|. :\_,'---'       /
        \\_      /,,\/:.'\\/-.'`-.-//  \ |
        /`\-    //,,,' |-.\-'\--/|-/ ./| |             /
         /||-   ||, /| |\. |.-==-.| . /| |            | /
 __  |    /||-  ||,,\- | .  \;;;;/ .  .':/         _,-=/-'
/  \//    /||-  ' `,-|::\ . \,..,/   /: /         /.-'
,--||      /||-/.-.'  \  `._ `--' _.' .'|        //
.--||`.    /||//\ '   |-'.___`___' _,'|//       /;
  /\| \     ///\ /     \\_`-.`--`-'_==|'       /;'
 / |'\ \.   //\ /       \_\__)\`==-_'_|       / /
  .'  \.=`./|\ /          \`-- \--._/_/------( /
       \.=| `_/|-          |\`-| -/| `--------'
        \\` ./|-/-         |\`-| |-|     ________
         `--\ |=|'        _|\`-| |-|----'.-._ ..\`-





                                                VERSI 1.0.0
                                             DIBUAT OLEH WongNdeso@2018
                                                                                                             
" ;
echo  " \ n \ n " ;
echo  " [#] Masukkan URL Video (https://www.facebook.com/user/video/id): " ;
$ v  =  trim ( fgets ( STDIN , 1024 ));
echo  " \ n \ n [#] Masukkan Nama Video Untuk Menyimpan Sebagai: " ;
$ name  =  trim ( fgets ( STDIN , 1024 ));
$ url  =  str_replace ( ' www ' , ' mbasic ' , $ v );
$ s  = curl ( $ url );
// echo $ s;
$ vurl  =  preg_match ( '/ <a href = \ "\ / video_redirect \ / \? src \ = (. * ?) \" / ims' , $ s , $ pertandingan )? $ matches [ 1 ]: null ;
$ vu  =  urldecode ( $ vurl );
echo  " \ n \ n [+] Mengunduh ... \ n \ n \ n " ;
$ d  =  ' wget -O " '  .  $ nama  .  ' .mp4" --user-agent = "Mozilla / 5.0 (Windows NT 6.1; WOW64) AppleWebKit / 536.6 (KHTML, seperti Gecko) Chrome / 20.0.1092.0 Safari / 536.6 "" '  .  $ Vu  .  ' "-q --show-progress ' ;
sistem ( $ d );
echo  " \ n \ n [+] Selesai .. Disimpan Sebagai: "  .  $ name  .  " .mp4 \ n \ n " ;
keluar ( 0 );
? >
