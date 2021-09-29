<?php

require('mailchimp/Mailchimp.php');    // You may have to modify the path based on your own configuration.

$api_key = "db7b60c3b78cdecce2e069f0fce2d1e1-us6";
$list_id = "4d43580b5a";

$Mailchimp = new Mailchimp( $api_key );
$Mailchimp_Lists = new Mailchimp_Lists( $Mailchimp );

// var_dump($_POST);

try 
{
    $subscriber = $Mailchimp_Lists->subscribe(
        $list_id,
        array('email' => $_POST["newsletterEmail"]),      // Specify the e-mail address you want to add to the list.
        array('FNAME' => $_POST["newsletterFirstName"], 'LNAME' => $_POST["newsletterLastName"]),   // Set the first name and last name for the new subscriber.
        'text',    // Specify the e-mail message type: 'html' or 'text'
        FALSE,     // Set double opt-in: If this is set to TRUE, the user receives a message to confirm they want to be added to the list.
        TRUE       // Set update_existing: If this is set to TRUE, existing subscribers are updated in the list. If this is set to FALSE, trying to add an existing subscriber causes an error.
    );
} 
catch (Exception $e) 
{
    echo "Caught exception: " . $e;
}

if ( ! empty($subscriber['leid']) )
{
    //header to homepage
    //add signedNewsletter to localstorage
    echo "Subscriber added successfully.";
}
else
{
    //header to homepage throw error
    //add signedNewsletter to localstorage
    echo "Subscriber add attempt failed.";
}

?>
