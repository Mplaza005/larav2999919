@extends('layouts.app')

@section('content')

                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category['id'] }}</td>
                        <td>{{ $category['name'] }}</td>

                    </tr>
                @endforeach

                <br><br>


                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
