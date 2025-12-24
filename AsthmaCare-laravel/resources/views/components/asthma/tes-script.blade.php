<script>
    document.addEventListener('DOMContentLoaded', () => {
        const steps = document.querySelectorAll('[data-step]');
        const totalSteps = steps.length;
        let currentStep = 1;

        const progressText = document.getElementById('progress-text');
        const progressBar  = document.getElementById('progress-bar');
        const btnNext      = document.getElementById('btn-next');
        const btnBack      = document.getElementById('btn-back');
        const form         = document.getElementById('tes-asthma-form');

        // Elemen untuk hitung BMI dari tinggi & berat
        const heightInput = document.querySelector('input[name="Height"]');
        const weightInput = document.querySelector('input[name="Weight"]');
        const bmiInput    = document.getElementById('input-bmi');

        function updateBMI() {
            if (!heightInput || !weightInput || !bmiInput) return;

            const height = parseFloat(heightInput.value); // cm
            const weight = parseFloat(weightInput.value); // kg

            if (!isNaN(height) && !isNaN(weight) && height > 0) {
                const heightMeter = height / 100;
                const bmi = weight / (heightMeter * heightMeter);
                bmiInput.value = bmi.toFixed(1); // contoh: 22.5
            } else {
                bmiInput.value = '';
            }
        }

        // Update BMI setiap tinggi/berat berubah
        if (heightInput) heightInput.addEventListener('input', updateBMI);
        if (weightInput) weightInput.addEventListener('input', updateBMI);

        function updateProgress() {
            progressText.textContent = `Pertanyaan ${currentStep} dari ${totalSteps}`;
            const percent = (currentStep / totalSteps) * 100;
            progressBar.style.width = `${percent}%`;
        }

        function showStep(step) {
            steps.forEach(sec => {
                const s = parseInt(sec.getAttribute('data-step'));
                if (s === step) {
                    sec.classList.remove('hidden');
                } else {
                    sec.classList.add('hidden');
                }
            });

            // Tombol kembali disable di step 1
            btnBack.disabled = (step === 1);

            // Ubah teks tombol next di step terakhir
            if (step === totalSteps) {
                btnNext.textContent = 'Submit';
            } else {
                btnNext.textContent = 'Selanjutnya';
            }

            updateProgress();
        }

        // Tampilkan peringatan jika user belum menjawab
        function showWarning(section) {
            // Hapus warning lama kalau ada
            const oldWarning = section.querySelector('.step-warning');
            if (oldWarning) {
                oldWarning.remove();
            }

            const warn = document.createElement('p');
            warn.className = 'step-warning text-red-600 text-sm mt-3';
            warn.textContent = 'Silakan jawab pertanyaan terlebih dahulu sebelum melanjutkan.';

            section.appendChild(warn);

            // Hilangkan otomatis setelah 3 detik
            setTimeout(() => {
                if (warn && warn.parentNode) {
                    warn.parentNode.removeChild(warn);
                }
            }, 3000);
        }

        // Cek validasi input pada step saat ini
        function isCurrentStepValid() {
            const currentSection = document.querySelector(`[data-step="${currentStep}"]`);
            const requiredInputs = currentSection.querySelectorAll(
                'input[required], textarea[required], select[required]'
            );

            let valid = true;

            requiredInputs.forEach((input) => {
                if (input.type === 'radio') {
                    const group = currentSection.querySelectorAll(`input[name="${input.name}"]`);
                    const anyChecked = Array.from(group).some(r => r.checked);
                    if (!anyChecked) valid = false;
                } 
                else {
                    if (!input.value || input.value.trim() === '') {
                        valid = false;
                    }
                }
            });

            if (!valid) {
                showWarning(currentSection);
            }

            return valid;
        }


        btnNext.addEventListener('click', (e) => {
            // Kalau belum step terakhir, cek validasi dulu
            if (currentStep < totalSteps) {
                e.preventDefault();

                if (!isCurrentStepValid()) {
                    return; // stop di step ini
                }

                // Kalau baru selesai step 3, hitung BMI dari tinggi & berat
                if (currentStep === 3) {
                    updateBMI();
                }

                currentStep++;
                showStep(currentStep);
                return;
            }

            // Step terakhir -> cek validasi terakhir sekali lagi
            if (!isCurrentStepValid()) {
                e.preventDefault();
                return;
            }

            // Pastikan BMI ter-update sebelum submit
            updateBMI();

            // Kalau valid, biarkan form submit (HTML5 validation juga tetap jalan di sisi browser)
        });

        btnBack.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });

        // Init
        showStep(currentStep);
    });
</script>
