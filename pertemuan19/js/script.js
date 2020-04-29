// ambil element yang dibutuhkan
const keyword = document.getElementById('keyword');
const tombolCari = document.getElementById('tombolCari');
const container = document.getElementById('container');

// tambahkan event ketika ditulis
keyword.addEventListener('keyup', function(){

	// buat object ajax
	const xhr = new XMLHttpRequest();

	// cek kesiapan ajax
	xhr.onreadystatechange = function() {
		if(xhr.readyState == 4 && xhr.status == 200) {
			container.innerHTML = xhr.responseText;
		}
	}


	// eksekuasi ajax
	xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
	xhr.send();





});