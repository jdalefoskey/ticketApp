-<!DOCTYPE html>
<html lang="en">
<head>
    <!--	Author: Dale Foskey
			Date:   03/01/21
			File:	Foskey-A7-ticket-order.php
			Purpose: Assignment 7
			
			IPO:
			   Inputs: number of tickets, artist, concert night
			   Processing: receive number of tickets, artist, concert night
			               Caculate number of tickets
                           calculate ticket cost 
                           calculate total cost
			               Display artist
                           Display ticket cost
                           Display concert night
                           Display total cost
                           Display friday message
			               
			   Outputs: artist, ticket cost, concert night, total cost, friday message
			
			Algorithm for Foskey-A7-ticket-order.php
			    Receive numTickets, artist, concertNight from Foskey-A7-ticket-order.html
                If (artist == Madonna)
                    ticketCost = 75.00
                ElseIf (artist == Metallica)
                    ticketCost = 125.00
                EndIf
                totalCost = numTickets * ticketCost
                Display artist,ticketCost,concertNight, totalCost
                If (concertNight == friday)
                    Display <p>Since you are attending on Friday night, expect heavy traffic</p>
                close  
                END 
	-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="Foskey-A7-ticket-order.css">
    <title>Ticket Sales Completed</title>
</head>
<body>
    <h2 class="header">Thank you for your purchase</h2>
    <?php
    // assign the variables to the array information from the html file
    $numTickets = $_POST['numTickets'];
    $artist = $_POST['artist'];
    $concertNight = $_POST['concertNight'];
    // if else statement to select which artist and price to choose
    if ($artist == "Modonna")
    {
        $ticketCost = 75.00;
    }
    else 
    {
        $ticketCost = 125.00;
    }
    // calculating the total cost
    $totalCost = $ticketCost * $numTickets;

    print("You have ordered $numTickets tickets to see $artist in concert on $concertNight and your total cost is $$totalCost ");
    // another if else statement to show the friday disclamer
    if ($concertNight == "Friday")
    {
        print("<br>Since you are attending on a Friday night, expect heavy traffic.");
    }
?>
    <br>
    <a href="Foskey-A7-ticket-order.html"> Return to Form</a>
</body>
</html>