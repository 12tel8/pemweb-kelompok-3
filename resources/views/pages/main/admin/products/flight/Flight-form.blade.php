<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flight Form</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout>
        <form action="form" method="POST" class="my-5 border">
            @csrf
            <div class="flex flex-col justify-center items-center space-y-4">
              {{-- airline --}}
              <div class="lg:flex lg:items-stretch space-x-4 ">
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">Airline Name</span>
                  </label>
                  <input type="text" name="airline_name" placeholder="Airline Name" class="input input-bordered w-full max-w-xs" />
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
                  <input type="text" name="plane_id" placeholder="Plane Id" class="input input-bordered w-full max-w-xs" />
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
                  <input type="text" name="plane_name" placeholder="Plane Name" class="input input-bordered w-full max-w-xs" />
                  @error('plane_name')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
              </div>
              {{-- endairline --}}
    
              {{-- routetime --}}
              <div class="lg:flex space-x-4">
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">From_Location</span>
                  </label>
                  <select name="from_location" class="select select-bordered">
                    <option disabled selected>Pick one</option>
                    <option>Jakarta</option>
                    <option>Bekasi</option>
                    <option>Bandung</option>
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
                    <option>Jakarta</option>
                    <option>Bekasi</option>
                    <option>Bandung</option>
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
                  <input type="datetime-local" name="departure_time" placeholder="Departure Time" class="input input-bordered w-full max-w-xs" />
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
                  <input type="datetime-local" name="arrival_time" placeholder="Arrival Time" class="input input-bordered w-full max-w-xs" />
                  @error('arrival_time')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
              </div>
              {{-- endroutetime --}}
    
              {{-- seatprice --}}
              <div class="lg:flex space-x-4">
                <div class="form-control w-full max-w-xs">
                  <label class="label">
                    <span class="label-text">Seat Class</span>
                  </label>
                  <select name="seat_class" class="select select-bordered">
                    <option disabled selected>Pick one</option>
                    <option value="2">First Class</option>
                    <option value="1">Bussines</option>
                    <option value="0">Economy</option>
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
                  <input type="number" name="seats" placeholder="Seats Amount" class="input input-bordered w-full max-w-xs" />
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
                  <input type="number" name="price" placeholder="Price" class="input input-bordered w-full max-w-xs" />
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
                  <input type="number" name="discount" placeholder="Discount" class="input input-bordered w-full max-w-xs" />
                  @error('discount')
                        <label class="label">
                            <span class="label-text-alt text-red-500">{{ $message }}</span>
                        </label>
                  @enderror
                </div>
              </div>
              {{-- endseatprice --}}

            </div>
            <div class="lg:mr-14 mt-10 flex justify-center">
              <input type="reset" class="btn w-[100px]">
              <input type="submit" class="btn w-[100px] ml-5">
            </div>
          </form>
    </x-layout>
</body>
</html>