<?php
header('Content-Type: text/css; charset=utf-8');

//   Copyright 2019 NEC Corporation
//
//   Licensed under the Apache License, Version 2.0 (the "License");
//   you may not use this file except in compliance with the License.
//   You may obtain a copy of the License at
//
//       http://www.apache.org/licenses/LICENSE-2.0
//
//   Unless required by applicable law or agreed to in writing, software
//   distributed under the License is distributed on an "AS IS" BASIS,
//   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
//   See the License for the specific language governing permissions and
//   limitations under the License.
//

function itaThemeSelect() {

$theme = $_GET['theme'];




// Theme color set
// MENU [0]:HEADER [1]:LIST [2]:SELECT TEXT
// TABLE [0]:TH [1]:TH BORDER [2]:TD [3]:TD BORDER [4]:HOVER
// TABLE_F [0]:TH [1]:TH BORDER [2]:TD [3]:TD BORDER
// BUTTON [0]:LINK [1]:HOVER
// HEADING [0]:BACK [1]:BORDER [2]:TEXT
$c = array(
  'BODY' => '333333',
  'HEADER' => '002B62',
  'FOOTER' => '444444',
  'MENU' => array('333333','666666','002B62'),
  'TEXT' => array('1A1A1A','F2F2F2'),
  'TABLE' => array('888888','666666','F2F2F2','CCCCCC','FFFF8F'),
  'TABLE_F' => array('777777','555555','E2E2E2','AAAAAA'),
  'BUTTON' => array('FF821E','FF640A'),
  'KIZI' => 'FFFFFF',
  'HEADING' => array('335581','FFA032','FFFFFF'),
  'BASE' => 'E6E6E6',
  'REVERSE' => array('000000','FFFFFF'),
  'DARKMODE' => 'OFF'
);

// Theme Heading patterns
$headingPatterns = array(
  'DEFAULT' => 'border-left-width:5px;border-left-style:solid;',
  'OASE' => 'border-top-width:2px;border-top-style:solid;border-radius:0 0 4px 4px;background-image:linear-gradient(transparent,rgba(0,0,0,.1));border-bottom:1px solid #CCC;border-left:1px solid #CCC;border-right:1px solid #CCC;'
);

$h = array(
  'KIZI' => $headingPatterns['DEFAULT']
);

// Theme background patterns
$backgroundPatterns = array(
  'ROUND0' => 'background-image: linear-gradient( rgba( 255,255,255,.05 ), transparent );',
  'ROUND1' => 'background-image: linear-gradient( rgba( 255,255,255,.1 ), transparent );',
  'ROUND2' => 'background-image: linear-gradient( rgba( 255,255,255,.2 ), transparent );',
  'ROUND3' => 'background-image: linear-gradient( transparent, rgba( 0,0,0,.2 ) );',
  'MESH1' => 'background-image: repeating-linear-gradient( 90deg, transparent, transparent 100px, rgba(0,0,0,.05) 100px, rgba(0,0,0,.05) 101px, transparent 101px, transparent 200px, rgba(0,0,0,.05) 200px, rgba(0,0,0,.05) 201px), repeating-linear-gradient( 0deg, transparent, transparent 100px, rgba(0,0,0,.05) 100px, rgba(0,0,0,.05) 101px, transparent 101px, transparent 200px, rgba(0,0,0,.05) 200px, rgba(0,0,0,.05) 201px);background-position: 50px 50px;',
  'STRIPE0' => 'background-image: linear-gradient( transparent, transparent 2px, rgba( 255,255,255,.05 ) 2px, rgba( 255,255,255,.05 ) 3px); background-size: 3px 3px;',
  'STRIPE1' => 'background-image: linear-gradient( 90deg, transparent, transparent 50%, rgba( 255,255,255,.2 ) 50%, rgba( 255,255,255,.2 )); background-size: 64px 64px;',
  'STRIPE2' => 'background-image: linear-gradient( transparent, transparent 2px, rgba( 255,255,255,.5 ) 2px, rgba( 255,255,255,.5 ) 3px); background-size: 3px 3px;',
  'CHECK1' => 'background-image: linear-gradient( 45deg, rgba( 255,255,255,.1 ) 25%, transparent 25%, transparent 75%, rgba( 255,255,255,.1 ) 75%),linear-gradient( 45deg, rgba( 255,255,255,.1 ) 25%, transparent 25%, transparent 75%, rgba( 255,255,255,.1 ) 75%);background-size: 64px 64px;background-position: 0 0, 32px 32px;',
  'OASE' => 'background-image: url(../imgs/oase_background.png);background-size: 100% 100%;background-attachment: fixed;',
  'NONE' => 'background-image: none;'
);

// Theme background set
$b = array(
  'BODY' => $backgroundPatterns['STRIPE0'],
  'HEADER' => $backgroundPatterns['ROUND2'],
  'FOOTER' => $backgroundPatterns['NONE'],
  'MENU' => $backgroundPatterns['ROUND0'],
  'BASE' => $backgroundPatterns['MESH1'],
  'KIZI' => $backgroundPatterns['NONE'],
  'HEADING' => $backgroundPatterns['NONE']
);

switch( $theme ) {
  case 'default':
    break;
    
  case 'green':
    $c['HEADER'] = '42952B';
    $c['BODY'] = '1E4313';
    $c['MENU'] = array('326F20','28591A','28591A');
    $c['BASE'] = 'BBE7AF';
    $c['HEADING'] = array('42952B','28591A','FFFFFF');
    break;
      
  case 'purple':
    $c['HEADER'] = '995DEE';
    $c['BODY'] = '291940';
    $c['MENU'] = array('452A6B','372256','372256');
    $c['BASE'] = 'C0A2EB';
    $c['HEADING'] = array('995DEE','5C388F','FFFFFF');
    break;
    
  case 'red':
    $c['HEADER'] = '962027';
    $c['BODY'] = '3C0D10';
    $c['MENU'] = array('71181D','781A1F','781A1F');
    $c['BASE'] = 'FEAEB3';
    $c['HEADING'] = array('962027','3C0D10','FFFFFF');
    break;
    
  case 'blue':
    $c['HEADER'] = '205A8C';
    $c['BODY'] = '0D2438';
    $c['MENU'] = array('043959','032E47','205A8C');
    $c['BASE'] = 'DCEAF2';
    $c['HEADING'] = array('205A8C','043959','DCEAF2');
    break;
    
  case 'orange':
    $c['HEADER'] = 'F27F1B';
    $c['BODY'] = '913B09';
    $c['MENU'] = array('F2620F','C24E0C','C24E0C');
    $c['BASE'] = 'FACCA4';
    $c['HEADING'] = array('F27F1B','F2620F','FFFFFF');
    break;
    
  case 'yellow':
    $c['HEADER'] = 'F2B705';
    $c['BODY'] = '825502';
    $c['MENU'] = array('D98E04','AE7203','825502');
    $c['BASE'] = 'FAE29B';
    $c['HEADING'] = array('F2B705','F2E205','FFFFFF');
    break;
    
  case 'brown':
    $c['HEADER'] = '593527';
    $c['BODY'] = '261612';
    $c['MENU'] = array('40241E','331D18','331D18');
    $c['BASE'] = 'A68D85';
    $c['HEADING'] = array('593527','352017','FFFFFF');
    break;
    
  case 'gray':
    $c['HEADER'] = '3A3D3F';
    $c['MENU'] = array('333333','666666','362311');
    $c['BASE'] = 'D8D8D9';
    $c['HEADING'] = array('464A4D','81888C','FFFFFF');
    break;
  
  case 'cool':
    $c['BODY'] = '233153';
    $c['HEADER'] = '28385E';
    $c['FOOTER'] = '333333';
    $c['MENU'] = array('233153','28385E','233153');
    $c['BASE'] = 'A9AFBF';
    $c['BUTTON'] = array('516C8D','4B6382');
    $c['KIZI'] = 'D4D7DF';
    $c['HEADING'] = array('28385E','FF9800','FFFFFF');
    $c['TABLE'] = array('516C8D','425772','EAEDF1','B9C4D1','FFFF8F');
    $c['TABLE_F'] = array('4B6382','667E9B','CBCFD8','ABB8C8');
    $b['KIZI'] = $backgroundPatterns['none'];
    $b['HEADING'] = $backgroundPatterns['ROUND3'];
    break;
    
  case 'cute':
    $c['BODY'] = '352628';
    $c['HEADER'] = 'F2295F';
    $c['FOOTER'] = '261E0F';
    $c['MENU'] = array('593F42','473235','FAEFE7');
    $c['BASE'] = 'F598A9';
    $c['BUTTON'] = array('F2295F','DF2657');
    $c['KIZI'] = 'F2D8C2';
    $c['HEADING'] = array('F33A6C','F2CF66','FAEFE7');
    $c['TABLE'] = array('F2AEBB','F48DA0','FCEFF1','FADFE4','F2D8C2');
    $c['TABLE_F'] = array('F27E93','F598A9','FCE5E9','FACBD4');
    $b['HEADER'] = $backgroundPatterns['NONE'];
    $b['MENU'] = $backgroundPatterns['NONE'];
    $b['BASE'] = $backgroundPatterns['STRIPE1'];
    break;
  
  case 'natural':
    $c['BODY'] = '302A20';
    $c['HEADER'] = '302A20';
    $c['FOOTER'] = '483E2F';
    $c['MENU'] = array('60533F','483E2F','EEEEEE');
    $c['BASE'] = '98A24F';
    $c['BUTTON'] = array('98A24F','8C9549');
    $c['TABLE'] = array('78684F','938672','EFEDEA','C9C3B9','FFFF8F');
    $c['TABLE_F'] = array('6E6049','938672','DFDBD5','C9C3B9');
    $c['KIZI'] = 'DDDABF';
    $c['HEADING'] = array('483E2F','616A1C','EEEEEE');
    $b['HEADER'] = $backgroundPatterns['STRIPE0'];
    $b['FOOTER'] = $backgroundPatterns['STRIPE0'];
    $b['HEADING'] = $backgroundPatterns['STRIPE0'];
    $b['MENU'] = $backgroundPatterns['STRIPE0'];
    $b['BASE'] = $backgroundPatterns['STRIPE1'];
    break;
    
  case 'gorgeous':
    $c['BODY'] = '400101';
    $c['HEADER'] = 'BF0413';
    $c['FOOTER'] = '400101';
    $c['MENU'] = array('8C030E','70020B','D99A25');
    $c['BASE'] = '111111';
    $c['BUTTON'] = array('E1AE51','DCA236');
    $c['TABLE'] = array('D99A25','AE7B1E','F7EBD3','E8C27C','F2CF66');
    $c['TABLE_F'] = array('BF751B','995E16','F2E3D1','D9AC76');
    $c['KIZI'] = 'FAF5EB';
    $c['HEADING'] = array('BF0413','D99A25','F2E7AE');
    $b['BASE'] = $backgroundPatterns['CHECK1'];
    $b['KIZI'] = $backgroundPatterns['ROUND2'];
    $b['HEADER'] = $backgroundPatterns['ROUND3'];
    $b['FOOTER'] = $backgroundPatterns['ROUND2'];
    $b['HEADING'] = $backgroundPatterns['ROUND3'];
    break;
    
  case 'oase':
    $c['BODY'] = '444444';
    $c['HEADER'] = '00989B';
    $c['FOOTER'] = '444444';
    $c['MENU'] = array('222222','444444','444444');
    $c['TEXT'] = array('444444','FFFFFF');
    $c['TABLE'] = array('00B5B8','007A7C','F2F2F2','CCCCCC','FFFF8F');
    $c['TABLE_F'] = array('00989B','007A7C','E2E2E2','CCCCCC');
    $c['HEADING'] = array('FFFFFF','00B5B8','333333');
    $c['BASE'] = 'FFFFFF';
    $c['KIZI'] = 'F2F2F2';
    $h['KIZI'] = $headingPatterns['OASE'];
    $b['MENU'] = $backgroundPatterns['NONE'];
    $b['BASE'] = $backgroundPatterns['OASE'];
    $b['KIZI'] = $backgroundPatterns['STRIPE2'];
    break;
    
  case 'darkmode':
    $c['BODY'] = '1D2123';
    $c['HEADER'] = '272A2C';
    $c['FOOTER'] = '272A2C';
    $c['MENU'] = array('1A1A1A','242424','EEEEEE');
    $c['TEXT'] = array('D0D1D1','111');
    $c['TABLE'] = array('2E2E2E','000000','1A1A1A','14181A','400000');
    $c['TABLE_F'] = array('383838','000000','242424','14181A');
    $c['BUTTON'] = array('335581','47668E');
    $c['KIZI'] = '272A2C';
    $c['HEADING'] = array('3A3D3F','335581','EEEEEE');
    $c['BASE'] = '040505';
    $c['REVERSE'] = array('FFFFFF','000000');
    $c['DARKMODE'] = 'ON';
    $b['HEADER'] = $backgroundPatterns['NONE'];
    $b['MENU'] = $backgroundPatterns['NONE'];
    $b['KIZI'] = $backgroundPatterns['NONE'];
    break;
    
  default:
    $theme = 'none';
}



// $color「色（HEX,FFFFFF）」から$targetColor「色（HEX,FFFFFF）に
// 対する$density「密度（％）」を返す。
class color {
  function hex( $standardColor, $density = 100, $targetColor = 'FFFFFF' ) {

    // 密度が不正値の場合、基準カラーをそのまま返す
    if ( $density >= 0 || $density < 100 ) {
      
      // ％反転
      $inversionDensity = 100 - $density;
    
      // RGBに切り分け、16進数から10進数に変換
      $colors = array(
        hexdec( substr( $standardColor, 0, 2 ) ),
        hexdec( substr( $standardColor, 2, 2 ) ),
        hexdec( substr( $standardColor, 4, 2 ) ),
        hexdec( substr( $targetColor, 0, 2 ) ),
        hexdec( substr( $targetColor, 2, 2 ) ),
        hexdec( substr( $targetColor, 4, 2 ) )
      );
      
      // 密度を出す
      $colorDensity = array(
        round( abs( $colors[0] - $colors[3] ) / 100 * $inversionDensity ),
        round( abs( $colors[1] - $colors[4] ) / 100 * $inversionDensity ),
        round( abs( $colors[2] - $colors[5] ) / 100 * $inversionDensity )
      );
      
      // 大小チェック
      for( $i = 0; $i < count( $colorDensity ); $i++ ) {
        if ( $colors[ $i ] > $colors[ $i + 3 ] ) {
          $colorDensity[ $i ] = - $colorDensity[ $i ];
        }
      }

      // 密度を足し、10進数から16進数に変換結合
      $hex = '#' . sprintf('%02s', dechex( $colors[0] + $colorDensity[0] ) )
        . sprintf('%02s', dechex( $colors[1] + $colorDensity[1] ) )
        . sprintf('%02s', dechex( $colors[2] + $colorDensity[2] ) );

      return strtoupper( $hex );
    
    } else {
    
      return strtoupper( $standardColor );
    
    }
  }
}

if ( $theme !== 'none' ) {
  $color = new color();

echo <<< EOF
@charset "utf-8";
/* ********************************************************************* *
 
   IT Automation Theme
 
 * ********************************************************************* */
 
 /* ********************************************************************* *
   COMMON
 * ********************************************************************* */
body {
  background-color: {$color->hex($c['BODY'],100)};
  {$b['BODY']}
}
h1, h2, h3, h4, h5, h6 {
	color: {$color->hex($c['TEXT'][0],100)};
}
a:link {
  color: #005FD8;
}
a:visited {
  color: #005FD8;
}
a:hover {
  color: #D87900;
}
a:active {
  color: #D87900;
}

/* ********************************************************************* *
   HEADER
 * ********************************************************************* */
#HEADER {
  background-color: {$color->hex($c['HEADER'],100)};
  {$b['HEADER']}
}
#HEADER h4 { color: #F5F5F5; }

/* ********************************************************************* *
   FOOTER
 * ********************************************************************* */
#FOOTER {
  background-color: {$color->hex($c['FOOTER'],100)};
  {$b['FOOTER']}
}
#FOOTER a:link, #FOOTER a:visited {
  background-color: {$color->hex($c['BUTTON'][0],100)};
  color: #FFF;
}
#FOOTER a:hover, #FOOTER a:active {
  background-color: {$color->hex($c['BUTTON'][1],100)};
}

