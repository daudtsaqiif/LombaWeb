@extends('admin.parent')


@section('content')
    <div class="relative">
        <table class="w-[90%] mx-auto dark:text-gray-400 bg-green-200 mt-10 border border-black">
            <tr>
                <th rowspan="12" class="px-6 py-3 w-9">
                    Sebelum Menyewa Mobil
                </th>
                <td class="border border-black">Lakukan pemesanan minimal 1x24 jam sebelum waktu penggunaan. Setelah
                    pesanan dikonfirmasi, penyewa wajib menyediakan foto dokumen:</td>
            </tr>
            <tr>
                <td class="border border-black">Pengemudi harus berusia 18 tahun keatas</td>
            </tr>

            <tr>
                <td class="border border-black">Kartu identitas (SIM A, KTP, paspor)</td>
            </tr>
            <tr>
                <td class="border border-black">Pengemudi harus memberikan kartu kredit mereka kepada penyedia kendaraan.
                    Jika pengemudi tidak memiliki kartu kredit, pengemudi harus menggantinya dengan 2 dokumen dari pilihan
                    berikut: NPWP, BPJS, atau Akta Kelahiran, Kartu Keluarga, Kartu Identitas Karyawan, Paspor, Ijazah
                    Sekolah Terakhir, Kartu Tanda Anggota Polri/TNI.</td>
            </tr>
            <tr>
                <td class="border border-black">Tentukan detail lokasi pengambilan mobil dengan pihak pemilik mobil
                </td>
            </tr>
            <tr>
                <td class="border border-black">Proses verifikasi dokumen wajib dilengkapi minimal 4 (empat) jam sebelum
                    penggunaan.</td>
            </tr>
            <tr>
                <td class="border border-black">Wajib membawa dan menunjukkan dokumen asli yang telah disebutkan di atas
                    saat serah terima mobil di lokasi yang telah disepakati.</td>
            </tr>
            <tr>
                <td class="border border-black">Pada saat serah terima kendaraan, pihak penyedia rental akan melakukan
                    pengecekan keaslian data dan kondisi kendaraan.</td>
            </tr>
            <tr>
                <td class="border border-black">Pihak penyedia berhak membatalkan apabila data tidak sesuai dan
                    syarat sewa tidak dapat dilengkapi.</td>
            </tr>
            <tr>
                <td class="border border-black">Apabila unit yang dipesan tidak tersedia, penyedia rental wajib
                    mengganti kendaraan dengan model yang lebih tinggi dan tahun yang lebih baru dengan persetujuan
                    penyewa terlebih dahulu.</td>
            </tr>
            <tr>
                <td class="border border-black">Penyewa wajib membayar deposit maksimum IDR 200.000 atau sesuai
                    kebijakan masing-masing penyedia rental.</td>
            </tr>
            <tr>
                <td class="border border-black">Pengembalian deposit mengikuti kebijakan masing-masing penyedia rental.
                </td>
            </tr>

        </table>

        <table class="w-[90%] mx-auto dark:text-gray-400 bg-green-200 mt-10 border border-black">
            <tr>
                <th rowspan="7" class="px-6 py-3 w-9">
                    Saat Menyewa Mobil
                </th>
                <td class="border border-black">Pemakaian kendaraan tidak lebih dari 250 km atau sesuai dengan kebijakan
                    penyedia rental.</td>
            </tr>
            <tr>
                <td class="border border-black">Penyewa tidak diperkenankan membawa penumpang dan barang melebihi
                    kapasitas maksimal mobil yang disewa.</td>
            </tr>
            <tr>
                <td class="border border-black">Kecelakaan dan sanksi yang diakibatkan oleh kelebihan penumpang dan
                    kelebihan muatan menjadi tanggung jawab penyewa sepenuhnya.</td>
            </tr>
            <tr>
                <td class="border border-black">Kehilangan dan kerusakan barang selama perjalanan di luar tanggung jawab
                    penyedia</td>
            </tr>
            <tr>
                <td class="border border-black">Penyewa bertanggung jawab untuk biaya penggantian atau perbaikan atas
                    kehilangan atau kerusakan seperti, pada STNK, kunci mobil, aksesoris, alat
                    mobil, head unit, tools set, kursi mobil, noda, goresan, dan biaya lain yang timbul akibat kelalaian
                    penyewa.</td>
            </tr>
            <tr>
                <td class="border border-black">Penyewa bertanggung jawab atas semua denda parkir, lalu lintas, dan
                    lainnya yang terjadi akibat pelanggaran hukum selama periode penyewaan.</td>
            </tr>
            <tr>
                <td class="border border-black">Penyewa tidak diizinkan memindahtangankan kendaraan kepada pihak lain
                    tanpa seizin pihak penyedia rental.</td>
            </tr>
        </table>

        <table class="w-[90%] mx-auto dark:text-gray-400 bg-green-200 mt-10 border border-black">
            <tr>
                <th rowspan="5" class="px-6 py-3 w-9">
                    Setelah Menyewa Mobil
                </th>
                <td class="border border-black">Penyedia rental berhak untuk menahan deposit jika mobil rusak atau jika
                    penyewa melanggar hukum selama periode rental.</td>
            </tr>
            <tr>
                <td class="border border-black">Penyewa harus mengembalikan mobil dengan volume BBM sesuai dengan posisi
                    pada saat penjemputan atau mengikuti bar awal (bar to bar) / sesuai kesepakatan.</td>
            </tr>
            <tr>
                <td class="border border-black"> Penyewa wajib mengembalikan mobil dalam kondisi yang sama seperti saat
                    mobil diterima.</td>
            </tr>
            <tr>
                <td class="border border-black"> Penyewa wajib mengembalikan mobil paling lambat pada waktu penyelesaian sewa yang tertera pada voucher/invoice. </td>
            </tr>
            <tr>
                <td class="border border-black">Biaya asuransi dan biaya lainnya yang timbul atas kehilangan kendaraan
                    akan menjadi tanggung jawab pelanggan sesuai dengan ketentuan masing-masing penyedia rental.</td>
            </tr>
        </table>
    </div>
@endsection
