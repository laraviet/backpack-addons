<?php
namespace HoagMah\BackpackExport\Traits;

use Barryvdh\DomPDF\PDF;

trait Export
{
    public function exportExcel()
    {
        $dataExport = $this->filterExport($this->crud->getEntries());
        if ($dataExport->count()) {
            return $dataExport->downloadExcel(
                $this->crud->entity_name_plural . '.xlsx',
                $writerType = null,
                $headings = true
            );
        } else {
            \Alert::error('No thing export.')->flash();
            return redirect()->back();
        }

    }

    public function exportPdf()
    {
        $dataExport = $this->filterExport($this->crud->getEntries());
        if ($dataExport->count()) {
            $headings = array_keys($dataExport->first());
            $pdf = PDF::loadView('hoagmah.pdf::list_pdf', ['headings' => $headings, 'data' => $dataExport]);
            return $pdf->download($this->crud->entity_name_plural . '.pdf');
        } else {
            \Alert::error('No thing export.')->flash();
            return redirect()->back();
        }

    }

    public function filterExport($entries)
    {
        return collect($entries->toArray());
    }
}