/* ********************************************************************* *
   MENU
 * ********************************************************************* */
#MENU h2 {
  background-color: {$color->hex($c['MENU'][0],100)};
  color: #EEE;
}
#MENU li a {
  background-color: {$color->hex($c['MENU'][1],100)};
  {$b['MENU']}
  color: #EEE;
  text-shadow: 1px 1px 0 #333;
}
#MENU li a:hover {
  background-color: {$color->hex($c['MENU'][1],90)};
  {$b['MENU']}
}
#MENU li.menu-on a,
#MENU li.menu-on a:hover {
  background-color: {$color->hex($c['BASE'],100)};
  background-image: none;
  color: {$color->hex($c['MENU'][2],100)};
  cursor: default;
}

/* ********************************************************************* *
   KIZI
 * ********************************************************************* */
#KIZI {
  background-color: {$color->hex($c['BASE'],100)};
  {$b['BASE']}
}
#KIZI h2 {
  background-color: transparent;
}
#KIZI #sysInitialFilter + h2,
#KIZI .midashi_class {
	background-color: {$color->hex($c['HEADING'][0],100)};
	border-color: {$color->hex($c['HEADING'][1],100)};
	color: {$color->hex($c['HEADING'][2],100)};
  {$b['HEADING']}
  {$h['KIZI']}
}
#KIZI .midashi_class:hover {
	background-color: {$color->hex($c['HEADING'][0],90)};
}
#KIZI input[type="button"].showbutton {
  background: none;
  border: none;
  box-shadow: none;
  color: {$color->hex($c['HEADING'][2],100)};
}
#KIZI .text {
	background-color: {$color->hex($c['KIZI'],100)};
	border-color: {$color->hex($c['KIZI'],80,'000000')};
  color: {$color->hex($c['TEXT'][0],100)};
  {$b['KIZI']}
}

