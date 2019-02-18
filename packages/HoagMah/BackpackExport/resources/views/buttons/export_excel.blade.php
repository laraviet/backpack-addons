<button class="btn btn-warning grad-primary cag_export" id="export-excel" href="{{ url($crud->route) . '/export-excel'  }}" onclick="exportExcel()">
<span class="ladda-label">
    <i class="fa fa-download"></i> Export Excel
</span>
</button>
<script>
    function exportExcel() {
        window.location.href = document.getElementById("export-excel").getAttribute("href") + location.search
    }
</script>

