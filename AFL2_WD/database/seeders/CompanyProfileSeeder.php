<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('company_profiles')->insert([

            'tentang_kami' => "Mamank Tech Company adalah perusahaan jasa kreatif yang terus menerus berinovasi dalam dunia digital. Berbasis di Jakarta, Indonesia, kami telah menjadi salah satu pelopor dalam penyediaan solusi kreatif yang mencakup berbagai bidang, seperti pembuatan website, desain grafis, videografi, dan berbagai layanan terkait. Kami berkomitmen untuk membantu klien kami mencapai tujuan bisnis mereka melalui penggunaan teknologi terkini dan ide-ide kreatif yang segar.",
            'tentang_kami1' => "Didirikan pada awal 2019, Mamank Technno Company telah membangun reputasi yang kuat dalam industri ini. Kami telah berhasil bekerja dengan berbagai klien dari berbagai sektor, termasuk perusahaan besar, startup, lembaga pemerintah, dan pelaku usaha kecil. Keberhasilan kami didorong oleh tim profesional yang berbakat dan berkomitmen yang terus-menerus meningkatkan keterampilan mereka dalam mengikuti perkembangan terbaru dalam dunia teknologi dan kreativitas.",
            'tentang_kami2' => "Kami bangga memiliki tim yang beragam yang terdiri dari desainer, pengembang web, videografer, dan spesialis pemasaran digital. Keberagaman ini memberi kami wawasan yang berharga dan perspektif yang berbeda dalam menangani proyek-proyek klien kami.",
            'tentang_kami3' => "Proyek terbaru kami mencakup berbagai pencapaian luar biasa, seperti pembuatan situs web e-commerce yang sukses untuk perusahaan pakaian lokal yang melihat peningkatan signifikan dalam penjualan mereka, produksi video promosi yang memukau untuk restoran terkenal di Jakarta yang meningkatkan lalu lintas pelanggan mereka, dan desain identitas merek yang mengesankan untuk startup teknologi yang baru-baru ini mendapatkan perhatian besar.",
            'tentang_kami4' => "Kami selalu berusaha memberikan hasil terbaik kepada klien kami, dengan berfokus pada kepuasan pelanggan dan hasil yang konkret. Kami sangat percaya bahwa kolaborasi yang baik antara tim kami dan klien adalah kunci untuk keberhasilan proyek-proyek kami. Kami berkomitmen untuk terus berinovasi dan beradaptasi dengan perkembangan terbaru dalam industri ini, sehingga kami dapat terus menjadi mitra terpercaya dalam memenuhi kebutuhan kreatif dan teknologi klien kami.",
            'tentang_kami5' => "Mamank Tech Company berkomitmen untuk memberikan solusi kreatif yang mengesankan dan efektif kepada klien kami, dan kami siap untuk menjalani perjalanan kreatif bersama Anda.",
            'layanan_judul1' => "Pembuatan Website",
            'layanan_deskripsi1' => "Tim pengembangan web kami memiliki keahlian dalam menghasilkan website yang tidak hanya estetis menarik, tetapi juga berkinerja tinggi dan responsif di berbagai perangkat. Kami dapat membuat website perusahaan, toko online, blog, dan lainnya.",
            'layanan_judul2' => "Desain Grafis",
            'layanan_deskripsi2' => "Kami memahami pentingnya desain grafis yang kuat dalam menciptakan identitas merek yang mengesankan. Kami menciptakan desain logo, brosur, kartu nama, dan materi pemasaran lainnya yang membedakan klien kami dari pesaing.",
            'layanan_judul3' => "Videografi",
            'layanan_deskripsi3' => "Tim videografi kami adalah ahli dalam produksi video berkualitas tinggi untuk keperluan promosi, iklan, dokumentasi acara, dan lainnya. Kami menggabungkan unsur-unsur kreatif dengan teknik yang canggih untuk menghasilkan video yang memukau.",
            'layanan_judul4' => "Layanan Lainnya",
            'layanan_deskripsi4' => "Selain layanan inti kami, kami juga menawarkan berbagai layanan terkait, seperti manajemen media sosial, optimisasi mesin pencari (SEO), dan pemeliharaan website yang teratur.",
            'visi' => "Menjadi pemimpin dalam industri teknologi dengan berfokus pada inovasi dan keunggulan dalam pengembangan perangkat lunak.",
            'misi_judul1' =>"Memberikan Solusi Kreatif Unggulan",
            'misi_deskripsi1' =>"Kami bertekad untuk selalu memberikan solusi kreatif yang unggul dan inovatif kepada klien kami. Kami berusaha untuk tidak hanya memenuhi ekspektasi mereka, tetapi juga melampaui harapan dengan hasil yang mengesankan.",
            'misi_judul2' =>"Kualitas dan Kepuasan Pelanggan",
            'misi_deskripsi2' =>"Kami menjadikan kepuasan pelanggan sebagai prioritas utama. Kami berkomitmen untuk mendengarkan kebutuhan dan tujuan klien kami dengan seksama, dan bekerja dengan tekun untuk memberikan hasil yang memenuhi harapan mereka.",
            'misi_judul3' =>"Berkolaborasi dan Berinovasi",
            'misi_deskripsi3' =>"Kami menghargai kolaborasi dan kerja tim. Kami terus berupaya untuk meningkatkan keahlian tim kami, mengikuti tren terbaru dalam teknologi dan kreativitas, dan berinovasi dalam setiap proyek yang kami tangani.",
            'misi_judul4' =>"Kemitraan Jangka Panjang",
            'misi_deskripsi4' =>"Kami mencari hubungan bisnis jangka panjang dengan klien kami. Kami ingin menjadi mitra yang dapat diandalkan dalam upaya klien kami untuk mencapai kesuksesan dalam dunia digital.",
            'sejarah' => "Mamank Tech Company didirikan oleh Louis Setyandaru dan Michael David di Surabaya, Indonesia, pada tahun 2019. Awalnya, perusahaan ini fokus pada pembuatan website untuk klien lokal, tetapi dengan semangat wirausaha yang kuat, mereka segera memperluas layanan mereka.",
            'sejarah1' => "Mereka mulai menawarkan layanan desain grafis yang mencakup pembuatan logo, brosur, dan materi pemasaran. Keberhasilan mereka segera terbukti saat mereka meraih penghargaan 'Startup Kreatif Terbaik' pada tahun 2020.",
            'sejarah2' => "Perusahaan ini semakin dikenal ketika mereka meluncurkan layanan videografi, memproduksi video promosi berkualitas tinggi. Mereka juga mulai melayani klien korporasi besar dan membuka kantor cabang di luar negeri.",
            'sejarah3' => "Hingga saat ini, Mamank Technno Company telah tumbuh menjadi salah satu perusahaan terkemuka dalam industri kreatif di Asia Tenggara. Mereka terus berinovasi dan mempertahankan komitmen untuk memberikan solusi kreatif terbaik kepada klien mereka. Cerita sukses Mamank Technno Company terus berlanjut."
        ]);
    }
}
