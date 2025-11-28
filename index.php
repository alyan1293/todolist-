 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
 </head>

 <body>


     <div class="main">

         <h1>Todo List</h1>

         <form action="index.php" method="post" name="formsubmit">

             <div class="searchitem">

                 <input id="todoname" type="text" placeholder="Enter new task" name="todoname" require>
                 <input id="addbtn" type="button" value="Add task" name="Add">



             </div>


             <ul id="todo">
                 <li id="listitem" class="listitem">
                      
                 </li>
                 
             </ul>



         </form>
     </div>

     <?php

// $data =$_POST['todoname'];
//  $formsubmit =$_POST['formsubmit'];
// if(isset($_POST['formsubmit'])){
// if($data == ''){
// echo '<script> alert("Please enter a todo name")  </script>';
// }

// }



?>


     <script src="script.js"></script>
 </body>

 </html>