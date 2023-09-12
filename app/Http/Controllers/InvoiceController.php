<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function get_all_invoice() {
        $invoices = Invoice::all();
        dd($invoices); // Verifique os dados antes de retornar a resposta JSON
        return response()->json([
            'invoices' => $invoices
        ], 200);
    }

}
