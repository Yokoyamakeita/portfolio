<?php

session_start();

$css = 'css/licence.css';

// データの格納　後日データベースに格納
$licence = [
    [ 'img' => 'img/danger.jpg',
      'name' => '危険物<乙4>',
      'url' => 'https://www.shoubo-shiken.or.jp/kikenbutsu/',
      'data' => '平成30年10月1日'],
    [ 'img' => 'img/english.jpg',
      'name' => '英検準2級',
      'url' => 'https://www.eiken.or.jp/eiken/',
      'data' => '平成31年1月26日'],
    [ 'img' => 'img/ai.png',
      'name' => 'AI-900: Microsoft Azure AI Fundamentals',
      'url' => 'https://docs.microsoft.com/ja-jp/learn/',
      'data' => '令和3年6月27日'],
    [ 'img' => 'img/dp.png',
      'name' => 'DP-900: Microsoft Azure DATA Fundamentals',
      'url' => 'https://docs.microsoft.com/ja-jp/learn/',
      'data' => '令和3年10月1日'],
    [ 'img' => 'img/pl.png',
      'name' => 'PL-900: Microsoft Azure POWER PLATFORM Fundamentals',
      'url' => 'https://docs.microsoft.com/ja-jp/learn/',
      'data' => '令和3年10月15日'],
    [ 'img' => 'img/az.png',
      'name' => 'AZ-900: Microsoft Azure Fundamentals',
      'url' => 'https://docs.microsoft.com/ja-jp/learn/',
      'data' => '令和3年10月29日']
];

// 共通部分取得
$co_html = file_get_contents('home.html');
    // header部　＝$co_html_top[0]
    $co_html_top = explode('$$$common$$$',$co_html);
    //　fotter部　＝$co_html_bottom[1]
    $co_html_bottom = explode('$$$/common$$$',$co_html_top[1]); 


// body部のHTMLを取得
$html_body = file_get_contents('licence.html');

    $html_loop_start = explode('###loop###',$html_body);
    $html_loop_end = explode('###/loop###',$html_loop_start[1]);

    $html_loop_temp ='';
    
foreach($licence as $licences){

    $html_loop = $html_loop_end[0];
        
    $html_loop = str_replace( '###img###', htmlspecialchars( $licences['img'] ), $html_loop );
    $html_loop = str_replace( '###name###', htmlspecialchars( $licences['name'] ), $html_loop );
    $html_loop = str_replace( '###url###', htmlspecialchars( $licences['url'] ), $html_loop );
    $html_loop = str_replace( '###data###', htmlspecialchars( $licences['data'] ), $html_loop );

    $html_loop_temp = $html_loop_temp . $html_loop;

}
// 作った真ん中の部分と、前後を貼り合わせる
$html = $co_html_top[0] .$html_loop_start[0]. $html_loop_temp .$co_html_bottom[1];

// 置き換え
$html = str_replace( '$$$css$$$', htmlspecialchars( $css ), $html );


print($html);