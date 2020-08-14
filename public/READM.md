### コーディング規約 ###

・変数は適切名前を付けよう  
例:数字を扱う変数  
→ ×$test1  
→ ○$number  

・変数名はキャメルケースで  
例: プログラミングの本を取り扱う変数  
→ ×$programmingbooks  
→ ○$programmingBooks  

・インデントは適切に  
例:×  
```php:sample
      $ sayHello= "Hello Word";
  if(true){
$ echo sayHello;
};
```
例:○  
```php:sample
$ sayHello = "Hello Word";
if(true){
  $ echo sayHello;
};
```

