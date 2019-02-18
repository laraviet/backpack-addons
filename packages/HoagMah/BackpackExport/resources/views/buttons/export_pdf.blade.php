<button class="btn btn-warning grad-primary cag_export" id="export-pdf" href="{{ url($crud->route) . '/export-pdf'  }}" onclick="exportPdf()">
<span class="ladda-label">
    <i class="fa fa-download"></i> Export PDF
</span>
</button>
<script>
    function exportPdf() {
        window.location.href = document.getElementById("export-pdf").getAttribute("href") + location.search
    }
</script>
