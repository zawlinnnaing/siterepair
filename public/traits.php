<?php 
    trait A {
        public function bigTalk (){
            echo "A";
        }
        
        public function smallTalk() {
            echo "a";
        }
    }

    trait B {
        public function bigTalk () {
            echo "B";
        }
        public function smallTalk () {
            echo "b";
        }
    }

    class Aliased_talk {
        use A,B {
            B::smallTalk insteadOf A;
            A::bigTalk insteadOf B;
            B::bigTalk as talk;
        }
    }

    $o = new Aliased_talk();
    $o->smallTalk();
    $o->bigTalk();
    $o->talk();
?>