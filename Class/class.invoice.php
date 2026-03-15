<?php
class Invoice {
    Private $invoiceId;
    private $customerDetails;
    private  $title;
    Private $items =[];
    private $taxRate = 0;
    Private $discountAmount =0;
    Private $subTotal =0;
    Private $total =0;

public function __construct($invoiceId, $title){
    $this->invoiceId = $invoiceId;
    $this->title = $title;
 }

 function customerDetails($name, $address){
    $this->customerDetails =[
        "name"=>$name,
        "address"=>$address,
    ];
 }
 function addIteams($Quantity,$unitPrice,$Description){
    $this->items[]=[
    "quantity"=>$Quantity,
    "description"=>$Description,
    "unitPrice"=>$unitPrice,
    'total'=>$Quantity*$unitPrice,
    ];
    $this->subTotal += $Quantity*$unitPrice; 
 }
 function taxRate($taxRate)
 {
    $this->taxRate = $taxRate;
    $this->total = $this->subTotal +($this->subTotal+($this->taxRate/100));
 }
 function discountAmount($discountAmount){
    $this->discountAmount = $discountAmount;
    $this->total -= $discountAmount;
 }
function generate(){
   echo "<div class= ''Invoice>";
   echo "<h1>Invoice #$this->invoiceId</h1>";
   echo "$this->title";
   echo "ClintDetails";
   echo "<ul>";
   echo "Name";
}

 }

//  $invoice = new invoice();
//  $invoice->title();
//  $invoice->description();
// $invoiceId = "2323";
// $title = "Jon Do";
// $description = taxRate($invoiceId);