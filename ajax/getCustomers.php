<?php
    include('../includes/cnfg.php');
    $pdo = connect();
    
    // display the list of all users in table view
    $sql = "select distinct c.customerName, c.addressLine1, c.city, c.state, c.postalCode, c.country, c.creditLimit from customers c order by c.customerNumber";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();

    # JSON-encode the response
    $json_response = json_encode($list);

    // # Return the response
    echo $json_response;