/* ********************************************************************* *
   BUTTON
 * ********************************************************************* */
input[type="button"],
input[type="submit"] {
  background-color: {$color->hex($c['BUTTON'][0],100)};
  border-color: {$color->hex($c['BUTTON'][0],100)};
  box-shadow: 0 2px 0 {$color->hex($c['BUTTON'][0],70,'000000')};
  color: #FFFFFF;
}
input[type="button"]:hover,
input[type="submit"]:hover {
  background-color: {$color->hex($c['BUTTON'][1],100)};
  border-color: {$color->hex($c['BUTTON'][1],100)};
  box-shadow: 0 1px 0 {$color->hex($c['BUTTON'][1],70,'000000')};
}

input.deleteBtnInTbl[type="button"] {
  background-color: #DD0000;
  border-color: #DD0000;
  box-shadow: 0 2px 0 #BB0000;
}
input.deleteBtnInTbl[type="button"]:hover {
  background-color: #CC0000;
  border-color: #CC0000;
  box-shadow: 0 1px 0 #AA0000;
}

input.deleteBtnInTbl[type="button"][value="復活"],
input.deleteBtnInTbl[type="button"][value="Restore"] {
  background-color: #0078DC;
  border-color: #0078DC;
  box-shadow: 0 2px 0 #0050B4;
}
input.deleteBtnInTbl[type="button"][value="復活"]:hover,
input.deleteBtnInTbl[type="button"][value="Restore"]:hover {
  background: #0064C8;
  border-color: #0064C8;
  box-shadow: 0 1px 0 #0030A1;
}

