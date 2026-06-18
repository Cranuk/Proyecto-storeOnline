<section class="section-modal" id="filter-modal">
    <div class="box-modal">
        <form id="filter-form" method="POST">
            @csrf
            <input type="hidden" id="table" name="table">
            <label for="date" class="label-text">Fecha:</label>
            <input type="text" name="date" class="input-text dateFilter" placeholder="Selecciona una fecha">

            <div class="space-10"></div>

            <div class="button-box">
                <button type="button" id="button-cancel">
                    <span class="material-symbols-outlined icon-medium hover:text-red-600 duration-300">cancel</span>
                </button>
                <button type="submit">
                    <span class="material-symbols-outlined icon-medium hover:text-green-600 duration-300">check_circle</span>
                </button>
            </div>

        </form>
    </div>
</section>
