/**
 * 	OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence 
 * @link      http://www.opensource-socialnetwork.com/licence
 */
body {
  padding-bottom: 10px;
  position: relative;
  z-index: 2;
  background: none repeat scroll 0 0;
  line-height:1.5;
  font-family: 'PT Sans', sans-serif;
  color:#000;
  background:#fff;
  font-size:10pt;
  margin:0;
}
form label {
 display:block;
 color:#000;
 font-weight:bold;
}
form div{
 display:inline-block;
}
#ossn-page-menubar{
  width: 100%;
  margin: 0;
  padding: 10px 0 0 0;
  list-style: none;  
  background:#2F4959 url('./../../.../../../themes/default/images/header-background.png') repeat-x;

  -moz-box-shadow: 0 2px 1px #9c9c9c;
  -webkit-box-shadow: 0 2px 1px #9c9c9c;
   box-shadow: 0 2px 1px #9c9c9c;
}

#ossn-page-menubar li{
	float: left;
	padding: 0 0 10px 0;
	position: relative;
}

#ossn-page-menubar a{
	float: left;
	height: 25px;
	padding: 0 25px;
	color: #fff;
	text-transform: uppercase;
	font: bold 12px/25px Arial, Helvetica;
	text-decoration: none;
	text-shadow: 0 1px 0 #000;
}

#ossn-page-menubar li:hover > a{
	color: #2F4959;
}

*html #ossn-page-menubar li a:hover{ /* IE6 */
	color: #2F4959;
}

#ossn-page-menubar li:hover > ul{
	display: block;
}

#ossn-page-menubar:after{
	visibility: hidden;
	display: block;
	font-size: 0;
	content: " ";
	clear: both;
	height: 0;
}

* html #ossn-page-menubar             { zoom: 1; } /* IE6 */
*:first-child+html #ossn-page-menubar { zoom: 1; } /* IE7 */
.ossn-default {
  width: 1000px;
  margin: 0 auto;		
}

.ossn-top {
  margin: 15px auto;
  width: 950px; 
  margin-bottom:-35px;
}
.ossn-top .inline{
  display:inline-block;
}
.search {
  float: right; 
  margin-top: 30px;
  margin-right: 10px;
}

.layout-installation {
  background-color: #F7F7F7;
  min-height: 300px;
  width: 920px;
  margin: 20px;
  border-radius: 5px;
  border: 2px solid #EEE;	
  padding: 20px;
}
.layout-installation h2 {
  color: #2F4959;
  font-size: 15px;
}

.button-nav-default {
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
}
.button-nav {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  text-decoration:none;
  cursor:pointer;
  font-size: 14px;
  font-weight: bold;
  line-height: 1.428571429;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid rgba(0, 0, 0, 0.38);;
  border-radius: 4px;
  color:#333;
}
.button-nav:active {
  background:#E6E6E6;
}
.button-blue {
  cursor: pointer;
  display: inline-block;
  background-color: #e6e6e6;
  background-repeat: no-repeat;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), color-stop(25%, #ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: -moz-linear-gradient(top, #ffffff, #ffffff 25%, #e6e6e6);
  background-image: -ms-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: -o-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  background-image: linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e6e6e6', GradientType=0);
  padding: 5px 14px 6px;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  color: #333;
  font-size: 13px;
  line-height: normal;
  border: 1px solid #ccc;
  border-bottom-color: #bbb;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  -webkit-transition: 0.1s linear all;
  -moz-transition: 0.1s linear all;
  -ms-transition: 0.1s linear all;
  -o-transition: 0.1s linear all;
  transition: 0.1s linear all;
}
.button-blue:hover {
  background-position: 0 -15px;
  color: #333;
  text-decoration: none;
}
.button-blue:focus {
  outline: 1px dotted #666;
}
.button-blue.primary {
  color: #ffffff !important;
  background-color: #0064cd;
  background-repeat: repeat-x;
  background-image: -khtml-gradient(linear, left top, left bottom, from(#049cdb), to(#0064cd));
  background-image: -moz-linear-gradient(top, #049cdb, #0064cd);
  background-image: -ms-linear-gradient(top, #049cdb, #0064cd);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #049cdb), color-stop(100%, #0064cd));
  background-image: -webkit-linear-gradient(top, #049cdb, #0064cd);
  background-image: -o-linear-gradient(top, #049cdb, #0064cd);
  background-image: linear-gradient(top, #049cdb, #0064cd);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#049cdb', endColorstr='#0064cd', GradientType=0);
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #0064cd #0064cd #003f81;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}
input[type=text] {
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid #eee;
  width: 400px; 
  height: 30px;
  padding: 10px;
  font-weight:bold;
  color:#999;
}
input[type=text]:focus, textarea:focus {
  box-shadow: 0 0 5px rgb(202, 202, 202);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  padding: 10px;
  border: 1px solid rgb(202, 202, 202);
  font-weight:bold;
  color:#999;
}

input[type=password],
input[type=text] {
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
  outline: none;
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid #eee;
  width: 400px; 
  height: 30px;
  padding: 10px;
  font-weight:bold;
  color:#999;
}
input[type=text]:focus, textarea:focus {
  box-shadow: 0 0 5px rgb(202, 202, 202);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  padding: 10px;
  border: 1px solid rgb(202, 202, 202);
  font-weight:bold;
  color:#999;
}
.ossn-installation-success{padding:2px;border:1px solid #C7CEDF;background: #E7EDFA;color: #7387B1;padding:15px;}
.ossn-installation-fail{padding:2px;border:1px solid #F59BA8;background:#FFE5E6;padding:15px;}
.ossn-installation-message{
  margin-top: 10px;
}


.ossn-header {
  background:#2F4959 url('./../../.../../../themes/default/images/header-background.png') repeat-x;
  height:70px;
}
.logo-installation {
  background:url('./../../.../../../themes/default/images/logo_admin.png') no-repeat;
  height:57px;
  width:187px;
}
.ossn-header .inner{
  padding:10px;
  width:985px;
  margin:0 auto;
  color:#fff;
}
.ossn-installation-topmenu {
  background:#406479;
  height:40px;
}
.ossn-installation-footer {
  margin: 5px auto;
  width: 940px;
  border-top: 1px solid #ccc;
  line-height: 35px;
  color:#333;
}
.ossn-installation-footer a{
 color:#2F4959;
 text-decoration:none;
 font-weight:bold;
}