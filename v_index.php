<section>
			<h1><?php echo $judul; ?></h1>
			<p align="justify">
				Pada pengertian codeigniter di atas tadi dijelaskan bahwa codeigniter menggunakan mmetode MVC. apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dab lebig jauh dalam belajar codeigniter.
			</p>
			<p>
				MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponrn yaitu model, view dan controller.
			</p>
			
			<ol type="a">
				<li>Model</li>
				<p align="justify">
					Model adalah kelas yang mereprensikan atau memodelkan tipe data yang akan digunakan oleh aplikasi. model juga dapat didefinisikan sebagi bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database. Seperti misalya mengambil data intruksi atau fungsi yang berhubungan dengan pengolahan database di letakkan di dalam model. Sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas keliling lingkaran, maka dapat memodelkan objrk lingkaran sebagai kelas model.</p>
				<p align="justify">
					Sebagai catatan, Semua model harus disimpan di dalam folder application\models</p>
				<li>View</li>
				<p align="justify">
					View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada broeser). Tampilan dari user interface di kumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website.</p>
				<li>Controller</li>
				<p align="justify"> 
					Controller merupakan kumpulan intruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan dengan model secara langsung, intinya data yang tresimpan di database(model) diambil oleh controller dan kemudian controller pula yang menampillkan nta ke view. Jadi controller lah yang mengolah intruksi.</p>
				<p align="justify">
					Dari penjelasan tentang model view dan controller di atas dapat di simpulkan bahwa controller sebagai penghubung view dan model. Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode mvc, controller memanggil intruksi pada model yang mengambil data pada database, kemusian controller yang meneruskannya pada view untuk ditampilkan. Jadi jelas sudah dan sangat mudah dalam pemngembangan aplikasi dengan car mvc ini karena web designer atau front-end developer tidak perlu lagi berhubungan dengan controller, dia hanya perlu berhubungan dengan view untuk mendesign tampilan aplikasi, karena back-end developer yang menangani bagian controller dan modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat di lakukan dengan cepat dan terstruktur</p>
			</ol>
	
</section>