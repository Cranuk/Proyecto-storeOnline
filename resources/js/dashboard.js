window.addEventListener('load', function(){
    // ==========================================
    // 1. DECLARACIÓN DE VARIABLES / ELEMENTOS
    // ==========================================
    const body = $("body");
    const sidebar = $("nav");
    const main = $("main");
    const footer = $("footer");
    
    // Selectores del menú lateral y toggle
    const sidebarToggle = $(".sidebar-toggle");

    // Selectores del modo oscuro (Botón, ícono y texto)
    const themeToggleBtn = $("#theme-toggle");
    const themeIcon = $("#theme-icon");
    const themeText = $("#theme-text");

    // ==========================================
    // 2. ESTADO INICIAL (Cargar desde localStorage)
    // ==========================================
    
    // Cargar Modo Nocturno
    const getMode = localStorage.getItem("mode");
    if (getMode && getMode === "dark") {
        body.addClass("dark");
        updateButtonUI(true); 
    } else {
        body.removeClass("dark");
        updateButtonUI(false);
    }

    // Cargar Estado de la Barra Lateral
    const getStatus = localStorage.getItem("status");
    if (getStatus && getStatus === "close") {
        sidebar.addClass("close");
        main.addClass("main-close");
        footer.addClass("footer-close");
    }

    // ==========================================
    // 3. FUNCIONES Y EVENTOS: MODO NOCTURNO
    // ==========================================
    
    // Evento del botón para cambiar el modo
    themeToggleBtn.on("click", function() {
        body.toggleClass("dark");
        
        const isDarkNow = body.hasClass("dark");
        
        // Guardar preferencia
        if (isDarkNow) {
            localStorage.setItem("mode", "dark");
        } else {
            localStorage.setItem("mode", "light");
        }
        
        // Actualizar interfaz del botón
        updateButtonUI(isDarkNow);
    });

    // Función auxiliar para cambiar el texto e ícono del botón
    function updateButtonUI(isDark) {
        if (isDark) {
            themeIcon.text("light_mode");  // Ícono de Sol
            themeText.text("Modo Claro");  // Texto
        } else {
            themeIcon.text("dark_mode");   // Ícono de Luna
            themeText.text("Modo Oscuro"); // Texto
        }
    }

    // ==========================================
    // 4. FUNCIONES Y EVENTOS: BARRA LATERAL (SIDEBAR)
    // ==========================================
    
    // Evento para colapsar / expandir la barra lateral
    sidebarToggle.on("click", function() {
        sidebar.toggleClass("close");
        
        if (sidebar.hasClass("close")) {
            main.addClass("main-close");
            footer.addClass("footer-close");
            localStorage.setItem("status", "close");
        } else {
            main.removeClass("main-close");
            footer.removeClass("footer-close");
            localStorage.setItem("status", "open");
        }
    });

});