input[type="button"]:active, input[type="submit"]:active {
	box-shadow: none;
	transform: translateY( 0 );
}

/* disabled button */
input[type="button"][disabled],
input[type="button"][disabled]:hover,
input[type="button"][disabled]:active,
input[type="submit"][disabled],
input[type="submit"][disabled]:hover,
input[type="submit"][disabled]:active {
	background-color: {$color->hex($c['TABLE'][2],100)};
	border-color: {$color->hex($c['TABLE'][3],100)};
  color: {$color->hex($c['TEXT'][0],50,$c['TEXT'][1])};
}

/* ********************************************************************* *
   Table
 * ********************************************************************* */
.sDefault th, .sDefault td {
	border-color: {$color->hex($c['TABLE'][3],90)};
}
.sDefault th,
.sDefault-Fixed {
	background-color: {$color->hex($c['TABLE'][0],100)};
	border-color: {$color->hex($c['TABLE'][3],100)};
  color: #FFF;
}
.sDefault td {
  background-color: {$color->hex($c['TABLE'][2],20,$c['REVERSE'][1])};
}

.tableScroll {
background-color: {$color->hex($c['TABLE'][2],100)};
}
.itaTable.tableSettingOpen {
  background-color: {$color->hex($c['TABLE'][2],100)};
}
.itaTableBody table {
  background-color: {$color->hex($c['TABLE'][3],100)};
}

