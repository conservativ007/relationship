<table>
  <tr>
    <th>login</th>
    <th>city</th>
    <th>country</th>
  </tr>

  @foreach($users as $user)
  <tr>
    <td>{{$user->login}}</td>
    <td>{{$user->city->name}}</td>
    <td>{{$user->city->country->name}}</td>
  </tr>
  @endforeach
</table>
