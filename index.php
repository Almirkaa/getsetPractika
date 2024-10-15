<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Set</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php  

class Cookie {  
    
    private $type;  

   
    public function setType($type) {  
        // Возможные виды печенья  
        $availableTypes = ['шоколадное', 'ванильное', 'ореховое', 'кокосовое'];  
        
        
        if (in_array($type, $availableTypes)) {  
            $this->type = $type;  
        } else {  
            throw new Exception("Тип печенья '{$type}' не доступен.");  
        }  
    }  

    // Публичный метод для получения типа печенья  
    public function getType() {  
        return "Тип печенья: " . $this->type;  
    }  
}  

 
 
    $cookie = new Cookie();  
    $cookie->setType('шоколадное'); 
    echo  $cookie->getType();

?>
</body>
</html>