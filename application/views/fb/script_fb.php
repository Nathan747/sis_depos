<?php  
//session_start();
//require_once("http://localhost:8080".base_url().'application/libraries/autoload.php');
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '1364398453638874','0f0692faf997ef95e2891577b8624e92' );
// login helper with redirect_uri
$helper = new FacebookRedirectLoginHelper('http://koiron.com/proyectos/2017/unc/registro/facebook' );
try {
	$session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
 // When Facebook returns an error
} catch( Exception $ex ) {
// When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
	// graph api request for user data
	$request = new FacebookRequest( $session, 'GET', '/me?locale=en_US&fields=id,name,email,work,website,first_name,birthday,last_name,location,picture' );
	$response = $request->execute();
	// get response
	$graphObject = $response->getGraphObject();
	$fbid = $graphObject->getProperty('id');              
    // To Get Facebook ID
	$fbfullname = $graphObject->getProperty('name'); 
	// To Get Facebook full name
	$femail = $graphObject->getProperty('email');    
	// To Get Facebook email ID
	$fwork = $graphObject->getProperty('work');
	$fwebsite = $graphObject->getProperty('website'); 
	$ffirst_name = $graphObject->getProperty('first_name'); 
	$fbirthday = $graphObject->getProperty('birthday');     
	$flast_name = $graphObject->getProperty('last_name'); 
	$flocation = $graphObject->getProperty('location'); 
	$fpicture = $graphObject->getProperty('picture');      

	/* ---- Session Variables -----*/
	$_SESSION['FBID'] = $fbid;           
	$_SESSION['FULLNAME'] = $fbfullname;
	$_SESSION['EMAIL'] =  $femail;

	$_SESSION['FWORK'] = $fwork;           
	$_SESSION['FWEBSITE'] = $fwebsite;
	$_SESSION['FFIRST_NAME'] =  $ffirst_name;
	$_SESSION['FBIRTHDAY'] =  $fbirthday;

	$_SESSION['FLAST_NAME'] =  $flast_name;
	$_SESSION['FLOCATION'] =  $flocation;
	$_SESSION['FPICTURE'] =  $fpicture;

	/* ---- header location after session ----*/
	header("Location: ".base_url()."registro/test");
} else {
	$loginUrl = $helper->getLoginUrl();
	header("Location: ".$loginUrl);
}
?>