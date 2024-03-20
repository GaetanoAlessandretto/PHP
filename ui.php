<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<div style='text-align: center;'>"; // Apertura del contenitore con stili CSS per centrare

    if (!empty($_POST['company_name'])) {
        $company_name = $_POST['company_name'];
        echo "Company Name: $company_name<br>";
    } else {
        echo "Company Name is not provided.<br>";
    }
    if (!empty($_POST['full_name'])) {
        $full_name = $_POST['full_name'];
        echo "Full Name: $full_name<br>";
    } else {
        echo "Full Name is not provided.<br>";
    }
    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email: $email<br>";
        } else {
            echo "Invalid email format<br>";
        }
    } else {
        echo "Email is not provided.<br>";
    }

    if (!empty($_POST['phone'])) {
        $phone = $_POST['phone'];
        echo "Phone: $phone<br>";
    } else {
        echo "Phone is not provided.<br>";
    }
    if (!empty($_POST['choose_service'])) {
        $choose_service = $_POST['choose_service'];
        echo "Choose Service: $choose_service<br>";
    } else {
        echo "Choose Service is not provided.<br>";
    }

    echo "</div>"; // Chiusura del contenitore con stili CSS per centrare
} 
?>
