<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Supplier;
use App\Retailer;
use App\PurchaseItem;
use App\PurchaseCoin;

use Log;

class Invoice extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $contract_date;
    public $invoice_items;
    public $sub_total;
    public $fee;
    public $total;
    public $pdf;

    public function __construct(PurchaseCoin $pc)
    {
        $this->contract_date = date('l, M j Y h:i A', strtotime($pc->created_at));       
        Log::info($this->contract_date);
        $items = $pc->items;

        Log::info('-------------Invoice Making Process1--------------------');
        // Log::info((string)$items);
        $this->invoice_items = array();
        foreach ($items as $item)
        {
            $invoice_item = (object)['product' => $item->product->name,
                                    'quantity' => $item->quantity,
                                    'unit_price' => $item->discount,
                                    'line_total' => $item->quantity * $item->discount,
                                    ];
            array_push($this->invoice_items, $invoice_item);
        }


        Log::info('-------------Invoice Making Process2--------------------');
        // Log::info($this->invoice_items);

        $token_price = 1;   // To get from db in the future;
        $this->sub_total = $pc->buy_token * $token_price;
        $this->fee = $pc->fee;
        $this->total = $pc->billedTotal;
        $this->pdf = url("/invoices/{$pc->invoice_no}");
        // Log::info("-----------------------{$this->pdf}");
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.invoice');
    }
}
