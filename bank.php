<?php
abstract class Bank{
    protected $accno;
    protected $balance;
    public function __construct($a,$b){
        $this->accno = $a;
        $this->balance = $b;
    }
    abstract public function deposit($d);
    abstract public function withdraw($w);
    public function __toString(){
        return "บัญชีเลทที่  $this->accno ยอดเงินคงเหลือ $this->balance บาท <br>";
        
    }
}
class Saving extends Bank {
    public function deposit($d){
        $this->balance += $d;
        echo "ฝากเงิน $d บาท o เข้าบัญชี $this->accno ยอดเงินในบัญชี $this->balance บาท <br>";
    }
    public function withdraw($w){
        $this->balance -= $w;
        echo "ถอนเงิน $w บาท จากบัญชี $this->accno ยอดเงินในบัญชี $this->balance บาท <br>";
        
    }
}
class Fixed extends Bank{
    private $period;  //แบบที่ไม่สามารถเรีย กใช้ได้จากภายนอกคลาส ให้ใช private
    public function __construct($a,$b,$p){  
        parent::__construct($a,$b);
        $this->period =$p;
    }
        public function deposit($d){
            $this->balance += $d;
            echo "ฝากเงิน $d บาท  เข้าบัญชี $this->accno ยอดเงินในบัญชี $this->balance บาท <br>";
        }
        public function withdraw($w){
            echo "ไม่สามารถถอนเงินจากบัญชีฝากประจำเเบบ $this->period เดือน กรุณาทำรายการใหม่อีกครั้ง <br>";
        }
            public function __toString(){
                return parent::__toString()."บัญชีเงินฝากประจำชนิด  $this->period  เดือน <br>";
                
            }
        }
     
    

                                        
$acc1 = new Saving("123456789",5789.50);
echo $acc1;
$acc1->deposit(1000);
$acc1->withdraw(999);

$acc2 = new Fixed ("789456123",10000,12);
echo $acc2;
$acc2->deposit(10000);
$acc2->withdraw(9999);
?>