.itaTableBody th {
	background-color: {$color->hex($c['TABLE'][0],100)};
  color: #FFF;
}
th.sortTriggerInTbl:hover {
	background-color: {$color->hex($c['TABLE'][0],90,$c['REVERSE'][1])};
}

.itaTableBody td {
  background-color: {$color->hex($c['TABLE'][2],100)};
  color: {$color->hex($c['TEXT'][0],100)};
}
.itaTableBody tr:nth-child(odd) td {
  background-color: {$color->hex($c['TABLE'][2],20,$c['REVERSE'][1])};
}
.itaTableBody td.likeHeader {
  background-color: {$color->hex($c['TABLE_F'][2],100)};
}
.itaTableBody tr:nth-child(odd) td.likeHeader {
  background-color: {$color->hex($c['TABLE_F'][2],50,$c['REVERSE'][1])};
}
.itaTableBody tr.disuse td,
.itaTableBody tr.disuse td.likeHeader,
.itaTableBody tr.disuse:nth-child(odd) td {
  background-color: {$color->hex($c['TEXT'][0],10,$c['REVERSE'][1])};
  background-image: repeating-linear-gradient( -45deg, transparent, transparent 2px, {$color->hex($c['TEXT'][0],15,$c['REVERSE'][1])} 2px, {$color->hex($c['TEXT'][0],15,$c['REVERSE'][1])} 4px);
  color: {$color->hex($c['TEXT'][0],40,$c['REVERSE'][1])};
}
.fakeContainer_Filter1Print .itaTableBody tr:hover td,
.fakeContainer_Filter2Print .itaTableBody tr:hover td {
  background-color: {$color->hex($c['TABLE'][4],80,$c['REVERSE'][1])};
  background-image: none;
}
.fakeContainer_Filter1Print .itaTableBody tr:hover td.likeHeader,
.fakeContainer_Filter2Print .itaTableBody tr:hover td.likeHeader {
  background-color: {$color->hex($c['TABLE'][4],100)};
  background-image: none;
}

