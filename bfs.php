<?php
 $graph=array(array(0,1,1,0,0,0,0),array(0,0,0,1,1,0,0),array(0,0,0,0,0,1,0),array(0,0,0,0,0,0,1),array(0,0,0,0,0,0,0),array(0,0,0,0,0,0,0),array(0,0,0,0,0,0,0));
 function bfs(&$graph,$start,&$visited)
 {
    $queue=array();

    array_push($queue,$start);
    $visited[$start]=1;
    echo $start ."\t";
    while(count($queue))
    {
        $top=array_shift($queue);

        foreach($graph[$top] as $key=>$vertex)
        {
            if(!$visited[$key] && $vertex==1)
            {
                $visited[$key]==1;
                array_push($queue,$key);
                echo $key ."\t";
            }
        }echo "\n";
    }
 }
 function initialize(&$visited,&$graph)
 {
    foreach($graph as $key => $vertex)
    {
        $visited[$key]=0;
    }
 }
 $visited=array();
 initialize($visited,$graph);
 bfs($graph,0,$visited);
?>