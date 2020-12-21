<?php

function wordBreak($s, $wordDict)
{
    $sLen  = strlen($s);
    $dp    = array_fill(0, $sLen + 1, false);
    $dp[0] = true;
    for ($i = 1; $i <= $sLen; ++$i) {
        for ($j = $i - 1; $j >= 0; --$j) {
            $word = substr($s, $j, $i - $j);
            // 状态转移方程
            if ($dp[$j] && in_array($word, $wordDict)) {
                $dp[$i] = true;
                break;
            }
        }
    }

    return end($dp);
}

echo wordBreak('leetcode1', ['leet', 'code', '1']) . PHP_EOL;