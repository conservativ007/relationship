
<table>
  <tr>
    <th>u_id</th>
    <th>u_login</th>
    <th>u_pass</th>
    <th>city_id</th>
    <th>city_name</th>
    <th>country_id</th>
    <th>country_name</th>
  </tr>
  @for($i = 0; $i < count($cities); $i++)
  <tr>
    <td>{{$users[$i]['id']}}</td>
    <td>{{$users[$i]['login']}}</td>
    <td>{{$users[$i]['password']}}</td>
    <td>{{$cities[$i]['id']}}</td>
    <td>{{$cities[$i]['name']}}</td>
    <td>{{$country['id']}}</td>
    <td>{{$country['name']}}</td>
  </tr>
  @endfor
</table>
