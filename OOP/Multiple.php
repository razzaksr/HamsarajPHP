<?php
    class Savings
    {
        protected $accholder,$accnumber,$accbalance;
        public function statement()
        {
            echo "<br/>".$this->accholder." ".$this->accnumber." ".$this->accbalance."<br/>";
        }
    }

    class Debit extends Savings
    {
        public function __construct($a="",$b=0,$c=0)
        {
            $this->accholder=$a;$this->accnumber=$b;$this->accbalance=$c;
        }
        public function withdraw($desired)
        {
            if($desired<=$this->accbalance)
            {
                $this->accbalance-=$desired;
                echo "<br/>Amount ".$desired." withdrawn successfully<br/>";
            }
            else{
                echo "<br/>Amount ".$desired." hasn't withdrawn<br/>";
            }
        }
        public function credit($desired)
        {
            $this->accbalance+=$desired;
            echo "<br/>Amount ".$desired." has deposited to".$this->accholder."<br/>";
        }
    }

    interface Wallet
    {
        public function recharge($isp,$pay);
    }

    class Google
    {
        protected $user,$fullname,$age,$phone;
        public function show()
        {
            echo "User details ".$this->user." ".$this->fullname." ".strval($this->age)." ".strval($this->phone)." <br/>";
        }
    }

    class GPay extends Debit implements Wallet//, Google
    {
        public function recharge($isp,$pay)
        {
            $airtel=[20,100,300,50];
            $jio=[20,100,300,50];
            $vi=[20,100,300,50];
            $amt=$pay;
            if($isp=="airtel")
            {
                for($in=0;$in<count($airtel);$in++)
                {
                    if($airtel[$in]==$pay)
                    {
                        if($this->accbalance>=$pay)
                        {
                            $this->accbalance-=$pay;
                            echo $this->accholder."recharged with ".$pay."<br/>";
                            return;
                        }
                        else{
                            echo "Insufficient<br/>";
                            return;
                        }
                    }
                }
                echo $pay." doesn't match<br/>";
            }
        }
        public function transfer($receiver,$pay)
        {
            if($pay<=$this->accbalance)
            {
                $this->accbalance-=$pay;
                $receiver->accbalance+=$pay;
                echo "<br/>Amount ".$pay." transferred successfully to ". $receiver->accholder ." <br/>";
            }
            else{
                echo "<br/>Amount ".$pay." hasn't transferred<br/>";
            }
        }
    }

    $g1=new GPay("Razak Mohamed S",56787656734,2000.5);
    $g2=new GPay("Rasheedha R",8756789874,300.5);

    $g2->recharge("airtel",50);
    $g2->recharge("airtel",150);
    $g2->recharge("airtel",300);
    $g2->statement();

?>