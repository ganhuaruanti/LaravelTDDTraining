# Fizz Buzz

## 題目

輸入一個整數 n，印出 1 到 n 之間的所有數字

但是：

* 如果是 3 的倍數要印出 Fizz
* 如果是 5 的倍數要印出 Buzz
* 如果同時是 3 和 5 的倍數要印出 FizzBuzz

## 要做的事

寫出 Fizz Buzz 的程式碼，並符合自動測試的規則

### 開啟自動測試

這一題不要求寫自動測試，請到

[../tests/Feature/FizzBuzzTest.php](../tests/Feature/FizzBuzzTest.php) 

將 `$this->markTestSkipped();` 註解掉之後，運行測試。

順利的話，你應該會看到六個F，這代表有六個之前寫好的測試案例失敗了。

### 撰寫程式

修改 `FizzBuzzService` 裡面的 `fizzBuzz()` 函式

讓程式能符合題目的要求，通過所有的測試案例

## 加分題

寫過單元測試嗎？

試看看在 [Unit/FizzBuzzServiceTest.php](../tests/Unit/FizzBuzzServiceTest.php) 裡面加上針對 `FizzBuzzService->fizzBuzz()` 函式的測試
