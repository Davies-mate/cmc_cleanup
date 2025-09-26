<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plot_no = $_POST['plot_no'];
    $owner_name = $_POST['owner_name'];
    $owner_type = $_POST['owner_type'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $area = $_POST['area'];
    $gps = $_POST['gps'];
    $category = $_POST['category'];
    $land_fee = $_POST['land_fee'];
    $land_fee_receipt = $_POST['land_fee_receipt'];
    $dev_fee = $_POST['dev_fee'];
    $dev_fee_receipt = $_POST['dev_fee_receipt'];
    $demand_notice = $_POST['demand_notice'];
    $demand_amount = $_POST['demand_amount'];
    $allocation_docs = $_POST['allocation_docs'];
    $title_status = $_POST['title_status'];
    $scrutiny_fee = $_POST['scrutiny_fee'];
    $building_plans = $_POST['building_plans'];
    $unauthorized = $_POST['unauthorized'];
    $unauthorized_notes = $_POST['unauthorized_notes'];
    $remarks = $_POST['remarks'];

    $sql = "INSERT INTO questionnaire (
        plot_no, owner_name, owner_type, phone, email, area, gps, category,
        land_fee, land_fee_receipt, dev_fee, dev_fee_receipt, demand_notice, demand_amount,
        allocation_docs, title_status, scrutiny_fee, building_plans, unauthorized,
        unauthorized_notes, remarks
    ) VALUES (
        '$plot_no', '$owner_name', '$owner_type', '$phone', '$email', '$area', '$gps', '$category',
        '$land_fee', '$land_fee_receipt', '$dev_fee', '$dev_fee_receipt', '$demand_notice', '$demand_amount',
        '$allocation_docs', '$title_status', '$scrutiny_fee', '$building_plans', '$unauthorized',
        '$unauthorized_notes', '$remarks'
    )";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Data saved successfully! <a href='index.php'>Go back</a>";
    } else {
        echo "❌ Error: " . $conn->error;
    }

    $conn->close();
}
?>
