<input type="checkbox" id="flight-edit" class="modal-toggle" />
        <div class="modal">
        <div class="modal-box lg:w-full lg:max-w-5xl max-w-sm relative">
            <label for="flight-edit" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
            <h1 class="font-bold mb-5">FLIGHT</h1>
            <form action={{ route("flight") }} method="POST">
              @csrf
              {{-- {{$data->id}} --}}
              @foreach($flight as $data)
              {{$data?->airline_name}}
              <div class="lg:flex lg:justify-center">
                {{-- airline --}}
                <div class="lg:mx-14">
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Airline Name</span>
                    </label>
                    <input type="text" name="airline_name" placeholder="Airline Name" class="input input-bordered w-full max-w-xs" />
                    <label class="label">
                      <span class="label-text-alt">Alt label</span>
                    </label>
                  </div>
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Plane Id</span>
                    </label>
                    <input type="text" name="plane_id" placeholder="Plane Id" class="input input-bordered w-full max-w-xs" />
                    <label class="label">
                      <span class="label-text-alt">Alt label</span>
                    </label>
                  </div>
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Plane Name</span>
                    </label>
                    <input type="text" name="plane_name" placeholder="Plane Name" class="input input-bordered w-full max-w-xs" />
                    <label class="label">
                      <span class="label-text-alt">Alt label</span>
                    </label>
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
                      <option>Jakarta</option>
                      <option>Bekasi</option>
                      <option>Bandung</option>
                    </select>
                    <label class="label">
                      <span class="label-text-alt">Alt label</span>
                    </label>
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
                    <label class="label">
                      <span class="label-text-alt">Alt label</span>
                    </label>
                  </div>
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Departure Time</span>
                    </label>
                    <input type="datetime-local" name="departure_time" placeholder="Departure Time" class="input input-bordered w-full max-w-xs" />
                    <label class="label">
                      <span class="label-text-alt">Alt label</span>
                    </label>
                  </div>
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Arrival Time</span>
                    </label>
                    <input type="datetime-local" name="arrival_time" placeholder="Arrival Time" class="input input-bordered w-full max-w-xs" />
                    <label class="label">
                      <span class="label-text-alt">Alt label</span>
                    </label>
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
                      <option value="first_class">First Class</option>
                      <option>Bussines</option>
                      <option>Economy</option>
                    </select>
                    <label class="label">
                      <span class="label-text-alt">Alt label</span>
                    </label>
                  </div>
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Seats</span>
                    </label>
                    <input type="number" name="seats" placeholder="Seats Amount" class="input input-bordered w-full max-w-xs" />
                    <label class="label">
                      <span class="label-text-alt">Alt label</span>
                    </label>
                  </div>
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Price</span>
                    </label>
                    <input type="number" name="price" placeholder="Price" class="input input-bordered w-full max-w-xs" />
                    <label class="label">
                      <span class="label-text-alt">Alt label</span>
                    </label>
                  </div>
                  <div class="form-control w-full max-w-xs">
                    <label class="label">
                      <span class="label-text">Discount</span>
                    </label>
                    <input type="number" name="discount" placeholder="Discount" class="input input-bordered w-full max-w-xs" />
                    <label class="label">
                      <span class="label-text-alt">Alt label</span>
                    </label>
                  </div>
                </div>
                {{-- endseatprice --}}
              </div>
              <div class="lg:mr-14 mt-10 flex lg:justify-end justify-center">
                <input type="reset" class="btn w-[100px]">
                <input type="submit" class="btn w-[100px] ml-5">
              </div>
              @endforeach
            </form>
        </div>
        </div>