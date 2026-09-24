(() => {
    const toggles = [...document.querySelectorAll('#theme-toggle, #mobile-theme-toggle')];
    let chosenTheme = null;
    try { chosenTheme = localStorage.getItem('sq-theme'); } catch (_) { /* Storage is optional. */ }
    if (!['light', 'dark'].includes(chosenTheme)) chosenTheme = null;
    const applyTheme = (theme) => {
        document.documentElement.dataset.theme = theme;
        const dark = theme === 'dark';
        const label = document.getElementById('theme-toggle-label');
        if (label) label.textContent = dark ? 'Claro' : 'Oscuro';
        document.getElementById('theme-icon-sun')?.classList.toggle('hidden', !dark);
        document.getElementById('theme-icon-moon')?.classList.toggle('hidden', dark);
        toggles.forEach(button => button.setAttribute('aria-label', dark ? 'Cambiar a tema claro' : 'Cambiar a tema oscuro'));
        const mobile = document.getElementById('mobile-theme-toggle');
        if (mobile) mobile.textContent = dark ? 'Cambiar a claro' : 'Cambiar a oscuro';
    };
    applyTheme(document.documentElement.dataset.theme || 'light');
    toggles.forEach(button => {
        button.hidden = false;
        button.addEventListener('click', () => {
            chosenTheme = document.documentElement.dataset.theme === 'dark' ? 'light' : 'dark';
            applyTheme(chosenTheme);
            try { localStorage.setItem('sq-theme', chosenTheme); } catch (_) { /* Keep the session working. */ }
        });
    });
    window.matchMedia?.('(prefers-color-scheme: dark)').addEventListener('change', event => {
        if (!chosenTheme) applyTheme(event.matches ? 'dark' : 'light');
    });

    const button = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    if (button && menu) {
        const close = () => {
            menu.classList.add('hidden');
            button.setAttribute('aria-expanded', 'false');
            button.setAttribute('aria-label', 'Abrir menú de navegación');
        };
        close();
        button.hidden = false;
        button.addEventListener('click', () => {
            const opening = menu.classList.contains('hidden');
            menu.classList.toggle('hidden', !opening);
            button.setAttribute('aria-expanded', String(opening));
            button.setAttribute('aria-label', opening ? 'Cerrar menú de navegación' : 'Abrir menú de navegación');
        });
        menu.querySelectorAll('a').forEach(link => link.addEventListener('click', close));
        menu.addEventListener('keydown', event => {
            if (event.key === 'Escape') { close(); button.focus(); }
        });
    }

    const contact = document.getElementById('medio_contacto');
    const phone = document.getElementById('telefono');
    if (contact && phone) {
        const updatePhone = () => {
            phone.required = ['whatsapp', 'llamada'].includes(contact.value);
            document.getElementById('phone-help').textContent = phone.required
                ? 'Necesitamos tu número para contactarte por este medio.'
                : 'Opcional si prefieres correo o videollamada.';
        };
        contact.addEventListener('change', updatePhone);
        updatePhone();
    }
})();
