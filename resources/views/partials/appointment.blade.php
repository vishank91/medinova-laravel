<!-- Appointment Start -->
<div class="container-fluid bg-primary my-5 py-5">
    <div class="container py-5">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Appointment</h5>
                    <h1 class="display-4">Make An Appointment</h1>
                </div>
                <p class="text-dark mb-5">At **{{ config('app.siteName') }}**, scheduling your healthcare appointment is
                    simple, convenient, and hassle-free. Choose your preferred department, select a suitable date and
                    time, and connect with our experienced medical professionals for personalized consultation and
                    expert guidance. We are committed to making quality healthcare easily accessible for every patient.
                </p>
                <p class="text-dark mb-5">Your health deserves timely attention and trusted medical care. **Book your
                    appointment today** and take an important step toward better health and wellness. Our dedicated
                    doctors and support team are ready to understand your concerns, provide appropriate guidance, and
                    ensure a comfortable and patient-focused healthcare experience.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="bg-white text-center rounded p-5">
                    <h1 class="mb-4">Book An Appointment</h1>
                    <form action="{{ route('appointment-store') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <select id="department" class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Choose Department</option>
                                    @foreach ($department as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <select id="doctor" name="doctorId" class="form-select bg-light border-0"
                                    style="height: 55px;">
                                    <option selected value="">Select Doctor</option>
                                </select>
                                @error('doctorId')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <input type="text" name="name" class="form-control bg-light border-0"
                                    placeholder="Your Name" style="height: 55px;" value="{{ old('name') }}">

                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" class="form-control bg-light border-0"
                                    placeholder="Your Email Address" style="height: 55px;" value="{{ old('email') }}">

                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-12 col-sm-6">
                                <input type="text" name="phone" class="form-control bg-light border-0"
                                    placeholder="Your Phone Number" style="height: 55px;" value="{{ old('phone') }}">

                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="text" name="date"  value="{{ old('date') }}" class="form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Date" data-target="#date" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time" data-target-input="nearest">
                                    <input type="text" name="time" value="{{ old('time') }}" class="form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Time" data-target="#time" data-toggle="datetimepicker"
                                        style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Make An
                                    Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->


<script>
    const department = document.getElementById("department")
    const doctor = document.getElementById("doctor")

    department.addEventListener("change", function() {
        let did = this.value
        doctor.innerHTML = '<option selected value="">Select Doctor</option>'

        if (!did) {
            return
        }

        fetch(`/get-doctor/${did}`)
            .then(response => response.json())
            .then(doctors => {
                doctors.forEach(item => {
                    const option = document.createElement("option")
                    option.value = item.id
                    option.textContent = item.name
                    doctor.appendChild(option)
                });
            })
            .catch(error => {
                console.log(error)
            })
    })
</script>
