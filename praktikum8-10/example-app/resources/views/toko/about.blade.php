@extends('template/main')

@section('content')
<body>
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tentang Kami</h4>
                <h1 class="display-4">Melayani Sejak 2000</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Cerita Kami</h1>
                    <h5 class="mb-3">Memulai usaha dengan modal yang kecil dan hanya menyediakan sedikit menu seperti Hot Esspresso, Hot Bread, Hot Caffe Americano, dan Oreo.</h5>
                    <p>Namun, dengan kerja keras dan kreativitas, Warkop NF berkembang dan menambah menu makanan lain seperti Hot Flat White, Iced Flat White, Mini Pizza, Cookies, dll. 
                        Warkop ini menjadi tempat nongkrong yang digemari oleh anak muda karena suasananya yang santai dan harga yang terjangkau.</p>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="/img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Visi Kami</h1>
                    <p>Warkop NF memiliki beberapa visi yang di sepakati sejak awal pembangunan Warkop NF</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Menjadi tempat nongkrong yang paling digemari oleh masyarakat setempat.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Menyediakan menu makanan yang berkualitas dengan harga yang terjangkau.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Menjadi usaha kuliner yang dapat diandalkan dan dipercaya oleh pelanggan.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Mengembangkan usaha dengan menambahkan menu-menu baru dan inovasi dalam bidang kuliner.</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
</body>
@endsection