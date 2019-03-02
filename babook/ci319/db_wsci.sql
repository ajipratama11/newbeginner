-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 06:52 AM
-- Server version: 5.7.21
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wsci`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `ringkasan` text NOT NULL,
  `isi` text NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `slug`, `ringkasan`, `isi`, `status_berita`, `id_user`, `tanggal`) VALUES
(1, 'Latihan Code Igniter', 'latihan-code-igniter', '<p>Quis nostrud exercitation ut enim ad minim veniam, eu fugiat nulla pariatur. Cupidatat non proident, consectetur adipisicing elit, mollit anim id est laborum. Ut labore et dolore magna aliqua.</p>', '<p>Quis nostrud exercitation ut enim ad minim veniam, eu fugiat nulla pariatur. Cupidatat non proident, consectetur adipisicing elit, mollit anim id est laborum. Ut labore et dolore magna aliqua.</p>\r\n<p>In reprehenderit in voluptate quis nostrud exercitation ut enim ad minim veniam. Sed do eiusmod tempor incididunt eu fugiat nulla pariatur. Sunt in culpa in reprehenderit in voluptate consectetur adipisicing elit.</p>\r\n<p>Velit esse cillum dolore ut enim ad minim veniam. Duis aute irure dolor ut aliquip ex ea commodo consequat. Eu fugiat nulla pariatur. Ut labore et dolore magna aliqua.</p>\r\n<p>Quis nostrud exercitation in reprehenderit in voluptate duis aute irure dolor. Ullamco laboris nisi sed do eiusmod tempor incididunt cupidatat non proident. Consectetur adipisicing elit, sunt in culpa mollit anim id est laborum. Ut aliquip ex ea commodo consequat.</p>\r\n<p>Velit esse cillum dolore qui officia deserunt lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ullamco laboris nisi. Velit esse cillum dolore eu fugiat nulla pariatur. Qui officia deserunt duis aute irure dolor lorem ipsum dolor sit amet. Sed do eiusmod tempor incididunt sunt in culpa cupidatat non proident.</p>\r\n', 'Publish', 1, '2014-09-21 16:36:20'),
(2, 'Menampilkan berita dengan CI', 'menampilkan-berita', '<p>Cumque nihil impedit quo minus at vero eos et accusamus et iusto odio cum soluta nobis est eligendi optio. Id quod maxime placeat facere possimus, omnis dolor repellendus. Nisi ut aliquid ex ea commodi consequatur? Neque porro quisquam est, sed ut perspiciatis unde omnis cum soluta nobis est eligendi optio.</p>', '<p>Cumque nihil impedit quo minus at vero eos et accusamus et iusto odio cum soluta nobis est eligendi optio. Id quod maxime placeat facere possimus, omnis dolor repellendus. Nisi ut aliquid ex ea commodi consequatur? Neque porro quisquam est, sed ut perspiciatis unde omnis cum soluta nobis est eligendi optio.</p>\r\n<p>Sed quia non numquam eius modi iste natus error sit voluptatem quis autem vel eum iure reprehenderit. Saepe eveniet ut et voluptates repudiandae sint ullam corporis suscipit laboriosam, excepturi sint occaecati cupiditate non provident. Sed quia consequuntur magni dolores eos dicta sunt explicabo.</p>\r\n<p>Nisi ut aliquid ex ea commodi consequatur? Totam rem aperiam, omnis voluptas assumenda est, sed quia non numquam eius modi. Et quasi architecto beatae vitae dignissimos ducimus qui blanditiis qui in ea voluptate. Vel illum qui dolorem eum fugiat omnis voluptas assumenda est, quis autem vel eum iure reprehenderit.</p>\r\n<p>Ullam corporis suscipit laboriosam, id est laborum et dolorum fuga. Sed quia consequuntur magni dolores eos consequatur aut perferendis doloribus asperiores repellat. Sed quia non numquam eius modi quo voluptas nulla pariatur? Accusantium doloremque laudantium, omnis dolor repellendus. Et molestiae non recusandae.</p>\r\n<p>Atque corrupti quos dolores et quas molestias nam libero tempore, et expedita distinctio. Nisi ut aliquid ex ea commodi consequatur? Quo voluptas nulla pariatur? Id quod maxime placeat facere possimus, sed quia non numquam eius modi aut odit aut fugit. Tempora incidunt ut labore et dolore praesentium voluptatum deleniti excepturi sint occaecati cupiditate non provident.</p>\r\n', 'Publish', 1, '2014-09-21 16:36:20'),
(3, 'Latihan Halaman Statis dengan CI', 'latihan-static-page', '<p>Big is no longer impregnable to focus on improvement, not cost, as knowledge is fragmented into specialities. Building a dynamic relationship between the main players. Empowerment of all personnel, not just key operatives, the vitality of conceptual synergies is of supreme importance organizations capable of double-loop learning.</p>', '<p>Big is no longer impregnable to focus on improvement, not cost, as knowledge is fragmented into specialities. Building a dynamic relationship between the main players. Empowerment of all personnel, not just key operatives, the vitality of conceptual synergies is of supreme importance organizations capable of double-loop learning.</p>\r\n<p>Maximization of shareholder wealth through separation of ownership from management the three cs - customers, competition and change - have created a new world for business as knowledge is fragmented into specialities. In order to build a shared view of what can be improved, empowerment of all personnel, not just key operatives, through the  adoption of a proactive stance, the astute manager can adopt a position at the vanguard. Building a dynamic relationship between the main players. Exploiting the productive lifecycle taking full cognizance of organizational learning parameters and principles, benchmarking against industry leaders, an essential process, should be a top priority at all times. Measure the process, not the people.</p>', 'Publish', 1, '2014-09-21 16:36:20'),
(4, 'Belajar CI Sendiri', 'belajar-sendiri', '<p>In order to build a shared view of what can be improved, motivating participants and capturing their expectations, while those at the coal face don\'t have sufficient view of the overall goals. Through the  adoption of a proactive stance, the astute manager can adopt a position at the vanguard. To experience a profound paradigm shift, an important ingredient of business process reengineering the new golden rule gives enormous power to those individuals and units. Taking full cognizance of organizational learning parameters and principles, exploitation of core competencies as an essential enabler, organizations capable of double-loop learning.</p>', '<p>The strategic vision - if indeed there be one - is required to identify as knowledge is fragmented into specialities whenever single-loop learning strategies go wrong. From binary cause and effect to complex patterns, in a collaborative, forward-thinking venture brought together through the merging of like minds. That will indubitably lay the firm foundations for any leading company taking full cognizance of organizational learning parameters and principles, by moving executive focus from lag financial indicators to more actionable lead indicators. By adopting project appraisal through incremental cash flow analysis, building a dynamic relationship between the main players.</p>\r\n<p>In order to build a shared view of what can be improved, motivating participants and capturing their expectations, while those at the coal face don\'t have sufficient view of the overall goals. Through the  adoption of a proactive stance, the astute manager can adopt a position at the vanguard. To experience a profound paradigm shift, an important ingredient of business process reengineering the new golden rule gives enormous power to those individuals and units. Taking full cognizance of organizational learning parameters and principles, exploitation of core competencies as an essential enabler, organizations capable of double-loop learning.</p>\r\n<p>The strategic vision - if indeed there be one - is required to identify an investment program where cash flows exactly match shareholders\' preferred time patterns of consumption. Highly motivated participants contributing to a valued-added outcome. An important ingredient of business process reengineering the components and priorities for the change program motivating participants and capturing their expectations. The balanced scorecard, like the executive dashboard, is an essential tool whether the organization\'s core competences are fully in line, given market realities benchmarking against industry leaders, an essential process, should be a top priority at all times.</p>', 'Draft', 1, '2014-09-21 16:36:21'),
(5, 'Meliuk liuk di sumba', 'meliuk-liuk-di-sumba', '<p>Oleh: Dahlan Iskan Tidak semua laki-laki seperti Herry Susanto. Saya baru kenal ia saat mendarat di bandara Tambulaka, Sumba Barat Daya. Di bandara itu ia menyalami saya. Herry mau terbang ke Kupang. &rdquo;Pak Dahlan mau ke mana?,&rdquo; tanyanya. &rdquo;Ke Sumba Timur. Tapi mau mampir dulu ke Nihi Sumba di Nihi Watu,&rdquo; jawab saya. &rdquo;Kok sendirian?,&rdquo;...</p>', '<p>&rdquo;Pak Dahlan pakai saja&hellip; berapa hari pun silakan&hellip;,&rdquo; katanya. &rdquo;Toh saya ke Kupang&hellip; mobil ini nganggur &hellip; justru saya minta maaf tidak bisa menemani,&rdquo; tambahnya.</p>\n<p>&rdquo;Tapi &hellip; bolehkah saya sopirinya sendiri saja? Tidak perlu sopir?,&rdquo; tanya saya.</p>\n<p>Herry terheran-heran. Tapi rupanya ia tahu kebiasaan saya di Sumba. Waktu jadi menteri pun saya sering membawa mobil sendiri.</p>\n<p>Pernah tabrakan di tikungan dekat peternakan. Pernah juga bannya kempes di tengah sabana. Saat kembali dari ladang penari langitnya Ricky Elson. Di Sumba Timur. Tidak ada ban serep. Mobil saya paksa meneruskan perjalanan. Dengan ban kempes. Sampai peleknya tidak bisa dipakai lagi.</p>\n<p>&rdquo;Hati-hati ya pak&hellip; ini Sumba. Jalannya berliku-liku. Mobil ini pakai kopling. Pak Dahlan kan biasa mobil matic,&rdquo; pesan Herry.</p>\n<p>Herry adalah pengusaha muda. Teman jarak jauh Bobby Liono yang ketemu saya di bandara Ngurah Rai itu. Yang awalnya benci bapaknya itu.<br />Saya catat nomor HP Herry. Takut ada masalah ban kempes&nbsp; dengan mobil itu. Saya berjanji akan mengembalikan mobil itu di lapangan parkir bandara yang sama. Kapan-kapan.</p>\n<p>Wow&hellip;mobilnya ada bak belakangnya. Double cabin. Mobil off road. Cocok untuk medan Sumba. Cat luarnya doreng. Seperti mobil tentara. Cocok untuk Sumba Barat. Yang sering rusuh. Yang kantor bupatinya pun dibakar habis. Yang laki-lakinya selalu menyandang pedang panjang di pinggang mereka.</p>\n<p>Yang banyak bangunan beton nan megah penyimpan mayat di halaman warga.</p>\n<p>Sepuluh menit pertama saya harus berlatih: membiasakan kombinasi persneleng-rem-gas.&nbsp; Sudah begitu lama tidak mengemudikan mobil seperti ini.</p>\n<p>Saat meninggalkan kota Tambulaka (ibukota kabupaten Sumba Barat Daya) saya masih tertatih-tatih. Apalagi jalan sempit itu padat. Banyak konvoi kampanye hari terakhir Pilkada.</p>\n<p>Tapi setelah lepas kota Waikabubak (ibukota kabupaten Sumba Barat) sudah mulai terbiasa. Justru asyik. Bisa main gigi rendah dengan lincah. Di setiap tikungan. Dan tikungannya ribuan. Pendek-pendek. Tajam-tajam. Naik-turun.</p>\n<p>Di Amerika tidak ada lagi jenis tikungan seperti ini. Di Yellow Stone pun. Di Rocky Mountain sekali pun. Sumba memang istimewa.</p>\n<p>Saya memang pengagum alam Sumba. Terutama di bulan Juni seperti ini. Atau di bulan Juli. Terakhir Agustus. Sejuk dan nyaman. Damai dan ngeri. Indah dalam kegersangan.</p>\n<p>Tidak ayal bila raja penyair Indonesia yang juga presiden Malioboro, yang gurunya para penyair, gurunya Emha, gurunya Linus, Si Umbu Landu Paranggi begitu emosional dengan tempat kelahirannya. Dan lahirlah sajak-sajak&nbsp; tentang Sumba yang legendaris. Yang dibaca siapa saja.</p>\n<p>Sekaliber &lsquo;ayatullah sastra Indonesia&rsquo; Taufik Ismail langsung teringat Sumba. Saat berada di Uzbekistan nan jauh. Dan lahirlah sajaknya: &ldquo;Berikan Daku Sumba&rdquo;.</p>\n<p>BERIKAN DAKU SUMBA<br />Oleh: Taufik Ismail</p>\n<p>Di Uzbekistan, ada padang terbuka dan berdebu.<br />Aneh, aku jadi ingat pada Umbu</p>\n<p>Rinduku pada Sumba adalah rindu padang-padang terbuka<br />Di mana matahari membusur api di atas sana.</p>\n<p>Rinduku pada Sumba adalah rindu peternak perjaka<br />Bilamana peluh dan tenaga tanpa dihitung harga .</p>\n<p>Tanah rumput, topi rumput dan jerami bekas rumput.<br />Kleneng genta, ringkik kuda dan teriakan gembala.<br />Berdirilah di pesisir, matahari &lsquo;kan terbit dari laut.<br />Dan angin zat asam panas dikipas dari sana.</p>\n<p>Beri daku sepotong daging bakar, lenguh kerbau dan sapi malam hari.<br />Beri daku sepucuk gitar, bossa nova dan tiga ekor kuda.<br />Beri daku cuaca tropika, kering tanpa hujan ratusan hari.<br />Beri daku ranah tanpa pagar, luas tak terkata, namanya Sumba.</p>\n<p>Rinduku pada Sumba adalah rindu seribu ekor kuda.<br />Yang turun menggemuruh di kaki bukit-bukit yang jauh.<br />Sementara langit bagai kain tenunan tangan, gelap coklat tua.<br />Dan bola api, merah padam, membenam di ufuk teduh .</p>\n<p>Rinduku pada Sumba adalah rindu padang-padang terbuka.<br />Di mana matahari bagai bola api, cuaca kering dan ternak melenguh.<br />Rinduku pada Sumba adalah rindu seribu ekor kuda.<br />Yang turun menggemuruh di kaki bukit-bukit yang jauh.</p>\n<p>*</p>\n<p>Begitu hebat Taufik mengenang Umbu. Umbu sendiri memang dikenal sebagai penyair misterius. Semesterius alam Sumba. Kini umurnya 74 tahun. Tidak di Jogja lagi. Ia tinggal di Bali. Sambil mengasuh rubrik sastra di Bali Pos.</p>\n<p>Saat saya di Sumba Cak Nun mengirimi saya: foto-foto terbaru Umbu. Bersama komunitasnya di Bali. Dalam acara maiyahan. (Lihat foto-foto kiriman Emha yang saya sertakan di sini).</p>\n<p>Simaklah salah satu sajak Umbu berjudul Sabana berikut ini. Yang saya ambil dari &ldquo;Suara Pancaran Sastra&rdquo;, himpunan esai dan kritik, Korrie Layun Rampan, Yayasan Arus Jakarta 1984:</p>\n<p>SABANA</p>\n<p>memburu fajar<br />yang mengusir bayang-bayangku<br />menghadang senja<br />yang memanggil petualang</p>\n<p>sabana sunyi<br />di sini hidupku<br />sebuah gitar tua<br />seorang lelaki berkuda</p>\n<p>sabana tandus<br />mainkan laguku<br />harum napas bunda<br />seorang gembala berpacu</p>\n<p>lapar dan dahaga<br />kemarau yang kurindu<br />dibakar matahari<br />hela jiwaku risau<br />karena kumau lebih cinta<br />hunjam aku ke bibir cakrawala</p>\n<p>*</p>\n<p>Saya ingin: lebih banyak lagi orang datang ke Sumba. Mencari inspirasi. Memperkaya jiwa. Mengasah nurani. Melupakan dunia. Nirpeduli birkin. Abaikan Bijan. Termasuk Nihi Sumba. (dis)</p>', 'Publish', 1, '2018-10-10 20:53:42'),
(6, 'berita 1333', 'berita-1333', '<p>paragrap 1</p>\r\n', '<p>paragrap 2</p>\r\n', 'Draft', 1, '2018-10-31 00:55:37'),
(14, 'memulai codeigniter', 'memulai-codeigniter', '<p>Pada tutorial kali ini, penulis akan memberikan tutorial mengenai dasar penggunaan framework php yaitu CodeIgniter. Penulis menggunakan CodeIgniter v 2.1.4 yang dapat di download langsung dari web official CodeIgniter, yaitu http://ellislab.com/codeigniter . Yang dibutuhkan untuk tutorial kali ini adalah :</p>\r\n\r\n<p>1. CodeIgniter 2.1.4<br />\r\n2. Text Editor (Sublime Text, CodeIgniter, Brackets, ell)<br />\r\n3. XAMPP / WAMP</p>\r\n\r\n<p>Yang dilakukan untuk pertama kali adalah download CodeIgniter v 2.1.4 yang sudah disediakan di website officialnya kemudian melakukan extract terhadap hasil download tersebut dan akan menghasilkan folder CodeIgniter. Folder tersebut harus pembaca pindahkan ke dalam folder htdocs di direktori XAMPP / WAMP.</p>\r\n', '<p>Setelah itu pembaca harus menjalankan web server yang terdapat di XAMPP / WAMP agar bisa menjalankan script PHP tersebut. Kalau sudah, pembaca dapat langsung membuka halaman browser kemudian menuliskan &ldquo;localhost/CodeIgniter&rdquo; pada URL Browser (Tanpa tanda Kutip &ldquo;&rdquo;), apabila muncul tampilan &ldquo;Welcome to CodeIgniter&rdquo; berarti anda sudah berhasil menggunakan framework CodeIgniter untuk pertama kalinya</p>\r\n\r\n<p>Sebelum kita bahas bagaimana halaman tersebut dapat muncul, pembaca harus mengetahui kalau framework CodeIgniter ini memiliki struktur MVC / Model View Controller sehingga apabila anda melihat isi dari folder application di dalam CodeIgniter yang tadi sudah didownload akan terdapat folder models, views dan juga controllers. (Bagi yang kurang paham mengenai model pemrograman MVC, dapat membaca disini : http://en.wikipedia.org/wiki/Model&ndash;view&ndash;controller)</p>\r\n\r\n<p>Mari kita lihat file routes.php yang ada di dalam folder application/config, di dalam folder tersebut terdapat kode seperti ini :</p>\r\n\r\n<p>[php]$route[&lsquo;default_controller&rsquo;] = &quot;welcome&quot;;[/php]</p>\r\n\r\n<p>-&gt; kode ini menunjukkan bahwa controller default atau controller yang pertama kali dijalankan ketika menjalan aplikasi web kita adalah file welcome.php yang ada di folder controllers. Pembaca dapat mengubah default controller tersebut sesuai dengan keinginan nantinya, sabar yaa, hehehe</p>\r\n\r\n<p>Dari situ kita sudah tahu kan ketika website pertama kali dijalankan (Ketika kita mengetikkan localhost/CodeIgniter) akan menjalankan file welcome.php yang ada di folder application/controllers. Di dalam file welcome.php berisi :</p>\r\n\r\n<p>itu adalah stuktur utama untuk sebuah controller di dalam CodeIgniter. nama class yang digunakan adalah Welcome, hal tersebut karena disesuaikan dengan nama file controllernya yaitu welcome.php . Apabila kita memiliki controller dengan nama file products.php maka kita harus membuat class seperti ini di dalamnya :</p>\r\n\r\n<pre>\r\n\r\n&nbsp;</pre>\r\n', 'Publish', 1, '2018-11-01 06:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_isbn` int(11) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `book_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_isbn`, `book_title`, `book_author`, `book_category`) VALUES
(2, 7893, 'Laravel Tiger blade', 'Mutafaf', 'Programming'),
(3, 8934, 'Android Programming', 'Farrukh', 'Programming'),
(6, 8902, 'Intro to Psychology', 'Ayesha', 'Psychology'),
(7, 2345, 'Calculus-1', 'John doe', 'Math'),
(8, 8927, 'Chemistry Part-1', 'Aliza Mam', 'Chemistry'),
(9, 6723, 'Math Part-1', 'Sir Sohail Amanat', 'Math'),
(10, 2867, 'percobaan', 'yogiswara', 'horor'),
(12, 6768, 'pengaryuh', 'mengapa', 'hari ini');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `hak_akses_id` int(5) NOT NULL,
  `hak_akses_nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`hak_akses_id`, `hak_akses_nama`) VALUES
(1, 'Root'),
(2, 'Administrator'),
(3, 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_nama` varchar(100) NOT NULL,
  `menu_uri` varchar(100) NOT NULL,
  `menu_allowed` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_nama`, `menu_uri`, `menu_allowed`) VALUES
(1, 'Manajemen Menu', 'admin/menu', '+1+'),
(2, 'Manejemen User', 'admin/users', '+1+2+'),
(3, 'Berita', 'admin/berita', '+1+2+3+');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `hak_akses_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `hak_akses_user`) VALUES
(1, 'admin', 'admin@local.loc', 'admin', 'admin', 1),
(6, 'halo halo bandung', 'halo@gmail.com', 'halobandung', 'halo', 2),
(13, 'percobaan', 'ayat2@gmail.com', 'penasaran', '123456', 2),
(14, 'pengorbanan', 'yogis@gmail.com', 'percobaab', '980980', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`hak_akses_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `hak_akses_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