/* .tableSticky */
.itaTable.tableSticky tr.defaultExplainRow th {
  box-shadow: 0 0 0 1px {$color->hex($c['TABLE'][1],100)};
}
.itaTable.tableSticky tr.defaultExplainRow th.thSticky {
	background-color: {$color->hex($c['TABLE_F'][0],100)};
  box-shadow: 0 0 0 1px {$color->hex($c['TABLE_F'][1],100)};
}
.itaTable.tableSticky tr.defaultExplainRow th.thSticky.sortTriggerInTbl:hover {
	background-color: {$color->hex($c['TABLE_F'][0],90,$c['REVERSE'][1])};
}
.itaTable.tableSticky td.likeHeader {
  box-shadow: 0 0 0 1px {$color->hex($c['TABLE_F'][3],100)};
}
.itaTable.tableSticky .fixedBorder {
  border-color: {$color->hex($c['TABLE_F'][0],100)};
}

/* table 外枠 */
.itaTableBody::before,
.itaTableBody::after,
.itaTable .tableScroll::before,
.itaTable .tableScroll::after {
  border-color: #111;
}

/* ********************************************************************* *
   Symphony Editor
 * ********************************************************************* */
#symphonyInfoShowContainer .leftMainArea-TypeA,
#symphonyInfoShowContainer .rightSideBar-TypeA {
  background-color: {$color->hex($c['TABLE'][2],100)};
  border-color: {$color->hex($c['TABLE'][2],20,$c['REVERSE'][1])}!important;
  color: {$color->hex($c['TEXT'][0],100)};
}
#symphony_header, #symphony_footer, #operation_info_area,
#symphonyInfoShowContainer .leftMainArea-TypeA,
#symphonyInfoShowContainer .rightSideBar-TypeA,
#operation_info_area .heightAndWidthFixed01,
#pattern_filter_area, #symphony_area, #material_area_wrapper {
  border-color: {$color->hex($c['REVERSE'][0],30,$c['REVERSE'][1])}!important;
}
#symphony_header,
#symphonyInfoShowContainer .rightSideBar-TypeA {
	border-top-color: {$color->hex($c['HEADER'],80)}!important;
}
.movement:nth-child(2n+1) {
  background-color: {$color->hex($c['TABLE'][2],100)}!important;
}
.movement .operation_box .inLineTitle {
  color: {$color->hex($c['TEXT'][0],100)}!important;
}
#material_area, #pattern_filter_area {
  background-color: {$color->hex($c['REVERSE'][1])};
}
#operation_info_area .heightAndWidthFixed01 label {
  color: {$color->hex($c['HEADER'],100)}!important;
}
/* ********************************************************************* *
   Other.
 * ********************************************************************* */
