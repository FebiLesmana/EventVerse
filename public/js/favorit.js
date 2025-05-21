function addtofavorit(eventId) {
    fetch(`/event/${eventId}/favorite`, {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            Accept: "application/json",
            "Content-Type": "application/json",
        },
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.status === "added") {
                alert("Ditambahkan ke Favorit!");
            } else {
                alert("Dihapus dari Favorit!");
            }
            // opsional: bisa ubah warna ikon hati di sini
        })
        .catch((error) => {
            console.error("Error:", error);
            alert("Gagal menambahkan ke favorit.");
        });
}
