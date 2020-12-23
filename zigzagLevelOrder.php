<?php

class Solution
{

    public function zigzagLevelOrder($root)
    {
        if (empty($root)) {
            return [];
        }
        $level = 0;
        $queue = new SplQueue();
        $queue->enqueue($root);
        $ans = [];
        while ($count = $queue->count()) {
            $currentLevel = [];
            for ($i = 0; $i < $count; ++$i) {
                $node = $queue->dequeue();
                if (($level & 1) == 0) {
                    array_push($currentLevel, $node->val);
                } else {
                    array_unshift($currentLevel, $node->val);
                }
                if (! is_null($node->left)) {
                    $queue->enqueue($node->left);
                }
                if (! is_null($node->right)) {
                    $queue->enqueue($node->right);
                }
            }
            $ans[] = $currentLevel;
            $level++;
        }
        return $ans;
    }
}

$solutionObj = new Solution();

var_dump($solutionObj->zigzagLevelOrder([3,9,20,null,null,15,7])) . PHP_EOL;
