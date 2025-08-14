@extends('TampilanUser.partials.main')

@section('konten')
    <header class="py-5 bg-dark text-white">
        <div class="container px-5">
            <div class="row align-items-center gy-4">
                <div class="col-lg-7">
                    <h1 class="display-4 fw-bold">Warnet Gaming</h1>
                    <p class="lead mb-4">Main tanpa lag, kursi nyaman, paket hemat, open 24 jam.</p>
                    <div class="d-flex gap-3">
                        <a href="#harga" class="btn btn-primary btn-lg">Lihat Harga</a>
                        <a href="#peta-kursi" class="btn btn-outline-light btn-lg">Pilih Kursi</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="bg-gradient p-4 rounded-4 border border-2 border-primary">
                        <div class="d-flex justify-content-center gap-3 align-items-center">
                            <div>
                                <div class="fs-2 fw-bold text-primary">1 Gbps</div>
                                <div class="small text-secondary">Dedicated Fiber</div>
                            </div>
                            <div class="vr"></div>
                            <div>
                                <div class="fs-2 fw-bold text-primary">144 Hz</div>
                                <div class="small text-secondary">Monitor</div>
                            </div>
                            <div class="vr"></div>
                            <div>
                                <div class="fs-2 fw-bold text-primary">AC Nyaman</div>
                                <div class="small text-secondary">Ruang Bebas Asap</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="harga" class="py-5">
        <div class="container px-5">
            <h2 class="fw-bold mb-4">Harga & Paket</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Per Jam</h5>
                            <p class="display-6 fw-bold text-primary mb-0">Rp6.000</p>
                            <div class="text-muted">Senin–Jumat</div>
                            <ul class="mt-3 mb-4 small text-muted">
                                <li>PC Entry 60–75 FPS</li>
                                <li>Free Air Mineral</li>
                            </ul>
                            <a href="#peta-kursi" class="btn btn-outline-primary w-100">Pesan Kursi</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Paket Malam (6 Jam)</h5>
                            <p class="display-6 fw-bold text-primary mb-0">Rp25.000</p>
                            <div class="text-muted">22:00 – 04:00</div>
                            <ul class="mt-3 mb-4 small text-muted">
                                <li>PC Medium 100+ FPS</li>
                                <li>Gratis Mie/Gorengan</li>
                            </ul>
                            <a href="#peta-kursi" class="btn btn-primary w-100">Ambil Paket</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Member (Bulanan)</h5>
                            <p class="display-6 fw-bold text-primary mb-0">Rp199.000</p>
                            <div class="text-muted">Bonus 10% waktu</div>
                            <ul class="mt-3 mb-4 small text-muted">
                                <li>Prioritas Booking</li>
                                <li>Ruang Smoking Area</li>
                            </ul>
                            <a href="#peta-kursi" class="btn btn-outline-primary w-100">Daftar Member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="spesifikasi" class="py-5 bg-light">
        <div class="container px-5">
            <h2 class="fw-bold mb-4">Spesifikasi PC</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 bg-white rounded-3 shadow-sm h-100">
                        <h5 class="mb-3">Entry (20 Unit)</h5>
                        <ul class="small text-muted mb-0">
                            <li>CPU: Ryzen 5 3600</li>
                            <li>GPU: GTX 1650 Super</li>
                            <li>RAM: 16GB DDR4</li>
                            <li>Monitor: 24" 75Hz</li>
                            <li>Storage: 512GB SSD</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white rounded-3 shadow-sm h-100 border border-primary">
                        <h5 class="mb-3">Medium (12 Unit)</h5>
                        <ul class="small text-muted mb-0">
                            <li>CPU: Ryzen 5 5600</li>
                            <li>GPU: RTX 2060</li>
                            <li>RAM: 16GB DDR4</li>
                            <li>Monitor: 24" 144Hz</li>
                            <li>Storage: 1TB SSD</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white rounded-3 shadow-sm h-100">
                        <h5 class="mb-3">High (8 Unit)</h5>
                        <ul class="small text-muted mb-0">
                            <li>CPU: Ryzen 7 5800X</li>
                            <li>GPU: RTX 3060 Ti</li>
                            <li>RAM: 32GB DDR4</li>
                            <li>Monitor: 27" 165Hz</li>
                            <li>Storage: 1TB NVMe</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="peta-kursi" class="py-5">
        <div class="container px-5">
            <h2 class="fw-bold mb-4">Peta Kursi</h2>
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="p-3 bg-light rounded-3">
                        <div class="d-flex justify-content-between mb-2 small text-muted">
                            <span>Klik untuk memilih kursi</span>
                            <span><span class="badge bg-secondary">Kosong</span> <span class="badge bg-success">Dipilih</span> <span class="badge bg-danger">Penuh</span></span>
                        </div>
                        <div class="seat-grid" data-rows="4" data-cols="8"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Ringkasan</h5>
                            <div class="d-flex justify-content-between small text-muted">
                                <span>Kursi dipilih</span>
                                <span id="selected-count">0</span>
                            </div>
                            <div class="d-flex justify-content-between small text-muted">
                                <span>Estimasi biaya</span>
                                <span id="estimated-price">Rp0</span>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <label class="form-label">Durasi</label>
                                <select id="durasi" class="form-select">
                                    <option value="6000">1 jam - Rp6.000</option>
                                    <option value="11000">2 jam - Rp11.000</option>
                                    <option value="25000">Paket malam - Rp25.000</option>
                                </select>
                            </div>
                            <button class="btn btn-primary w-100" id="btn-book">Booking Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .seat-grid{display:grid;gap:.5rem;grid-template-columns:repeat(8,1fr)}
            .seat{aspect-ratio:1/1;border-radius:.5rem;display:flex;align-items:center;justify-content:center;font-weight:600;cursor:pointer}
            .seat.empty{background:#f1f3f5;border:1px solid #dee2e6;color:#6c757d}
            .seat.selected{background:#198754;color:#fff}
            .seat.taken{background:#dc3545;color:#fff;cursor:not-allowed}
        </style>
        <script>
            (function(){
                const grid = document.querySelector('.seat-grid');
                const rows = parseInt(grid.getAttribute('data-rows'),10);
                const cols = parseInt(grid.getAttribute('data-cols'),10);
                const takenSet = new Set(['A3','A4','B7','C1','D5']);
                for(let r=0;r<rows;r++){
                    for(let c=0;c<cols;c++){
                        const seat = document.createElement('div');
                        const label = String.fromCharCode(65+r)+(c+1);
                        seat.className = 'seat ' + (takenSet.has(label)?'taken':'empty');
                        seat.textContent = label;
                        seat.dataset.label = label;
                        seat.addEventListener('click',()=>{
                            if(seat.classList.contains('taken')) return;
                            seat.classList.toggle('selected');
                            seat.classList.toggle('empty');
                            updateSummary();
                        });
                        grid.appendChild(seat);
                    }
                }
                const selectedCountEl = document.getElementById('selected-count');
                const priceEl = document.getElementById('estimated-price');
                const durasiEl = document.getElementById('durasi');
                const btnBook = document.getElementById('btn-book');
                function updateSummary(){
                    const selected = grid.querySelectorAll('.seat.selected').length;
                    selectedCountEl.textContent = selected;
                    const pricePer = parseInt(durasiEl.value,10);
                    priceEl.textContent = new Intl.NumberFormat('id-ID',{style:'currency',currency:'IDR',maximumFractionDigits:0}).format(selected*pricePer);
                }
                durasiEl.addEventListener('change',updateSummary);
                btnBook.addEventListener('click',()=>{
                    const seats = Array.from(grid.querySelectorAll('.seat.selected')).map(s=>s.dataset.label);
                    if(seats.length===0){ alert('Pilih minimal 1 kursi.'); return; }
                    alert('Booking berhasil untuk kursi: '+seats.join(', '));
                });
                updateSummary();
            })();
        </script>
    </section>

    <section id="turnamen" class="py-5 bg-light">
        <div class="container px-5">
            <h2 class="fw-bold mb-4">Jadwal Turnamen</h2>
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Game</th>
                            <th>Tanggal</th>
                            <th>Format</th>
                            <th>Hadiah</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Valorant</td>
                            <td>Sabtu, 31 Agu 2025</td>
                            <td>5v5 BO1</td>
                            <td>Rp3.000.000</td>
                            <td><a href="#" class="btn btn-outline-primary btn-sm">Daftar</a></td>
                        </tr>
                        <tr>
                            <td>Mobile Legends</td>
                            <td>Minggu, 1 Sep 2025</td>
                            <td>5v5 BO1</td>
                            <td>Rp2.000.000</td>
                            <td><a href="#" class="btn btn-outline-primary btn-sm">Daftar</a></td>
                        </tr>
                        <tr>
                            <td>CS2</td>
                            <td>Minggu, 8 Sep 2025</td>
                            <td>5v5 MR12</td>
                            <td>Rp2.500.000</td>
                            <td><a href="#" class="btn btn-outline-primary btn-sm">Daftar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="kontak" class="py-5">
        <div class="container px-5">
            <div class="p-5 bg-dark text-white rounded-4 d-flex flex-column flex-md-row align-items-center justify-content-between">
                <div class="mb-3 mb-md-0">
                    <h3 class="fw-bold mb-1">Siap main sekarang?</h3>
                    <div class="text-white-50">Booking cepat lewat WhatsApp, respon &lt; 5 menit.</div>
                </div>
                <a class="btn btn-success btn-lg" href="https://wa.me/6281234567890" target="_blank" rel="noopener">Chat WhatsApp</a>
            </div>
        </div>
    </section>
@endsection