const notification = document.getElementById("notification");
const indonesiaMap = document.getElementById("indonesia-map");
const provinces = indonesiaMap.querySelectorAll("path");

provinces.forEach((province) => {
    province.addEventListener("mouseenter", () => {
        const provinceName = province.getAttribute("provinsi");
        notification.textContent = `Provinsi: ${provinceName}`;
    });

    province.addEventListener("mouseleave", () => {
        notification.textContent = "Keterangan Provinsi Akan Muncul di Sini";
    });

    province.addEventListener("click", () => {
        const provinceName = province.getAttribute("provinsi");
        const provinceInfo = getProvinceInfo(provinceName);
        notification.textContent = `Kondisi Tanah: ${provinceInfo}`;
    });
});

function getProvinceInfo(provinceName) {
    const provinceData = {
        "Aceh": "Subur",
        "Kalimantan Timur": "Subur",
        "Jawa Barat": "Subur",
        "Jawa Tengah": "Subur",
        "Bengkulu": "Subur",
        "Banten": "Subur",
        "Jakarta": "Kurang Subur",
        "Kalimantan Barat": "Subur",
        "Lampung": "Subur",
        "Sumatera Selatan": "Subur",
        "Bangka belitung": "Subur",
        "Bali": "Subur",
        "Jawa Timur": "Subur",
        "Kalimantan Selatan": "Subur",
        "Nusa Tenggara Timur": "Subur",
        "Sulawesi Selatan": "Subur",
        "Sulawesi Barat": "Subur",
        "Kepulauan Riau": "Subur",
        "Gorontalo": "Subur",
        "Jambi": "Subur",
        "Kalimantan Tengah": "Subur",
        "Papua Barat": "Subur",
        "Sumatera Utara": "Subur",
        "Riau": "Subur",
        "Sulawesi Utara": "Subur",
        "Maluku Utara": "Subur",
        "Sumatera Barat": "Subur",
        "Yogyakarta": "Subur",
        "Maluku": "Subur",
        "Nusa Tenggara Barat": "Subur",
        "Sulawesi Tenggara": "Subur",
        "Sulawesi tengah": "Subur",
        "Papua": "Subur",
    };
    return (
        provinceData[provinceName] ||
        "Informasi tidak tersedia untuk provinsi ini."
    );
}

const inputCopy = document.getElementById("input-copy");

provinces.forEach((province) => {
    province.addEventListener("click", () => {
        const provinceName = province.getAttribute("provinsi");
        const provinceInfo = getProvinceInfo(provinceName);

        // Salin hasil ke clipboard
        copyToClipboard(provinceInfo);

        // Paste hasil ke elemen input
        inputCopy.value = provinceInfo;
    });
});

function copyToClipboard(text) {
    // Buat elemen sementara untuk menyalin teks ke clipboard
    const tempElement = document.createElement("textarea");
    tempElement.value = text;
    document.body.appendChild(tempElement);
    tempElement.select();
    document.execCommand("copy");
    document.body.removeChild(tempElement);
}

const jenisTanaman = document.getElementById("jenisTanaman");
const unsurN = document.getElementById("unsurN");
const unsurP = document.getElementById("unsurP");
const unsurK = document.getElementById("unsurK");

jenisTanaman.addEventListener("change", function () {
    const selectedValue = jenisTanaman.value;

    if (selectedValue === "padi") {
        unsurN.value = "100";
        unsurP.value = "30";
        unsurK.value = "60";
    } else if (selectedValue === "jagung") {
        unsurN.value = "120";
        unsurP.value = "60";
        unsurK.value = "90";
    } else if (selectedValue === "kedelai") {
        unsurN.value = "60";
        unsurP.value = "40";
        unsurK.value = "80";
    } else if (selectedValue === "gandum") {
        unsurN.value = "100";
        unsurP.value = "40";
        unsurK.value = "60";
    } else if (selectedValue === "kentang") {
        unsurN.value = "100";
        unsurP.value = "30";
        unsurK.value = "90";
    } else if (selectedValue === "singkong") {
        unsurN.value = "40";
        unsurP.value = "20";
        unsurK.value = "60";
    } else if (selectedValue === "bawang-merah") {
        unsurN.value = "120";
        unsurP.value = "60";
        unsurK.value = "90";
    } else if (selectedValue === "apel") {
        unsurN.value = "50";
        unsurP.value = "30";
        unsurK.value = "80";
    } else if (selectedValue === "jeruk") {
        unsurN.value = "50";
        unsurP.value = "30";
        unsurK.value = "80";
    } else if (selectedValue === "pisang") {
        unsurN.value = "100";
        unsurP.value = "60";
        unsurK.value = "120";
    } else if (selectedValue === "mangga") {
        unsurN.value = "80";
        unsurP.value = "60";
        unsurK.value = "100";
    } else {
        unsurN.value = "0";
        unsurP.value = "0";
        unsurK.value = "0";
    }
});

document.getElementById("hitungButton").addEventListener("click", function () {
    // Get input values
    const jenisTanaman = document.getElementById("jenisTanaman").value;
    const pupukCalculator = document.getElementById("pupukCalculator").value;
    const luasLahan = parseFloat(document.getElementById("luasLahan").value);
    const unsurN = parseFloat(document.getElementById("unsurN").value);
    const unsurP = parseFloat(document.getElementById("unsurP").value);
    const unsurK = parseFloat(document.getElementById("unsurK").value);

    // Check if all inputs are valid
    if (isNaN(luasLahan) || isNaN(unsurN) || isNaN(unsurP) || isNaN(unsurK)) {
        alert("Silakan Masukkan Nilai Numerik Yang Valid Untuk Semua input.");
        return;
    }

    // Calculate fertilizer requirements (simplified example)
    const nitrogenRequirement = luasLahan * unsurN;
    const phosphorusRequirement = luasLahan * unsurP;
    const potassiumRequirement = luasLahan * unsurK;

    // Calculate total fertilizer requirement
    const totalRequirement =
        nitrogenRequirement + phosphorusRequirement + potassiumRequirement;

    // Display the results
    const hasilPupuk = document.getElementById("hasilPupuk");
    hasilPupuk.innerHTML = `
        <p><strong>Jenis Tanaman:</strong> ${jenisTanaman}</p>
        <p><strong>Kebutuhan Nitrogen:</strong> ${nitrogenRequirement.toFixed(
            2
        )} kg</p>
        <p><strong>Kebutuhan Fosfor:</strong> ${phosphorusRequirement.toFixed(
            2
        )} kg</p>
        <p><strong>Kebutuhan Kalium:</strong> ${potassiumRequirement.toFixed(
            2
        )} kg</p>
        <p><strong>Total Kebutuhan Pupuk::</strong> ${totalRequirement.toFixed(
            2
        )} kg</p>
    `;
});
