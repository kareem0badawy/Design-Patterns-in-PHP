<?php  
namespace DesignPatternsInPHP\Behavioral\Strategy;

// implements the interface for BMW.
class BmwCouponGenerator implements CarCouponGenerator {
    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;
      
    public function addSeasonDiscount()
    {
      if(!$this->isHighSeason) return $this->discount += 5;
    
      return $this->discount +=0;
    }
      
    public function addStockDiscount()
    {
      if($this->bigStock) return $this->discount += 7;
        
      return $this->discount +=0;
    }
  }