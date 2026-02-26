<?php
function visitorCounting(){
    Static $count = 0;
    $count++;
    echo "এখানে ভিজিটর গননা করা হলও {$count} \n";
}
visitorCounting();
visitorCounting();
visitorCounting();
visitorCounting();
visitorCounting();
