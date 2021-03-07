<?php
/**
 * OnePage Radio Web GPLv4 http://github.com/libre/onepage-radio-player/
 *
 * The PHP page that serves all page requests on WebExploitScan installation.
 *
 * The routines here dispatch control to the appropriate handler, which then
 * prints the appropriate page.
 *
 * All WebExploitScan code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt.
 */
error_reporting(0);
// Info WebRadio
$urlFacebook="";
$sitename="Radio OnePage player ";
$siteURL="https://expert4it.com/demo/radio/"; 
$GoogleTAG="G-XXXXXXX";
// Meta Data
$Title="LIVE | Radio";
$sitename="Radioonepage.info";
$MetaTitle="Radioonepage.info - Radio N°1 info direct";
$MetaDescription="Tenez-vous au courant de l&#039;actualité. ";
$urlMetaLogo="$siteURL/assets/images/logomini.jpg";
// Footer Copyright
$copyright="Copyright 2020 OnePage Radio Player"; 
// Data file store. 
$DATASTORE="lib/data";
// Speed Slider
//
$speedslide="100";
// URL For Stream RADIO 
// Stream URL 
// 
$streamname="graffiti";
$streamurl="mmradios.ice.infomaniak.ch";
// Parametre Icecast 
// header https:// or http://
$streamheader="https://"; 
// Empty for default port 80 or 443. 
$streamport="";
// Please empty for shoutcast or icecast
// Or use for uri url mp3 or OGG. 
$Mount="toulousefmlatino.mp3";
// mp3 or ogg
$supply="mp3";

