@extends('layouts.main')
@section('main-content')
<div class="w-full sm:w-[70%] md:w-[50%] mx-auto pb-24 px-4 py-4">
            <!-- bar -->
            <div class="w-full flex items-center px-6 mb-6 mt-4">
                <button aria-label="Back" class="text-black text-xl">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div
                    class="flex items-center ml-3 font-extrabold text-2xl select-none"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 mr-2 stroke-black"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                        focusable="false"
                    >
                        <rect
                            x="3"
                            y="4"
                            width="18"
                            height="16"
                            rx="2"
                            ry="2"
                            stroke-linejoin="round"
                        />
                        <line
                            x1="16"
                            y1="2"
                            x2="16"
                            y2="6"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <line
                            x1="8"
                            y1="2"
                            x2="8"
                            y2="6"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <line
                            x1="3"
                            y1="10"
                            x2="21"
                            y2="10"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                    Calendar
                </div>
            </div>

            <!-- Navigasi bulan -->
            <div
                class="w-full flex justify-center items-center gap-6 mb-6 px-6"
            >
                <button
                    id="prevMonth"
                    aria-label="Previous month"
                    class="border border-black rounded-md w-8 h-8 flex items-center justify-center text-black text-lg font-semibold"
                >
                    &lt;
                </button>
                <div
                    id="monthYear"
                    class="font-extrabold text-xl select-none"
                ></div>
                <button
                    id="nextMonth"
                    aria-label="Next month"
                    class="border border-black rounded-md w-8 h-8 flex items-center justify-center text-black text-lg font-semibold"
                >
                    &gt;
                </button>
            </div>

            <!-- Header tanggalan dalam minggu -->
            <div
                class="w-full grid grid-cols-7 text-center text-black text-sm font-normal mb-1 px-6 select-none"
            >
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
                <div>Sun</div>
            </div>

            <!-- Tanggal Grid-->
            <div
                id="kalenderTanggal"
                class="w-full grid grid-cols-7 text-center text-black text-base font-normal px-6 gap-y-2"
            >
                <!-- Generate tanggal -->
            </div>

            <!-- <div
                class="w-[90%] bg-yellow-300 rounded-2xl mt-8 p-4 relative select-none"
                style="box-shadow: 0 4px 8px rgb(0 0 0 / 0.1)"
            >
                <div class="flex justify-between items-start mb-1">
                    <div
                        class="flex items-center gap-2 text-xs text-black font-semibold"
                    >
                        <span
                            class="w-2 h-2 rounded-full bg-black inline-block mt-1"
                        ></span>
                        10:00–13:00
                    </div>
                    <button
                        aria-label="More options"
                        class="text-black text-xl font-bold"
                    >
                        ...
                    </button>
                </div>
                <div
                    class="font-extrabold text-base text-black mb-1 leading-tight"
                >
                    Webinar Startup : Grow
                </div>
                <div class="text-xs text-black leading-tight">
                    Jadwal Event “Webinar Start-Up Mahasiswa” dimulai pada jam
                    12.00 WIB.
                </div>
            </div> -->

            <!-- tambah event -->
            <button
                aria-label="Add event"
                class="absolute bottom-20 left-1/2 -translate-x-1/2 bg-yellow-400 w-14 h-14 rounded-full flex items-center justify-center text-white text-4xl font-extrabold shadow-lg"
                style="box-shadow: 0 4px 8px rgb(0 0 0 / 0.15)"
            >
                +
            </button>
        </div>
        <script>
            const namaBulan = [
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "Oktober",
                "November",
                "Desember",
            ];
            let today = new Date();
            let currentMonth = today.getMonth();
            let currentYear = today.getFullYear();

            function renderCalendar(month, year) {
                const monthYear = document.getElementById("monthYear");
                const kalenderTanggal =
                    document.getElementById("kalenderTanggal");
                monthYear.textContent = `${namaBulan[month]} ${year}`;
                kalenderTanggal.innerHTML = "";
                // Menghitung hari pertama bulan ini
                let hariPertama = new Date(year, month, 1).getDay();
                // Mengubah hari pertama dari 0-6 (Minggu-Sabtu) menjadi 0-6 (Senin-Minggu)
                hariPertama = (hariPertama + 6) % 7;

                // Tanggal terakhir bulan ini
                let daysInMonth = new Date(year, month + 1, 0).getDate();
                // Tanggal terakhir bulan sebelumnya
                let daysInPrevMonth = new Date(year, month, 0).getDate();

                // Tampilkan tanggal dari bulan sebelumnya (jika perlu)
                for (let i = hariPertama - 1; i >= 0; i--) {
                    kalenderTanggal.innerHTML += `<div class="text-gray-400">${
                        daysInPrevMonth - i
                    }</div>`;
                }

                // Tampilkan tanggal untuk bulan ini
                for (let d = 1; d <= daysInMonth; d++) {
                    let isToday =
                        d === today.getDate() &&
                        month === today.getMonth() &&
                        year === today.getFullYear();
                    if (!isToday) {
                        kalenderTanggal.innerHTML += `<div>${d}</div>`;
                    } else {
                        kalenderTanggal.innerHTML += `<div><span class="inline-block bg-yellow-300 rounded-full w-6 h-6 leading-6 text-center font-semibold text-black">${d}</span></div>`;
                    }
                }

                // Tampilkan tanggal dari bulan berikutnya
                let totalCells = hariPertama + daysInMonth;
                let nextDays = (7 - (totalCells % 7)) % 7;
                for (let i = 1; i <= nextDays; i++) {
                    kalenderTanggal.innerHTML += `<div class="text-gray-400">${i}</div>`;
                }
            }

            document.getElementById("prevMonth").onclick = () => {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                renderCalendar(currentMonth, currentYear);
            };
            document.getElementById("nextMonth").onclick = () => {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                renderCalendar(currentMonth, currentYear);
            };
            renderCalendar(currentMonth, currentYear);
        </script>
@endsection