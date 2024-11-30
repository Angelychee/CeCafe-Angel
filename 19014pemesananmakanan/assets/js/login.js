document.querySelector("form").addEventListener("submit", function (e) {
    const email = document.getElementById("floatingInput").value;
    const password = document.getElementById("floatingPassword").value;

    if (!email || !password) {
        alert("Semua field harus diisi!");
        e.preventDefault(); // Mencegah submit jika ada field kosong
    }
});
