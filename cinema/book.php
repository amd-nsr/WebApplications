<?php include"includes/header.html"?>

<form class="bookingForm" method="post" action="ticket.php">
    <label> First Name</label>
    <br>
    <input type="text" name="custFName" value="Your First Name" >
    <br>
    
     <label> Last Name</label>
    <br>
    <input type="text" name="custLName" value="Your Last Name" >
    <br>
    
     <label> Email </label>
    <br>
    <input type="email" name="custEmail" value="Your Email" >
    <br>
    
     <label> Phone Number </label>
     <br>
    <input type="number" name="custPhone" value="Your Phone Number">
     <br>
    
     <label> Credit Card Number </label>
     <br>
    <input type="number" name="custCreditNumber" value="Your Credit Number">
     <br>
    
     <label> Nuber of Seats </label>
     <br>
    <input type="number" name="numberOfSeats" value="Number Of Seats">
     <br>
    
     <label> Submit your Info </label>
     <br>
    <input type="submit" name="submit" value="submit" >
     <br>
    
</form>
<?php include"includes/footer.html"?>