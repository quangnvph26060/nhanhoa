<?php

namespace App\Services;

use App\Models\ElectronicInvoice;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ElectronicInvoiceService
{
    protected $invoice;

    public function __construct(ElectronicInvoice $invoice)
    {
        $this->invoice = $invoice;
    }

    // Lấy tất cả các hóa đơn
    public function getAllInvoices()
    {
        try {
            Log::info('Fetching all electronic invoices');
            return $this->invoice->all();
        } catch (Exception $e) {
            Log::error('Failed to fetch electronic invoices: ' . $e->getMessage());
            throw new Exception('Failed to fetch electronic invoices');
        }
    }

    // Lấy hóa đơn theo ID
    public function getInvoiceById($id)
    {
        try {
            Log::info('Fetching electronic invoice by id');
            return $this->invoice->findOrFail($id);
        } catch (Exception $e) {
            Log::error('Failed to fetch electronic invoice by id: ' . $e->getMessage());
            throw new Exception('Failed to fetch electronic invoice by id');
        }
    }

    // Tạo hóa đơn mới
    public function createInvoice(array $data)
    {
        try {
            DB::beginTransaction();

            $newInvoice = [
                'invoice_quantity' => $data['invoice_quantity'],
                'price' => $data['price'],
                'storage_duration' => $data['storage_duration'],
                'usage_time' => $data['usage_time'],
                'storage_space' => $data['storage_space'],
                'disk_system' => $data['disk_system'],
            ];

            $invoice = $this->invoice->create($newInvoice);
            DB::commit();
            return $invoice;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to create electronic invoice: ' . $e->getMessage());
            throw new Exception('Failed to create electronic invoice');
        }
    }

    // Cập nhật hóa đơn
    public function updateInvoice(array $data, $id)
    {
        try {
            DB::beginTransaction();

            $invoice = $this->invoice->findOrFail($id);
            $updatedData = [
                'invoice_quantity' => $data['invoice_quantity'],
                'price' => $data['price'],
                'storage_duration' => $data['storage_duration'],
                'usage_time' => $data['usage_time'],
                'storage_space' => $data['storage_space'],
                'disk_system' => $data['disk_system'],
            ];

            $invoice->update($updatedData);
            DB::commit();
            return $invoice;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to update electronic invoice: ' . $e->getMessage());
            throw new Exception('Failed to update electronic invoice');
        }
    }

    // Xóa hóa đơn
    public function deleteInvoice($id)
    {
        try {
            DB::beginTransaction();

            $invoice = $this->invoice->findOrFail($id);
            $invoice->delete();
            DB::commit();
            return $invoice;
        } catch (Exception $e) {
            DB::rollback();
            Log::error('Failed to delete electronic invoice: ' . $e->getMessage());
            throw new Exception('Failed to delete electronic invoice');
        }
    }
}
