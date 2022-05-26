<?php
function hello(string $text): void{
    echo $text;
}
hello ('param3ter');

function repeatcontent(int $count = 1): void{
    if($count == 0){
        return ;
    }
    hello('param3ter'.$count);
    repeatcontent(--$count);
}
repeatcontent(5);