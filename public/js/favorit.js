// function addtofavorit(eventId) {
//     fetch(`/event/${eventId}/favorite`, {
//         method: "POST",
//         headers: {
//             "X-CSRF-TOKEN": "{{ csrf_token() }}",
//             Accept: "application/json",
//             "Content-Type": "application/json",
//         },
//     })
//         .then((response) => response.json())
//         .then((data) => {
//             if (data.status === "added") {
//                 alert("Ditambahkan ke Favorit!");
//             } else {
//                 alert("Dihapus dari Favorit!");
//             }
//             // opsional: bisa ubah warna ikon hati di sini
//         })
//         .catch((error) => {
//             console.error("Error:", error);
//             alert("Gagal menambahkan ke favorit.");
//         });
// }

function addtofavorit(id) {
    const button = event.currentTarget;
    const icon = button.querySelector("i");

    fetch(`/add-favorite/${id}`, {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
            Accept: "application/json",
            "Content-Type": "application/json",
        },
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.status === "added") {
                // Tambahkan class untuk warna merah dan semibold
                icon.classList.add("text-red-500", "font-semibold");
                alert("Ditambahkan ke Favorit!");
            } else {
                // Hapus class jika status 'removed'
                icon.classList.remove("text-red-500", "font-semibold");
                alert("Dihapus dari Favorit!");
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            alert("Gagal menambahkan ke favorit.");
        });
}
