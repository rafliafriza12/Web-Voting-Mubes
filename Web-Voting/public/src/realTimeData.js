function fetchData(){
    fetch('/get-real-time-data')
        .then(response => response.json)
        .then(data => updateUI(data))
        .catch(error => console.log('Error Fetching Data : ',error));
}

function updateUI(data) {
    const container = document.getElementById('chart');

    // Membersihkan konten sebelum memasukkan yang baru
    container.innerHTML = '';

    height1 = `h-[${data.persentaseVote1}]`;
    height2 = `h-[${data.persentaseVote2}]`;
    // Menggunakan parseFloat untuk mengonversi persentase dari string ke angka desimal
    const chart1 = document.createElement('div');
    chart1.classList.add(height1, 'bg-gradient-to-b', 'from-pink-500', 'to-purple-600', 'w-[20%]', 'font-poppins', 'font-bold', 'text-white', 'text-[7vh]', 'flex', 'justify-center', 'items-center', 'rounded-t-[2vh]');
    chart1.textContent = `${data.persentaseVote1}%`;

    const chart2 = document.createElement('div');
    chart2.classList.add(height2, 'bg-gradient-to-b', 'from-purple-600', 'to-pink-500 w-[20%]', 'font-poppins', 'font-bold', 'text-white', 'text-[7vh]', 'flex', 'justify-center', 'items-center', 'rounded-t-[2vh]');
    chart2.textContent = `${data.persentaseVote2}%`;

    container.appendChild(chart1);
    container.appendChild(chart2);
}

fetchData();
setInterval(fetchData, 5000); // Ambil data setiap 5 detik