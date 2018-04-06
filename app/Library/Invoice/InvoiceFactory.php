<?php
/**
  * This file is part of consoletvs/invoices.
  *
  * (c) Erik Campobadal <soc@erik.cat>
  *
  * For the full copyright and license information, please view the LICENSE
  * file that was distributed with this source code.
  */

namespace App\Library\Invoice;

use Carbon\Carbon;
use App\Library\Invoice\Traits\Setters;
use Illuminate\Support\Collection;
use Illuminate\Http\File;
use Storage;
use Log;

/**
 * This is the Invoice class.
 *
 * @author Erik Campobadal <soc@erik.cat>
 */
class InvoiceFactory
{
    use Setters;

    /**
     * Invoice name.
     *
     * @var string
     */
    public $name;

    /**
     * Invoice item collection.
     *
     * @var Illuminate\Support\Collection
     */
    public $items;

    /**
     * Invoice currency.
     *
     * @var string
     */
    public $currency;

    /**
     * Invoice tax.
     *
     * @var int
     */
    public $tax;

    /**
     * Invoice tax type.
     *
     * @var string
     */
    public $tax_type;

    /**
     * Invoice number.
     *
     * @var int
     */
    public $number = null;

    /**
     * Invoice decimal precision.
     *
     * @var int
     */
    public $decimals;

    /**
     * Invoice logo.
     *
     * @var string
     */
    public $logo;

    /**
     * Invoice Logo Height.
     *
     * @var int
     */
    public $logo_height;

    /**
     * Invoice Date.
     *
     * @var Carbon\Carbon
     */
    public $date;

    /**
     * Invoice Notes.
     *
     * @var string
     */
    public $notes;

    /**
     * Invoice Business Details.
     *
     * @var array
     */
    public $business_details;

    /**
     * Invoice Customer Details.
     *
     * @var array
     */
    public $customer_details;

    /**
     * Invoice Footnote.
     *
     * @var array
     */
    public $footnote;

    /**
     * Stores the PDF object.
     *
     * @var Dompdf\Dompdf
     */
    private $pdf;

    /**
     * Create a new invoice instance.
     *
     * @method __construct
     *
     * @param string $name
     */
    public function __construct($name = 'Invoice')
    {
        $this->name = $name;
        $this->items = Collection::make([]);
        $this->currency = 'ZAR';
        $this->tax = 0;
        $this->tax_type = 'percentage';
        $this->decimals = 2;
        $this->logo =  'http://i.imgur.com/t9G3rFM.png'; //url("/new_landing/img/africoin-logo-dark.png");
        $this->logo_height = 60;
        $this->date = Carbon::now();

        $business_details = [
            'name'        => 'Africoin',
            'id'          => '1234567890',
            'phone'       => '+34 123 456 789',
            'location'    => '21 black river cape town',
            'zip'         => '7130',
            'city'        => 'Western Cape',
            'country'     => 'South Africa',
        ];        
        $this->business_details = Collection::make($business_details);        
        $this->customer_details = Collection::make([]);
        $this->footnote = url('/');
    }

    /**
     * Return a new instance of Invoice.
     *
     * @method make
     *
     * @param string $name
     *
     * @return ConsoleTVs\Invoices\Classes\Invoice
     */
    public static function make($name = 'Invoice')
    {
        return new self($name);
    }

    /**
     * Adds an item to the invoice.
     *
     * @method addItem
     *
     * @param string $name
     * @param int    $price
     * @param int    $ammount
     * @param string $id
     *
     * @return self
     */
    public function addItem($name, $price, $ammount = 1, $id = '-')
    {
        $this->items->push(Collection::make([
            'name'       => $name,
            'price'      => $price,
            'ammount'    => $ammount,
            'totalPrice' => number_format(bcmul($price, $ammount, $this->decimals), $this->decimals),
            'id'         => $id,
        ]));

        return $this;
    }

    /**
     * Pop the last invoice item.
     *
     * @method popItem
     *
     * @return self
     */
    public function popItem()
    {
        $this->items->pop();

        return $this;
    }

    /**
     * Return the currency object.
     *
     * @method formatCurrency
     *
     * @return stdClass
     */
    public function formatCurrency()
    {
        $currencies = json_decode(file_get_contents(__DIR__.'/Currencies.json'));
        $currency = $this->currency;

        return $currencies->$currency;
    }

    /**
     * Return the subtotal invoice price.
     *
     * @method subTotalPrice
     *
     * @return int
     */
    private function subTotalPrice()
    {
        return $this->items->sum(function ($item) {
            return bcmul($item['price'], $item['ammount'], $this->decimals);
        });
    }

    /**
     * Return formatted sub total price.
     *
     * @method subTotalPriceFormatted
     *
     * @return int
     */
    public function subTotalPriceFormatted()
    {
        return number_format($this->subTotalPrice(), $this->decimals);
    }

    /**
     * Return the total invoce price after aplying the tax.
     *
     * @method totalPrice
     *
     * @return int
     */
    private function totalPrice()
    {
        return bcadd($this->subTotalPrice(), $this->taxPrice(), $this->decimals);
    }

    /**
     * Return formatted total price.
     *
     * @method totalPriceFormatted
     *
     * @return int
     */
    public function totalPriceFormatted()
    {
        return number_format($this->totalPrice(), $this->decimals);
    }

    /**
     * taxPrice.
     *
     * @method taxPrice
     *
     * @return float
     */
    private function taxPrice()
    {
        if ($this->tax_type == 'percentage') {
            return bcdiv(bcmul($this->tax, $this->subTotalPrice(), $this->decimals), 100, $this->decimals);
        }

        return $this->tax;
    }

    /**
     * Return formatted tax.
     *
     * @method taxPriceFormatted
     *
     * @return int
     */
    public function taxPriceFormatted()
    {
        return number_format($this->taxPrice(), $this->decimals);
    }

    /**
     * Generate the PDF.
     *
     * @method generate
     *
     * @return self
     */
    private function generate($template = 'vendor.invoices.default')
    {
        $this->pdf = PDF::generate($this, $template);

        return $this;
    }

    /**
     * Downloads the generated PDF.
     *
     * @method download
     *
     * @param string $name
     *
     * @return response
     */
    public function download($name = 'invoice', $template = 'vendor.invoices.default')
    {
        $this->generate($template);

        return $this->pdf->stream($name);
    }

    /**
     * Save the generated PDF.
     *
     * @method save
     *
     * @param string $name
     *
     */
    public function save($name = 'invoice.pdf', $template = 'vendor.invoices.default')
    {
        $invoice = $this->generate($template);

        Storage::put($name, $invoice->pdf->output());
        $pdf_path = Storage::putFile('public/invoices', new File(storage_path().'/app/'.$name));
        return $pdf_path;
    }

    /**
     * Show the PDF in the browser.
     *
     * @method show
     *
     * @param string $name
     *
     * @return response
     */
    public function show($name = 'invoice', $template = 'vendor.invoices.default')
    {
        $this->generate($template);

        return $this->pdf->stream($name, ['Attachment' => false]);
    }
}
