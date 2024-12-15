<form class="row" method="POST" action="{{ route('public.appointment') }}" id="appointment">
    @csrf
    <!-- form group -->
    <div class="mb-3 col-12 col-md-6">
        <div class="form-floating">
            <input type="text" autocomplete="off" class="form-control" required name="fullname" id="fullname"
                placeholder="">
            <label for="fullname">Full Name<span class="text-danger"> *</span></label>
        </div>
    </div>
    <!-- form group -->
    <div class="mb-3 col-12 col-md-6">
        <div class="form-floating">
            <input type="number" autocomplete="off" class="form-control" required name="phone" id="phone"
                placeholder="">
            <label for="phone">Phone Number<span class="text-danger"> *</span></label>
        </div>
    </div>
    @if (isset($doctor))
        <!-- form group -->
        <div class="mb-3 col-12 col-md-4">
            @php
                $doctorsSelect = \App\Models\Doctor::whereStatus(1)->get();
            @endphp
            <label for="doctor" class="small">Doctor<span class="text-danger"> *</span></label>
            <select {{ isset($doctor) ? 'readyonly' : '' }} class="form-control" id="doctor" required name="doctor">
                <option value=""></option>
                @foreach ($doctorsSelect ?? [] as $doctorsingle)
                    <option {{ isset($doctor) && $doctorsingle->id == $doctor->id ? 'selected' : '' }}
                        value="{{ $doctorsingle->id }}">{{ $doctorsingle->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
    <!-- form group -->
    <div class="mb-3 col-12">
        <div class="form-floating">
            <textarea name="message" autocomplete="off" class="form-control" placeholder="" id="floatingMessage"></textarea>
            <label for="floatingMessage">Message</label>
        </div>
    </div>
    <!-- button -->
    <div class="col-12">
        <button type="submit" class="btn bg-dark text-light">Submit</button>
    </div>
</form>
