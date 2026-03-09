<?php
interface canEat
{
    function eat();
}
interface canSleep
{
    function Sleep();
}
interface  canSwim
{
    function Swim();
}
interface canFly
{
    function Flay();
}
Class Human implements canEat ,canFly, canSleep, canSwim {
    function eat(){
        echo "Human Can";
    }
    function Sleep(){
        echo "Human Can Sleep";
    }
    function Swim()
    {
       echo "Human can Swiming";
    }
    function Flay()
    {echo "human can not fly";
    }
}

Class Bird implements canFly ,canEat ,canSwim {
function Flay()
{
echo "Bird Fly";
}
function eat()
{
    echo "Can Eat";
}
function Swim()
{
    echo "Can't Swim";
}

}
$human = new Human();
$bird = new Bird();
function canYouSwim(canSwim $object){
    echo $object->Swim();
}
canYouSwim($human);
canYouSwim($bird);