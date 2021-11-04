<?php

session_start();

$css = 'css/world.css';
$js = 'js/world.js';
$title = '世界制覇計画';
$content = '国検索';
$first_img = "img/world_all.jpg";

$countries =[" ","タイ王国","アメリカ"];


// 共通部分取得
$co_html = file_get_contents('home.html');
    // header部　＝$co_html_top[0]
    $co_html_top = explode('$$$common$$$',$co_html);
    //　fotter部　＝$co_html_bottom[1]
    $co_html_bottom = explode('$$$/common$$$',$co_html_top[1]); 

// loop箇所を取得
$html_body = file_get_contents('japan_world.html');

    $html_loop_start = explode('###loop###',$html_body);
    $html_loop_end = explode('###/loop###',$html_loop_start[1]);

    $html_loop_temp ='';
    $value = 0;

    foreach($countries as $country){

      $html_loop = $html_loop_end[0];
          
      $html_loop = str_replace( '###select###', htmlspecialchars( $country ), $html_loop );
      $html_loop = str_replace( '###number###', htmlspecialchars( $value ), $html_loop );
      
      // 毎回付け加える
      $html_loop_temp = $html_loop_temp . $html_loop;

      $value++;

    }

    

// 作った真ん中の部分と、前後を貼り合わせる
$html = $co_html_top[0] .$html_loop_start[0]. $html_loop_temp . $html_loop_end[1] .$co_html_bottom[1];

// 置き換え
$html = str_replace( '$$$css$$$', htmlspecialchars( $css ), $html );
$html = str_replace( '###js###', htmlspecialchars( $js ), $html );
$html = str_replace( '###title###', htmlspecialchars( $title ), $html );
$html = str_replace( '###content###', htmlspecialchars( $content ), $html );
$html = str_replace( '###firstimg###', htmlspecialchars( $first_img ), $html );

print($html);