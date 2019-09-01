# Tennis

## 題目

網球的記分規則如下：
0. 兩位玩家 Alice Bob 從零分（love）開始，獲勝一球得分為 15 ，兩球為 30，3 球為 40

0. 除了下一條的特殊規則以外，取得 40 分的玩家獲勝

0. 如果兩位玩家同時獲得四十分，則進入決勝局，顯示為 `deuce`。假設在決勝局內 Alice 獲得一球，則該玩家再贏一球獲勝，顯示為`Advantage Alice`。如果此時 Bob 獲得一球，則回到決勝局，顯示為`deuce`。相同的，假設在決勝局時 Bob 獲得一球，則顯示為`Advantage Bob`，此時 Bob 再取得一球則獲勝。


## 要做的事

嘗試用 TDD 的方式開發後續的程式

記得 TDD 的流程是：

0. 寫出符合規則，但是沒有對應功能程式的測試
0. 寫出僅能通過該測試的功能程式
0. 重構該功能程式

### 開啟自動測試

到

[../tests/Feature/TennisTest.php](../tests/Feature/TennisTest.php) 

將 `$this->markTestSkipped();` 註解掉之後，運行測試。

測試案例僅包含均沒有得分（love - love）時的狀況。