.menu_border {
  box-shadow: 0 0 0 4px {$color->hex($c['TEXT'][1],100)};
}
.mm_text {
  color: {$color->hex($c['TEXT'][0],100)};
}
.mm_list:hover .mm_text {
  background-color: {$color->hex($c['KIZI'],80)};
}
#gateLogin, #gateLogout, #gateChangePw {
  background-color: {$color->hex($c['KIZI'],100)};
  border-color: {$color->hex($c['KIZI'],80,'000000')};
  color: {$color->hex($c['TEXT'][0],100)};
}
#gateLogin h2, #gateChangePw h2, #gateLogout h2 {
	background-color: {$color->hex($c['HEADING'][0],100)};
	color: {$color->hex($c['HEADING'][2],100)};
}
#export_form .export_all_div {
	background-color: {$color->hex($c['TABLE'][0],100)};
	border-color: {$color->hex($c['TABLE'][1],100)};
  color: #FFF;
}
#export_form .export_all_div + div {
  background-color: {$color->hex($c['TABLE'][2],20,$c['REVERSE'][1])};
	border-color: {$color->hex($c['TABLE'][1],100)};
}
#export_form label:hover {
  background-color: {$color->hex($c['TABLE'][4],100)};
}
#import_form .import_all_div {
	background-color: {$color->hex($c['TABLE'][0],100)};
	border-color: {$color->hex($c['TABLE'][1],100)};
  color: #FFF;
}
#import_form .import_all_div + div {
  background-color: {$color->hex($c['TABLE'][2],20,$c['REVERSE'][1])};
	border-color: {$color->hex($c['TABLE'][1],100)};
}
#import_form label:hover {
  background-color: {$color->hex($c['TABLE'][4],100)};
}
EOF;

if ( $c['DARKMODE'] == 'ON' ) {

echo <<< EOF
/* ********************************************************************* *
   DARKMODE
 * ********************************************************************* */

/* Scroll Bar */
body, .tableScroll { scrollbar-color: #000F23 #666666; } /* for Firefox */ 
::-webkit-scrollbar { width: auto; height: auto; }
::-webkit-scrollbar-button { background: #444444; }
::-webkit-scrollbar-corner { background: #333333; }
::-webkit-scrollbar-thumb { background: #666666; }
::-webkit-scrollbar-track-piece { background: #000F23; }

/* Input */
input[name="symphony_name"],#filter_value,
input[type="text"], input[type="password"], textarea, select,
#KIZI textarea, #KIZI select, #KIZI option, #KIZI input[type="text"], #KIZI input[type="password"],
#KIZI .richFilterSelectListCaller,
.select2-container--default .select2-search--dropdown .select2-search__field,
.select2-container--default .select2-selection--single,
.select2-dropdown {
  background-color: #000000!important;
  border: 1px solid #666666!important;
  color: #EEE!important;
}
#KIZI .richFilterSelectListCaller:hover {
    background-color: #222222;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
  color: #EEE;
}
input[type="text"]:focus, input[type="password"]:focus, textarea:focus, select:focus,
#KIZI input[type="text"]:focus, #KIZI input[type="password"]:focus, #KIZI textarea:focus, #KIZI select:focus {
  background-color: #111111;
  border-color: #0070FF;
  color: #EEE;
}
#symphony_area {
  background: #000000!important;
}
.movement2,
.draggable_area .movement.ui-draggable-dragging,
.highlight {
  background-color: #333333!important;
  border-color: #666666!important;
}
.start, .end,
.start::after, .end::after,
.arrow::after, .highlight::after {
  background-color: #666666!important;
}

EOF;

}

}

}

itaThemeSelect();

?>
