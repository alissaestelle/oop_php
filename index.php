<?php 

class Achievement
{
  public function __construct(
    public string $title,
    public string $description,
    public int $points)
  {}
}

?>