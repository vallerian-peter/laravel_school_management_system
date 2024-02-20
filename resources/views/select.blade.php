
@include('notification')

@include('include.header')

<div class="select-body">
    <div class="container" style="transform: translateY(5rem);">
        <div class="h2 text-center fw-bolder">Enter as ...</div>
        <div class="row mt-4">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <a href="studentLogin" class="card text-dark p-3" style="text-decoration-line: none;"> 
                    <dotlottie-player src="https://lottie.host/127209f4-df81-4d40-a770-29d235714fee/yl5pl4tRaP.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
                    <div class="h4 text-muted text-center pt-3">Student</div>
                </a>
            </div>
            <div class="col-md-5">
                <a href="lectureLogin" class="card text-dark p-3" style="text-decoration-line: none;"> 
                    <dotlottie-player src="https://lottie.host/828e7eb4-7047-41be-b097-9721097b3692/uAF1nIDAan.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
                    <div class="h4 text-muted text-center pt-3">Lecture</div>
                </a>
            </div>
            <div class="col-md-1"></div>

            <div class="row mt-3">
                <a href="/" class="text-decoration-underline"> <i class="bi bi-arrow-left"></i> Back</a>
            </div>
        </div>
    </div>
</div>

@include('include.footer')