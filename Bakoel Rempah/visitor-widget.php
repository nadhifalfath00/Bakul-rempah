<aside class="visitor-widget" aria-label="Statistik pengunjung">
    <details open>
        <summary aria-label="Tampilkan atau sembunyikan jumlah pengunjung">
            <span class="visitor-widget-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M4 4v16h16M7 14l4-4 3 3 5-6M15 7h4v4" />
                </svg>
            </span>
            <span class="visitor-widget-copy">
                <strong>Kunjungan</strong>
                <small><b><?= number_format($visitorCount, 0, ',', '.') ?></b> Total pengunjung</small>
            </span>
            <span class="visitor-widget-chevron" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="m6 14 6-6 6 6" />
                </svg>
            </span>
        </summary>
    </details>
</aside>