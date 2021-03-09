# Dream Creator Information

Kendi ikayenizi oluşturmak için story değişkenindeki ln(Line -> Satır) yerlerine kendi hikayelerinizi yazabilirsiniz. Ama dikkatli olun ln değişkenlerini
değiştirirseniz(örnek: satır,line,paragraph) kod çalışmıyacaktır.
```php
$story = array(
    "ln1" => "",
    "ln2" => "",
    "ln3" => "",
    "ln4" => "",
    "ln5" => ""

);


```

Şimdi bir hikaye yazalım:

```php
$story = array(
    "ln1" => "Günlerden bir gün Mehmet dışarıda oynuyordu.",
    "ln2" => "Arkadaşları Mehmet'e elma yeme teklifi etti.",
    "ln3" => "Lorem ipsum sit dolor amet",
    "ln4" => "Lorem ipsum sit dolor amet",
    "ln5" => "Lorem ipsum sit dolor amet"

);


```

Ama bu şeyi basit bir şekilde herkes yazabilir. Başta bize bir şeyler sormuştu. Onlar nereye gitti? Hala ordalar ama kullanılmayı bekliyorlar.
Nasıl kullanıldığını da gösterelim

```php
$story = array(
    "ln1" => "Günlerden bir gün / dışarıda oynuyordu.",
    "ln2" => "Arkadaşları /'e elma yeme teklifi etti.",
    "ln3" => "Lorem ipsum sit dolor amet /",
    "ln4" => "Lorem ipsum / sit dolor amet",
    "ln5" => "Lorem / ipsum sit dolor amet"

);


```

Slahs işaretleri(/) Keywordleri çağırır.


## Son
