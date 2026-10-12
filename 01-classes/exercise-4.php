<?php

class Order
{
    public function ship()
    {

    }

    public function cancel()
    {

    }
}

// To keep track of what the order can or cannot do at each stage, without cluttering the main Order class.
class OrderStatus
{
    public function isReceived()
    {
        
    }

    public function isProcessing()
    {
        
    }

    public function isDelivered()
    {
        
    }

}