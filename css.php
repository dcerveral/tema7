<!-- CSS -->

html,body{

margin:0px;
max-width:100%;
height:100%;
max-height:100%;
padding:0px;
}

.item {
  width: 295px;;
   
  float: left;
  -moz-column-break-inside: avoid;
    -webkit-column-break-inside: avoid;
    column-break-inside: avoid;
    display: inline-block;
    margin: 5px;
     
	
    border: 1px solid #DEDEDE;
    background: url('/cms/<? echo $conf['tema']; ?>/png/transpWhite90.png'); 
	
 
}


@media (max-width: 590px) and  (min-width: 1px) {
	.item {width: 96%;}
}

@media (max-width: 600px) and  (min-width: 590px) {
	.item {width: 45%;}
}
 





.item:hover{-webkit-box-shadow: 1px 1px 1px 0px rgba(0,0,0,0.50);
-moz-box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.75);
box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.75);}



.negro {
  
    background: url('/cms/<? echo $conf['tema']; ?>/png/transpBlack75.png'); 
	
 
}
 
 *{-o-transition: all 1s ease-in-out;
-moz-transition: all 1s ease-in-out;
-webkit-transition: all 1s ease-in-out;
transition: all 1s ease-in-out;}

.boxn {
    -moz-column-break-inside: avoid;
    -webkit-column-break-inside: avoid;
    column-break-inside: avoid;
    display: inline-block;
    margin: 1px 1px 1px;
    padding: 10px;
	color:white;
    border: 1px solid #404048;
    background: url('/cms/<? echo $conf['tema']; ?>/png/transpBlack75.png'); 
	
     
	width: 98%;
 
	overflow: hidden; 
}
.box a {color: blue;}


.box {
     
    margin: 1px 1px 1px;
     
	color:black;
    border: 1px solid #DEDEDE;
    background: url('/cms/<? echo $conf['tema']; ?>/png/transpWhite80.png'); 
	
     
	width: 98%;
  
}
.box a {color: blue;}
.sombra{ text-shadow: 1px 1px 0 rgba(140,140,140,0.6) , -1px -1px 1px rgba(0,0,0,0.67) ;}
 