<div class="absolute">
    <div class="card w-[500px] bg-base-100 shadow-xl">
        <div class="card-body">
          <h2 class="card-title">Flight Form</h2>
          <form action="" method="POST">
            @csrf
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
            <div class="form-control w-full max-w-xs">
                <label class="label">
                  <span class="label-text">From Location</span>
                </label>
                <input type="text" name="from_location" placeholder="From Location" class="input input-bordered w-full max-w-xs" />
                <label class="label">
                  <span class="label-text-alt">Alt label</span>
                </label>
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                  <span class="label-text">To Location</span>
                </label>
                <input type="text" name="to_location" placeholder="To Location" class="input input-bordered w-full max-w-xs" />
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
                <input type="datetime-local" name="arrival_time" placeholder="arrival_time" class="input input-bordered w-full max-w-xs" />
                <label class="label">
                  <span class="label-text-alt">Alt label</span>
                </label>
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                  <span class="label-text">What is your name?</span>
                </label>
                <input type="text" name="airline_name" placeholder="Airline Name" class="input input-bordered w-full max-w-xs" />
                <label class="label">
                  <span class="label-text-alt">Alt label</span>
                </label>
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                  <span class="label-text">Pick the best fantasy franchise</span>
                </label>
                <select class="select select-bordered">
                  <option disabled selected>Pick seat class</option>
                  <option value="1">asd</option>
                  <option>Harry Potter</option>
                  <option>Lord of the Rings</option>
                  <option>Planet of the Apes</option>
                  <option>Star Trek</option>
                </select>
                <label class="label">
                  <span class="label-text-alt">Alt label</span>
                </label>
              </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                  <span class="label-text">Seats Number</span>
                </label>
                <input type="number" name="seats" placeholder="Seats Number" class="input input-bordered w-full max-w-xs" />
                <label class="label">
                  <span class="label-text-alt">Alt label</span>
                </label>
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                  <span class="label-text">What is your name?</span>
                </label>
                <input type="text" name="airline_name" placeholder="Airline Name" class="input input-bordered w-full max-w-xs" />
                <label class="label">
                  <span class="label-text-alt">Alt label</span>
                </label>
            </div>
          </form>
        </div>
      </div>
</div>