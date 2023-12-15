<!-- $users = []; -->

<table>
  <tr>  
  @foreach ($users as $key => $value )

    <th>{{$key}}</th>
  @endforeach
  </tr>  

  <tr>
  @foreach ($users as $key=>$value )
      
  <td>{{$value}}</td>
  @endforeach


  </tr>
  </table>
