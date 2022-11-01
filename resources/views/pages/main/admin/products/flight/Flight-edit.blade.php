<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flight Edit</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout>
        <form method="POST">
            @csrf
            <div class="lg:flex lg:justify-center">
              {{-- airline --}}
              <div class="lg:mx-14">
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">Airline Name</span>
                  </label>
                  <input type="text" name="airline_name" value={{$flight->airline_name}} placeholder="Airline Name" class="input input-bordered w-full max-w-xs" />
                  @error('airline_name')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">Plane Id</span>
                  </label>
                  <input type="text" name="plane_id" value={{$flight->plane_id}} placeholder="Plane Id" class="input input-bordered w-full max-w-xs" />
                  @error('plane_id')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">Plane Name</span>
                  </label>
                  <input type="text" name="plane_name" value={{$flight->plane_name}} placeholder="Plane Name" class="input input-bordered w-full max-w-xs" />
                  @error('plane_name')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
              </div>
              {{-- endairline --}}
    
              {{-- routetime --}}
              <div class="lg:mx-14">
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">From_Location</span>
                  </label>
                  <select name="from_location" class="select select-bordered">
                    <option disabled selected>Pick one</option>
                    <option value="Jakarta" {{($flight->from_location == "Jakarta") ? 'selected' : ''}}>Jakarta</option>
                    <option value="Bekasi" {{($flight->from_location == "Bekasi") ? 'selected' : ''}}>Bekasi</option>
                    <option value="Bandung" {{($flight->from_location == "Bandung") ? 'selected' : ''}}>Bandung</option>
                  </select>
                  @error('from_location')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">To_Location</span>
                  </label>
                  <select name="to_location" class="select select-bordered">
                    <option disabled selected>Pick one</option>
                    <option value="Jakarta" {{($flight->to_location == "Jakarta") ? 'selected' : ''}} >Jakarta</option>
                    <option value="Bekasi" {{($flight->to_location == "Bekasi") ? 'selected' : ''}} >Bekasi</option>
                    <option value="Bandung" {{($flight->to_location == "Bandung") ? 'selected' : ''}} >Bandung</option>
                  </select>
                  @error('to_location')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">Departure Time</span>
                  </label>
                  <input type="datetime-local" name="departure_time" value="{{$flight->departure_time}}" placeholder="Departure Time" class="input input-bordered w-full max-w-xs" />
                  @error('departure_time')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">Arrival Time</span>
                  </label>
                  <input type="datetime-local" name="arrival_time" value="{{$flight->arrival_time}}" placeholder="Arrival Time" class="input input-bordered w-full max-w-xs" />
                  @error('arrival_time')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
              </div>
              {{-- endroutetime --}}
    
              {{-- seatprice --}}
              <div class="lg:mx-14">
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">Seat Class</span>
                  </label>
                  <select name="seat_class" class="select select-bordered">
                    <option disabled selected>Pick one</option>
                    <option value="2" {{($flight->seat_class === 2 ) ? 'selected' : ''}}>First Class</option>
                    <option value="1" {{($flight->seat_class === 1 ) ? 'selected' : ''}}>Bussines</option>
                    <option value="0" {{($flight->seat_class === 0 ) ? 'selected' : ''}}>Economy</option>
                  </select>
                  @error('seat_class')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">Seats</span>
                  </label>
                  <input type="number" name="seats" value={{$flight->seats}} placeholder="Seats Amount" class="input input-bordered w-full max-w-xs" />
                  @error('seats')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">Price</span>
                  </label>
                  <input type="number" name="price" value={{$flight->price}} placeholder="Price" class="input input-bordered w-full max-w-xs" />
                  @error('price')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">Discount</span>
                  </label>
                  <input type="number" name="discount" value={{$flight->discount}} placeholder="Discount" class="input input-bordered w-full max-w-xs" />
                  @error('discount')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
              </div>
              {{-- endseatprice --}}
            </div>
            <div class="lg:mr-14 mt-10 flex lg:justify-end justify-center">
              <input type="reset" class="btn w-[100px]">
              <input type="submit" class="btn w-[100px] ml-5">
            </div>
            {{-- @endforeach --}}
          </form>
    </x-layout>
</body>
</html>