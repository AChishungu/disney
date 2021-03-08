<?php


if(isset($_REQUEST['cat']))
{//check to be sure data has been transmitted via GET or POST
	switch($_REQUEST['cat'])
	{//determine contents of 'cat'
		case "box":
			include('data/disney-box-office.js'); //"box" orders by box office results
			break;
		default:
			include('data/disney-year.js'); //default orders by year
	}
}else{//if not data sent, inform calling application
	echo "Incorrect parameter sent";