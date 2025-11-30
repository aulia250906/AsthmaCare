@if(session('success'))
        <div id="alert-success" 
             class="mx-auto mb-6 w-11/12 md:w-3/4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow text-center transition-all duration-500">
            <strong class="font-semibold">Berhasil!</strong> {{ session('success') }}
        </div>

        <script>
            setTimeout(() => {
                const alert = document.getElementById('alert-success');
                if (alert) alert.style.display = 'none';
            }, 3000);
        </script>
    @endif
