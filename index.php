<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>
    
    <script>
      
      function sayHello(){
        var count = 1;
        for(var i=0;i<3;i++){
          alert('Hello! count: ' + count);
          count++;
        }
        
      }

      function saySomething(something){
        alert(something);       
      }
      
      function sayGoodbye(){

        alert('Goodbye!');
        
      }
            
      sayHello();
      saySomething('something');
      sayGoodbye();
      
    </script>
    
  </body>
</html>
