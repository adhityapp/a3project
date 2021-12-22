<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Transaction as TransactionProduct;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class Transaction extends Component
{
    public function render()
    {
        $transaction = TransactionProduct::orderBy('created_at', 'DESC')->get();
        return view('livewire.transaction', [
            'transaction' => $transaction
        ]);
    }

    public function delete($id)
    {
        $transaction = TransactionProduct::find($id);
        $transaction->delete();
    }

    public function create($id)
    {
        $request = TransactionProduct::find($id);
        $transaction = TransactionProduct::select('name', 'qty', 'price_single', 'price')->where('invoice_number', $request->invoice_number)->get();
        $buyer = User::find($request->user_id);
        $transaction_data = [
            'invoice' => $request->invoice_number,
            'name' => $buyer['name'],
            'content' => $transaction,
            'pay' => $request->pay,
            'total' => $request->total,
        ];
        return view('livewire.print', compact('transaction_data'));
    }
}
