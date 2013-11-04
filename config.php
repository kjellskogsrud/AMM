<?php
/************************************************************************
 * Program:     Awsome media machine
 * File:        config.php
 * Function:    To hold varables that control the operations of the program
 * 		at "run time"
 * Description: N/A
 * Author(s):   Kjell-Aleksander Skogsrud <kjell@skogsrud.net> (ksk)
 * Enviroment:  apache-2.2.4_2
 *              php4-4.4.7
 *              mysql-server-5.0.41
 * Notes:       N/A
 *
 * Revisions:   Alpha   04/12/07 (ksk) 
 * 		It was made.
 * 		1.00	07/12/07 (ksk)
 * 		The first settings have been added
 *
 ************************************************************************/

// General.
$SiteName='FEZT.BIZ - Awsome Media Machine!';
$FlashWidth='800';	// The maximum width of the Flash window, in px
$FlashHeight='600';	// The maximum height of the Flash window, in px
$MediaFolder='media/';	// The path to the mediafolder(relativ to where AMM is included)
//$MediaFolder='fezt-media/';	// The path to the mediafolder(relativ to where AMM is included)


//MySQL
$MySQLServer='localhost';       
$MySQLUser='fezt';             //change this
$MySQLPass='H8cMhtKPLdTcw4sd';  //and this
$MySQLDB='fezt';      //and this
$MySQLTable='amm_stats';       

// Stats
$EnableStatistics=true;		//require MySQL
$DefaultSort='fileName';	// Valid types: (fileName, randomViews, firstSeen, lastSeen)
$DefaultSortType='ASC';		// Valis types: (ASC, DESC)

// Include seasonal changes?
$StyleSheet="css.css";

/**************** NO EDITIN BEYOND THIS POINT ***************************/
// it's always nice to know how many files we have.
$listOfFiles=scandir($MediaFolder);
$howManyFiles=count($listOfFiles)-2; 

?>