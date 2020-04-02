<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="{{asset('css/table.css')}}">
      <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <body>

      @extends('layouts.layout')

      @section('content')
      <div class="table-box">
          <h1></h1>
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
       
       </table>
         <div class="add-item">
             <a class="btn btn-primary btn-block" href="#">add items</a>
        </div>
       </div>

       @endsection
  </body>
  </html>