<?php
class Invoice {
    Private $invoiceId;
    private $invoiceNumber;
    private $invoiceDate;
    private $invoiceAmount;
    private $customerDetails;
    private  $title;
    Private $items =[];
    private $taxRate = 0;
    Private $discountAmount =0;
    Private $subTotal =0;
    Private $total =0;
}