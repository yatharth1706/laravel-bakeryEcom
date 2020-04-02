<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="{{ asset('css/table.css') }}">
      <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <body>
      <div class="table-box">
          
       <table>
           <tr class="thh">
               <td>id</td>
               <td>title</td>
               <td>cost</td>
               <td>rating</td>
               <td>summary</td>
               <td>edit</td>
               <td>delete</td>
           </tr>
           <?php
            
            for($i =0; $i < count(session('product')); $i++){
                 echo "<tr><td>";
                  echo(session('product')[$i]['id']);
                  echo("</td><td>");
                  echo(session('product')[$i]['title']);
                  echo("</td><td>");
                  echo(session('product')[$i]['cost']);
                  echo("</td><td>");
                  echo(session('product')[$i]['rating']);
                  echo("</td><td>");
                  echo(session('product')[$i]['summary']);
                  echo("</td><td>");
                  echo('<form action="addProduct" method="post"><input type="hidden" ');
                  echo('name="id" value="'.session('product')[$i]['id'].'">');
                  echo('<input type="hidden" name="product" value="'.session('productName').'">');
                  echo('<input class="btn btn-primary btn-block" type="submit" value="edit" name="edit">');
                  echo("\n</form>\n");
                  echo("</td><td>");
                  echo('<form action="addProduct" method="post"><input type="hidden" ');
                  echo('name="id" value="'.session('product')[$i]['id'].'">');
                  echo('<input type="hidden" name="product" value="'.session('productName').'">');
                  echo('<input class="btn btn-primary btn-block" type="submit" value="Delete" name="delete">');
                  echo("\n</form>\n");
                  echo("</td></tr>");

              }
       ?> 
         
       </table>
        
         <div class="add-item">
             <a class="btn btn-primary btn-block" href="{{url('addProduct')}}">add items</a>
        </div>
       </div>
  </body>
  </html>
<!-- 
  @for ($i =0; $i < count(session('product')); $i++)
           <tr>
               <td>{{session('product')[$i]['id']}}</td>
               <td>{{session('product')[$i]['title']}}</td>
               <td>{{session('product')[$i]['cost']}}</td>
               <td>{{session('product')[$i]['rating']}}</td>
               <td>{{session('product')[$i]['summary']}}</td>
               <td><form action="addProduct" method="post">
                  @csrf <input type="hidden" name="id" value="<?php echo(session('product')[$i]['id']);?>">
                  <input type="hidden" name="product" value="<?php echo(session('productName'))?>">
                  <input class="btn btn-primary btn-block" type="submit" value="edit" name="edit"></td>

               <td><form method="post">
                   @csrf<input type="hidden" name="id" value="<?php echo(session('product')[$i]['id']);?>">
                  <input type="hidden" name="product" value="<?php echo(session('productName'))?>">
                  <input class="btn btn-primary btn-block" type="submit" value="Delete" name="del"></td>
           </tr>
    @endfor -->