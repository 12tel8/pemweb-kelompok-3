<div class="overflow-x-auto w-full">
    <table class="table w-full">
      <!-- head -->
      <thead>
        <tr align="center">
          <th>Flight Id</th>
          <th>Status</th>
          <th>Airlines</th>
          <th>Destination</th>
          <th>Time</th>
          <th>Seat Class</th>
          <th>Seats</th>
          <th>Price</th>
          <th>Discount</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($flights as $flight)
        <tr align="center">
          <td>
            <div>{{$flight->id}}</div>
          </td>
          <td>
            @if ($flight->status === 0)
                <div class="badge badge-lg bg-green-500 border-transparent">Open</div>
            @elseif ($flight->status === 1)
                <div class="badge badge-lg bg-yellow-500 border-transparent">On Progress</div>
            @elseif ($flight->status === 2)
                <div class="badge badge-lg bg-blue-500 border-transparent">Done</div>
            @elseif ($flight->status === 2)
                <div class="badge badge-lg bg-red-500 border-transparent">Delayed</div>
            @endif
          </td>
          <td class="flex justify-center">
            <div class="flex items-center w-[200px] space-x-5">
                <div class="avatar">
                    <div class="mask mask-squircle w-12 h-12">
                        <img src="https://placeimg.com/80/80/people" alt="Avatar Tailwind CSS Component" />
                    </div>
                </div>
                <div class="flex flex-col items-start">
                    <div class="font-bold">{{$flight->airline_name}}</div>
                    <div class="text-sm opacity-50">{{$flight->plane_name}} | {{$flight->plane_id}}</div>
                </div>
            </div>
          </td>
          <td>
            <div class="badge badge-lg">{{$flight->from_location}}</div>
            <i class="fa fa-arrow-right"></i>
            <div class="badge badge-lg">{{$flight->to_location}}</div>
          </td>
          <td>
            <div class="">{{$flight->departure_time}}</div>
            <i class="fa fa-arrow-down"></i>
            <div class="">{{$flight->arrival_time}}</div>
          </td>
          <th>
            @if ($flight->seat_class === 0)
                <p>Economy</p>
            @elseif ($flight->seat_class === 1)
                <p>Bussines</p>
            @elseif ($flight->seat_class === 2)
                <p>First Class</p>
            @endif
          </th>
          <th>
            {{$flight->seats}}
          </th>
          <th>
            {{$flight->price}}
          </th>
          <th>
            {{$flight->discount}}
          </th>
          <th>
            <a href='flight/edit/{{$flight->id}}' class="btn">Edit</a>
            <a href='flight/delete/{{$flight->id}}' class="btn">Delete</a>
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
    
  </div>
