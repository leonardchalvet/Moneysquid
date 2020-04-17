<?php

if( !isset($_SESSION['id']) ) {
	header('Location: ../Log/');
}

if( $_SESSION['id'] != 86688 ) {
	header('Location: ../Log/');
}