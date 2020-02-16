<?php  
namespace DesignPatternsInPHP\Behavioral\Strategy;

// implements the interface for Mercedes.
class MercedesCouponGenerator implements CarCouponGenerator {
  private $discount = 0;
  private $isHighSeason = false;
  private $bigStock = true;
    
  public function addSeasonDiscount()
  {
    if(!$this->isHighSeason) return $this->discount += 4;
  
    return $this->discount +=0;
  }
    
  public function addStockDiscount()
  {
    if($this->bigStock) return $this->discount += 10;
  
    return $this->discount +=0;
  }
}