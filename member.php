<?php
abstract class Member{
    protected $id;
    protected $fname;
    protected $lname;
    public function __construct($i,$f,$l){
        $this->id = $i;
        $this->fname = $f;
        $this->lname = $l;
    }
    public function __toString(){
        return  "สมาชิกรหัส $this->id ชื่อ $this->fname $this->lname <br>";
    }
    abstract public function benefit($e);        //method
  
}

class Regular extends Member{                     
    public function benefit($e){         
       $discount = $e * 5 / 100;
       $paid = $e - $discount;
       $point = floor($e / 100);
       echo "สมาชิกทั่วไป รหัส $this->id ชื่อ $this->fname $this->lname <br>
               ใช้บริการ $e บาท ได้รับส่วนลด $discount บาท ชำระเงิน $paid บาท <br>";

    }
}

class VIP extends Member{

    public function benefit($e){         
        $discount = $e * 10 / 100;
        $paid = $e - $discount;
        $point = floor($e / 100);
        echo "สมาชิกทั่วไป รหัส $this->id ชื่อ $this->fname $this->lname <br>
                ใช้บริการ $e บาท ได้รับส่วนลด $discount บาท ชำระเงิน $paid บาท 
                ได้ $point เเต้ม <br>";
    }
 
}
$member1 = new Regular("1018","sompong","deeprom");
$member1->benefit(1009);
$member2 = new Regular ("1019","somsi","deeha");
$member2->benefit(1200);
$member3 = new VIP ("1020","somsak","deehai");
$member3->benefit(1250);
$member4 = new VIP ("1021","somsuk","deehui");
$member4->benefit(1000);
echo $member1;
echo $member2;
echo $member3;
echo $member4;

?>