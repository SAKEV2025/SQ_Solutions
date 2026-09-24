(() => {
    let saved = null;
    try { saved = localStorage.getItem('sq-theme'); } catch (_) { /* Storage is optional. */ }
    const systemDark = window.matchMedia?.('(prefers-color-scheme: dark)').matches;
    document.documentElement.dataset.theme = ['light', 'dark'].includes(saved)
        ? saved : (systemDark ? 'dark' : 'light');
})();
